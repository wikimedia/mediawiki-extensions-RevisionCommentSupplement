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

	public static function onPageHistoryLineEnding( HistoryPager $history, $rev_row, &$s, &$classes ) {
		global $wgUser;
		$revID = (int)$rev_row->rev_id;
		$dbr = wfGetDB( DB_SLAVE );
		$db_row = $dbr->selectRow('rev_comment_supp', 'rcs_comment', array( 'rcs_rev_id' => $revID ), __METHOD__ );

		if ( isset($db_row) && isset($db_row->rcs_comment) ) {
			if ( $db_row->rcs_comment != '' ) {
				$comment = Linker::formatComment( $db_row->rcs_comment/*, $history->getTitle(), false*/ ); # section link
				$s .= '<span class="revcs-comment">';
				$s .= $history->msg( 'revcs-history-comment' )->rawParams( $comment )->escaped();
				$s .= '</span>';
			}
		}

		return true;
	}

	/**
	 * @param $revID string: revision id
	 * @param $comment2 string
	 * @param $summary string
	 */
	public static function insert( $revID, $comment2, $summary ) {
		$comment1 = '';
		$action = 'create';
		$dbr = wfGetDB( DB_SLAVE );
		$db_row = $dbr->selectRow('rev_comment_supp', 'rcs_comment', array( 'rcs_rev_id' => $revID ), __METHOD__ );

		if ( isset($db_row) && isset($db_row->rcs_comment) ) {
			$comment1 = $db_row->rcs_comment;
			$action = 'modify';
		}

		$timestamp = wfTimestamp( TS_MW );

		self::insertKey( $revID, $comment2, $timestamp );
		self::insertLog( $revID, $action, $comment1, $comment2, $summary, $timestamp );
	}

	/**
	 * @param $revID string: revision id
	 * @param $comment string
	 * @param $timestamp string: timestamp
	 */
	static function insertKey( $revID, $comment, $timestamp ) {
		global $wgUser;
		$row = array(
			'rcs_rev_id' => intval($revID),
			'rcs_user' => $wgUser->getId(),
			'rcs_user_name' => $wgUser->getName(),
			'rcs_timestamp' => $timestamp,
			'rcs_comment' => $comment,
		);
		$dbw = wfGetDB( DB_MASTER );
		$dbw->replace( 'rev_comment_supp', array( 'rcs_rev_id' ), $row, __METHOD__ );
	}

	/**
	 * @param $revID string: revision id
	 * @param $action string
	 * @param $comment1 string
	 * @param $comment2 string
	 * @param $summary string
	 * @param $timestamp string: timestamp
	 */
	static function insertLog( $revID, $action, $comment1, $comment2, $summary, $timestamp ) {
		global $wgUser;
		$logEntry = new ManualLogEntry( 'revisioncommentsupplement', $action );
		$logEntry->setPerformer( $wgUser );
		$logEntry->setTarget( Title::makeTitleSafe( NS_SPECIAL, 'RevisionCommentSupplement/' . $revID ) );
		$logEntry->setComment( $summary );
		$logEntry->setTimestamp( $timestamp );
		$logEntry->setParameters( array(
				'4::revid' => $revID,
				'5::comment1' => $comment1,
				'6::comment2' => $comment2,
			)
		);
		/* $logid = */ $logEntry->insert();
		/* $logEntry->publish( $logid ); */
	}

	/**
	 * @param $revID : revision id
	 * @return array
	 */
	public static function getKey( $revID ) {
		$dbr = wfGetDB( DB_SLAVE );
		$db_row = $dbr->selectRow('rev_comment_supp', '*', array( 'rcs_rev_id' => $revID ), __METHOD__ );

		if ( isset($db_row) && isset($db_row->rcs_rev_id) && ($db_row->rcs_rev_id == $revID) ) {
			return array(
				true,
				$db_row->rcs_rev_id,
				$db_row->rcs_user,
				$db_row->rcs_user_name,
				$db_row->rcs_timestamp,
				$db_row->rcs_comment,
			);
		}

		return array( false, false, false, false, false, false );
	}

	# from Extension:TitleKey, author Brion Vibber
	public static function runUpdates( $updater = null ) {
		$dir = dirname( __FILE__ );

		if ( $updater === null ) {
			global $wgExtNewTables, $wgDBtype;

			if ( $wgDBtype == 'mysql' ) {
				$wgExtNewTables[] = array( 'rev_comment_supp', "$dir/RevisionCommentSupplement.sql" );
			} else if ( $wgDBtype == 'postgres' ) {
				$wgExtNewTables[] = array( 'rev_comment_supp', "$dir/RevisionCommentSupplement.pg.sql" );
			}
		} else {
			if( $updater->getDB()->tableExists( 'rev_comment_supp' ) ) {
				$updater->output( "...rev_comment_supp table already exists.\n" );
			} else if ( $updater->getDB()->getType() == 'mysql' ) {
				$updater->addExtensionUpdate( array( 'addTable', 'rev_comment_supp', "$dir/RevisionCommentSupplement.sql", true ) );
			} else if ( $updater->getDB()->getType() == 'postgres' ) {
				$updater->addExtensionUpdate( array( 'addTable', 'rev_comment_supp', "$dir/RevisionCommentSupplement.pg.sql", true ) );
			}
		}
		return true;
	}
}

class RevisionCommentSupplementLogFormatter extends LogFormatter {

	# from LogFormatter::getMessageParameters in LogFormatter.php
	function getMessageParameters() {
		if ( isset( $this->parsedParameters ) ) {
			return $this->parsedParameters;
		}

		$entry = $this->entry;
		$params = $this->extractParameters();
		$params[4] = Message::rawParam( $this->getSupplementComment( $params[4] ) );
		$params[5] = Message::rawParam( $this->getSupplementComment( $params[5] ) );
		$params[0] = Message::rawParam( $this->getPerformerElement() );
		$params[1] = $entry->getPerformer()->getName();
		$params[2] = Message::rawParam( $this->makePageLink( $entry->getTarget() ) );

		// Bad things happens if the numbers are not in correct order
		ksort( $params );
		return $this->parsedParameters = $params;
	}

	/**
	 * @params $comment string
	 * @return string HTML
	 *
	 * @private
	 */
	function getSupplementComment( $comment ){
		$s = '';
		if ( $comment ) {
			$parsedcomment = Linker::formatComment( $comment );
			$rawcomment = htmlspecialchars( $comment );
			$s = wfMessage( 'revcs-log-comment' )->rawParams( $parsedcomment, $rawcomment )->escaped();

			# Can't use following code, because transculude is parsed.
			# $s = wfMessage( 'revcs-log-comment' )->rawParams( $parsedcomment )->params( $comment )->escaped();
		} else {
			$s = wfMessage( 'revcs-log-nocomment' )->escaped();
		}
		return $s;
	}
}