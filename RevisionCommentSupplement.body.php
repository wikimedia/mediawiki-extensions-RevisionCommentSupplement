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

	public static function onPageHistoryLineEnding( HistoryPager $history, $rev_row, &$s ) {
		$revId = (int)$rev_row->rev_id;
		$dbr = wfGetDB( DB_SLAVE );
		$db_row = $dbr->selectRow(
			'rev_comment_supp',
			'rcs_comment',
			array( 'rcs_rev_id' => $revId ),
			__METHOD__
		);

		if ( isset($db_row) && isset($db_row->rcs_comment) ) {
			if ( $db_row->rcs_comment && ( $db_row->rcs_comment != '*' ) ) {
				# section link
				$comment = Linker::formatComment(
					$db_row->rcs_comment/*,
					$history->getTitle(),
					false*/
				);
				$s .= '<span class="revcs-comment">' .
					$history->msg( 'revcs-history-supplement' )
						->rawParams( $comment )->escaped() .
					'</span>';
			}
		}

		return true;
	}

	/**
	 * @param $revId string: revision id
	 * @param $comment2 string: a new supplementary comment
	 * @param $summary string: reason
	 */
	public static function insert( $revId, $comment2, $summary ) {
		$comment1 = '';
		$action = 'create';
		$dbr = wfGetDB( DB_SLAVE );
		$db_row = $dbr->selectRow(
			'rev_comment_supp',
			'rcs_comment',
			array( 'rcs_rev_id' => $revId ),
			__METHOD__
		);

		if ( isset($db_row) && isset($db_row->rcs_comment) ) {
			$comment1 = $db_row->rcs_comment;
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
		$dbr = wfGetDB( DB_SLAVE );
		$db_row = $dbr->selectRow(
			'rev_comment_supp',
			'rcs_comment',
			array( 'rcs_rev_id' => $revId ),
			__METHOD__
		);
		if ( isset($db_row) && isset($db_row->rcs_comment) ) {
			$comment1 = $db_row->rcs_comment;
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
				'revision', SpecialPage::getTitleFor( 'Log', 'revisioncommentsupplement' ),
				$summary, array( null, $revId, 'ofield=0', "nfield={$hide}" )
			);
			// Allow for easy searching of deletion log items for revision/log items
			$log->addRelations( 'log_id', array( $rcslogid ), $logid );
			global $wgUser;
			if ( $wgUser->getId() ) {
				$log->addRelations( 'target_author_id', array( $wgUser->getId() ), $logid );
			} else {
				$log->addRelations( 'target_author_ip', array( $wgUser->getName() ), $logid );
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
		$db_row = $dbr->selectRow(
			'rev_comment_supp',
			'*',
			array( 'rcs_rev_id' => $revId ),
			__METHOD__
		);

		if ( isset($db_row) && isset($db_row->rcs_rev_id) && ($db_row->rcs_rev_id == $revId) ) {
			return $db_row;
		}

		return false;
	}

	/**
	 * @param int $revId: revision id
	 * @return bool
	 */
	public static function isExistRow( $revId ) {
		$dbr = wfGetDB( DB_SLAVE );
		$db_row = $dbr->selectRow(
			'rev_comment_supp',
			'rcs_rev_id',
			array( 'rcs_rev_id' => $revId ),
			__METHOD__
		);

		if ( isset($db_row) && isset($db_row->rcs_rev_id) && ($db_row->rcs_rev_id == $revId) ) {
			return true;
		}

		return false;
	}
	# from Extension:TitleKey, author Brion Vibber
	public static function runUpdates( DatabaseUpdater $updater ) {
		$dir = __DIR__;

		if( $updater->getDB()->tableExists( 'rev_comment_supp' ) ) {
			$updater->output( "...rev_comment_supp table already exists.\n" );

			if ( $updater->getDB()->fieldExists( 'rev_comment_supp', 'rcs_user_name', __METHOD__ ) ) {
				$updater->output( "...update rev_comment_supp on version 0.3.0...\n" );

				if ( $updater->getDB()->getType() == 'mysql' ) {
					$updater->addExtensionUpdate(
						array(
							'modifyField',
							'rev_comment_supp',
							'rcs_user_name',
							"$dir/patch/patch-rev_comment_supp.sql",
							true
						)
					);
				} elseif ( $updater->getDB()->getType() == 'postgres' ) {
					$updater->addExtensionUpdate(
						array(
							'modifyField',
							'rev_comment_supp',
							'rcs_user_name',
							"$dir/patch/patch-rev_comment_supp.pg.sql",
							true
						)
					);
				}

			}
		} else {
			$updater->output( "...create rev_comment_supp table...\n" );
			if ( $updater->getDB()->getType() == 'mysql' ) {
				$updater->addExtensionUpdate(
					array(
						'addTable',
						'rev_comment_supp',
						"$dir/RevisionCommentSupplement.sql",
						true
					)
				);
			} elseif ( $updater->getDB()->getType() == 'postgres' ) {
				$updater->addExtensionUpdate(
					array(
						'addTable',
						'rev_comment_supp',
						"$dir/RevisionCommentSupplement.pg.sql",
						true
					)
				);
			}
		}

		return true;
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

class RevisionCommentSupplementLogFormatter extends LogFormatter {

	function getMessageParameters() {
		$params = parent::getMessageParameters();
		$params[4] = Message::rawParam( $this->getSupplementComment( $params[4] ) );
		$params[5] = Message::rawParam( $this->getSupplementComment( $params[5] ) );
		return $params;
	}

	/**
	 * @params string $comment
	 * @return string HTML
	 */
	function getSupplementComment( $comment ){
		$s = '';
		if ( $comment ) {
			$s = $this->msg( 'revcs-log-supplement' )
				->rawParams( htmlspecialchars( $comment ) )->escaped();
		} else {
			$s = $this->msg( 'revcs-log-nosupplement' )->escaped();
		}
		return $s;
	}
}