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

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'RevisionCommentSupplement',
	'author' => array( 'Burthsceh' ),
	'url' => 'https://www.mediawiki.org/wiki/Extension:RevisionCommentSupplement',
	'descriptionmsg' => 'revcs-desc',
	'version' => '0.3.3',
);

$wgAvailableRights[] = 'supplementcomment';
$wgAvailableRights[] = 'supplementcomment-restricted';

$wgGroupPermissions['supplementcomment']['supplementcomment'] = true;
$wgGroupPermissions['supplementcomment']['supplementcomment-restricted'] = true;
$wgGroupPermissions['sysop']['supplementcomment'] = true;

$wgExtensionMessagesFiles['RevisionCommentSupplement'] = __DIR__ . '/RevisionCommentSupplement.i18n.php';
$wgExtensionMessagesFiles['RevisionCommentSupplementAlias'] = __DIR__ . '/RevisionCommentSupplement.alias.php';

$wgAutoloadClasses['RevisionCommentSupplementHook'] = __DIR__ . '/RevisionCommentSupplement.hook.php';
$wgAutoloadClasses['RevisionCommentSupplementLogFormatter'] = __DIR__ . '/RevisionCommentSupplement.hook.php';
$wgAutoloadClasses['SpecialRevisionCommentSupplement'] = __DIR__ . '/SpecialRevisionCommentSupplement.php';
$wgAutoloadClasses['SpecialRevisionCommentSupplementList'] = __DIR__ . '/SpecialRevisionCommentSupplementList.php';

$wgSpecialPages['RevisionCommentSupplement'] = 'SpecialRevisionCommentSupplement';
$wgSpecialPageGroups['RevisionCommentSupplement'] = 'other';
$wgSpecialPages['RevisionCommentSupplementList'] = 'SpecialRevisionCommentSupplementList';
$wgSpecialPageGroups['RevisionCommentSupplementList'] = 'other';

$wgHooks['LoadExtensionSchemaUpdates'][] = 'RevisionCommentSupplementHook::runUpdates';
$wgHooks['PageHistoryLineEnding'][] = 'RevisionCommentSupplementHook::onPageHistoryLineEnding';

$wgLogTypes[] = 'revisioncommentsupplement';
$wgLogActionsHandlers['revisioncommentsupplement/*'] = 'RevisionCommentSupplementLogFormatter';

$wgResourceModules['ext.RevisionCommentSupplement.special'] = array(
	'styles' => 'ext.RevisionCommentSupplement.special.css',
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'RevisionCommentSupplement',
);
