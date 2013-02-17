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

class RevisionCommentSupplementHook {

	public static function onPageHistoryLineEnding( HistoryPager $history, $revRow, &$s ) {
		$revId = (int)$revRow->rev_id;
		$dbr = wfGetDB( DB_SLAVE );
		$dbRow = $dbr->selectRow(
			'rev_comment_supp',
			'rcs_comment',
			array( 'rcs_rev_id' => $revId ),
			__METHOD__
		);

		if ( isset($dbRow) && isset($dbRow->rcs_comment) ) {
			if ( $dbRow->rcs_comment && ( $dbRow->rcs_comment != '*' ) ) {
				# section link
				$comment = Linker::formatComment(
					$dbRow->rcs_comment/*,
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