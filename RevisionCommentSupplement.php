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
	'author' => array( 'Burthsceh', '...' ),
	'url' => 'https://www.mediawiki.org/wiki/Extension:RevisionCommentSupplement',
	'descriptionmsg' => 'revcs-desc',
	'version' => '0.5.0',
);

$wgAvailableRights[] = 'supplementcomment';
$wgAvailableRights[] = 'supplementcomment-restricted';

$wgGroupPermissions['supplementcomment']['supplementcomment'] = true;
$wgGroupPermissions['supplementcomment']['supplementcomment-restricted'] = true;
$wgGroupPermissions['sysop']['supplementcomment'] = true;

$wgMessagesDirs['RevisionCommentSupplement'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['RevisionCommentSupplement'] = __DIR__ . '/RevisionCommentSupplement.i18n.php';
$wgExtensionMessagesFiles['RevisionCommentSupplementAlias'] = __DIR__ . '/RevisionCommentSupplement.alias.php';

$wgAutoloadClasses['RevisionCommentSupplementSetting'] = __DIR__ . '/RevisionCommentSupplementSetting.php';
$wgAutoloadClasses['RevisionCommentSupplementHook'] = __DIR__ . '/RevisionCommentSupplement.hook.php';
$wgAutoloadClasses['RevisionCommentSupplementLogFormatter'] = __DIR__ . '/RevisionCommentSupplementLogFormatter.php';
$wgAutoloadClasses['RevisionCommentSupplementHideHistoryLogFormatter'] = __DIR__ . '/RevisionCommentSupplementLogFormatter.php';
$wgAutoloadClasses['SpecialRevisionCommentSupplement'] = __DIR__ . '/special/SpecialRevisionCommentSupplement.php';
$wgAutoloadClasses['SpecialRevisionCommentSupplementList'] = __DIR__ . '/special/SpecialRevisionCommentSupplementList.php';

$wgSpecialPages['RevisionCommentSupplement'] = 'SpecialRevisionCommentSupplement';
$wgSpecialPageGroups['RevisionCommentSupplement'] = 'other';
$wgSpecialPages['RevisionCommentSupplementList'] = 'SpecialRevisionCommentSupplementList';
$wgSpecialPageGroups['RevisionCommentSupplementList'] = 'other';

$wgHooks['LoadExtensionSchemaUpdates'][] = 'RevisionCommentSupplementHook::runUpdates';
$wgHooks['PageHistoryLineEnding'][] = 'RevisionCommentSupplementHook::onPageHistoryLineEnding';
$wgHooks['LogLine'][] = 'RevisionCommentSupplementHook::onLogLine';

$wgLogTypes[] = 'revisioncommentsupplement';
$wgLogActionsHandlers['revisioncommentsupplement/create'] = 'RevisionCommentSupplementLogFormatter';
$wgLogActionsHandlers['revisioncommentsupplement/delete'] = 'RevisionCommentSupplementLogFormatter';
$wgLogActionsHandlers['revisioncommentsupplement/modify'] = 'RevisionCommentSupplementLogFormatter';
$wgLogActionsHandlers['revisioncommentsupplement/create2'] = 'LogFormatter';
$wgLogActionsHandlers['revisioncommentsupplement/delete2'] = 'LogFormatter';
$wgLogActionsHandlers['revisioncommentsupplement/modify2'] = 'LogFormatter';
$wgLogActionsHandlers['revisioncommentsupplement/hidehistory'] = 'RevisionCommentSupplementHideHistoryLogFormatter';
$wgLogActionsHandlers['suppress/revcommentsupplementhidehistory'] = 'RevisionCommentSupplementHideHistoryLogFormatter';

$wgResourceModules['ext.RevisionCommentSupplement.special'] = array(
	'styles' => 'ext.RevisionCommentSupplement.special.css',
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'RevisionCommentSupplement',
);

/**
 * $egRevisionCommentSupplementSettings
 *
 * Settings of RevisionCommentSupplement
 *
 * See RevisionCommentSupplementSetting.php
 */
$egRevisionCommentSupplementSettings['history'] = true;
$egRevisionCommentSupplementSettings['log'] = true;
$egRevisionCommentSupplementSettings['logsupplement'] = false;
$egRevisionCommentSupplementSettings['logpublish'] = false;
