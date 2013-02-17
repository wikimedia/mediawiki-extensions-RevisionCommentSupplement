<?php
/**
 * Copyright (C) 2012 Burthsceh <burthsceh@gmail.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die();
}

class RevisionCommentSupplement {

	const DELETED_TEXT = 1;
	const DELETED_FILE = 1;
	const DELETED_ACTION = 1;
	const DELETED_COMMENT = 2;
	const DELETED_USER = 4;
	const DELETED_RESTRICTED = 8;

	/**
	 * @param $revId string: revision id
	 * @param $comment2 string: a new supplementary comment
	 * @param $summary string: reason
	 */
	public static function insert( $revId, $comment2, $summary ) {
		$comment1 = '';
		$action = 'create';
		$dbr = wfGetDB( DB_SLAVE );
		$dbRow = $dbr->selectRow(
			'rev_comment_supp',
			'rcs_comment',
			array( 'rcs_rev_id' => $revId ),
			__METHOD__
		);

		if ( isset($dbRow) && isset($dbRow->rcs_comment) ) {
			$comment1 = $dbRow->rcs_comment;
			$action = 'modify';
		}

		global $wgUser;
		$timestamp = wfTimestamp( TS_MW );

		$row = array(
			'rcs_rev_id' => intval( $revId ),
			'rcs_user' => $wgUser->getId(),
			'rcs_user_text' => $wgUser->getName(),
			'rcs_timestamp' => $timestamp,
			'rcs_comment' => $comment2,
		);
		$dbw = wfGetDB( DB_MASTER );
		$dbw->replace( 'rev_comment_supp', array( 'rcs_rev_id' ), $row, __METHOD__ );

		self::insertLog( $revId, $action, $comment1, $comment2, $summary, $timestamp );
	}

	/**
	 * @param string $revId: revision id
	 * @param string $action: log action, log subtype
	 * @param string $comment1: a old supplementary comment
	 * @param string $comment2: a new supplementary comment
	 * @param string $summary: reason
	 * @param string $timestamp: timestamp
	 * @param string $suppress: flag of revision log deleted
	 * @return int: ID of inserted log entry
	 */
	public static function insertLog( $revId, $action, $comment1, $comment2, $summary, $timestamp, $suppress = false ) {
		global $wgUser;
		$logEntry = new RevisionCommentSupplementManualLogEntry( 'revisioncommentsupplement', $action );
		$logEntry->setPerformer( $wgUser );
		$logEntry->setTarget(
			Title::makeTitleSafe( NS_SPECIAL, "RevisionCommentSupplement/{$revId}" )
		);
		$logEntry->setComment( $summary );
		$logEntry->setTimestamp( $timestamp );
		if ( $suppress ) {
			$logEntry->setDeleted( $suppress );
		}
		$logEntry->setParameters( array(
				'4::revid' => $revId,
				'5::comment1' => $comment1,
				'6::comment2' => $comment2,
			)
		);
		$logid = $logEntry->insert();
		/* $logEntry->publish( $logid ); */
		return $logid;
	}

	/**
	 * @param string $revId: revision id
	 * @param string $summary: reason
	 * @param int $hide: flag of delete log entry or suppress (or oversight) log entry
	 * @return bool
	 */
	public static function delete( $revId, $summary = '', $hide = false ) {
		$comment1 = '';
		$dbRow = self::getRow( $revId );
		if ( $dbRow ) {
			$comment1 = $dbRow->rcs_comment;
		} else {
			return false;
		}

		$logType = '';
		if ( $hide ) {
			$logType = 'delete';
			if ( ( $hide & self::DELETED_RESTRICTED ) == self::DELETED_RESTRICTED ) {
				$logType = 'suppress';
			}
		}

		$dbw = wfGetDB( DB_MASTER );
		$dbw->delete( 'rev_comment_supp', array( 'rcs_rev_id' => $revId ), __METHOD__ );

		$rcslogid = self::insertLog( $revId, 'delete', $comment1, '', $summary, wfTimestamp( TS_MW ), $hide );

		if ( $logType ) {
			$log = new LogPage( $logType );
			$logid = $log->addEntry(
				'event', SpecialPage::getTitleFor( 'Log', 'revisioncommentsupplement' ),
				$summary, array( null, $rcslogid, 'ofield=0', "nfield={$hide}" )
			);
			// Allow for easy searching of deletion log items for revision/log items
			$log->addRelations( 'log_id', array( $rcslogid ), $logid );
			if ( $dbRow->rcs_user ) {
				$log->addRelations( 'target_author_id', array( $dbRow->rcs_user ), $logid );
			} else {
				$log->addRelations( 'target_author_ip', array( $dbRow->rcs_user_text ), $logid );
			}
		}

		return true;
	}

	/**
	 * @param int $revId: revision id
	 * @return object|bool
	 */
	public static function getRow( $revId ) {
		$dbr = wfGetDB( DB_SLAVE );
		$dbRow = $dbr->selectRow(
			'rev_comment_supp',
			'*',
			array( 'rcs_rev_id' => $revId ),
			__METHOD__
		);

		if ( isset($dbRow) && isset($dbRow->rcs_rev_id) && ($dbRow->rcs_rev_id == $revId) ) {
			return $dbRow;
		}

		return false;
	}

	/**
	 * @param int $revId: revision id
	 * @return bool
	 */
	public static function isExistRow( $revId ) {
		$dbr = wfGetDB( DB_SLAVE );
		$dbRow = $dbr->selectRow(
			'rev_comment_supp',
			'rcs_rev_id',
			array( 'rcs_rev_id' => $revId ),
			__METHOD__
		);

		if ( isset($dbRow) && isset($dbRow->rcs_rev_id) && ($dbRow->rcs_rev_id == $revId) ) {
			return true;
		}

		return false;
	}
}

# from class ManualLogEntry in LogEntry.php
class RevisionCommentSupplementManualLogEntry extends ManualLogEntry {

	/**
	 * Inserts the entry into the logging table.
	 * @return int If of the log entry
	 */
	public function insert() {
		global $wgContLang;

		$dbw = wfGetDB( DB_MASTER );
		$id = $dbw->nextSequenceValue( 'logging_log_id_seq' );

		if ( $this->timestamp === null ) {
			$this->timestamp = wfTimestampNow();
		}

		# Truncate for whole multibyte characters.
		$comment = $wgContLang->truncate( $this->getComment(), 255 );

		$data = array(
			'log_id' => $id,
			'log_type' => $this->getType(),
			'log_action' => $this->getSubtype(),
			'log_timestamp' => $dbw->timestamp( $this->getTimestamp() ),
			'log_user' => $this->getPerformer()->getId(),
			'log_user_text' => $this->getPerformer()->getName(),
			'log_namespace' => $this->getTarget()->getNamespace(),
			'log_title' => $this->getTarget()->getDBkey(),
			'log_page' => $this->getTarget()->getArticleId(),
			'log_comment' => $comment,
			'log_params' => serialize( (array) $this->getParameters() ),
			'log_deleted' => $this->getDeleted(),
		);
		$dbw->insert( 'logging', $data, __METHOD__ );
		$this->id = !is_null( $id ) ? $id : $dbw->insertId();
		return $this->id;
	}

	/**
	 * Publishes the log entry.
	 * @param $newId int id of the log entry.
	 * @param $to string: rcandudp (default), rc, udp
	 */
	public function publish( $newId, $to ) {
		if ( $this->getDeleted() ) {
			return;
		}
		parent::publish( $newId, $to );
	}
}

# from class LogPage in LogPage.php
class RevisionCommentSupplementLogPage extends LogPage {

	/**
	 * @return bool|int|null
	 */
	protected function saveContent() {
		$dbw = wfGetDB( DB_MASTER );
		$log_id = $dbw->nextSequenceValue( 'logging_log_id_seq' );

		$this->timestamp = $now = wfTimestampNow();
		$data = array(
			'log_id' => $log_id,
			'log_type' => $this->type,
			'log_action' => $this->action,
			'log_timestamp' => $dbw->timestamp( $now ),
			'log_user' => $this->doer->getId(),
			'log_user_text' => $this->doer->getName(),
			'log_namespace' => $this->target->getNamespace(),
			'log_title' => $this->target->getDBkey(),
			'log_page' => $this->target->getArticleId(),
			'log_comment' => $this->comment,
			'log_params' => $this->params
		);
		$dbw->insert( 'logging', $data, __METHOD__ );
		$newId = !is_null( $log_id ) ? $log_id : $dbw->insertId();

		# And update recentchanges
		if( $this->updateRecentChanges ) {
			$titleObj = SpecialPage::getTitleFor( 'Log', $this->type );

			RecentChange::notifyLog(
				$now, $titleObj, $this->doer, $this->getRcComment(), '',
				$this->type, $this->action, $this->target, $this->comment,
				$this->params, $newId
			);
		} elseif( $this->sendToUDP ) {
			global $wgLogRestrictions;
			# Don't send private logs to UDP
			if( isset( $wgLogRestrictions[$this->type] ) && $wgLogRestrictions[$this->type] != '*' ) {
				return true;
			}

			# Notify external application via UDP.
			# We send this to IRC but do not want to add it the RC table.
			$titleObj = SpecialPage::getTitleFor( 'Log', $this->type );
			$rc = RecentChange::newLogEntry(
				$now, $titleObj, $this->doer, $this->getRcComment(), '',
				$this->type, $this->action, $this->target, $this->comment,
				$this->params, $newId
			);
			$rc->notifyRC2UDP();
		}
		return $newId;
	}

	/**
	 * Add a log entry
	 *
	 * @param $action String: one of '', 'block', 'protect', 'rights', 'delete', 'upload', 'move', 'move_redir'
	 * @param $target Title object
	 * @param $comment String: description associated
	 * @param $params Array: parameters passed later to wfMsg.* functions
	 * @param $doer User object: the user doing the action
	 * @param $timestamp
	 *
	 * @return bool|int|null
	 * @TODO: make this use LogEntry::saveContent()
	 */
	public function addEntry( $action, $target, $comment, $params = array(), $doer = null, $timestamp = null ) {
		global $wgContLang;

		if ( !is_array( $params ) ) {
			$params = array( $params );
		}

		if ( $comment === null ) {
			$comment = '';
		}

		# Truncate for whole multibyte characters.
		$comment = $wgContLang->truncate( $comment, 255 );

		$this->action = $action;
		$this->target = $target;
		$this->comment = $comment;
		$this->params = LogPage::makeParamBlob( $params );

		if ( $doer === null ) {
			global $wgUser;
			$doer = $wgUser;
		} elseif ( !is_object( $doer ) ) {
			$doer = User::newFromId( $doer );
		}

		$this->doer = $doer;

		$logEntry = new ManualLogEntry( $this->type, $action );
		$logEntry->setTarget( $target );
		$logEntry->setPerformer( $doer );
		$logEntry->setParameters( $params );

		$formatter = LogFormatter::newFromEntry( $logEntry );
		$context = RequestContext::newExtraneousContext( $target );
		$formatter->setContext( $context );

		$this->actionText = $formatter->getPlainActionText();

		return $this->saveContent();
	}
}
