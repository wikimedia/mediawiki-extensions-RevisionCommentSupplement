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
	'url' => 'https://www.mediawiki.org/wiki/Extension:RevisionCommentSupplement',
	'descriptionmsg' => 'revcs-desc',
	'version' => '0.2.1',
);

$wgAvailableRights[] = 'supplementcomment';
$wgAvailableRights[] = 'supplementcomment-restricted';

$wgGroupPermissions['supplement']['supplementcomment'] = true;
$wgGroupPermissions['supplement']['supplementcomment-restricted'] = true;
$wgGroupPermissions['sysop']['supplementcomment'] = true;

$wgAutoloadClasses['RevisionCommentSupplement'] = $dir . 'RevisionCommentSupplement.body.php';
$wgAutoloadClasses['RevisionCommentSupplementLogFormatter'] = $dir . 'RevisionCommentSupplement.body.php';
$wgAutoloadClasses['SpecialRevisionCommentSupplement'] = $dir . 'SpecialRevisionCommentSupplement.php';

$wgSpecialPages['RevisionCommentSupplement'] = 'SpecialRevisionCommentSupplement';
$wgSpecialPageGroups['RevisionCommentSupplement'] = 'pagetools';

$wgHooks['LoadExtensionSchemaUpdates'][] = 'RevisionCommentSupplement::runUpdates';
$wgHooks['PageHistoryLineEnding'][] = 'RevisionCommentSupplement::onPageHistoryLineEnding';

$wgLogTypes[] = 'revisioncommentsupplement';
$wgLogActionsHandlers['revisioncommentsupplement/*'] = 'RevisionCommentSupplementLogFormatter';

$wgResourceModules['ext.RevisionCommentSupplement.special'] = array(
	'styles' => 'ext.RevisionCommentSupplement.special.css',
	'localBasePath' => dirname( __FILE__ ),
	'remoteExtPath' => 'RevisionCommentSupplement',
);
