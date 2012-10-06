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
		$revId = (int)$rev_row->rev_id;
		$dbr = wfGetDB( DB_SLAVE );
		$db_row = $dbr->selectRow(
			'rev_comment_supp',
			'rcs_comment',
			array( 'rcs_rev_id' => $revId ),
			__METHOD__
		);

		if ( isset($db_row) && isset($db_row->rcs_comment) ) {
			if ( $db_row->rcs_comment != '' ) {
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

		$timestamp = wfTimestamp( TS_MW );

		self::insertKey( $revId, $comment2, $timestamp );
		self::insertLog( $revId, $action, $comment1, $comment2, $summary, $timestamp );
	}

	/**
	 * @param $revId string: revision id
	 * @param $comment string: a new supplementary comment
	 * @param $timestamp string: timestamp
	 */
	static function insertKey( $revId, $comment, $timestamp ) {
		global $wgUser;
		$row = array(
			'rcs_rev_id' => intval( $revId ),
			'rcs_user' => $wgUser->getId(),
			'rcs_user_text' => $wgUser->getName(),
			'rcs_timestamp' => $timestamp,
			'rcs_comment' => $comment,
		);
		$dbw = wfGetDB( DB_MASTER );
		$dbw->replace( 'rev_comment_supp', array( 'rcs_rev_id' ), $row, __METHOD__ );
	}

	/**
	 * @param string $revId: revision id
	 * @param string $action
	 * @param string $comment1: a old supplementary comment
	 * @param string $comment2: a new supplementary comment
	 * @param string $summary: reason
	 * @param string $timestamp: timestamp
	 */
	static function insertLog( $revId, $action, $comment1, $comment2, $summary, $timestamp ) {
		global $wgUser;
		$logEntry = new ManualLogEntry( 'revisioncommentsupplement', $action );
		$logEntry->setPerformer( $wgUser );
		$logEntry->setTarget(
			Title::makeTitleSafe( NS_SPECIAL, "RevisionCommentSupplement/{$revId}" )
		);
		$logEntry->setComment( $summary );
		$logEntry->setTimestamp( $timestamp );
		$logEntry->setParameters( array(
				'4::revid' => $revId,
				'5::comment1' => $comment1,
				'6::comment2' => $comment2,
			)
		);
		/* $logid = */ $logEntry->insert();
		/* $logEntry->publish( $logid ); */
	}

	/**
	 * @param $revId : revision id
	 * @return array
	 */
	public static function getKey( $revId ) {
		$dbr = wfGetDB( DB_SLAVE );
		$db_row = $dbr->selectRow(
			'rev_comment_supp',
			'*',
			array( 'rcs_rev_id' => $revId ),
			__METHOD__
		);

		if ( isset($db_row) && isset($db_row->rcs_rev_id) && ($db_row->rcs_rev_id == $revId) ) {
			return array(
				true,
				$db_row->rcs_rev_id,
				$db_row->rcs_user,
				$db_row->rcs_user_text,
				$db_row->rcs_timestamp,
				$db_row->rcs_comment,
			);
		}

		return array( false, false, false, false, false, false );
	}

	# from Extension:TitleKey, author Brion Vibber
	public static function runUpdates( DatabaseUpdater $updater ) {
		$dir = dirname( __FILE__ );

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