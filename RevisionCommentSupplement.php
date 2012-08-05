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

$dir = dirname(__FILE__) . '/';

$wgExtensionMessagesFiles['RevisionCommentSupplement'] = $dir . 'RevisionCommentSupplement.i18n.php';

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'RevisionCommentSupplement',
	'author' => array( 'Burthsceh' ),
	'url' => 'http://www.mediawiki.org/wiki/Extension:RevisionCommentSupplement',
	'descriptionmsg' => 'revcs-desc',
	'version' => '0.1.1',
);

$wgGroupPermissions['supplementcomment']['supplementcomment'] = true;
$wgAutoloadClasses['SpecialRevisionCommentSupplement'] = $dir . 'SpecialRevisionCommentSupplement.php';
$wgSpecialPages['RevisionCommentSupplement'] = 'SpecialRevisionCommentSupplement';
$wgSpecialPageGroups['RevisionCommentSupplement'] = 'pagetools';

$wgHooks['PageHistoryLineEnding'][] = 'RevisionCommentSupplement::AddComment';
$wgHooks['LoadExtensionSchemaUpdates'][] = 'RevisionCommentSupplement::runUpdates';

class RevisionCommentSupplement {

	public static function AddComment( HistoryPager $history, $rev_row, &$s, &$classes ) {
		$revID = (int)$rev_row->rev_id;
		$dbr = wfGetDB( DB_SLAVE );
		$db_row = $dbr->selectRow('rev_comment_supp', '*', array( 'rcs_rev_id' => $revID ), __METHOD__ );

		if ( isset($db_row) && $db_row->rcs_comment != '' ) {
			$comment = Linker::formatComment( $db_row->rcs_comment );
			$s .= '<span class="ex-rcs-comment">[' . wfMessage( 'revcs-supplementary-comment' ) . $comment . ']</span>';
		}

		return true;
	}

	public static function insertKey( $revID, $comment ) {
		global $wgUser;
		$row = array(
			'rcs_rev_id' => intval($revID),
			'rcs_user' => $wgUser->getId(),
			'rcs_user_name' => $wgUser->getName(),
			'rcs_timestamp' => wfTimestamp( TS_MW ),
			'rcs_comment' => $comment,
		);
		$dbw = wfGetDB( DB_MASTER );
		$dbw->replace( 'rev_comment_supp', array( 'rcs_rev_id' ), $row, __METHOD__ );
		return true;
	}

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

		return array( false, false, false, false, false, false, );
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
