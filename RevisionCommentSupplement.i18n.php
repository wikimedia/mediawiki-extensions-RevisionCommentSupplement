<?php

$messages = array();

$messages['en'] = array(
	'action-supplementcomment' => 'operate supplementary comments',
	'action-supplementcomment-restricted' => 'operate supplementary comments with restricted actions',
	'group-supplementcomment' => 'SupplementComment',
	'group-supplementcomment-member' => '{{GENDER:$1|SupplementComment}}',
	'grouppage-supplementcomment' => '{{ns:project}}:SupplementComment',
	'log-name-revisioncommentsupplement' => 'Supplementary comment log',
	'log-description-revisioncommentsupplement' => 'Log of operations in {{#special:RevisionCommentSupplement}}.',
	'logentry-revisioncommentsupplement-create' => '$1 {{GENDER:$2|created}} a supplementary comment, $6 on revision $4',
	'logentry-revisioncommentsupplement-create2' => '$1 {{GENDER:$2|created}} a supplementary comment on revision $4',
	'logentry-revisioncommentsupplement-delete' => '$1 {{GENDER:$2|deleted}} a supplementary comment, $5 on revision $4',
	'logentry-revisioncommentsupplement-delete2' => '$1 {{GENDER:$2|deleted}} a supplementary comment on revision $4',
	'logentry-revisioncommentsupplement-hidehistory' => '$1 {{GENDER:$2|changed}} visibility of a history entry $7 of supplementary comment on revision $4: $9',
	'logentry-revisioncommentsupplement-modify' => '$1 {{GENDER:$2|modified}} a supplementary comment from $5 to $6 on revision $4',
	'logentry-revisioncommentsupplement-modify2' => '$1 {{GENDER:$2|modified}} a supplementary comment on revision $4',
	'logentry-suppress-revcommentsupplementhidehistory' => '$1 {{GENDER:$2|changed}} visibility of a history entry $7 of supplementary comment on revision $4: $9',
	'revisioncommentsupplement' => 'Revision comment supplement',
	'revisioncommentsupplementlist' => 'List of supplementary comments',
	'revcs-desc' => 'Allows to show supplementary comment at each revision line in history pages',
	'revcs-action-history-supplement' => '[Supplement: $1]',
	'revcs-alert-exist-supplement' => 'The supplementary comment on the revision exists in the database table.',
	'revcs-alert-history-id' => '"$1" is wrong history ID.',
	'revcs-alert-nohistory' => 'The history entry does not exist in the database table. This has not created yet, or has already deleted.',
	'revcs-alert-norevision' => 'The revision is not available. It has not been created yet, or it has already been deleted.',
	'revcs-alert-revision-id' => '"$1" is wrong revision ID.',
	'revcs-alert-special-parameter' => 'There is mistake about the parameter.',
	'revcs-alert-supplement-asterisk' => 'The supplementary comment on input is an asterisk.',
	'revcs-alert-supplement-empty' => 'The supplementary comment on input is empty.',
	'revcs-alert-supplement-zero' => 'The supplementary comment on input is a zero.',
	'revcs-alert-supplement-same-as-summary' => 'The supplementary comment on input is the same string as the summary of the revision.',
	'revcs-alert-supplement-same-as-supplement' => 'The supplementary comment on input is the same string as one in the database table.',
	'revcs-delete-desc' => 'You can delete the supplementary comment from database table. Extension RevisionCommentSupplement does not provide undelete operation. If you would want to undelete, you had to restore from logs or history entries.',
	'revcs-delete-failure' => 'Failed to delete the supplementary comment.',
	'revcs-delete-heading' => 'Delete the supplementary comment',
	'revcs-delete-legend' => 'Delete the supplementary comment',
	'revcs-delete-submit' => 'Delete the supplementary comment',
	'revcs-delete-success' => 'Succeed in deleting the supplementary comment.',
	'revcs-edit-desc' => 'You can set supplementary comments, and users who have permission to {{int:action-supplementcomment-restricted}} (supplementcomment-restricted) can modify supplementary comments.',
	'revcs-edit-heading' => 'Edit supplementary comments',
	'revcs-edit-legend' => 'Edit supplementary comments',
	'revcs-edit-preview' => 'Show preview',
	'revcs-edit-preview-reason' => 'Preview of the reason: $1',
	'revcs-edit-preview-supplement' => 'Preview of the supplementary comment: $1',
	'revcs-edit-reason' => 'Reason:',
	'revcs-edit-revision-id' => 'Revision ID:',
	'revcs-edit-save' => 'Save supplementary comment',
	'revcs-edit-show' => 'Show supplementary comment',
	'revcs-edit-supplement' => 'Supplementary comment:',
	'revcs-edit-written' => 'The supplementary comment is saved.',
	'revcs-error' => 'Error: $1',
	'revcs-error-edit-denied' => 'The supplementary comment could not be saved.',
	'revcs-error-hidehistory-hidden-restricted-only' => 'The visibility on input is only restricted (suppress, oversight).',
	'revcs-error-hidehistory-hidden-same' => 'The visibility on input is same value as one in the database table.',
	'revcs-error-history-nosupplement' => 'The supplementary comment does not exist in the database table. This has not created yet, or has already deleted.',
	'revcs-error-history-revision-id' => 'Revision ID is wrong.',
	'revcs-error-history-unuse' => 'This wiki does not save history of supplementary comments.',
	'revcs-error-unexpected' => 'Unexpected error happened.',
	'revcs-hidehistory-desc' => 'You can hide whole or part of properties of a history entry.',
	'revcs-hidehistory-failure' => 'Failed to set visibility of the history entry of supplementary comment.',
	'revcs-hidehistory-heading' => 'Hide/unhide history of supplementary comment',
	'revcs-hidehistory-legend' => 'Hide/unhide history of supplementary comment',
	'revcs-hidehistory-present-supplement' => 'The present supplementary comment $1',
	'revcs-hidehistory-reason' => 'Hide reason of the history entry',
	'revcs-hidehistory-row' => 'Hide the whole history entry',
	'revcs-hidehistory-submit' => 'Apply',
	'revcs-hidehistory-success' => 'Succeed in setting visibility of the history entry of supplementary comment.',
	'revcs-hidehistory-supplement' => 'Hide supplementary comment of the history entry',
	'revcs-hidehistory-suppress' => 'Suppress data from everyone except users having {{int:action-suppressrevision}} (suppressrevision) right',
	'revcs-hidehistory-user' => 'Hide username/IP address of the history entry',
	'revcs-history-desc' => 'This lists history entries of the supplementary comment.',
	'revcs-history-heading' => 'History of supplementary comment $1',
	'revcs-history-heading-error' => 'Error of history of supplementary comment',
	'revcs-history-hidden-reason' => '(reason hidden)',
	'revcs-history-hidden-supplement' => '(supplementary comment hidden)',
	'revcs-history-hidden-user' => '(username hidden)',
	'revcs-history-legend' => 'History of supplementary comment',
	'revcs-history-rcsh-id' => 'History ID',
	'revcs-history-rcsh-reason' => 'Reason',
	'revcs-list-desc' => 'This page lists current supplementary comments.',
	'revcs-list-descending' => 'list in descending order',
	'revcs-list-extended-comparison' => 'Operation of comparison:',
	'revcs-list-extended-comparison-and-over' => 'Properties are the standard and over',
	'revcs-list-extended-comparison-and-under' => 'Properties are the standard and under',
	'revcs-list-extended-comparison-equal' => 'Properties equal the standard',
	'revcs-list-extended-comparison-not-equal' => 'Properties do not equal the standard',
	'revcs-list-extended-comparison-over' => 'Properties are over the standard',
	'revcs-list-extended-comparison-under' => 'Properties are under the standard',
	'revcs-list-extended-offset' => 'Standard of comparison:',
	'revcs-list-extended-property' => 'Properties of comparison:',
	'revcs-list-extended-supplement' => 'Condition of supplementary comments:',
	'revcs-list-extended-supplement-all' => 'all',
	'revcs-list-extended-supplement-empty' => 'empty',
	'revcs-list-extended-supplement-notempty' => 'not empty',
	'revcs-list-heading' => 'List of supplementary comments',
	'revcs-list-legend' => 'List of supplementary comments',
	'revcs-list-limit' => 'Number per page:',
	'revcs-list-rcs-rev-id' => 'Revision ID',
	'revcs-list-rcs-rev-id-edit' => 'Edit',
	'revcs-list-rcs-rev-id-log' => 'Log',
	'revcs-list-rcs-supplement' => 'Supplementary comment',
	'revcs-list-rcs-timestamp' => 'Edited date and time',
	'revcs-list-rcs-user-text' => 'User',
	'revcs-list-reset' => 'Reset',
	'revcs-list-sort' => 'Sort by:',
	'revcs-list-submit' => 'Show',
	'revcs-log-hidehistory-reason-hidden' => 'reason hidden',
	'revcs-log-hidehistory-reason-unhidden' => 'reason unhidden',
	'revcs-log-hidehistory-restricted' => 'applied restrictions',
	'revcs-log-hidehistory-row-hidden' => 'whole history entry hidden',
	'revcs-log-hidehistory-row-unhidden' => 'whole history entry unhidden',
	'revcs-log-hidehistory-supplement-hidden' => 'supplementary comment hidden',
	'revcs-log-hidehistory-supplement-unhidden' => 'supplementary comment unhidden',
	'revcs-log-hidehistory-unrestricted' => 'removed restrictions',
	'revcs-log-nosupplement' => '(none)',
	'revcs-log-supplement' => '"$1"',
	'revcs-show-deletelinktext' => 'Delete the supplementary comment',
	'revcs-show-editlinktext' => 'Edit the supplementary comment',
	'revcs-show-history-id' => 'History ID: $1 ($2)',
	'revcs-show-historylinktext' => 'List history of the supplementary comment',
	'revcs-show-loglinktext' => 'the supplementary comment change log',
	'revcs-show-no-db-row' => 'Not found the supplementary comment on revision $1.',
	'revcs-show-reason' => 'Reason: $1',
	'revcs-show-revision' => 'Revision: $1',
	'revcs-show-revision-id' => 'Revision ID: $1 ($2)',
	'revcs-show-supplement-parsed' => 'Parsed supplementary comment: $1',
	'revcs-show-supplement-raw' => 'Raw supplementary comment: $1',
	'revcs-show-timestamp' => 'Edited date and time: $1 ($2)',
	'revcs-show-user' => 'User: $1 $2 (User ID: $3)',
	'revcs-warning' => 'Warning: $1',
	'right-supplementcomment' => 'Operate supplementary comments',
	'right-supplementcomment-restricted' => 'Operate supplementary comments with restricted actions',
);

/** Message documentation (Message documentation)
 * @author Krenair
 * @author Raymond
 * @author Shirayuki
 * @author Siebrand
 */
$messages['qqq'] = array(
	'action-supplementcomment' => '{{doc-action|supplementcomment}}',
	'action-supplementcomment-restricted' => '{{doc-action|supplementcomment-restricted}}
Used in {{msg-mw|Revcs-edit-desc}}.',
	'group-supplementcomment' => '{{doc-group|supplementcomment}}
{{Identical|Supplement comment}}',
	'group-supplementcomment-member' => '{{doc-group|supplementcomment}}
{{Identical|Supplement comment}}',
	'grouppage-supplementcomment' => '{{doc-group|supplementcomment}}
{{Identical|Supplement comment}}',
	'log-name-revisioncommentsupplement' => 'All public logs of Extension:RevisonCommentSupplement in [[Special:Log]].',
	'log-description-revisioncommentsupplement' => 'The description of all public logs of Extension:RevisonCommentSupplement in [[Special:Log]].',
	'logentry-revisioncommentsupplement-create' => '{{gender}}
A line of log entry in [[Special:Log]]. Parameters:
*$1 - list of links pointing to user page and user tool page(s)
*$2 - the username, for GENDER support
*$3 - (Unused) a link pointing to Special:RevisionCommentSupplement/$4 (edit page)
*$4 - the revision ID
*$5 - (Unused) {{msg-mw|Revcs-log-nosupplement}}
*$6 - the raw new supplementary comment, either {{msg-mw|Revcs-log-supplement}} or {{msg-mw|Revcs-log-nosupplement}}
*$7 - (Unused) the history entry ID of a history entry
{{Related|Logentry-revcs}}',
	'logentry-revisioncommentsupplement-create2' => 'A line of log entry in [[Special:Log]]. Parameters:
*$1 - list of links pointing to user page and user tool page(s)
*$2 - username, for GENDER support
*$3 - (Unused) a link of Special:RevisionCommentSupplement/$4. (edit page)
*$4 - the revision ID
*$5 - (Unused)
*$6 - (Unused)
*$7 - (Unused) the history entry ID of a history entry
{{Related|Logentry-revcs}}',
	'logentry-revisioncommentsupplement-delete' => 'A line of log entry in [[Special:Log]]. Parameters:
*$1 - list of links pointing to the user page (or the user contributions page, [[Special:Contributions]] for IP user), and the user tool page(s)
*$2 - the username, for GENDER support
*$3 - (Unused) a link of Special:RevisionCommentSupplement/$4. (edit page)
*$4 - the revision ID
*$5 - the raw old supplementary comment, either {{msg-mw|Revcs-log-supplement}} or {{msg-mw|Revcs-log-nosupplement}}
*$6 - (Unused) {{msg-mw|Revcs-log-nosupplement}}
*$7 - (Unused) the history entry ID of a history entry
{{Related|Logentry-revcs}}',
	'logentry-revisioncommentsupplement-delete2' => 'A line of log entry in [[Special:Log]]. Parameters:
*$1 - list of links pointing to the user page (or the user contributions page, [[Special:Contributions]] for IP user), and the user tool page(s)
*$2 - the username, for GENDER support
*$3 - (Unused) a link of Special:RevisionCommentSupplement/$4. (edit page)
*$4 - the revision ID
*$5 - (Unused)
*$6 - (Unused)
*$7 - (Unused) the history entry ID of a history entry
{{Related|Logentry-revcs}}',
	'logentry-revisioncommentsupplement-hidehistory' => 'A line of log entry in [[Special:Log]].

This is like {{msg-mw|logentry-delete-event}} and {{msg-mw|logentry-delete-revision}}.

Parameters:
*$1 - links of the user page and the user tool(s) page
*$2 - the username, for GENDER support
*$3 - a link of Special:RevisionCommentSupplement/$4 (edit page)
*$4 - the revision ID of the supplementary comment of a history entry
*$5 - the old hidden flag of a history entry
*$6 - the new hidden flag of a history entry
*$7 - the history entry ID of a history entry
*$8 - the number of the history entry ID. This must be 1. This is reserved.
*$9 - description of change hidden flag. Uses the following messages:
**{{msg-mw|Revcs-log-hidehistory-supplement-hidden}}
**{{msg-mw|Revcs-log-hidehistory-supplement-unhidden}}
**{{msg-mw|Revdelete-uname-hid}}
**{{msg-mw|Revdelete-uname-unhid}}
**{{msg-mw|Revcs-log-hidehistory-reason-hidden}}
**{{msg-mw|Revcs-log-hidehistory-reason-unhidden}}
**{{msg-mw|Revcs-log-hidehistory-restricted}}
**{{msg-mw|Revcs-log-hidehistory-unrestricted}}
**{{msg-mw|Revcs-log-hidehistory-row-hidden}}
**{{msg-mw|Revcs-log-hidehistory-row-unhidden}}
{{Related|Logentry-revcs}}',
	'logentry-revisioncommentsupplement-modify' => 'A line of log entry in [[Special:Log]]. Parameters:
*$1 - list of links pointing to the user page and the user tool page(s)
*$2 - the username, for GENDER support
*$3 - (Unused) a link of Special:RevisionCommentSupplement/$4. (edit page)
*$4 - the revision ID
*$5 - the raw old supplementary comment, either {{msg-mw|Revcs-log-supplement}} or {{msg-mw|Revcs-log-nosupplement}}
*$6 - the raw new supplementary comment, either {{msg-mw|Revcs-log-supplement}} or {{msg-mw|Revcs-log-nosupplement}}
*$7 - (Unused) the history entry ID of a history entry
{{Related|Logentry-revcs}}',
	'logentry-revisioncommentsupplement-modify2' => 'A line of log entry in [[Special:Log]]. Parameters:
*$1 - list of links pointing to the user page and the user tool page(s)
*$2 - the username, for GENDER support
*$3 - (Unused) a link of Special:RevisionCommentSupplement/$4. (edit page)
*$4 - the revision ID
*$5 - (Unused)
*$6 - (Unused)
*$7 - (Unused) the history entry ID of a history entry
{{Related|Logentry-revcs}}',
	'logentry-suppress-revcommentsupplementhidehistory' => 'A line of private log entry in [[Special:Log]].

This is like {{msg-mw|Logentry-suppress-event}} and {{msg-mw|Logentry-suppress-revision}}.

Parameters:
*$1 - links of the user page and the user tool(s) page
*$2 - the username, for GENDER support
*$3 - (Unused) a link of Special:RevisionCommentSupplement/$4 (edit page)
*$4 - the revision ID of the supplementary comment of a history entry
*$5 - (Unused) the old hidden flag of a history entry
*$6 - (Unused) the new hidden flag of a history entry
*$7 - the history entry ID of a history entry
*$8 - (Unused) the number of the history entry ID. This must be 1. This is reserved.
*$9 - description of change hidden flag. Uses the following messages:
**{{msg-mw|revcs-log-hidehistory-supplement-hidden}}
**{{msg-mw|revcs-log-hidehistory-supplement-unhidden}}
**{{msg-mw|revdelete-uname-hid}}
**{{msg-mw|revdelete-uname-unhid}}
**{{msg-mw|revcs-log-hidehistory-reason-hidden}}
**{{msg-mw|revcs-log-hidehistory-reason-unhidden}}
**{{msg-mw|revcs-log-hidehistory-restricted}}
**{{msg-mw|revcs-log-hidehistory-unrestricted}}
**{{msg-mw|revcs-log-hidehistory-row-hidden}}
**{{msg-mw|revcs-log-hidehistory-row-unhidden}}
{{Related|Logentry-revcs}}',
	'revisioncommentsupplement' => '{{doc-special|RevisionCommentSupplement}}
The meaning of "Revision comment supplement" is "Supplement the comment on each revision", "the comment on each revision is supplemented" or "a supplement to the comment on each revision".',
	'revisioncommentsupplementlist' => '{{doc-special|RevisionCommentSupplementList}}
{{Identical|List of supplementary comments}}',
	'revcs-desc' => '{{desc|name=Revision Comment Supplement|url=http://www.mediawiki.org/wiki/Extension:RevisionCommentSupplement}}',
	'revcs-action-history-supplement' => 'This message is used at each revision line in History pages(history action of pages). $1 is a parsed supplementary comment.',
	'revcs-alert-exist-supplement' => 'This message is a error or warning message used at save in Special:RevisionCommentSupplement.',
	'revcs-alert-history-id' => 'This message is a error or warning message used in [[Special:RevisionCommentSupplement/hidehistory]].

Parameters:
* $1 - history ID',
	'revcs-alert-nohistory' => 'This message is a error or warning message used in Special:RevisionCommentSupplement/hidehistory.',
	'revcs-alert-norevision' => 'This message is a error or warning message used in Special:RevisionCommentSupplement.

About "the revision table", "revision" is the table name in the database.',
	'revcs-alert-revision-id' => 'This message is a error or warning message used in [[Special:RevisionCommentSupplement]].

Parameters:
* $1 - revision ID',
	'revcs-alert-special-parameter' => 'This message is a error or warning message used in Special:RevisionCommentSupplement.',
	'revcs-alert-supplement-asterisk' => 'This message is a error or warning message used at save or preview in Special:RevisionCommentSupplement.',
	'revcs-alert-supplement-empty' => 'This message is a error or warning message used at save or preview in Special:RevisionCommentSupplement.',
	'revcs-alert-supplement-zero' => 'This message is a error or warning message used at save or preview in Special:RevisionCommentSupplement.',
	'revcs-alert-supplement-same-as-summary' => 'This message is a error or warning message used at save or preview in Special:RevisionCommentSupplement.',
	'revcs-alert-supplement-same-as-supplement' => 'This message is a error or warning message used at save or preview in Special:RevisionCommentSupplement.',
	'revcs-delete-desc' => 'This message is a description at the top in Special:RevisionCommentSupplement/delete.',
	'revcs-delete-failure' => 'This message is shown when deleting a supplementary comment and writing log entry(s) are failure in Special:RevisionCommentSupplement/delete.',
	'revcs-delete-heading' => 'This message is the heading of Special:RevisionCommentSupplement/delete.
{{Identical|Delete the supplementary comment}}',
	'revcs-delete-legend' => 'This message is a content of a legend element in Special:RevisionCommentSupplement/delete.
{{Identical|Delete the supplementary comment}}',
	'revcs-delete-submit' => 'This message is a label of a input submit button in [[Special:RevisionCommentSupplement/delete]].
{{Identical|Delete the supplementary comment}}',
	'revcs-delete-success' => 'This message is shown when deleting a supplementary comment and writing log entry(s) are finished in Special:RevisionCommentSupplement/delete.',
	'revcs-edit-desc' => 'This message is a description at the top in [[Special:RevisionCommentSupplement/edit]].

Refers to {{msg-mw|Action-supplementcomment-restricted}}.',
	'revcs-edit-heading' => 'This message is the heading of Special:RevisionCommentSupplement/edit.
{{Identical|Edit supplementary comment}}',
	'revcs-edit-legend' => 'This message is a content of a legend element in Special:RevisionCommentSupplement/edit.
{{Identical|Edit supplementary comment}}',
	'revcs-edit-preview' => 'This message is a label of a input submit button in [[Special:RevisionCommentSupplement/edit]].
{{Identical|Show preview}}',
	'revcs-edit-preview-reason' => 'Used in the preview. Parameters:
* $1 - the reason',
	'revcs-edit-preview-supplement' => 'This message is used at preview a supplementary comment and a summary in Special:RevisionCommentSupplement/edit.
* $1 - a parsed supplementary comment',
	'revcs-edit-reason' => 'This message is a content of a label element of a text input box of a reason in Special:RevisionCommentSupplement/edit.
{{Identical|Reason}}',
	'revcs-edit-revision-id' => 'This message is a content of a label element of a text input box of a supplementary comment in Special:RevisionCommentSupplement/edit.
{{Identical|Revision ID}}',
	'revcs-edit-save' => 'This message is a label of a input submit button in [[Special:RevisionCommentSupplement/edit]].',
	'revcs-edit-show' => 'This message is a label of a input submit button in [[Special:RevisionCommentSupplement/edit]].',
	'revcs-edit-supplement' => 'This message is a label of a text input box of a supplementary comment in Special:RevisionCommentSupplement/edit.
{{Identical|Supplementary comment}}',
	'revcs-edit-written' => 'This message is shown when writing a supplementary comment and a log entry are finished at save in Special:RevisionCommentSupplement/edit.',
	'revcs-error' => 'Used as error message. Parameters:
* $1 - error or alert message. one of the following messages:
** {{msg-mw|Revcs-error-edit-denied}}
** {{msg-mw|Revcs-error-history-nosupplement}}
** {{msg-mw|Revcs-error-history-revision-id}}
** {{msg-mw|Revcs-error-history-unuse}}
** {{msg-mw|Revcs-alert-exist-supplement}}
** {{msg-mw|Revcs-alert-norevision}}
** {{msg-mw|Revcs-alert-supplement-asterisk}}
** {{msg-mw|Revcs-alert-supplement-empty}}
** {{msg-mw|Revcs-alert-supplement-zero}}
** {{msg-mw|Revcs-alert-supplement-same-as-summary}}
** {{msg-mw|Revcs-alert-supplement-same-as-supplement}}
{{Identical|Error}}',
	'revcs-error-edit-denied' => 'This message is a error message used when saving in [[Special:RevisionCommentSupplement/edit]].

Used as <code>$1</code> in {{msg-mw|Revcs-error}}.',
	'revcs-error-hidehistory-hidden-restricted-only' => 'This message is a error message used in Special:RevisionCommentSupplement/hidehistory.',
	'revcs-error-hidehistory-hidden-same' => 'This message is a error message used in Special:RevisionCommentSupplement/hidehistory.',
	'revcs-error-history-nosupplement' => 'This message is a error message used in [[Special:RevisionCommentSupplementList/history]].

Used as <code>$1</code> in {{msg-mw|Revcs-error}}.',
	'revcs-error-history-revision-id' => 'This message is a error message used in [[Special:RevisionCommentSupplementList/history]].

Used as <code>$1</code> in {{msg-mw|Revcs-error}}.',
	'revcs-error-history-unuse' => 'This message is a error message used in [[Special:RevisionCommentSupplementList/history]].

Used as <code>$1</code> in {{msg-mw|Revcs-error}}.',
	'revcs-error-unexpected' => 'This message is a error message used in Special:RevisionCommentSupplement.',
	'revcs-hidehistory-desc' => 'This message is a description at the top in Special:RevisionCommentSupplement/hidehistory.',
	'revcs-hidehistory-failure' => 'This message is shown when hiding whole or part of a history entry and writing log entry  are failure in Special:RevisionCommentSupplement/hidehistory.',
	'revcs-hidehistory-heading' => 'This message is first heading of Special:RevisionCommentSupplement/hidehistory.',
	'revcs-hidehistory-legend' => 'This message is a content of a legend element in Special:RevisionCommentSupplement/hidehistory.',
	'revcs-hidehistory-present-supplement' => 'This message is second heading of Special:RevisionCommentSupplement/hidehistory.
* $1 - revision ID',
	'revcs-hidehistory-reason' => 'This message is a content of a label element of a input checkbox in Special:RevisionCommentSupplement/hidehistory.',
	'revcs-hidehistory-row' => 'This message is a content of a label element of a input checkbox in Special:RevisionCommentSupplement/hidehistory.',
	'revcs-hidehistory-submit' => 'This message is a label of a input submit button in [[Special:RevisionCommentSupplement/hidehistory]].
{{Identical|Apply}}',
	'revcs-hidehistory-success' => 'This message is shown when hiding whole or part of a history entry and writing log entry are finished in Special:RevisionCommentSupplement/hidehistory.',
	'revcs-hidehistory-supplement' => 'This message is a content of a label element of a input checkbox in Special:RevisionCommentSupplement/hidehistory.',
	'revcs-hidehistory-suppress' => 'This message is a content of a label element of a input checkbox in [[Special:RevisionCommentSupplement/hidehistory]].

This is like {{msg-mw|Revdelete-suppress}}.

Refers to {{msg-mw|Action-suppressrevision}}.',
	'revcs-hidehistory-user' => 'This message is a content of a label element of a input checkbox in Special:RevisionCommentSupplement/hidehistory.',
	'revcs-history-desc' => 'This message is a description at the top in Special:RevisionCommentSupplement/edit.',
	'revcs-history-heading' => 'This message is the heading of Special:RevisionCommentSupplementList/history. Parameters:
* $1 - a revision id of a supprementary comment.
When error happens, {{msg-mw|revcs-history-heading-error}} is used instead of this message.
{{Identical|History of supplementary comment}}',
	'revcs-history-heading-error' => 'This message is the heading of [[Special:RevisionCommentSupplementList/history]].

When error happens, this is used instead of {{msg-mw|Revcs-history-heading}}.

Followed by any one of the following messages:
* {{msg-mw|Revcs-error-history-unuse}}
* {{msg-mw|Revcs-error-history-revision-id}}
* {{msg-mw|Revcs-error-history-nosupplement}}',
	'revcs-history-hidden-reason' => 'This message is used in Special:RevisionCommentSupplementList/history. This is like {{msg-mw|Rev-deleted-comment}}.',
	'revcs-history-hidden-supplement' => 'This message is used in Special:RevisionCommentSupplementList/history. This is like {{msg-mw|Rev-deleted-event}}.',
	'revcs-history-hidden-user' => 'This message is used in Special:RevisionCommentSupplementList/history. This is like {{msg-mw|Rev-deleted-user}}.',
	'revcs-history-legend' => 'This message is a content of a legend element in Special:RevisionCommentSupplementList/history.
{{Identical|History of supplementary comment}}',
	'revcs-history-rcsh-id' => 'This message is a heading of a table in Special:RevisionCommentSupplementList/history.',
	'revcs-history-rcsh-reason' => 'This message is a heading of a table in Special:RevisionCommentSupplementList/history.
{{Identical|Reason}}',
	'revcs-list-desc' => 'This message is a description at the top in Special:RevisionCommentSupplementList/list.',
	'revcs-list-descending' => 'This message is a content of a label element of a input checkbox in Special:RevisionCommentSupplementList/list.',
	'revcs-list-extended-comparison' => 'This message is a content of a label element of a select element in Special:RevisionCommentSupplementList/list.',
	'revcs-list-extended-comparison-and-over' => 'This message is a content of a option element into a select element in Special:RevisionCommentSupplementList/list.',
	'revcs-list-extended-comparison-and-under' => 'This message is a content of a option element into a select element in Special:RevisionCommentSupplementList/list.',
	'revcs-list-extended-comparison-equal' => 'This message is a content of a option element into a select element in Special:RevisionCommentSupplementList/list.',
	'revcs-list-extended-comparison-not-equal' => 'This message is a content of a option element into a select element in Special:RevisionCommentSupplementList/list.',
	'revcs-list-extended-comparison-over' => 'Option text for element selection in Special:RevisionCommentSupplementList/list.',
	'revcs-list-extended-comparison-under' => 'Option text for element selection in Special:RevisionCommentSupplementList/list.',
	'revcs-list-extended-offset' => 'This message is a content of a label element of a text input box of a condition in Special:RevisionCommentSupplementList/list.',
	'revcs-list-extended-property' => 'This message is a content of a label element of a select element in Special:RevisionCommentSupplementList/list.',
	'revcs-list-extended-supplement' => 'This message is a content of a label element of a select element in Special:RevisionCommentSupplementList/list.',
	'revcs-list-extended-supplement-all' => 'This message is a content of a option element into a select element in [[Special:RevisionCommentSupplementList/list]].
{{Identical|All}}',
	'revcs-list-extended-supplement-empty' => 'This message is a content of a option element into a select element in Special:RevisionCommentSupplementList/list.
{{Identical|Empty}}',
	'revcs-list-extended-supplement-notempty' => 'This message is a content of a option element into a select element in Special:RevisionCommentSupplementList/list.',
	'revcs-list-heading' => 'This message is the heading of Special:RevisionCommentSupplementList/list.
{{Identical|List of supplementary comments}}',
	'revcs-list-legend' => 'This message is a content of a legend element in Special:RevisionCommentSupplementList/list.
{{Identical|List of supplementary comments}}',
	'revcs-list-limit' => 'This message is a label of a select element in Special:RevisionCommentSupplementList.',
	'revcs-list-rcs-rev-id' => 'This message is a heading of a table and a content of a option element into a select element in Special:RevisionCommentSupplementList.
{{Identical|Revision ID}}',
	'revcs-list-rcs-rev-id-edit' => 'This message is a link text to [[Special:RevisionCommentSupplement]] at revision id into table in Special:RevisionCommentSupplementList.
{{Identical|Edit}}',
	'revcs-list-rcs-rev-id-log' => 'This message is a link text to [[Special:Log]] at revision id into table in Special:RevisionCommentSupplementList.',
	'revcs-list-rcs-supplement' => 'This message is a heading of a table in Special:RevisionCommentSupplementList.
{{Identical|Supplementary comment}}',
	'revcs-list-rcs-timestamp' => 'This message is a heading of a table and a content of a option element into a select element in Special:RevisionCommentSupplementList.',
	'revcs-list-rcs-user-text' => 'This message is a heading of a table and a content of a option element into a select element in [[Special:RevisionCommentSupplementList]].
{{Identical|User}}',
	'revcs-list-reset' => 'This message is a label of a input reset button in [[Special:RevisionCommentSupplementList/list]].
{{Identical|Reset}}',
	'revcs-list-sort' => 'This message is a label of a select element in Special:RevisionCommentSupplementList.
{{Identical|Sort by}}',
	'revcs-list-submit' => 'This message is a label of a input submit button in [[Special:RevisionCommentSupplementList]].',
	'revcs-log-hidehistory-reason-hidden' => 'This message is a description.
This is used at $9 of the following messages:
*{{msg-mw|Logentry-revisioncommentsupplement-hidehistory}}
*{{msg-mw|Logentry-suppress-revcommentsupplementhidehistory}}',
	'revcs-log-hidehistory-reason-unhidden' => 'This message is a description.
This is used at $9 of the following messages:
*{{msg-mw|Logentry-revisioncommentsupplement-hidehistory}}
*{{msg-mw|Logentry-suppress-revcommentsupplementhidehistory}}',
	'revcs-log-hidehistory-restricted' => 'This message is a description and is like {{msg-mw|Revdelete-restricted}}.
This is used at $9 of the following messages:
*{{msg-mw|Logentry-revisioncommentsupplement-hidehistory}}
*{{msg-mw|Logentry-suppress-revcommentsupplementhidehistory}}',
	'revcs-log-hidehistory-row-hidden' => 'This message is a description.
This is used at $9 of the following messages:
*{{msg-mw|Logentry-revisioncommentsupplement-hidehistory}}
*{{msg-mw|Logentry-suppress-revcommentsupplementhidehistory}}',
	'revcs-log-hidehistory-row-unhidden' => 'This message is a description.
This is used at $9 of the following messages:
*{{msg-mw|Logentry-revisioncommentsupplement-hidehistory}}
*{{msg-mw|Logentry-suppress-revcommentsupplementhidehistory}}',
	'revcs-log-hidehistory-supplement-hidden' => 'This message is a description.
This is used at $9 of the following messages:
*{{msg-mw|Logentry-revisioncommentsupplement-hidehistory}}
*{{msg-mw|Logentry-suppress-revcommentsupplementhidehistory}}',
	'revcs-log-hidehistory-supplement-unhidden' => 'This message is a description.
This is used at $9 of the following messages:
*{{msg-mw|Logentry-revisioncommentsupplement-hidehistory}}
*{{msg-mw|Logentry-suppress-revcommentsupplementhidehistory}}',
	'revcs-log-hidehistory-unrestricted' => 'This message is a description and is like {{msg-mw|Revdelete-unrestricted}}.
This is used at $9 of the following messages:
*{{msg-mw|Logentry-revisioncommentsupplement-hidehistory}}
*{{msg-mw|Logentry-suppress-revcommentsupplementhidehistory}}',
	'revcs-log-nosupplement' => 'Used in [[Special:Log]], as <code>$5</code> or <code>$6</code> in the following messages (if a supplementary comment is empty):
* {{msg-mw|Logentry-revisioncommentsupplement-create}}
* {{msg-mw|Logentry-revisioncommentsupplement-delete}}
* {{msg-mw|Logentry-revisioncommentsupplement-modify}}',
	'revcs-log-supplement' => '{{Optional}}
Used in [[Special:Log]], as <code>$5</code> or <code>$6</code> in the following message (if a supplementary comment is not empty):
* {{msg-mw|Logentry-revisioncommentsupplement-create}}
* {{msg-mw|Logentry-revisioncommentsupplement-delete}}
* {{msg-mw|Logentry-revisioncommentsupplement-modify}}
Parameters:
*$1 - a raw supplementary comment',
	'revcs-show-deletelinktext' => 'Used as a link text of <code>$2</code> in {{msg-mw|Revcs-show-revision-id}}.

Used to show a supplementary comment of a revision in [[Special:RevisionCommentSupplement]].
{{Identical|Delete the supplementary comment}}',
	'revcs-show-editlinktext' => 'Used as a link text of <code>$2</code> in {{msg-mw|Revcs-show-revision-id}}.

Used to show a supplementary comment of a revision in [[Special:RevisionCommentSupplement]].
{{Identical|Edit supplementary comment}}',
	'revcs-show-history-id' => 'This message is used at show the supplementary comment of the revision in [[Special:RevisionCommentSupplement]].
*$1 - history entry ID
*$2 - a link pointing to Special:RevisionCommentSupplementList/history/<nowiki>{</nowiki><code>$1</code> of {{msg-mw|Revcs-show-revision-id}}<nowiki>}</nowiki>. The link text is {{msg-mw|Revcs-show-historylinktext}}.',
	'revcs-show-historylinktext' => 'Used as a link text of <code>$2</code> in {{msg-mw|Revcs-show-history-id}}.

Used to show a supplementary comment of a revision in [[Special:RevisionCommentSupplement]].',
	'revcs-show-loglinktext' => 'Used as a link text of <code>$2</code> in {{msg-mw|Revcs-show-revision-id}}.

Used to show the supplementary comment of a revision in [[Special:RevisionCommentSupplement]].',
	'revcs-show-no-db-row' => 'This message is used at show the supplementary comment of the revision in Special:RevisionCommentSupplement. $1 is revision id.',
	'revcs-show-reason' => 'This message is used in Special:RevisionCommentSupplement/hidehistory. $1 is reason.
{{Identical|Reason}}',
	'revcs-show-revision' => 'This message is used at show the supplementary comment of the revision and preview a supplementary comment and a reason in Special:RevisionCommentSupplement. $1 is a revision line like one in History pages.',
	'revcs-show-revision-id' => 'This message is used to show the supplementary comment of the revision in [[Special:RevisionCommentSupplement]].
*$1 - revision ID
*$2 - one of the following links:
**Special:Log?page=Special:RevisionCommentSupplement/$1. The link text is {{msg-mw|Revcs-show-loglinktext}}.
**Special:RevisionCommentSupplement/edit/$1. The link text is {{msg-mw|Revcs-show-editlinktext}}.
**Special:RevisionCommentSupplement/delete/$1. The link text is {{msg-mw|Revcs-show-deletelinktext}}.',
	'revcs-show-supplement-parsed' => 'This message is used at show the supplementary comment of the revision in Special:RevisionCommentSupplement.
*$1 - a parsed supplementary comment',
	'revcs-show-supplement-raw' => 'This message is used at show a supplementary comment of a revision in Special:RevisionCommentSupplement.
*$1 - a raw supplementary comment',
	'revcs-show-timestamp' => 'This message is used at show a supplementary comment of a revision in [[Special:RevisionCommentSupplement]].

$1 and $2 are timestamp when the supplementary comment was last modified.

Parameters:
* $1 - a timestamp (time and date) in format setting in [[Special:Preferences]] of each user
* $2 - a timestamp (time and date) in database',
	'revcs-show-user' => "This message is used at show the supplementary comment of the revision in Special:RevisionCommentSupplement.
*$1 is link of user page (or user contributions page, [[Special:Contributions]] when the user doesn't log in).
*$2 is user tool link(s).
*$3 is user id.
If user name is Example, $1 is like [[User:Example|Example]] and $2 are like ([[User_talk:Example|Talk]] | [[Special:Contributions/Example|Contributions]]).",
	'revcs-warning' => 'This message is used in [[Special:RevisionCommentSupplement]]. Parameters:
* $1 - warning. one of the following messages:
** {{msg-mw|Revcs-alert-exist-supplement}}
** {{msg-mw|Revcs-alert-norevision}}
** {{msg-mw|Revcs-alert-special-parameter}}
** {{msg-mw|Revcs-alert-supplement-asterisk}}
** {{msg-mw|Revcs-alert-supplement-empty}}
** {{msg-mw|Revcs-alert-supplement-zero}}
** {{msg-mw|Revcs-alert-supplement-same-as-summary}}
** {{msg-mw|Revcs-alert-supplement-same-as-supplement}}
{{Identical|Warning}}',
	'right-supplementcomment' => '{{doc-right|supplementcomment}}',
	'right-supplementcomment-restricted' => '{{doc-right|supplementcomment-restricted}}',
);

/** Arabic (العربية)
 * @author لطرش احمد الهاشمي
 */
$messages['ar'] = array(
	'revcs-edit-save' => 'حفظ التعليق التكميلي',
	'revcs-edit-show' => 'إظهار التعليق التكميلي',
);

/** Bulgarian (български)
 * @author පසිඳු කාවින්ද
 */
$messages['bg'] = array(
	'revcs-error' => 'Грешка: $1',
	'revcs-list-extended-supplement-all' => 'всички',
	'revcs-list-extended-supplement-empty' => 'празно',
	'revcs-list-rcs-rev-id-edit' => 'Редактиране',
	'revcs-list-rcs-user-text' => 'Потребител',
	'revcs-list-submit' => 'Показване',
);

/** Breton (brezhoneg)
 * @author Fohanno
 */
$messages['br'] = array(
	'revcs-alert-special-parameter' => 'Ur fazi zo gant an arventenn.',
	'revcs-edit-reason' => 'Abeg :',
	'revcs-error' => 'Fazi : $1',
	'revcs-error-unexpected' => "C'hoarvezet ez eus ur fazi dic'hortoz.",
	'revcs-hidehistory-submit' => 'Lakaat da dalvezout',
	'revcs-history-hidden-reason' => '(abeg kuzhet)',
	'revcs-history-rcsh-reason' => 'Abeg',
	'revcs-list-extended-supplement-all' => 'pep tra',
	'revcs-list-extended-supplement-empty' => 'goullo',
	'revcs-list-extended-supplement-notempty' => "n'eo ket goullo",
	'revcs-list-limit' => 'Niver dre bajenn :',
	'revcs-list-rcs-rev-id-edit' => 'Aozañ',
	'revcs-list-rcs-user-text' => 'Implijer',
	'revcs-list-submit' => 'Diskouez',
	'revcs-log-hidehistory-reason-hidden' => 'abeg kuzhet',
	'revcs-log-nosupplement' => '(hini ebet)',
	'revcs-show-reason' => 'Abeg : $1',
	'revcs-show-revision' => 'Adweladenn : $1',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'revcs-list-rcs-rev-id-edit' => 'Нисйé',
	'revcs-list-reset' => 'Кхоссар',
);

/** Czech (čeština)
 * @author Vks
 */
$messages['cs'] = array(
	'log-name-revisioncommentsupplement' => 'Doplňující protokol komentářů',
	'revcs-list-extended-supplement-all' => 'všechno',
	'revcs-list-rcs-rev-id-edit' => 'Upravit',
	'revcs-list-rcs-rev-id-log' => 'Protokol',
	'revcs-list-rcs-timestamp' => 'Upravené datum a čas',
	'revcs-list-rcs-user-text' => 'Uživatel',
	'revcs-list-reset' => 'Vynulovat',
	'revcs-list-sort' => 'Řazení:',
	'revcs-list-submit' => 'Ukázat',
	'revcs-log-nosupplement' => '(žádné)',
);

/** Church Slavic (словѣньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 * @author ОйЛ
 */
$messages['cu'] = array(
	'revcs-error' => 'блаꙁна : $1',
	'revcs-list-rcs-user-text' => 'польꙃєватєл҄ь',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Metalhead64
 */
$messages['de'] = array(
	'action-supplementcomment' => 'mit ergänzenden Kommentaren zu arbeiten',
	'action-supplementcomment-restricted' => 'eingeschränkt mit ergänzenden Kommentaren zu arbeiten',
	'group-supplementcomment' => 'Kommentarergänzer',
	'group-supplementcomment-member' => '{{GENDER:$1|Kommentarergänzer|Kommentarergänzerin}}',
	'grouppage-supplementcomment' => '{{ns:project}}:Kommentarergänzer',
	'log-name-revisioncommentsupplement' => 'Kommentarergänzungs-Logbuch',
	'log-description-revisioncommentsupplement' => 'Logbuch der Aktionen in {{#special:Versionskommentarergänzung}}.',
	'logentry-revisioncommentsupplement-create' => '$1 {{GENDER:$2|erstellte}} den ergänzenden Kommentar „$6“ zu Version $4',
	'logentry-revisioncommentsupplement-create2' => '$1 {{GENDER:$2|erstellte}} einen ergänzenden Kommentar zur Version $4',
	'logentry-revisioncommentsupplement-delete' => '$1 {{GENDER:$2|löschte}} den ergänzenden Kommentar „$5“ zu Version $4',
	'logentry-revisioncommentsupplement-delete2' => '$1 {{GENDER:$2|löschte}} einen ergänzenden Kommentar zur Version $4',
	'logentry-revisioncommentsupplement-hidehistory' => '$1 {{GENDER:$2|änderte}} die Sichtbarkeit des Versionsgeschichteneintrags $7 des ergänzenden Kommentars zur Version $4: $9',
	'logentry-revisioncommentsupplement-modify' => '$1 {{GENDER:$2|änderte}} den ergänzenden Kommentar „$5“ in „$6“ zu Version $4',
	'logentry-revisioncommentsupplement-modify2' => '$1 {{GENDER:$2|änderte}} einen ergänzenden Kommentar zur Version $4',
	'logentry-suppress-revcommentsupplementhidehistory' => '$1 {{GENDER:$2|änderte}} die Sichtbarkeit des Versionsgeschichteneintrags $7 des ergänzenden Kommentars zur Version $4: $9',
	'revisioncommentsupplement' => 'Versionskommentarergänzung',
	'revisioncommentsupplementlist' => 'Liste der Ergänzungskommentare',
	'revcs-desc' => 'Ermöglicht das Anzeigen ergänzender Kommentare in Versionsgeschichten',
	'revcs-action-history-supplement' => '[Ergänzender Kommentar: $1]',
	'revcs-alert-exist-supplement' => 'Der ergänzende Kommentar der Version ist bereits vorhanden.',
	'revcs-alert-history-id' => '„$1“ ist eine falsche Versionsgeschichtenkennung.',
	'revcs-alert-nohistory' => 'Der Versionsgeschichteneintrag ist in der Datenbanktabelle nicht vorhanden. Er wurde noch nicht erstellt oder wurde bereits gelöscht.',
	'revcs-alert-norevision' => 'Die Version ist nicht verfügbar. Sie wurde noch nicht erstellt oder wurde bereits gelöscht.',
	'revcs-alert-revision-id' => '„$1“ ist eine falsche Versionskennung.',
	'revcs-alert-special-parameter' => 'Es gibt einen Fehler mit dem Parameter.',
	'revcs-alert-supplement-asterisk' => 'Der eingegebene ergänzende Kommentar ist mit einem Sternchen versehen.',
	'revcs-alert-supplement-empty' => 'Es wurde kein ergänzender Kommentar eingegeben.',
	'revcs-alert-supplement-zero' => 'Der eingegebene Ergänzungskommentar ist leer.',
	'revcs-alert-supplement-same-as-summary' => 'Der ergänzende Kommentar entspricht der gleichen Zeichenfolge wie die der Versionszusammenfassung.',
	'revcs-alert-supplement-same-as-supplement' => 'Der ergänzende Kommentar entspricht der gleichen Zeichenfolge wie in der Datenbanktabelle.',
	'revcs-delete-desc' => 'Du kannst den Ergänzungskommentar aus der Datenbanktabelle löschen. Die Softwareerweiterung „RevisionCommentSupplement“ unterstützt keine Wiederherstellungen. Falls du Kommentare wiederherstellen möchtest, musst du dies von den Logbüchern oder Versionsgeschichteneinträgen tun.',
	'revcs-delete-failure' => 'Ergänzungskommentar konnte nicht gelöscht werden.',
	'revcs-delete-heading' => 'Ergänzungskommentar löschen',
	'revcs-delete-legend' => 'Ergänzungskommentar löschen',
	'revcs-delete-submit' => 'Ergänzungskommentar löschen',
	'revcs-delete-success' => 'Das Löschen des Ergänzungskommentars war erfolgreich.',
	'revcs-edit-desc' => 'Du kannst Ergänzungskommentare vergeben. Benutzer, die das Recht haben, {{int:action-supplementcomment-restricted}} (supplementcomment-restricted), können Ergänzungskommentare verändern.',
	'revcs-edit-heading' => 'Ergänzungskommentare bearbeiten',
	'revcs-edit-legend' => 'Ergänzende Kommentare bearbeiten',
	'revcs-edit-preview' => 'Vorschau zeigen',
	'revcs-edit-preview-reason' => 'Vorschau der Begründung: $1',
	'revcs-edit-preview-supplement' => 'Vorschau des ergänzenden Kommentars: $1',
	'revcs-edit-reason' => 'Begründung:',
	'revcs-edit-revision-id' => 'Versionskennung:',
	'revcs-edit-save' => 'Ergänzenden Kommentar speichern',
	'revcs-edit-show' => 'Ergänzenden Kommentar anzeigen',
	'revcs-edit-supplement' => 'Ergänzender Kommentar:',
	'revcs-edit-written' => 'Der ergänzende Kommentar wurde gespeichert.',
	'revcs-error' => 'Fehler: $1',
	'revcs-error-edit-denied' => 'Der ergänzende Kommentar konnte nicht gespeichert werden.',
	'revcs-error-hidehistory-hidden-restricted-only' => 'Die Sichtbarkeit ist nur beschränkt (suppress, oversight).',
	'revcs-error-hidehistory-hidden-same' => 'Die Sichtbarkeit hat den gleichen Wert wie in der Datenbanktabelle.',
	'revcs-error-history-nosupplement' => 'Der ergänzende Kommentar ist in der Datenbanktabelle nicht vorhanden. Er wurde noch nicht erstellt oder wurde bereits gelöscht.',
	'revcs-error-history-revision-id' => 'Falsche Versionskennung.',
	'revcs-error-history-unuse' => 'Dieses Wiki speichert keine Versionsgeschichten ergänzender Kommentare.',
	'revcs-error-unexpected' => 'Es ist ein unerwarteter Fehler aufgetreten.',
	'revcs-hidehistory-desc' => 'Du kannst den gesamten Versionsgeschichteneintrag oder Teile davon verstecken.',
	'revcs-hidehistory-failure' => 'Die Sichtbarkeit des Versionsgeschichteneintrags des ergänzenden Kommentars konnte nicht geändert werden.',
	'revcs-hidehistory-heading' => 'Versionsgeschichte des ergänzenden Kommentars verstecken/einblenden',
	'revcs-hidehistory-legend' => 'Versionsgeschichte des ergänzenden Kommentars verstecken/einblenden',
	'revcs-hidehistory-present-supplement' => 'Der aktuelle ergänzende Kommentar $1',
	'revcs-hidehistory-reason' => 'Begründung des Versionsgeschichteneintrags verstecken',
	'revcs-hidehistory-row' => 'Den gesamten Versionsgeschichteneintrag verstecken',
	'revcs-hidehistory-submit' => 'Anwenden',
	'revcs-hidehistory-success' => 'Die Sichtbarkeit des Versionsgeschichteneintrags des ergänzenden Kommentars wurde erfolgreich geändert.',
	'revcs-hidehistory-supplement' => 'Ergänzenden Kommentar im Versionsgeschichteneintrag ausblenden',
	'revcs-hidehistory-suppress' => 'Daten nur Benutzern mit dem „suppressrevision“-Recht anzeigen lassen',
	'revcs-hidehistory-user' => 'Benutzername/IP-Adresse des Versionsgeschichteneintrags verstecken',
	'revcs-history-desc' => 'Es folgt eine Liste von Versionsgeschichteneinträgen des ergänzenden Kommentars.',
	'revcs-history-heading' => 'Versionsgeschichte des ergänzenden Kommentars $1',
	'revcs-history-heading-error' => 'Fehler in der Versionsgeschichte des ergänzenden Kommentars',
	'revcs-history-hidden-reason' => '(Begründung versteckt)',
	'revcs-history-hidden-supplement' => '(ergänzender Kommentar versteckt)',
	'revcs-history-hidden-user' => '(Benutzername versteckt)',
	'revcs-history-legend' => 'Versionsgeschichte des ergänzenden Kommentars',
	'revcs-history-rcsh-id' => 'Versionsgeschichtenkennung',
	'revcs-history-rcsh-reason' => 'Begründung',
	'revcs-list-desc' => 'Hier ist eine Liste aktueller Ergänzungskommentare.',
	'revcs-list-descending' => 'Liste in absteigender Reihenfolge',
	'revcs-list-extended-comparison' => 'Vergleichsoperation:',
	'revcs-list-extended-comparison-and-over' => 'Eigenschaften entsprechen dem Standard und darüber',
	'revcs-list-extended-comparison-and-under' => 'Eigenschaften entsprechen dem Standard und darunter',
	'revcs-list-extended-comparison-equal' => 'Eigenschaften sind gleich dem Standard',
	'revcs-list-extended-comparison-not-equal' => 'Eigenschaften sind nicht gleich dem Standard',
	'revcs-list-extended-comparison-over' => 'Eigenschaften sind über dem Standard',
	'revcs-list-extended-comparison-under' => 'Eigenschaften sind unter dem Standard',
	'revcs-list-extended-offset' => 'Vergleichsstandard:',
	'revcs-list-extended-property' => 'Vergleichseigenschaften:',
	'revcs-list-extended-supplement' => 'Bedingung der Ergänzungskommentare:',
	'revcs-list-extended-supplement-all' => 'alle',
	'revcs-list-extended-supplement-empty' => 'leer',
	'revcs-list-extended-supplement-notempty' => 'nicht leer',
	'revcs-list-heading' => 'Liste ergänzender Kommentare',
	'revcs-list-legend' => 'Liste von Ergänzungskommentaren',
	'revcs-list-limit' => 'Anzahl pro Seite:',
	'revcs-list-rcs-rev-id' => 'Versionskennung',
	'revcs-list-rcs-rev-id-edit' => 'Bearbeiten',
	'revcs-list-rcs-rev-id-log' => 'Logbuch',
	'revcs-list-rcs-supplement' => 'Ergänzungskommentar',
	'revcs-list-rcs-timestamp' => 'Bearbeitungsdatum und -zeit',
	'revcs-list-rcs-user-text' => 'Benutzer',
	'revcs-list-reset' => 'Zurücksetzen',
	'revcs-list-sort' => 'Sortierung:',
	'revcs-list-submit' => 'Zeigen',
	'revcs-log-hidehistory-reason-hidden' => 'Begründung versteckt',
	'revcs-log-hidehistory-reason-unhidden' => 'Begründung eingeblendet',
	'revcs-log-hidehistory-restricted' => 'Beschränkungen angewandt',
	'revcs-log-hidehistory-row-hidden' => 'gesamten Versionsgeschichteneintrag versteckt',
	'revcs-log-hidehistory-row-unhidden' => 'gesamten Versionsgeschichteneintrag eingeblendet',
	'revcs-log-hidehistory-supplement-hidden' => 'ergänzenden Kommentar versteckt',
	'revcs-log-hidehistory-supplement-unhidden' => 'ergänzenden Kommentar eingeblendet',
	'revcs-log-hidehistory-unrestricted' => 'entfernte Beschränkungen',
	'revcs-log-nosupplement' => '(keine)',
	'revcs-show-deletelinktext' => 'Ergänzungskommentar löschen',
	'revcs-show-editlinktext' => 'Ergänzungskommentar bearbeiten',
	'revcs-show-history-id' => 'Versionsgeschichtenkennung: $1 ($2)',
	'revcs-show-historylinktext' => 'Versionsgeschichte des ergänzenden Kommentars auflisten',
	'revcs-show-loglinktext' => 'das Änderungslogbuch der ergänzenden Kommentare',
	'revcs-show-no-db-row' => 'Der ergänzende Kommentar zu Version $1 wurde nicht gefunden.',
	'revcs-show-reason' => 'Begründung: $1',
	'revcs-show-revision' => 'Version: $1',
	'revcs-show-revision-id' => 'Versionskennung: $1 ($2)',
	'revcs-show-supplement-parsed' => 'Ergänzender Kommentar (geparst): $1',
	'revcs-show-supplement-raw' => 'Ergänzender Kommentar (roh): $1',
	'revcs-show-timestamp' => 'Bearbeitungsdatum und -zeit: $1 ($2)',
	'revcs-show-user' => 'Benutzer: $1 $2 (Benutzerkennung: $3)',
	'revcs-warning' => 'Warnung: $1',
	'right-supplementcomment' => 'Mit ergänzenden Kommentaren arbeiten',
	'right-supplementcomment-restricted' => 'Eingeschränkt mit ergänzenden Kommentaren arbeiten',
);

/** Zazaki (Zazaki)
 * @author Marmase
 */
$messages['diq'] = array(
	'revcs-list-extended-supplement-all' => 'pérın',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'revcs-error' => 'Eraro: $1',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Fitoschido
 * @author Ralgis
 */
$messages['es'] = array(
	'action-supplementcomment' => 'Utilizar comentarios adicionales',
	'action-supplementcomment-restricted' => 'Utilizar comentarios adicionales con acciones restringidas',
	'group-supplementcomment' => 'SupplementComment',
	'group-supplementcomment-member' => '{{GENDER:$1|SupplementComment}}',
	'grouppage-supplementcomment' => '{{ns:project}}:SupplementComment',
	'log-name-revisioncommentsupplement' => 'Registro de comentarios adicionales',
	'log-description-revisioncommentsupplement' => 'Registro de operaciones en {{#special:RevisionCommentSupplement}}.',
	'logentry-revisioncommentsupplement-create' => '$1 ha creado un comentario adicional, $6 de la revisión $4', # Fuzzy
	'logentry-revisioncommentsupplement-delete' => '$1 ha eliminado un comentario adicional, $5 de la revisión $4', # Fuzzy
	'logentry-revisioncommentsupplement-modify' => '$1 ha modificado un comentario adicional del $5 al $6  de la revisión $4', # Fuzzy
	'revisioncommentsupplement' => 'Revisión de comentario adicional',
	'revisioncommentsupplementlist' => 'Lista de Comentarios Adicionales',
	'revcs-desc' => 'Permite mostrar un comentario adicional en cada línea de revisión en las páginas de Historia.',
	'revcs-action-history-supplement' => '[Comentario adicional: $1]',
	'revcs-alert-exist-supplement' => 'existe el comentario adicional de la revisión.',
	'revcs-alert-norevision' => 'no existe la revisión en la tabla de revisión.', # Fuzzy
	'revcs-alert-revision-id' => '«$1» es un identificador de revisión incorrecto.',
	'revcs-alert-special-parameter' => 'Hay un error sobre el parámetro.',
	'revcs-alert-supplement-asterisk' => 'el comentario adicional en la entrada es asterisco.',
	'revcs-alert-supplement-empty' => 'el comentario complementario en la entrada está vacío.',
	'revcs-alert-supplement-zero' => 'el comentario adicional en la entrada es un cero.',
	'revcs-alert-supplement-same-as-summary' => 'el comentario adicional es el mismo texto que el resumen de la revisión.',
	'revcs-alert-supplement-same-as-supplement' => 'el comentario adicional es el mismo texto que el comentario adicional de la tabla de la base de datos.', # Fuzzy
	'revcs-delete-desc' => 'Puedes eliminar el comentario adicional de la tabla de la base de datos. Extension:RevisionCommentSupplement no proporciona la operación de restauración. Si deseas eliminar el borrado, tendrás que restaurar a partir de los registros.', # Fuzzy
	'revcs-delete-failure' => 'Falló al eliminar el comentario suplementario.',
	'revcs-delete-heading' => 'Eliminar el comentario suplementario',
	'revcs-delete-legend' => 'Eliminar el comentario suplementario',
	'revcs-delete-submit' => 'Eliminar el comentario suplementario',
	'revcs-delete-success' => 'Se eliminó el comentario suplementario correctamente.',
	'revcs-edit-desc' => 'Puedes definir comentarios adicionales, y los usuarios que tienen {{int:action-supplementcomment-restricted}}(supplementcomment-restricted) derechos pueden modificar los comentarios adicionales.',
	'revcs-edit-heading' => 'Editar comentarios suplementarios',
	'revcs-error' => 'Error: $1',
	'revcs-error-edit-denied' => 'no se permite guardar el comentario adicional.', # Fuzzy
	'revcs-error-unexpected' => 'ha ocurrido un error inesperado.',
	'revcs-list-desc' => 'Esta es una lista actual de comentarios adicionales.',
	'revcs-list-descending' => 'lista en orden descendente',
	'revcs-list-extended-comparison' => 'Operación de Comparación:',
	'revcs-list-extended-comparison-and-over' => 'Los campos de índice son iguales o mayores que la condición', # Fuzzy
	'revcs-list-extended-comparison-and-under' => 'Los campos de índice son menores o iguales que la condición', # Fuzzy
	'revcs-list-extended-comparison-equal' => 'Campos de Índice equivalen a la condición', # Fuzzy
	'revcs-list-extended-comparison-not-equal' => 'Campos de Índice no equivalen a la condición', # Fuzzy
	'revcs-list-extended-comparison-over' => 'Campos de Índice están sobre la condición', # Fuzzy
	'revcs-list-extended-comparison-under' => 'Campos de Índice están bajo la condición', # Fuzzy
	'revcs-list-extended-offset' => 'Cadena de comparación:', # Fuzzy
	'revcs-list-extended-supplement' => 'Condición de los comentarios adicionales:',
	'revcs-list-extended-supplement-all' => 'todos',
	'revcs-list-extended-supplement-empty' => 'vacío',
	'revcs-list-extended-supplement-notempty' => 'no está vacío',
	'revcs-list-legend' => 'Lista de comentarios adicionales',
	'revcs-list-limit' => 'Número por página:',
	'revcs-list-rcs-rev-id' => 'Id. de la modificación',
	'revcs-list-rcs-rev-id-edit' => 'Editar',
	'revcs-list-rcs-rev-id-log' => 'Registro',
	'revcs-list-rcs-supplement' => 'Comentario adicional:',
	'revcs-list-rcs-timestamp' => 'Fecha y hora de la edición',
	'revcs-list-rcs-user-text' => 'Usuario',
	'revcs-list-reset' => 'Restablecer',
	'revcs-list-sort' => 'Ordenar:',
	'revcs-list-submit' => 'Mostrar',
	'revcs-log-nosupplement' => '(ninguno)',
	'revcs-show-deletelinktext' => 'Borrar el comentario adicional',
	'revcs-show-editlinktext' => 'Editar el comentario adicional',
	'revcs-show-loglinktext' => 'el registro de cambios de comentarios adicionales',
	'revcs-show-no-db-row' => 'No se ha encontrado el comentario adicional de la revisión $1.',
	'revcs-show-revision' => 'Revisión: $1',
	'revcs-show-revision-id' => 'ID de la revisión:  $1  ($2)',
	'revcs-show-supplement-parsed' => 'Comentario analizado: $1',
	'revcs-show-supplement-raw' => 'Comentario en bruto: $1',
	'revcs-show-timestamp' => 'Editar la fecha y hora: $1 ($2)',
	'revcs-show-user' => 'Usuario: $1 $2 (Identificador ID del usuario: $3)',
	'revcs-warning' => 'Advertencia: $1',
	'right-supplementcomment' => 'Utilizar comentarios adicionales',
	'right-supplementcomment-restricted' => 'Utilizar comentarios adicionales con acciones restringidas',
);

/** Estonian (eesti)
 * @author Avjoska
 */
$messages['et'] = array(
	'revcs-list-extended-supplement-all' => 'kõik',
	'revcs-list-extended-supplement-empty' => 'tühi',
	'revcs-list-extended-supplement-notempty' => 'pole tühi',
);

/** Persian (فارسی)
 * @author Mjbmr
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'revcs-list-extended-supplement-all' => 'همه',
	'revcs-list-rcs-rev-id-edit' => 'ویرایش',
	'revcs-list-rcs-rev-id-log' => 'سیاهه',
	'revcs-list-rcs-user-text' => 'کاربر',
	'revcs-list-reset' => 'بازنشانی',
	'revcs-list-submit' => 'نمایش',
	'revcs-log-nosupplement' => '(هیچ کدام)',
	'revcs-show-revision' => 'نسخه: $1',
	'revcs-show-revision-id' => 'شناسه نسخه: $1 ($2)',
	'revcs-warning' => 'هشدار: $1',
);

/** Finnish (suomi)
 * @author Crt
 * @author Nedergard
 * @author Nike
 * @author Silvonen
 */
$messages['fi'] = array(
	'revcs-alert-norevision' => 'Muutos ei ole käytettävissä. Joko sitä ei ole vielä olemassa tai se on jo poistettu.',
	'revcs-error' => 'Virhe: $1',
	'revcs-list-extended-supplement-all' => 'kaikki',
	'revcs-list-rcs-rev-id-edit' => 'Muokkaa',
	'revcs-list-rcs-rev-id-log' => 'Loki',
	'revcs-list-rcs-user-text' => 'Käyttäjä',
	'revcs-list-submit' => 'Näytä',
	'revcs-show-reason' => 'Syy: $1',
	'revcs-show-revision' => 'Versio: $1',
	'revcs-warning' => 'Varoitus: $1',
);

/** French (français)
 * @author Gomoko
 * @author Nicolas NALLET
 * @author Peter17
 * @author Pierre Slamich
 * @author Tititou36
 * @author VIGNERON
 */
$messages['fr'] = array(
	'action-supplementcomment' => 'exploiter les commentaires supplémentaires',
	'action-supplementcomment-restricted' => 'exploiter les commentaires supplémentaires avec des actions restreintes',
	'group-supplementcomment' => 'SupplementComment',
	'group-supplementcomment-member' => '{{GENDER:$1|SupplementComment}}',
	'grouppage-supplementcomment' => '{{ns:project}}:SupplementComment',
	'log-name-revisioncommentsupplement' => 'Journal des commentaires additionnels',
	'log-description-revisioncommentsupplement' => 'Journal des opérations dans {{#special:RevisionCommentSupplement}}.',
	'logentry-revisioncommentsupplement-create' => '$1 {{GENDER:$2|a créé}} un commentaire additionnel, $6 sur la révision $4',
	'logentry-revisioncommentsupplement-create2' => '$1 {{GENDER:$2|a créé}} un commentaire additionnel sur la révision $4',
	'logentry-revisioncommentsupplement-delete' => '$1 {{GENDER:$2|a supprimé}} un commentaire additionnel, $5 sur la révision $4',
	'logentry-revisioncommentsupplement-delete2' => '$1 {{GENDER:$2|a supprimé}} un commentaire additionnel sur la révision $4',
	'logentry-revisioncommentsupplement-hidehistory' => '$1 {{GENDER:$2|a modifié}} la visibilité d’une entrée d’historique $7 de commentaire additionnel sur la révision $4: $9',
	'logentry-revisioncommentsupplement-modify' => '$1 {{GENDER:$2|a modifié}} un commentaire additionnel de $5 à $6 sur la révision $4',
	'logentry-revisioncommentsupplement-modify2' => '$1 {{GENDER:$2|a modifié}} un commentaire additionnel sur la révision $4',
	'logentry-suppress-revcommentsupplementhidehistory' => '$1 {{GENDER:$2|a modifié}} la visibilité d’une entrée d’historique $7 d’un commentaire additionnel sur la révision $4: $9',
	'revisioncommentsupplement' => 'Commentaire additionnel de la révision',
	'revisioncommentsupplementlist' => 'Liste de commentaires supplémentaires',
	'revcs-desc' => "Permet d'afficher un commentaire additionnel sur chaque ligne de révision dans les pages d'historique.",
	'revcs-action-history-supplement' => '[Supplément: $1]',
	'revcs-alert-exist-supplement' => 'le commentaire additionnel sur la révision existe dans la table de la base de données.',
	'revcs-alert-history-id' => '"$1" est un ID d’historique incorrect.',
	'revcs-alert-nohistory' => 'L’entrée d’historique n’existe pas dans la table de la base de données. Elle n’a pas encore été créée, ou a déjà été supprimée.',
	'revcs-alert-norevision' => 'La révision n’est pas disponible. Elle n’a pas encore été créée, ou a déjà été supprimée.',
	'revcs-alert-revision-id' => '"$1" est un mauvais ID de révision.',
	'revcs-alert-special-parameter' => 'Il y a erreur sur le paramètre.',
	'revcs-alert-supplement-asterisk' => "le commentaire additionnel sur la saisie est l'astérisque.",
	'revcs-alert-supplement-empty' => 'le commentaire additionnel sur la saisie est vide.',
	'revcs-alert-supplement-zero' => 'le commentaire supplémentaire à la saisie est un zéro.',
	'revcs-alert-supplement-same-as-summary' => 'le commentaire additionnel sur la saisie est identique au résumé de la révision.',
	'revcs-alert-supplement-same-as-supplement' => 'Le commentaire additionnel sur la saisie est identique à celui dans la table de la base de données.',
	'revcs-delete-desc' => 'Vous pouvez supprimer le commentaire additionnel de la table de la base de données.
L’extension RevisionCommentSupplement ne fournit pas d’opération d’annulation de suppression. Si vous voulez annuler une suppression, vous devrez la restaurer depuis les journaux ou les entrées d’historique.',
	'revcs-delete-failure' => 'Échec à la suppression du commentaire additionnel.',
	'revcs-delete-heading' => 'Supprimer le commentaire additionnel',
	'revcs-delete-legend' => 'Supprimer le commentaire additionnel',
	'revcs-delete-submit' => 'Supprimer le Commentaire additionnel',
	'revcs-delete-success' => 'Suppression du Commentaire additionnel réussie.',
	'revcs-edit-desc' => 'Vous pouvez mettre des commentaires additionnels, et les utilisateurs ayant le droit {{int:action-supplementcomment-restricted}}(supplementcomment-restricted) pourront modifier les commentaires additionnels.',
	'revcs-edit-heading' => 'Modifier les commentaires additionnels',
	'revcs-edit-legend' => 'Modifier les commentaires additionnels',
	'revcs-edit-preview' => 'Afficher l’aperçu',
	'revcs-edit-preview-reason' => 'Aperçu du motif : $1',
	'revcs-edit-preview-supplement' => 'Aperçu du commentaire additionnel : $1',
	'revcs-edit-reason' => 'Motif :',
	'revcs-edit-revision-id' => 'ID de révision :',
	'revcs-edit-save' => 'Enregistrer le commentaire additionnel',
	'revcs-edit-show' => 'Afficher le commentaire additionnel',
	'revcs-edit-supplement' => 'Commentaire additionnel :',
	'revcs-edit-written' => 'Le commentaire additionnel est enregistré.',
	'revcs-error' => 'Erreur: $1',
	'revcs-error-edit-denied' => 'Le commentaire additionnel n’a pas pu être enregistré.',
	'revcs-error-hidehistory-hidden-restricted-only' => 'La visibilité de l’entrée est seulement restreinte (supprimer, surveiller).',
	'revcs-error-hidehistory-hidden-same' => 'La visibilité sur l’entrée a la même valeur que dans la table de la base de données.',
	'revcs-error-history-nosupplement' => 'Le commentaire additionnel n’existe pas dans la table de la base de données. Il n’a pas encore été créé, ou a déjà été supprimé.',
	'revcs-error-history-revision-id' => 'L’ID de révision est erroné.',
	'revcs-error-history-unuse' => 'Ce wiki n’enregistre pas l’historique des commentaires additionnels.',
	'revcs-error-unexpected' => "une erreur inattendue s'est produite.",
	'revcs-hidehistory-desc' => 'Vous pouvez masquer tout ou partie des propriétés d’une entrée d’historique.',
	'revcs-hidehistory-failure' => 'Échec de fixation de la visibilité de l’entrée d’historique du commentaire additionnel.',
	'revcs-hidehistory-heading' => 'Masquer/démasquer l’historique de commentaire additionnel',
	'revcs-hidehistory-legend' => 'Masquer/démasquer l’historique de commentaire additionnel',
	'revcs-hidehistory-present-supplement' => 'Le commentaire additionnel actuel $1',
	'revcs-hidehistory-reason' => 'Masquer le motif de l’entrée d’historique',
	'revcs-hidehistory-row' => 'Masquer toute l’entrée d’historique',
	'revcs-hidehistory-submit' => 'Appliquer',
	'revcs-hidehistory-success' => 'Fixation de la visibilité de l’entrée d’historique du commentaire additionnel réussie.',
	'revcs-hidehistory-supplement' => 'Masquer le commentaire additionnel de l’entrée d’historique',
	'revcs-hidehistory-suppress' => 'Supprimer les données de tout le monde sauf les utilisateurs ayant le droit {{int:action-suppressrevision}} (suppressrevision)',
	'revcs-hidehistory-user' => 'Masquer le nom d’utilisateur/l’adresse IP de l’entrée d’historique',
	'revcs-history-desc' => 'Ceci liste les entrées d’historique du commentaire additionnel.',
	'revcs-history-heading' => 'Historique du commentaire additionnel $1',
	'revcs-history-heading-error' => 'Erreur de l’historique du commentaire additionnel',
	'revcs-history-hidden-reason' => '(motif masqué)',
	'revcs-history-hidden-supplement' => '(commentaire additionnel masqué)',
	'revcs-history-hidden-user' => '(nom d’utilisateur masqué)',
	'revcs-history-legend' => 'Historique du commentaire additionnel',
	'revcs-history-rcsh-id' => 'ID de l’historique',
	'revcs-history-rcsh-reason' => 'Motif',
	'revcs-list-desc' => 'Ceci liste les commentaires additionnels actuels.',
	'revcs-list-descending' => "liste dans l'ordre décroissant",
	'revcs-list-extended-comparison' => 'Opération de comparaison:',
	'revcs-list-extended-comparison-and-over' => 'Les propriétés sont le standard et plus',
	'revcs-list-extended-comparison-and-under' => 'Les propriétés sont le standard et moins',
	'revcs-list-extended-comparison-equal' => 'Les propriétés sont égales au standard',
	'revcs-list-extended-comparison-not-equal' => 'Les propriétés ne sont pas égales au standard',
	'revcs-list-extended-comparison-over' => 'Les propriétés sont supérieures au standard',
	'revcs-list-extended-comparison-under' => 'Les propriétés sont inférieures au standard',
	'revcs-list-extended-offset' => 'Standard de comparaison :',
	'revcs-list-extended-property' => 'Propriétés de comparaison :',
	'revcs-list-extended-supplement' => 'Condition de commentaires additionnels :',
	'revcs-list-extended-supplement-all' => 'tous',
	'revcs-list-extended-supplement-empty' => 'vide',
	'revcs-list-extended-supplement-notempty' => 'non vide',
	'revcs-list-heading' => 'Liste des commentaires additionnels',
	'revcs-list-legend' => 'Liste des commentaires additionnels',
	'revcs-list-limit' => 'Nombre par page:',
	'revcs-list-rcs-rev-id' => 'ID de révision',
	'revcs-list-rcs-rev-id-edit' => 'Modifier',
	'revcs-list-rcs-rev-id-log' => 'Journal',
	'revcs-list-rcs-supplement' => 'Commentaire additionnel',
	'revcs-list-rcs-timestamp' => 'Date et heure de modification',
	'revcs-list-rcs-user-text' => 'Utilisateur',
	'revcs-list-reset' => 'Remise à zéro',
	'revcs-list-sort' => 'Tri:',
	'revcs-list-submit' => 'Afficher',
	'revcs-log-hidehistory-reason-hidden' => 'motif masqué',
	'revcs-log-hidehistory-reason-unhidden' => 'motif démasqué',
	'revcs-log-hidehistory-restricted' => 'restrictions appliquées',
	'revcs-log-hidehistory-row-hidden' => 'toutes les entrées d’historique masquées',
	'revcs-log-hidehistory-row-unhidden' => 'toutes les entrées d’historique démasquées',
	'revcs-log-hidehistory-supplement-hidden' => 'commentaire additionnel masqué',
	'revcs-log-hidehistory-supplement-unhidden' => 'commentaire additionnel démasqué',
	'revcs-log-hidehistory-unrestricted' => 'restrictions supprimées',
	'revcs-log-nosupplement' => '(aucun)',
	'revcs-show-deletelinktext' => 'Supprimer le commentaire additionnel',
	'revcs-show-editlinktext' => 'Modifier le commentaire additionnel',
	'revcs-show-history-id' => 'ID de l’historique : $1 ($2)',
	'revcs-show-historylinktext' => 'Lister l’historique du commentaire additionnel',
	'revcs-show-loglinktext' => 'le journal de modification des commentaires additionnels',
	'revcs-show-no-db-row' => 'Commentaire additionnel non trouvé sur la révision $1.',
	'revcs-show-reason' => 'Motif : $1',
	'revcs-show-revision' => 'Révision: $1',
	'revcs-show-revision-id' => 'ID de la révision: $1 ($2)',
	'revcs-show-supplement-parsed' => 'Commentaire additionnel analysé : $1',
	'revcs-show-supplement-raw' => 'Commentaire additionnel brut : $1',
	'revcs-show-timestamp' => 'Date et heure de modification: $1 ($2)',
	'revcs-show-user' => 'Utilisateur: $1 $2 (ID utilisateur: $3)',
	'revcs-warning' => 'Attention: $1',
	'right-supplementcomment' => 'Exploiter les commentaires additionnels',
	'right-supplementcomment-restricted' => 'Exploiter les commentaires additionnels avec des actions limitées',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'action-supplementcomment' => 'administrar os comentarios suplementarios',
	'action-supplementcomment-restricted' => 'administrar os comentarios suplementarios con accións restrinxidas',
	'group-supplementcomment' => 'Comentarios suplementarios',
	'group-supplementcomment-member' => '{{GENDER:$1|comentarios suplementarios}}',
	'grouppage-supplementcomment' => '{{ns:project}}:Comentarios suplementarios',
	'log-name-revisioncommentsupplement' => 'Rexistro de comentarios suplementarios',
	'log-description-revisioncommentsupplement' => 'Rexistro de operacións en {{#special:RevisionCommentSupplement}}.',
	'logentry-revisioncommentsupplement-create' => '$1 {{GENDER:$2|creou}} un comentario suplementario, $6 na revisión $4',
	'logentry-revisioncommentsupplement-create2' => '$1 {{GENDER:$2|creou}} un comentario suplementario na revisión $4',
	'logentry-revisioncommentsupplement-delete' => '$1 {{GENDER:$2|borrou}} un comentario suplementario, $5 na revisión $4',
	'logentry-revisioncommentsupplement-delete2' => '$1 {{GENDER:$2|borrou}} un comentario suplementario na revisión $4',
	'logentry-revisioncommentsupplement-hidehistory' => '$1 {{GENDER:$2|modificou}} a visibilidade da entrada $7 do historial dun comentario suplementario na revisión $4: $9',
	'logentry-revisioncommentsupplement-modify' => '$1 {{GENDER:$2|modificou}} un comentario suplementario de $5 a $6 na revisión $4',
	'logentry-revisioncommentsupplement-modify2' => '$1 {{GENDER:$2|modificou}} un comentario suplementario na revisión $4',
	'logentry-suppress-revcommentsupplementhidehistory' => '$1 {{GENDER:$2|modificou}} a visibilidade da entrada $7 do historial dun comentario suplementario na revisión $4: $9',
	'revisioncommentsupplement' => 'Revisión dos comentarios suplementarios',
	'revisioncommentsupplementlist' => 'Lista de comentarios suplementarios',
	'revcs-desc' => 'Permite mostrar comentarios suplementarios en cada liña de revisión nas páxinas de historial.',
	'revcs-action-history-supplement' => '[Comentario suplementario: $1]',
	'revcs-alert-exist-supplement' => 'o comentario suplementario da revisión existe na táboa da base de datos.',
	'revcs-alert-history-id' => '"$1" é un identificador de historial erróneo.',
	'revcs-alert-nohistory' => 'A entrada do historial non existe na táboa da base de datos. Quere dicir que aínda non se creou ou foi borrada.',
	'revcs-alert-norevision' => 'A revisión non está dispoñible. Aínda non se creou ou foi borrada.',
	'revcs-alert-revision-id' => '"$1" é un identificador de revisión erróneo.',
	'revcs-alert-special-parameter' => 'Hai un erro no parámetro.',
	'revcs-alert-supplement-asterisk' => 'O comentario suplementario é un asterisco.',
	'revcs-alert-supplement-empty' => 'O comentario suplementario está baleiro.',
	'revcs-alert-supplement-zero' => 'O comentario suplementario é un cero de entrada.',
	'revcs-alert-supplement-same-as-summary' => 'O comentario suplementario é o mesmo texto có resumo de edición.',
	'revcs-alert-supplement-same-as-supplement' => 'O comentario suplementario é o mesmo texto có comentario suplementario da táboa da base de datos.',
	'revcs-delete-desc' => 'Pode borrar o comentario suplementario da táboa da base de datos. A extensión RevisionCommentSupplement non dispón da opción de restauración. Se quixese restaurar o comentario, tería que facelo desde os rexistros ou as entradas do historial.',
	'revcs-delete-failure' => 'Erro ao borrar o comentario suplementario.',
	'revcs-delete-heading' => 'Borrar o comentario suplementario',
	'revcs-delete-legend' => 'Borrar o comentario suplementario',
	'revcs-delete-submit' => 'Borrar o comentario suplementario',
	'revcs-delete-success' => 'O comentario suplementario borrouse correctamente.',
	'revcs-edit-desc' => 'Pode definir os comentarios suplementarios; e os usuarios que teñan o dereito de {{int:action-supplementcomment-restricted}}(supplementcomment-restricted) poden modificar os comentarios suplementarios.',
	'revcs-edit-heading' => 'Editar os comentarios suplementarios',
	'revcs-edit-legend' => 'Editar os comentarios suplementarios',
	'revcs-edit-preview' => 'Mostrar a vista previa',
	'revcs-edit-preview-reason' => 'Vista previa do motivo: $1',
	'revcs-edit-preview-supplement' => 'Vista previa do comentario suplementario: $1',
	'revcs-edit-reason' => 'Motivo:',
	'revcs-edit-revision-id' => 'ID da revisión:',
	'revcs-edit-save' => 'Gardar o comentario suplementario',
	'revcs-edit-show' => 'Mostrar o comentario suplementario',
	'revcs-edit-supplement' => 'Comentario suplementario:',
	'revcs-edit-written' => 'Gardouse o comentario suplementario.',
	'revcs-error' => 'Erro: $1',
	'revcs-error-edit-denied' => 'Non se puido gardar o comentario suplementario.',
	'revcs-error-hidehistory-hidden-restricted-only' => 'A visibilidade da entrada está só restrinxida (supresión, supervisión).',
	'revcs-error-hidehistory-hidden-same' => 'A visibilidade da entrada é o mesmo valor que o da táboa da base de datos.',
	'revcs-error-history-nosupplement' => 'O comentario suplementario non existe na táboa da base de datos. Quere dicir que aínda non se creou ou foi borrado.',
	'revcs-error-history-revision-id' => 'O ID da revisión é incorrecto.',
	'revcs-error-history-unuse' => 'Este wiki non garda o historial dos comentarios suplementarios.',
	'revcs-error-unexpected' => 'ocorreu un erro inesperado.',
	'revcs-hidehistory-desc' => 'Pode agochar todas ou parte das propiedades dunha entrada de historial.',
	'revcs-hidehistory-failure' => 'Erro ao establecer a visibilidade da entrada de historial do comentario suplementario.',
	'revcs-hidehistory-heading' => 'Agochar/Descubrir o historial do comentario suplementario',
	'revcs-hidehistory-legend' => 'Agochar/Descubrir o historial do comentario suplementario',
	'revcs-hidehistory-present-supplement' => 'O comentario suplementario actual $1',
	'revcs-hidehistory-reason' => 'Agochar o motivo na entrada de historial',
	'revcs-hidehistory-row' => 'Agochar toda a entrada de historial',
	'revcs-hidehistory-submit' => 'Aplicar',
	'revcs-hidehistory-success' => 'Estableceuse correctamente a visibilidade da entrada de historial do comentario suplementario.',
	'revcs-hidehistory-supplement' => 'Agochar o comentario suplementario na entrada de hisotrial',
	'revcs-hidehistory-suppress' => 'Suprimir os datos de todas as persoas, agás dos usuarios con dereitos de {{int:action-suppressrevision}} (suppressrevision)',
	'revcs-hidehistory-user' => 'Agochar o nome de usuario/enderezo IP na entrada de historial',
	'revcs-history-desc' => 'Velaquí están listadas as entradas de historial do comentario suplementario.',
	'revcs-history-heading' => 'Historial do comentario suplementario $1',
	'revcs-history-heading-error' => 'Erro do historial do comentario suplementario',
	'revcs-history-hidden-reason' => '(motivo agochado)',
	'revcs-history-hidden-supplement' => '(comentario suplementario agochado)',
	'revcs-history-hidden-user' => '(nome de usuario agochado)',
	'revcs-history-legend' => 'Historial do comentario suplementario',
	'revcs-history-rcsh-id' => 'ID do historial',
	'revcs-history-rcsh-reason' => 'Motivo',
	'revcs-list-desc' => 'Esta é unha lista dos comentarios suplementarios actuais.',
	'revcs-list-descending' => 'lista en orde descendente',
	'revcs-list-extended-comparison' => 'Operación de comparación:',
	'revcs-list-extended-comparison-and-over' => 'As propiedades son maiores ou iguais que o estándar',
	'revcs-list-extended-comparison-and-under' => 'As propiedades son menores ou iguais que o estándar',
	'revcs-list-extended-comparison-equal' => 'As propiedades son iguais que o estándar',
	'revcs-list-extended-comparison-not-equal' => 'As propiedades non son iguais que o estándar',
	'revcs-list-extended-comparison-over' => 'As propiedades son maiores que o estándar',
	'revcs-list-extended-comparison-under' => 'As propiedades son menores que o estándar',
	'revcs-list-extended-offset' => 'Estándar de comparación:',
	'revcs-list-extended-property' => 'Propiedades de comparación:',
	'revcs-list-extended-supplement' => 'Condición dos comentarios suplementarios:',
	'revcs-list-extended-supplement-all' => 'todos',
	'revcs-list-extended-supplement-empty' => 'baleiro',
	'revcs-list-extended-supplement-notempty' => 'non baleiro',
	'revcs-list-heading' => 'Lista de comentarios suplementarios',
	'revcs-list-legend' => 'Lista de comentarios suplementarios',
	'revcs-list-limit' => 'Número por páxina:',
	'revcs-list-rcs-rev-id' => 'ID da revisión',
	'revcs-list-rcs-rev-id-edit' => 'Editar',
	'revcs-list-rcs-rev-id-log' => 'Rexistro',
	'revcs-list-rcs-supplement' => 'Comentario suplementario',
	'revcs-list-rcs-timestamp' => 'Data e hora da edición',
	'revcs-list-rcs-user-text' => 'Usuario',
	'revcs-list-reset' => 'Restablecer',
	'revcs-list-sort' => 'Ordenar:',
	'revcs-list-submit' => 'Mostrar',
	'revcs-log-hidehistory-reason-hidden' => 'motivo agochado',
	'revcs-log-hidehistory-reason-unhidden' => 'motivo descuberto',
	'revcs-log-hidehistory-restricted' => 'aplicáronse restricións',
	'revcs-log-hidehistory-row-hidden' => 'todas as entradas do historial agochadas',
	'revcs-log-hidehistory-row-unhidden' => 'todas as entradas do historial descubertas',
	'revcs-log-hidehistory-supplement-hidden' => 'comentario suplementario agochado',
	'revcs-log-hidehistory-supplement-unhidden' => 'comentario suplementario descuberto',
	'revcs-log-hidehistory-unrestricted' => 'elimináronse restricións',
	'revcs-log-nosupplement' => '(ningún)',
	'revcs-show-deletelinktext' => 'Borrar o comentario suplementario',
	'revcs-show-editlinktext' => 'Editar o comentario suplementario',
	'revcs-show-history-id' => 'ID do historial: $1 ($2)',
	'revcs-show-historylinktext' => 'Listar o historial do comentario suplementario',
	'revcs-show-loglinktext' => 'o rexistro de cambios nos comentarios suplementarios',
	'revcs-show-no-db-row' => 'Non se atopou o comentario suplementario da revisión $1.',
	'revcs-show-reason' => 'Motivo: $1',
	'revcs-show-revision' => 'Revisión: $1',
	'revcs-show-revision-id' => 'ID da revisión: $1 ($2)',
	'revcs-show-supplement-parsed' => 'Comentario suplementario analizado: $1',
	'revcs-show-supplement-raw' => 'Comentario suplementario en bruto: $1',
	'revcs-show-timestamp' => 'Data e hora de edición: $1 ($2)',
	'revcs-show-user' => 'Usuario: $1 $2 (ID do usuario: $3)',
	'revcs-warning' => 'Atención: $1',
	'right-supplementcomment' => 'Administrar os comentarios suplementarios',
	'right-supplementcomment-restricted' => 'Administrar os comentarios suplementarios con accións restrinxidas',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'action-supplementcomment' => 'z wudospołnjowacymi komentarami dźěłać',
	'action-supplementcomment-restricted' => 'z wudospołnjowacymi komentarami z wobmjezowanymi akcijemi dźěłać',
	'group-supplementcomment' => 'Wudospołnjowace komentary',
	'group-supplementcomment-member' => '{{GENDER:$1|Wudospołnjowace komentary}}',
	'grouppage-supplementcomment' => '{{ns:project}}:Wudospołnjowace komentary',
	'log-name-revisioncommentsupplement' => 'Protokol wudospołnjowacych komentarow',
	'log-description-revisioncommentsupplement' => 'Protokol akcijow w {{#special:Wudospołnjenje wersijowych komentarow}}.',
	'logentry-revisioncommentsupplement-create' => '$1 je wudospołnjowacy komentar {{GENDER:$2|wutworił|wutworiła}}, $6 wersije $4',
	'logentry-revisioncommentsupplement-delete' => '$1 je wudospołnjowacy komentar {{GENDER:$2|zhašał|zhašała}}, $5 wersije $4',
	'logentry-revisioncommentsupplement-modify' => '$1 je wudospołnjowacy komentar wot $5 do $6 wersije $4 {{GENDER:$2|změnił|změniła}}',
	'revisioncommentsupplement' => 'Wudospołnjenje wersijoweho komentara',
	'revisioncommentsupplementlist' => 'Lisćina wudospołnjowacych komentarow',
	'revcs-desc' => 'Zmóžnja zwobraznjenje wudospołnjowacych komentarow za kóždu wersiju na stronach historije.',
	'revcs-action-history-supplement' => '[Wudospołnjowacy komentar: $1]',
	'revcs-alert-exist-supplement' => 'wudospołnjowacy komentar wersije eksistuje.',
	'revcs-alert-history-id' => '"$1" je wopačny ID historije.',
	'revcs-alert-norevision' => 'Wersija k dispoziciji njesteji. Njeje so hišće wutworiła abo je so hižo zhašała.',
	'revcs-alert-revision-id' => '"$1" je wopačny wersijowy ID.',
	'revcs-alert-special-parameter' => 'Je zmylk z parametrom',
	'revcs-alert-supplement-asterisk' => 'zapodaty wudospołnjowacy komentar ma hwěžku.',
	'revcs-alert-supplement-empty' => 'zapodaty wudospołnjowacy komentar je pródzny.',
	'revcs-alert-supplement-same-as-summary' => 'zapodaty wudospołnjowacy komentar je samsny znamješkowy rjećazk kaž zjeće wersije.',
	'revcs-alert-supplement-same-as-supplement' => 'Zapodaty wudospołnjowacy komentar je samsny znamješkowy rjećazk kaž jedyn wudospołnjowacy komentar w tabeli datoweje banki.',
	'revcs-delete-failure' => 'Wudospołnjowacy komentar njeda so zhašeć.',
	'revcs-delete-heading' => 'Wudospołnjowacy komentar zhašeć',
	'revcs-delete-legend' => 'Wudospołnjowacy komentar zhašeć',
	'revcs-delete-submit' => 'Wudospołnjowacy komentar zhašeć',
	'revcs-delete-success' => 'Zhašenje wudospołnjowaceho komentara bě wuspěšne.',
	'revcs-edit-heading' => 'Wudospołnjowace komentary wobdźěłać',
	'revcs-edit-legend' => 'Wudospołnjowace komentary wobdźěłać',
	'revcs-edit-preview' => 'Přehlad pokazać',
	'revcs-edit-preview-reason' => 'Přehlad přičiny: $1',
	'revcs-edit-preview-supplement' => 'Přehlad wudospołnjowaceho komentara: $1',
	'revcs-edit-reason' => 'Přičina:',
	'revcs-edit-revision-id' => 'Wersijowy ID:',
	'revcs-edit-save' => 'Wudospołnjowacy komentar składować',
	'revcs-edit-show' => 'Wudospołnjowacy komentar pokazać',
	'revcs-edit-supplement' => 'Wudospołnjowacy komentar:',
	'revcs-edit-written' => 'Wudospołnjowacy komentar je składowany.',
	'revcs-error' => 'Zmylk: $1',
	'revcs-error-edit-denied' => 'Wudospołnjowacy komentar njeda so składować.',
	'revcs-error-history-revision-id' => 'Wersijowy ID je wopak.',
	'revcs-error-unexpected' => 'njewočakowany zmylk wustupił.',
	'revcs-hidehistory-reason' => 'Přičinu zapiska historije schować',
	'revcs-hidehistory-row' => 'Cyły zapisk historije schować',
	'revcs-hidehistory-submit' => 'Nałožić',
	'revcs-history-heading' => 'Historija wudospołnjowaceho komentara $1',
	'revcs-history-heading-error' => 'Zmylk w historiji wudospołnjowaceho komentara',
	'revcs-history-hidden-reason' => '(přičina schowana)',
	'revcs-history-hidden-supplement' => '(wudospołnjowacy komentar schowany)',
	'revcs-history-hidden-user' => '(wužiwarske mjeno schowane)',
	'revcs-history-legend' => 'Historija wudospołnjowaceho komentara',
	'revcs-history-rcsh-id' => 'ID historije',
	'revcs-history-rcsh-reason' => 'Přičina',
	'revcs-list-desc' => 'To je lisćina wudospołnjowacych komentarow.',
	'revcs-list-descending' => 'Lisćina w spadowacym porjedźe',
	'revcs-list-extended-offset' => 'Standard přirunanja:',
	'revcs-list-extended-property' => 'Kajkosće přirunanja:',
	'revcs-list-extended-supplement' => 'Wuměnjenje wudospołnjowacych komentarow:',
	'revcs-list-extended-supplement-all' => 'wšě',
	'revcs-list-extended-supplement-empty' => 'prózdny',
	'revcs-list-extended-supplement-notempty' => 'njeprózdny',
	'revcs-list-heading' => 'Lisćina wudospołnjowacych komentarow',
	'revcs-list-legend' => 'Lisćina wudospołnjowacych komentarow',
	'revcs-list-limit' => 'Ličba na stronu:',
	'revcs-list-rcs-rev-id' => 'Wersijowy ID',
	'revcs-list-rcs-rev-id-edit' => 'Wobdźěłać',
	'revcs-list-rcs-rev-id-log' => 'Protokol',
	'revcs-list-rcs-supplement' => 'Wudospołnjowacy komentar',
	'revcs-list-rcs-timestamp' => 'Datum a čas wobdźěłenja',
	'revcs-list-rcs-user-text' => 'Wužiwar',
	'revcs-list-reset' => 'Wróćo stajić',
	'revcs-list-sort' => 'Sortěrowanje',
	'revcs-list-submit' => 'Pokazać',
	'revcs-log-hidehistory-reason-hidden' => 'přičina schowana',
	'revcs-log-hidehistory-reason-unhidden' => 'přičina pokazana',
	'revcs-log-hidehistory-restricted' => 'nałožene wobmjezowanja',
	'revcs-log-hidehistory-row-hidden' => 'cyły zapisk historije schowany',
	'revcs-log-hidehistory-row-unhidden' => 'cyły zapisk historije pokazany',
	'revcs-log-hidehistory-supplement-hidden' => 'wudospołnjowacy komentar schowany',
	'revcs-log-hidehistory-supplement-unhidden' => 'wudospołnjowacy komentar pokazany',
	'revcs-log-hidehistory-unrestricted' => 'wotstronjene wobmjezowanja',
	'revcs-log-nosupplement' => '(žadyn)',
	'revcs-show-deletelinktext' => 'Wudospołnjowacy komentar zhašeć',
	'revcs-show-editlinktext' => 'Wudospołnjowacy komentar wobdźěłać',
	'revcs-show-history-id' => 'ID historije: $1 ($2)',
	'revcs-show-historylinktext' => 'Historiju wudospołnjowaceho komentara nalistować',
	'revcs-show-loglinktext' => 'Protokol změnow wudospołnjowaceho komentara',
	'revcs-show-no-db-row' => 'Wudospołnjowacy komentar wersije $1 njeje so namakał.',
	'revcs-show-reason' => 'Přičina: $1',
	'revcs-show-revision' => 'Wersija: $1',
	'revcs-show-revision-id' => 'ID wersije: $1 ($2)',
	'revcs-show-supplement-parsed' => 'Parsowany komentar: $1',
	'revcs-show-supplement-raw' => 'Hruby komentar: $1',
	'revcs-show-timestamp' => 'Wobdźěłowanski datum a čas: $1 ($2)',
	'revcs-show-user' => 'Wužiwar: $1 $2 (ID wužiwarja: $3)',
	'revcs-warning' => 'Warnowanje: $1',
	'right-supplementcomment' => 'Z wudospołnjowacymi komentarami dźěłać',
	'right-supplementcomment-restricted' => 'Z wudospołnjowacymi komentarami z wobmjezowanymi akcijemi dźěłać',
);

/** Indonesian (Bahasa Indonesia)
 * @author පසිඳු කාවින්ද
 */
$messages['id'] = array(
	'revcs-list-extended-supplement-all' => 'semua',
	'revcs-list-extended-supplement-empty' => 'kosong',
	'revcs-list-rcs-rev-id-edit' => 'Sunting',
	'revcs-list-submit' => 'Tampilkan',
);

/** Italian (italiano)
 * @author Beta16
 * @author Darth Kule
 * @author පසිඳු කාවින්ද
 */
$messages['it'] = array(
	'revcs-error' => 'Errore: $1',
	'revcs-list-extended-supplement-all' => 'tutti',
	'revcs-list-extended-supplement-empty' => 'vuota',
	'revcs-list-rcs-rev-id-edit' => 'Modifica',
	'revcs-list-rcs-user-text' => 'Utente',
	'revcs-list-reset' => 'Reimposta',
	'revcs-list-sort' => 'Ordina per:',
	'revcs-list-submit' => 'Mostra',
	'revcs-log-nosupplement' => '(nessuno)',
	'revcs-show-revision' => 'Versione: $1',
	'revcs-show-revision-id' => 'ID versione: $1 ($2)',
	'revcs-show-timestamp' => 'Data e ora modifica: $1 ($2)',
	'revcs-show-user' => 'Utente: $1 $2 (ID utente: $3)',
	'revcs-warning' => 'Attenzione: $1',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'action-supplementcomment' => '補足コメントの操作',
	'action-supplementcomment-restricted' => '補足コメントへの制限された操作の実行',
	'group-supplementcomment' => 'コメント補足者',
	'group-supplementcomment-member' => '{{GENDER:$1|コメント補足者}}',
	'grouppage-supplementcomment' => '{{ns:project}}:コメント補足者',
	'log-name-revisioncommentsupplement' => '版補足コメント記録',
	'log-description-revisioncommentsupplement' => '{{#special:RevisionCommentSupplement}} での操作の記録です。',
	'logentry-revisioncommentsupplement-create' => '$1 が版 $4 の補足コメント$6を{{GENDER:$2|作成しました}}',
	'logentry-revisioncommentsupplement-create2' => '$1 が版 $4 の補足コメントを{{GENDER:$2|作成しました}}',
	'logentry-revisioncommentsupplement-delete' => '$1 が版 $4 の補足コメント$5を{{GENDER:$2|削除しました}}',
	'logentry-revisioncommentsupplement-delete2' => '$1 が版 $4 の補足コメントを{{GENDER:$2|削除しました}}',
	'logentry-revisioncommentsupplement-hidehistory' => '$1 が版 $4 の補足コメントの履歴 $7 の閲覧レベルを{{GENDER:$2|変更しました}}: $9',
	'logentry-revisioncommentsupplement-modify' => '$1 が版 $4 の補足コメント$5を$6に{{GENDER:$2|変更しました}}',
	'logentry-revisioncommentsupplement-modify2' => '$1 が版 $4 の補足コメントを{{GENDER:$2|変更しました}}',
	'logentry-suppress-revcommentsupplementhidehistory' => '$1 が版 $4 の補足コメントの履歴 $7 の閲覧レベルを{{GENDER:$2|変更しました}}: $9',
	'revisioncommentsupplement' => '版の補足コメントの操作',
	'revisioncommentsupplementlist' => '補足コメントの一覧',
	'revcs-desc' => '履歴ページで、それぞれの版に補足コメントを表示できるようにする',
	'revcs-action-history-supplement' => '[補足: $1]',
	'revcs-alert-exist-supplement' => '指定した版への補足コメントはデータベーステーブル内に存在します。',
	'revcs-alert-history-id' => '「$1」は正しくない履歴 ID です。',
	'revcs-alert-nohistory' => '指定した履歴はデータベーステーブル内に存在しません。まだ作成されていないか、既に削除されています。',
	'revcs-alert-norevision' => '指定した版は利用できません。まだ作成されていないか、既に削除されています。',
	'revcs-alert-revision-id' => '「$1」は正しくない版 ID です。',
	'revcs-alert-special-parameter' => '引数に誤りがあります。',
	'revcs-alert-supplement-asterisk' => '入力した補足コメントがアスタリスクです。',
	'revcs-alert-supplement-empty' => '補足コメントを入力していません。',
	'revcs-alert-supplement-zero' => '入力した補足コメントがゼロです。',
	'revcs-alert-supplement-same-as-summary' => '入力した補足コメントは、指定した版の要約と同じ内容です。',
	'revcs-alert-supplement-same-as-supplement' => '入力した補足コメントは、データベーステーブル内のものと同じ内容です。',
	'revcs-delete-desc' => 'データベーステーブルから補足コメントを削除できます。RevisionCommentSupplement 拡張機能は復帰操作を提供しません。削除された補足コメントを復帰させたい場合は、ログまたは履歴から復元する必要があります。',
	'revcs-delete-failure' => '補足コメントの削除に失敗しました。',
	'revcs-delete-heading' => '補足コメントの削除',
	'revcs-delete-legend' => '補足コメントの削除',
	'revcs-delete-submit' => '補足コメントを削除',
	'revcs-delete-success' => '補足コメントを削除しました。',
	'revcs-edit-desc' => '補足コメントを設定できることに加え、{{int:action-supplementcomment-restricted}} (supplementcomment-restricted) 権限がある利用者は補足コメントを変更できます。',
	'revcs-edit-heading' => '補足コメントの編集',
	'revcs-edit-legend' => '補足コメントの編集',
	'revcs-edit-preview' => 'プレビューを表示',
	'revcs-edit-preview-reason' => '理由のプレビュー: $1',
	'revcs-edit-preview-supplement' => '補足コメントのプレビュー: $1',
	'revcs-edit-reason' => '理由:',
	'revcs-edit-revision-id' => '版 ID:',
	'revcs-edit-save' => '補足コメントを保存',
	'revcs-edit-show' => '補足コメントを表示',
	'revcs-edit-supplement' => '補足コメント:',
	'revcs-edit-written' => '補足コメントを保存しました。',
	'revcs-error' => 'エラー: $1',
	'revcs-error-edit-denied' => '補足コメントを保存できませんでした。',
	'revcs-error-hidehistory-hidden-restricted-only' => '指定した閲覧レベルは、制限(suppress, oversight)のみです。',
	'revcs-error-hidehistory-hidden-same' => '指定した閲覧レベルは、データベーステーブル内のものと同じ値です。',
	'revcs-error-history-nosupplement' => '指定した補足コメントはデータベーステーブル内に存在しません。まだ作成されていないか、既に削除されています。',
	'revcs-error-history-revision-id' => '版 ID が正しくありません。',
	'revcs-error-history-unuse' => 'このウィキでは補足コメントの履歴を保存していません。',
	'revcs-error-unexpected' => '予期しないエラーが発生しました。',
	'revcs-hidehistory-desc' => '補足コメントの履歴項目の一部または全部を隠すことができます。',
	'revcs-hidehistory-failure' => '補足コメントの履歴項目の閲覧レベルの設定に失敗しました。',
	'revcs-hidehistory-heading' => '補足コメントの履歴項目の閲覧レベルの設定',
	'revcs-hidehistory-legend' => '補足コメントの履歴項目の閲覧レベルの設定',
	'revcs-hidehistory-present-supplement' => '現在の補足コメント $1',
	'revcs-hidehistory-reason' => '履歴項目の理由を隠す',
	'revcs-hidehistory-row' => '履歴項目全体を隠す',
	'revcs-hidehistory-submit' => '適用',
	'revcs-hidehistory-success' => '補足コメントの履歴項目の閲覧レベルを設定しました。',
	'revcs-hidehistory-supplement' => '履歴項目の補足コメントを隠す',
	'revcs-hidehistory-suppress' => '{{int:action-suppressrevision}} (suppressrevision) の権限がない利用者からデータを隠す',
	'revcs-hidehistory-user' => '履歴項目の利用者名を隠す',
	'revcs-history-desc' => '補足コメントの履歴の一覧です。',
	'revcs-history-heading' => '補足コメント $1 の履歴',
	'revcs-history-heading-error' => '補足コメントの履歴のエラー',
	'revcs-history-hidden-reason' => '(理由は隠されています)',
	'revcs-history-hidden-supplement' => '(補足コメントは隠されています)',
	'revcs-history-hidden-user' => '(利用者名は隠されています)',
	'revcs-history-legend' => '補足コメントの履歴',
	'revcs-history-rcsh-id' => '履歴 ID',
	'revcs-history-rcsh-reason' => '理由',
	'revcs-list-desc' => 'このページでは、現在の補足コメントを列挙します。',
	'revcs-list-descending' => '降順で列挙する',
	'revcs-list-extended-comparison' => '比較の演算:',
	'revcs-list-extended-comparison-and-over' => '事項が基準以上',
	'revcs-list-extended-comparison-and-under' => '事項が基準以下',
	'revcs-list-extended-comparison-equal' => '事項が基準に等しい',
	'revcs-list-extended-comparison-not-equal' => '事項が基準に等しくない',
	'revcs-list-extended-comparison-over' => '事項が基準を超過',
	'revcs-list-extended-comparison-under' => '事項が基準未満',
	'revcs-list-extended-offset' => '比較の基準:',
	'revcs-list-extended-property' => '比較する事項:',
	'revcs-list-extended-supplement' => '補足コメントの条件:',
	'revcs-list-extended-supplement-all' => 'すべて',
	'revcs-list-extended-supplement-empty' => '空',
	'revcs-list-extended-supplement-notempty' => '空ではない',
	'revcs-list-heading' => '補足コメントの一覧',
	'revcs-list-legend' => '補足コメントの一覧',
	'revcs-list-limit' => '1 ページあたりの件数:',
	'revcs-list-rcs-rev-id' => '版 ID',
	'revcs-list-rcs-rev-id-edit' => '編集',
	'revcs-list-rcs-rev-id-log' => '記録',
	'revcs-list-rcs-supplement' => '補足コメント',
	'revcs-list-rcs-timestamp' => '編集日時',
	'revcs-list-rcs-user-text' => '利用者',
	'revcs-list-reset' => 'リセット',
	'revcs-list-sort' => '並び順:',
	'revcs-list-submit' => '表示',
	'revcs-log-hidehistory-reason-hidden' => '理由の不可視化',
	'revcs-log-hidehistory-reason-unhidden' => '理由の可視化',
	'revcs-log-hidehistory-restricted' => '制限を適用',
	'revcs-log-hidehistory-row-hidden' => '履歴項目全体の不可視化',
	'revcs-log-hidehistory-row-unhidden' => '履歴項目全体の可視化',
	'revcs-log-hidehistory-supplement-hidden' => '補足コメントの不可視化',
	'revcs-log-hidehistory-supplement-unhidden' => '補足コメントの可視化',
	'revcs-log-hidehistory-unrestricted' => '制限を除去',
	'revcs-log-nosupplement' => '(なし)',
	'revcs-log-supplement' => '「$1」',
	'revcs-show-deletelinktext' => '補足コメントを削除',
	'revcs-show-editlinktext' => '補足コメントを編集',
	'revcs-show-history-id' => '履歴 ID: $1 ($2)',
	'revcs-show-historylinktext' => '補足コメントの履歴',
	'revcs-show-loglinktext' => '補足コメント変更記録',
	'revcs-show-no-db-row' => '版 $1 への補足コメントはありません。',
	'revcs-show-reason' => '理由: $1',
	'revcs-show-revision' => '版: $1',
	'revcs-show-revision-id' => '版 ID: $1 ($2)',
	'revcs-show-supplement-parsed' => '整形済み補足コメント: $1',
	'revcs-show-supplement-raw' => '生の補足コメント: $1',
	'revcs-show-timestamp' => '編集日時: $1 ($2)',
	'revcs-show-user' => '利用者: $1 $2 (利用者 ID: $3)',
	'revcs-warning' => '警告: $1',
	'right-supplementcomment' => '補足コメントを操作',
	'right-supplementcomment-restricted' => '補足コメントへの制限された操作を実行',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'revcs-error' => 'შეცდომა: $1',
	'revcs-list-extended-supplement-all' => 'ყველა',
	'revcs-list-extended-supplement-empty' => 'ცარიელი',
	'revcs-list-extended-supplement-notempty' => 'არ არის ცარიელი',
	'revcs-list-limit' => 'რაოდენობა გვერდზე:',
	'revcs-list-rcs-rev-id-edit' => 'რედაქტირება',
	'revcs-list-rcs-rev-id-log' => 'ჟურნალი',
	'revcs-list-rcs-user-text' => 'მომხმარებელი',
	'revcs-list-submit' => 'ჩვენება',
	'revcs-log-nosupplement' => '(არა)',
	'revcs-show-revision' => 'ვერსია: $1',
	'revcs-show-user' => 'მომხმარებელი: $1 $2 (მომხმარებლის ID: $3)',
	'revcs-warning' => 'გაფრთხილება: $1',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'action-supplementcomment' => '보충 덧글 동작',
	'action-supplementcomment-restricted' => '제한된 행동으로 보충 덧글 동작',
	'group-supplementcomment' => '덧글보충',
	'group-supplementcomment-member' => '{{GENDER:$1|덧글보충}}',
	'grouppage-supplementcomment' => '{{ns:project}}:덧글보충',
	'log-name-revisioncommentsupplement' => '보충 덧글 기록',
	'log-description-revisioncommentsupplement' => '{{#special:RevisionCommentSupplement}}의 동작 기록입니다.',
	'logentry-revisioncommentsupplement-create' => '$1 사용자가 $4 판에 대해 $6으로 보충 덧글을 {{GENDER:$2|만들었습니다}}',
	'logentry-revisioncommentsupplement-create2' => '$1 사용자가 $4 판에 대해 보충 덧글을 {{GENDER:$2|만들었습니다}}',
	'logentry-revisioncommentsupplement-delete' => '$1 사용자가 $4 판에 대해 $5으로 보충 덧글을 {{GENDER:$2|삭제했습니다}}',
	'logentry-revisioncommentsupplement-delete2' => '$1 사용자가 $4 판에 대해 보충 덧글을 {{GENDER:$2|삭제했습니다}}',
	'logentry-revisioncommentsupplement-hidehistory' => '$1 사용자가 $4 판에 대해 보충 덧글의 $7 역사 항목의 보이기 설정을 {{GENDER:$2|바꾸었습니다}}: $9',
	'logentry-revisioncommentsupplement-modify' => '$1 사용자가 $4 판에 대해 $5에서 $6으로 보충 덧글을 {{GENDER:$2|수정했습니다}}',
	'logentry-revisioncommentsupplement-modify2' => '$1 사용자가 $4 판에 대해 보충 덧글을 {{GENDER:$2|수정했습니다}}',
	'logentry-suppress-revcommentsupplementhidehistory' => '$1 사용자가 $4 판에 대해 보충 덧글의 $7 역사 항목의 보이기 설정을 {{GENDER:$2|바꾸었습니다}}: $9',
	'revisioncommentsupplement' => '판 덧글 보충',
	'revisioncommentsupplementlist' => '보충 덧글 목록',
	'revcs-desc' => '역사 문서의 각 판 줄에 보충 덧글을 보여주는 것을 허용합니다.',
	'revcs-action-history-supplement' => '[보충: $1]',
	'revcs-alert-exist-supplement' => '데이터베이스 테이블에 존재하는 판에 대한 보충 덧글입니다.',
	'revcs-alert-history-id' => '"$1"(은)는 잘못된 역사 ID입니다.',
	'revcs-alert-nohistory' => '역사 항목이 데이터베이스 테이블에 존재하지 않습니다. 아직 만들어지지 않았거나 이미 삭제되었습니다.',
	'revcs-alert-norevision' => '판이 판 테이블에 존재하지 않습니다. 아직 만들어지지 않았거나 이미 삭제되어 있습니다.',
	'revcs-alert-revision-id' => '"$1"(은)는 잘못된 판 ID입니다.',
	'revcs-alert-special-parameter' => '변수에 실수가 있습니다.',
	'revcs-alert-supplement-asterisk' => '입력한 보충 덧글은 별표입니다.',
	'revcs-alert-supplement-empty' => '입력한 보충 덧글은 비어 있습니다.',
	'revcs-alert-supplement-zero' => '입력한 보충 덧글은 영입니다.',
	'revcs-alert-supplement-same-as-summary' => '입력한 보충 덧글은 판 요약과 같은 문자열입니다.',
	'revcs-alert-supplement-same-as-supplement' => '입력한 보충 덧글은 데이터베이트 테이불에 있는 것과 같은 문자열입니다.',
	'revcs-delete-desc' => '데이터베이스 테이블에서 보충 덧글을 삭제할 수 있습니다. RevisionCommentSupplement 확장 기능은 삭제 취소 작업을 제공하지 않습니다. 만약 삭제 취소를 원하면 기록이나 역사 항목에서 복구하세요.',
	'revcs-delete-failure' => '보충 덧글을 삭제하는 데 실패했습니다.',
	'revcs-delete-heading' => '보충 덧글 삭제',
	'revcs-delete-legend' => '보충 덧글 삭제',
	'revcs-delete-submit' => '보충 덧글 삭제',
	'revcs-delete-success' => '보충 덧글을 삭제하는 데 성공했습니다.',
	'revcs-edit-desc' => '보충 덧글을 설정할 수 있으며 사용자는 보충 덧글을 수정할 수 있는 {{int:action-supplementcomment-restricted}}(supplementcomment-restricted) 권한을 가집니다.',
	'revcs-edit-heading' => '보충 덧글 편집',
	'revcs-edit-legend' => '보충 덧글 편집',
	'revcs-edit-preview' => '미리 보기',
	'revcs-edit-preview-reason' => '이유 미리 보기: $1',
	'revcs-edit-preview-supplement' => '보충 덧글 미리 보기: $1',
	'revcs-edit-reason' => '이유:',
	'revcs-edit-revision-id' => '판 ID:',
	'revcs-edit-save' => '보충 덧글 저장',
	'revcs-edit-show' => '보충 덧글 보기',
	'revcs-edit-supplement' => '보충 덧글:',
	'revcs-edit-written' => '보충 의견을 저장했습니다.',
	'revcs-error' => '오류: $1',
	'revcs-error-edit-denied' => '보충 덧글을 저장할 수 없습니다.',
	'revcs-error-hidehistory-hidden-restricted-only' => '입력한 보이기 설정은 제한(suppress, oversight)되어 있습니다.',
	'revcs-error-hidehistory-hidden-same' => '입력한 보이기 설정은 데이터 테이블의 값과 같은 값입니다.',
	'revcs-error-history-nosupplement' => '보충 덧글이 데이터베이스 테이블에 존재하지 않습니다. 아직 만들어지지 않았거나 이미 삭제되었습니다.',
	'revcs-error-history-revision-id' => '판 ID가 잘못되었습니다.',
	'revcs-error-history-unuse' => '이 위키는 보충 덧글의 역사를 저장하지 않습니다.',
	'revcs-error-unexpected' => '예기치 않은 오류가 발생했습니다.',
	'revcs-hidehistory-desc' => '역사 항목의 속성의 전부나 일부를 숨길 수 있습니다.',
	'revcs-hidehistory-failure' => '보충 의견의 역사 항목의 보이기 설정을 설정하는 데 실패했습니다.',
	'revcs-hidehistory-heading' => '보충 덧글의 숨기기/숨기기 취소 역사',
	'revcs-hidehistory-legend' => '보충 덧글의 숨기기/숨기기 취소 역사',
	'revcs-hidehistory-present-supplement' => '현재 보충 덧글 $1',
	'revcs-hidehistory-reason' => '역사 항목의 이유 숨기기',
	'revcs-hidehistory-row' => '전체 역사 항목 숨기기',
	'revcs-hidehistory-submit' => '적용',
	'revcs-hidehistory-success' => '보충 의견의 역사 항목의 보이기 설정을 설정하는 데 성공했습니다.',
	'revcs-hidehistory-supplement' => '역사 항목의 보충 덧글 숨기기',
	'revcs-hidehistory-suppress' => '{{int:action-suppressrevision}} (suppressrevision) 권한을 가진 사용자를 제외한 사용자로부터 데이터를 숨김',
	'revcs-hidehistory-user' => '역사 항목의 사용자 이름/IP 주소 숨기기',
	'revcs-history-desc' => '보충 덧글의 역사 항목을 나타냅니다.',
	'revcs-history-heading' => '$1 보충 덧글의 역사',
	'revcs-history-heading-error' => '보충 덧글의 역사의 오류',
	'revcs-history-hidden-reason' => '(이유 숨겨짐)',
	'revcs-history-hidden-supplement' => '(보충 덧글 숨겨짐)',
	'revcs-history-hidden-user' => '(사용자 이름 숨겨짐)',
	'revcs-history-legend' => '보충 덧글의 역사',
	'revcs-history-rcsh-id' => '역사 ID',
	'revcs-history-rcsh-reason' => '이유',
	'revcs-list-desc' => '현재 보충 덧글을 나타냅니다.',
	'revcs-list-descending' => '내림차순으로 나타내기',
	'revcs-list-extended-comparison' => '비교 연산:',
	'revcs-list-extended-comparison-and-over' => '속성은 표준 이상',
	'revcs-list-extended-comparison-and-under' => '속성은 표준 이하',
	'revcs-list-extended-comparison-equal' => '속성은 표준과 동일',
	'revcs-list-extended-comparison-not-equal' => '속성은 표준과 동일하지 않음',
	'revcs-list-extended-comparison-over' => '속성은 표준 초과',
	'revcs-list-extended-comparison-under' => '속성은 표준 미만',
	'revcs-list-extended-offset' => '비교의 표준:',
	'revcs-list-extended-property' => '비교할 속성:',
	'revcs-list-extended-supplement' => '보충 덧글의 조건:',
	'revcs-list-extended-supplement-all' => '모두',
	'revcs-list-extended-supplement-empty' => '비었음',
	'revcs-list-extended-supplement-notempty' => '비어 있지 않음',
	'revcs-list-heading' => '보충 덧글 목록',
	'revcs-list-legend' => '보충 덧글 목록',
	'revcs-list-limit' => '페이지당 개수:',
	'revcs-list-rcs-rev-id' => '판 ID',
	'revcs-list-rcs-rev-id-edit' => '편집',
	'revcs-list-rcs-rev-id-log' => '기록',
	'revcs-list-rcs-supplement' => '보충 덧글',
	'revcs-list-rcs-timestamp' => '편집한 날짜와 시간',
	'revcs-list-rcs-user-text' => '사용자',
	'revcs-list-reset' => '초기화',
	'revcs-list-sort' => '정렬 기준:',
	'revcs-list-submit' => '보기',
	'revcs-log-hidehistory-reason-hidden' => '이유 숨겨짐',
	'revcs-log-hidehistory-reason-unhidden' => '이유 숨기기 취소함',
	'revcs-log-hidehistory-restricted' => '제한 적용함',
	'revcs-log-hidehistory-row-hidden' => '전체 역사 항목 숨겨짐',
	'revcs-log-hidehistory-row-unhidden' => '전체 역사 항목 숨기기 취소함',
	'revcs-log-hidehistory-supplement-hidden' => '보충 덧글 숨겨짐',
	'revcs-log-hidehistory-supplement-unhidden' => '보충 덧글 숨기기 취소함',
	'revcs-log-hidehistory-unrestricted' => '제한 제거됨',
	'revcs-log-nosupplement' => '(없음)',
	'revcs-show-deletelinktext' => '보충 덧글 삭제',
	'revcs-show-editlinktext' => '보충 덧글 편집',
	'revcs-show-history-id' => '판 ID: $1 ($2)',
	'revcs-show-historylinktext' => '보충 덧글의 역사 목록',
	'revcs-show-loglinktext' => '보충 덧글 바뀜 기록',
	'revcs-show-no-db-row' => '$1 판에 대한 보충 덧글을 찾을 수 없습니다.',
	'revcs-show-reason' => '이유: $1',
	'revcs-show-revision' => '판: $1',
	'revcs-show-revision-id' => '판 ID: $1 ($2)',
	'revcs-show-supplement-parsed' => '구문 분석한 보충 덧글: $1',
	'revcs-show-supplement-raw' => '원래 보충 덧글: $1',
	'revcs-show-timestamp' => '편집한 날짜와 시간: $1 ($2)',
	'revcs-show-user' => '사용자: $1 $2 (사용자 ID: $3)',
	'revcs-warning' => '경고: $1',
	'right-supplementcomment' => '보충 덧글 동작',
	'right-supplementcomment-restricted' => '제한된 행동으로 보충 덧글 동작',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'revcs-alert-norevision' => 'di Väsjohn is nit en dä Tabäll met de Väsjohne', # Fuzzy
	'revcs-alert-special-parameter' => 'doh es ene Fähler met dämm Parrameeter',
	'revcs-edit-preview-reason' => 'Donn en Vörschou fom Jrond zeije', # Fuzzy
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'logentry-revisioncommentsupplement-delete' => '$1 {{GENDER:$2|huet}} eng zousätzlech Bemierkung $5 zu der Versioun $4 geläscht',
	'revisioncommentsupplementlist' => 'Lëscht vun den zousätzleche Bemierkungen',
	'revcs-desc' => 'Erméiglecht et eng zousätzlech Bemierkung fir all Versioun an der Lëscht vun de Versioune vun enger Säit ze weisen.',
	'revcs-alert-norevision' => "D'Versioun ass net disponibel. Se gouf nach net gemaach oder si gouf scho geläscht.",
	'revcs-alert-revision-id' => '"$1" ass eng falsch Versiouns ID.',
	'revcs-alert-special-parameter' => 'Beim Parameter ass e Feeler.',
	'revcs-delete-failure' => 'Déi zousätzlech Bemierkung konnt net geläscht ginn.',
	'revcs-delete-heading' => 'Déi zousätzlech Bemierkung läschen',
	'revcs-delete-legend' => 'Déi zousätzlech Bemierkung läschen',
	'revcs-delete-submit' => 'Déi zousätzlech Bemierkung läschen',
	'revcs-delete-success' => 'Déi zousätzlech Bemierkung gouf geläscht.',
	'revcs-edit-heading' => 'Zousätzlech Bemierkungen änneren',
	'revcs-edit-legend' => 'Zousätzlech Bemierkungen änneren',
	'revcs-edit-preview' => 'Kucken ouni ofzespäicheren',
	'revcs-edit-reason' => 'Grond:',
	'revcs-edit-revision-id' => 'Versioun ID:',
	'revcs-edit-save' => 'Déi zousätzlech Bemierkung späicheren',
	'revcs-edit-show' => 'Déi zousätzlech Bemierkung weisen',
	'revcs-edit-supplement' => 'Zousätzlech Bemierkung:',
	'revcs-edit-written' => 'Déi zousätzlech Bemierkung ass gespäichert.',
	'revcs-error' => 'Feeler: $1',
	'revcs-error-edit-denied' => 'Déi zousätzlech Bemierkung konnt net gespäichert ginn.',
	'revcs-error-history-revision-id' => "Versioun's ID ass falsch.",
	'revcs-error-unexpected' => 'En onerwaarte Feeler ass geschitt.',
	'revcs-hidehistory-submit' => 'Uwenden',
	'revcs-history-hidden-reason' => '(Grond verstoppt)',
	'revcs-history-hidden-user' => '(Benotzernumm verstoppt)',
	'revcs-history-rcsh-reason' => 'Grond',
	'revcs-list-desc' => "Op dëser Säit ass d'Lëscht mat den zousätzleche Bemierkungen.",
	'revcs-list-extended-supplement-all' => 'all',
	'revcs-list-extended-supplement-empty' => 'eidel',
	'revcs-list-extended-supplement-notempty' => 'net eidel',
	'revcs-list-heading' => 'Lëscht vun den zousätzleche Bemierkungen',
	'revcs-list-legend' => 'Lëscht vun den zousätzleche Bemierkungen',
	'revcs-list-limit' => 'Zuel pro Säit:',
	'revcs-list-rcs-rev-id' => 'Versioun ID',
	'revcs-list-rcs-rev-id-edit' => 'Änneren',
	'revcs-list-rcs-rev-id-log' => 'Logbuch',
	'revcs-list-rcs-supplement' => 'Zousätzlech Bemierkung',
	'revcs-list-rcs-timestamp' => 'Datum an Auerzäit vun der Ännerung',
	'revcs-list-rcs-user-text' => 'Benotzer',
	'revcs-list-reset' => 'Zrécksetzen',
	'revcs-list-sort' => 'Zortéierung:',
	'revcs-list-submit' => 'Weisen',
	'revcs-log-hidehistory-reason-hidden' => 'Grond verstoppt',
	'revcs-log-hidehistory-reason-unhidden' => 'Grond restauréiert',
	'revcs-log-hidehistory-supplement-hidden' => 'zousätzlech Bemierkung verstoppt',
	'revcs-log-nosupplement' => '(keen)',
	'revcs-show-deletelinktext' => 'Déi zousätzlech Bemierkung läschen',
	'revcs-show-editlinktext' => 'Déi zousätzlech Bemierkung änneren',
	'revcs-show-reason' => 'Grond: $1',
	'revcs-show-revision' => 'Versioun: $1',
	'revcs-show-revision-id' => 'Versioun ID: $1 ($2)',
	'revcs-show-timestamp' => 'Datum an Auerzäit vun der Ännerung: $1 ($2)',
	'revcs-show-user' => 'Benotzer: $1 $2 (Benotzer ID: $3)',
	'revcs-warning' => 'Opgepasst: $1',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'action-supplementcomment' => 'работење со додатни коментари',
	'action-supplementcomment-restricted' => 'работење со додатни коментари со ограничени дејства',
	'group-supplementcomment' => 'ДодадниКоментари',
	'group-supplementcomment-member' => '{{GENDER:$1|ДодатниКоментари}}',
	'grouppage-supplementcomment' => '{{ns:project}}:ДодатниКоментари',
	'log-name-revisioncommentsupplement' => 'Дневник на додатни коментари',
	'log-description-revisioncommentsupplement' => 'Дневник на работи со {{#special:ДодатниКоментариНаРевизии}}.',
	'logentry-revisioncommentsupplement-create' => '$1 {{GENDER:$2|направи}} додатен коментар, $6 на ревизијата $4',
	'logentry-revisioncommentsupplement-create2' => '$1 {{GENDER:$2|направи}} додатен коментар на ревизијата $4',
	'logentry-revisioncommentsupplement-delete' => '$1 {{GENDER:$2|избриша}} додатен коментар, $5 на ревизијата $4',
	'logentry-revisioncommentsupplement-delete2' => '$1 {{GENDER:$2|избриша}} додатен коментар на ревизијата $4',
	'logentry-revisioncommentsupplement-hidehistory' => '$1 {{GENDER:$2|ја измени}} видливоста на записот $7 од додатниот коментар во ревизијата $4: $9',
	'logentry-revisioncommentsupplement-modify' => '$1 {{GENDER:$2|измени}} додатен коментар од $5 на $6 од ревизијата $4',
	'logentry-revisioncommentsupplement-modify2' => '$1 {{GENDER:$2|измени}} додатен коментар на ревизијата $4',
	'logentry-suppress-revcommentsupplementhidehistory' => '$1 {{GENDER:$2|ја измени}} видливоста на записот $7 од додатниот коментар во ревизијата $4: $9',
	'revisioncommentsupplement' => 'Додатни коментари за ревизии',
	'revisioncommentsupplementlist' => 'Список на додатни коментари',
	'revcs-desc' => 'Овозможува приказ на додатни коментари во секој ред од ревизиите во историте на страниците.',
	'revcs-action-history-supplement' => '[Додатен коментар: $1]',
	'revcs-alert-exist-supplement' => 'додатниот коментар на ревизијата постои.',
	'revcs-alert-history-id' => '„$1“ е погрешна историска назнака.',
	'revcs-alert-nohistory' => 'Историскиот запис не фигурира во табелата на ревизии. Сè уште не е создадена, или можеби веќе е избришана.',
	'revcs-alert-norevision' => 'Ревизијата не е достапна бидејќи сè уште не е создадена или можеби е веќе избришана.',
	'revcs-alert-revision-id' => 'Назнаката „$1“ е погрешна.',
	'revcs-alert-special-parameter' => 'Има грешка со пераметарот.',
	'revcs-alert-supplement-asterisk' => 'внесениот додатен коментар е означен со ѕвездичка',
	'revcs-alert-supplement-empty' => 'внесениот додатен коментар е празен',
	'revcs-alert-supplement-zero' => 'внесениот додатен коментар е празен.',
	'revcs-alert-supplement-same-as-summary' => 'додатниот коментар е истата низа како описот на ревизијата.',
	'revcs-alert-supplement-same-as-supplement' => 'Додатниот коментар од вносот е истата низа како додатниот коментар во табелата од базата на податоци.',
	'revcs-delete-desc' => 'Можете да го избришете додатниот коментар од табелата на базата. Додатокот „RevisionCommentSupplement“ не допушта врќање на избришаното. Ако сакате да вратите нешто избришано, тоа ќе морате да го направите од дневниците или евиденцијата во историјата.',
	'revcs-delete-failure' => 'Не успеав да го избришам додатниот коментар.',
	'revcs-delete-heading' => 'Бришење на додатен коментар',
	'revcs-delete-legend' => 'Бришење на додатен коментар',
	'revcs-delete-submit' => 'Бришење на додатниот коментар',
	'revcs-delete-success' => 'Додатниот коментар е успешно избришан.',
	'revcs-edit-desc' => 'Можете да задавате додатни коментари, а корисниците што имаат {{int:action-supplementcomment-restricted}}(supplementcomment-restricted) право можат да ги менуваат додатните коментари.',
	'revcs-edit-heading' => 'Уредување на додатните коментари',
	'revcs-edit-legend' => 'Уредување на додатните коментари',
	'revcs-edit-preview' => 'Прик. преглед',
	'revcs-edit-preview-reason' => 'Преглед на причината: $1',
	'revcs-edit-preview-supplement' => 'Преглед на додатниот коментар: $1',
	'revcs-edit-reason' => 'Причина:',
	'revcs-edit-revision-id' => 'Назнака на ревизијата:',
	'revcs-edit-save' => 'Зачувај додат. ком.',
	'revcs-edit-show' => 'Прик. додат. ком.',
	'revcs-edit-supplement' => 'Додатен коментар:',
	'revcs-edit-written' => 'Додатниот коментар е зачуван.',
	'revcs-error' => 'Грешка: $1',
	'revcs-error-edit-denied' => 'Не можев да го зачувам додатниот коментар.',
	'revcs-error-hidehistory-hidden-restricted-only' => 'Видливоста при внесување е само ограничена (притајување, скривање).',
	'revcs-error-hidehistory-hidden-same' => 'Видливоста при внесување е со иста вредност како онаа во табелата во базата на податоци.',
	'revcs-error-history-nosupplement' => 'Додатникот коментар не фигурира во табелата во базата. Сè уште не е создадена, или можеби веќе е избришана.',
	'revcs-error-history-revision-id' => 'Назнаката на ревизијата е погрешна.',
	'revcs-error-history-unuse' => 'Ова вики не зачувува историја на додатни коментари.',
	'revcs-error-unexpected' => 'се појави неочекувана грешка.',
	'revcs-hidehistory-desc' => 'Можете да ги скриете сите својства на историскиот запис или само дел од нив.',
	'revcs-hidehistory-failure' => 'Не можев да ја зададам видливоста на историскиот запис на додани коментари.',
	'revcs-hidehistory-heading' => 'Скриј/прикажи историја на додатни коментари',
	'revcs-hidehistory-legend' => 'Скриј/прикажи историја на додатни коментари',
	'revcs-hidehistory-present-supplement' => 'Постојниот додатен коментар $1',
	'revcs-hidehistory-reason' => 'Скриј ја причината во историјата',
	'revcs-hidehistory-row' => 'Скриј го целиот запис во историјата',
	'revcs-hidehistory-submit' => 'Примени',
	'revcs-hidehistory-success' => 'Видливоста на историскиот запис на додани коментари е успешно зададена.',
	'revcs-hidehistory-supplement' => 'Скриј додатен коментар од историскиот запис',
	'revcs-hidehistory-suppress' => 'Притаи од сите освен корисници со правото на {{int:action-suppressrevision}} (пријајување ревизии)',
	'revcs-hidehistory-user' => 'Скриј корисничко име/IP-адреса од историскиот запис',
	'revcs-history-desc' => 'Тука се наведени историските записи на додатниот коментар.',
	'revcs-history-heading' => 'Историја на додетен коментар $1',
	'revcs-history-heading-error' => 'Грешка на историјата на додатен коментар',
	'revcs-history-hidden-reason' => '(причината е скриена)',
	'revcs-history-hidden-supplement' => '(скриен додатниот коментар)',
	'revcs-history-hidden-user' => '(сокриено корисничко име)',
	'revcs-history-legend' => 'Историја на додатни коментари',
	'revcs-history-rcsh-id' => 'Историска назнака',
	'revcs-history-rcsh-reason' => 'Причина',
	'revcs-list-desc' => 'Тука се наведени тековните додатни коментари.',
	'revcs-list-descending' => 'наведи по надолен редослед',
	'revcs-list-extended-comparison' => 'Операција за споредба:',
	'revcs-list-extended-comparison-and-over' => 'Својствата се стандардни и над тоа',
	'revcs-list-extended-comparison-and-under' => 'Својствата се стандардни и под тоа',
	'revcs-list-extended-comparison-equal' => 'Својствата се истоветни на стандардот',
	'revcs-list-extended-comparison-not-equal' => 'Својствата не се истоветни на стандардот',
	'revcs-list-extended-comparison-over' => 'Својствата се над стандардот',
	'revcs-list-extended-comparison-under' => 'Својствата се под стандардот',
	'revcs-list-extended-offset' => 'Стандард за споредба:',
	'revcs-list-extended-property' => 'Својства за споредба:',
	'revcs-list-extended-supplement' => 'Услов за додатните коментари:',
	'revcs-list-extended-supplement-all' => 'сите',
	'revcs-list-extended-supplement-empty' => 'празно',
	'revcs-list-extended-supplement-notempty' => 'непразно',
	'revcs-list-heading' => 'Список на додатни коментари',
	'revcs-list-legend' => 'Список на додатни коментари',
	'revcs-list-limit' => 'Број по страница:',
	'revcs-list-rcs-rev-id' => 'Назнака на ревизијата',
	'revcs-list-rcs-rev-id-edit' => 'Уреди',
	'revcs-list-rcs-rev-id-log' => 'Дневник',
	'revcs-list-rcs-supplement' => 'Додатен коментар',
	'revcs-list-rcs-timestamp' => 'Датум и време на уредување',
	'revcs-list-rcs-user-text' => 'Корисник',
	'revcs-list-reset' => 'Одново',
	'revcs-list-sort' => 'Подредување:',
	'revcs-list-submit' => 'Прикажи',
	'revcs-log-hidehistory-reason-hidden' => 'причината е скриена',
	'revcs-log-hidehistory-reason-unhidden' => 'причината е откриена',
	'revcs-log-hidehistory-restricted' => 'применети ограничувања',
	'revcs-log-hidehistory-row-hidden' => 'скриена цел историски запис',
	'revcs-log-hidehistory-row-unhidden' => 'откриена цел историски запис',
	'revcs-log-hidehistory-supplement-hidden' => 'скриен додатниот коментар',
	'revcs-log-hidehistory-supplement-unhidden' => 'откриен додатниот коментар',
	'revcs-log-hidehistory-unrestricted' => 'отстранети ограничувањата',
	'revcs-log-nosupplement' => '(нема)',
	'revcs-log-supplement' => '„$1“',
	'revcs-show-deletelinktext' => 'Бришење на додатен коментар',
	'revcs-show-editlinktext' => 'Уреди го додатниот коментар',
	'revcs-show-history-id' => 'Историска назнака: $1 ($2)',
	'revcs-show-historylinktext' => 'Список на историјатата на додатни коментари',
	'revcs-show-loglinktext' => 'дневникот на измени во додатните коментари',
	'revcs-show-no-db-row' => 'Не го пронајдов додатниот коментар на ревизијата $1.',
	'revcs-show-reason' => 'Причина: $1',
	'revcs-show-revision' => 'Ревизија: $1',
	'revcs-show-revision-id' => 'Назнака на ревизијата: $1 ($2)',
	'revcs-show-supplement-parsed' => 'Парсиран коментар: $1',
	'revcs-show-supplement-raw' => 'Сиров коментар: $1',
	'revcs-show-timestamp' => 'Датум и време на уредување: $1 ($2)',
	'revcs-show-user' => 'Корисник: $1 $2 (корисничка назнака: $3)',
	'revcs-warning' => 'Предупредување: $1',
	'right-supplementcomment' => 'Работење со додатни коментари',
	'right-supplementcomment-restricted' => 'Работење со додатни коментари со ограничени дејства',
);

/** Marathi (मराठी)
 * @author Ydyashad
 */
$messages['mr'] = array(
	'revcs-list-extended-supplement-all' => 'सर्व',
	'revcs-list-extended-supplement-empty' => 'रिकामा',
	'revcs-list-extended-supplement-notempty' => 'रीकामा नाही',
	'revcs-list-limit' => 'अंक प्रति पान',
);

/** Low German (Plattdüütsch)
 * @author Joachim Mos
 */
$messages['nds'] = array(
	'revcs-list-rcs-rev-id-edit' => 'Ännern',
	'revcs-list-rcs-user-text' => 'Bruker',
);

/** Nepali (नेपाली)
 * @author सरोज कुमार ढकाल
 */
$messages['ne'] = array(
	'revcs-edit-save' => 'पुरक टिप्पणीहरू सङ्ग्रह गर्ने',
	'revcs-edit-show' => 'पुरक टिप्पणीहरू देखाउने',
);

/** Dutch (Nederlands)
 * @author Konovalov
 * @author McDutchie
 * @author SPQRobin
 * @author Siebrand
 * @author Wiki13
 */
$messages['nl'] = array(
	'action-supplementcomment' => 'met extra opmerkingen te werken',
	'action-supplementcomment-restricted' => 'beperkt met extra opmerkingen te werken',
	'group-supplementcomment' => 'Aanvullende reacties',
	'group-supplementcomment-member' => '{{GENDER:$1|Aanvullende reacties}}',
	'grouppage-supplementcomment' => '{{ns:project}}:Aanvullende reacties',
	'log-name-revisioncommentsupplement' => 'Logboek aanvullende reacties',
	'log-description-revisioncommentsupplement' => 'Logboek met handelingen in {{#special:RevisionCommentSupplement}}.',
	'logentry-revisioncommentsupplement-create' => '$1 {{GENDER:$2|heeft}} een extra opmerking toegevoegd, $6 aan versie $4',
	'logentry-revisioncommentsupplement-create2' => '$1 {{GENDER:$2|heeft}} een extra opmerking toegevoegd aan versie $4',
	'logentry-revisioncommentsupplement-delete' => '$1 {{GENDER:$2|heeft}} een extra opmerking verwijderd, $5 van versie $4',
	'logentry-revisioncommentsupplement-delete2' => '$1 {{GENDER:$2|heeft}} een extra opmerking verwijderd van versie $4',
	'logentry-revisioncommentsupplement-hidehistory' => '$1 {{GENDER:$2|heeft}} de zichtbaarheid gewijzigd van geschiedenisregel $7 van een extra opmerking van versie $4: $9',
	'logentry-revisioncommentsupplement-modify' => '$1 {{GENDER:$2|heeft}} een extra opmerking gewijzigd van $5 naar $6 voor versie $4',
	'logentry-revisioncommentsupplement-modify2' => '$1 {{GENDER:$2|heeft}} een extra opmerking gewijzigd van versie $4',
	'logentry-suppress-revcommentsupplementhidehistory' => '$1 {{GENDER:$2|heeft}} de zichtbaarheid gewijzigd van geschiedenisregel $7 van een extra opmerking van versie $4: $9',
	'revisioncommentsupplement' => 'Extra opmerking bij versie',
	'revisioncommentsupplementlist' => 'Lijst met extra opmerkingen',
	'revcs-desc' => "Maakt het mogelijk een extra opmerking toe te voegen aan iedere regel op geschiedenispagina's",
	'revcs-action-history-supplement' => '[Toevoeging: $1]',
	'revcs-alert-exist-supplement' => 'De extra opmerking voor de versie bestaat in de databasetabel.',
	'revcs-alert-history-id' => '"$1" is een onjuist geschiedenisnummer.',
	'revcs-alert-nohistory' => 'De geschiedenisregel bestaat niet in de databasetabel. Deze is nog niet aangemaakt of is al verwijderd.',
	'revcs-alert-norevision' => 'De versie bestaat niet. Deze is nog niet aangemaakt of is al verwijderd.',
	'revcs-alert-revision-id' => '"$1" is een verkeerd versienummer.',
	'revcs-alert-special-parameter' => 'Er is een fout gemaakt voor de parameter.',
	'revcs-alert-supplement-asterisk' => 'De inhoud van de extra opmerking mag geen asterisk zijn.',
	'revcs-alert-supplement-empty' => 'De extra opmerking mag niet leeg zijn.',
	'revcs-alert-supplement-zero' => 'De inhoud van de extra opmerking mag geen nul (0) zijn.',
	'revcs-alert-supplement-same-as-summary' => 'De inhoud van de extra opmerking mag niet gelijk zijn aan de bewerkingssamenvatting van de versie.',
	'revcs-alert-supplement-same-as-supplement' => 'De inhoud van de extra opmerking mag niet gelijk zijn aan de inhoud van de databasetabel.',
	'revcs-delete-desc' => 'U kunt de extra opmerking uit de databasetabel verwijderen. De uitbreiding RevisionCommentSupplement biedt geen mogelijkheden om die handeling ongedaan te maken. Als u de handeling ongedaan wilt maken, moet u databasebackups gebruiken.',
	'revcs-delete-failure' => 'Het verwijderen van de extra opmerking is mislukt.',
	'revcs-delete-heading' => 'Extra opmerking verwijderen',
	'revcs-delete-legend' => 'Extra opmerking verwijderen',
	'revcs-delete-submit' => 'Extra opmerking verwijderen',
	'revcs-delete-success' => 'De extra opmerking is verwijderd.',
	'revcs-edit-desc' => 'U kunt extra opmerkingen instellen en gebruikers met de toegang {{int:action-supplementcomment-restricted}} (supplementcomment-restricted) kunnen extra opmerkingen wijzigen.',
	'revcs-edit-heading' => 'Extra opmerking bewerken',
	'revcs-edit-legend' => 'Extra opmerking bewerken',
	'revcs-edit-preview' => 'Voorvertoning weergeven',
	'revcs-edit-preview-reason' => 'Voorvertoning reden: $1',
	'revcs-edit-preview-supplement' => 'Voorvertoning van de extra opmerking: $1',
	'revcs-edit-reason' => 'Reden:',
	'revcs-edit-revision-id' => 'Versienummer:',
	'revcs-edit-save' => 'Extra opmerking opslaan',
	'revcs-edit-show' => 'Extra opmerking weergeven',
	'revcs-edit-supplement' => 'Extra opmerking:',
	'revcs-edit-written' => 'De extra opmerking is opgeslagen.',
	'revcs-error' => 'Fout: $1',
	'revcs-error-edit-denied' => 'De extra opmerking kon niet worden opgeslagen.',
	'revcs-error-hidehistory-hidden-restricted-only' => 'De zichtbaarheid voor invoer is alleen beperkt (onderdrukken, toezicht)',
	'revcs-error-hidehistory-hidden-same' => 'De zichtbaarheid van de invoer heeft dezelfde waarde als in de databasetabel.',
	'revcs-error-history-nosupplement' => 'De aanvullende opmerking bestaat niet in de databasetabel. Deze is nog niet aangemaakt of is al verwijderd.',
	'revcs-error-history-revision-id' => 'Het versienummer is onjuist.',
	'revcs-error-history-unuse' => 'Op deze wiki wordt de geschiedenis van extra opmerkingen niet opgeslagen.',
	'revcs-error-unexpected' => 'Er is een onverwachte fout opgetreden.',
	'revcs-hidehistory-desc' => 'U kunt de eigenschappen van een eerdere invoer geheel of gedeeltelijk verbergen.',
	'revcs-hidehistory-failure' => 'Instellen van de zichtbaarheid van de geschiedenis invoer van aanvullende opmerking mislukt.',
	'revcs-hidehistory-heading' => 'Geschiedenis van extra opmerking verbergen/weergeven',
	'revcs-hidehistory-legend' => 'Geschiedenis van extra opmerking verbergen/weergeven',
	'revcs-hidehistory-present-supplement' => 'De huidige extra opmerking $1',
	'revcs-hidehistory-reason' => 'Reden voor het verbergen van de geschiedenisregel',
	'revcs-hidehistory-row' => 'Volledige geschiedenisregel verbergen',
	'revcs-hidehistory-submit' => 'Toepassen',
	'revcs-hidehistory-success' => 'De zichtbaarheid van de geschiedenisregel voor de aanvullende opmerking is ingesteld.',
	'revcs-hidehistory-supplement' => 'Extra opmerking bij de geschiedenisregel verbergen',
	'revcs-hidehistory-suppress' => 'Gegevens onderdrukken van iedereen behalve gebruikers die het recht {{int:action-suppressrevision}} (<i lang="en">suppressrevision</i>) hebben.',
	'revcs-hidehistory-user' => 'Gebruikersnaam/IP-adres voor deze geschiedenisregel verbergen',
	'revcs-history-desc' => 'Hier wordt de geschiedenis weergegeven van de aanvullende opmerking.',
	'revcs-history-heading' => 'Geschiedenis van extra opmerking $1',
	'revcs-history-heading-error' => 'Fout in de geschiedenis van extra opmerking',
	'revcs-history-hidden-reason' => '(reden verborgen)',
	'revcs-history-hidden-supplement' => '(extra opmerkingen verborgen)',
	'revcs-history-hidden-user' => '(gebruikersnaam verborgen)',
	'revcs-history-legend' => 'Geschiedenis van extra opmerkingen',
	'revcs-history-rcsh-id' => 'Geschiedenisnummer',
	'revcs-history-rcsh-reason' => 'Reden',
	'revcs-list-desc' => 'Op dit moment zijn de onderstaande extra opmerkingen gemaakt.',
	'revcs-list-descending' => 'weergeven in aflopende volgorde',
	'revcs-list-extended-comparison' => 'Eigenschap van vergelijking:',
	'revcs-list-extended-comparison-and-over' => 'Eigenschappen zijn gelijk aan en meer dan de standaard',
	'revcs-list-extended-comparison-and-under' => 'Eigenschappen zijn gelijk aan en onder de standaard',
	'revcs-list-extended-comparison-equal' => 'Eigenschappen zijn gelijk aan de standaard',
	'revcs-list-extended-comparison-not-equal' => 'Eigenschappen zijn niet gelijk aan de standaard',
	'revcs-list-extended-comparison-over' => 'Eigenschappen zijn meer dan de standaard',
	'revcs-list-extended-comparison-under' => 'Eigenschappen zijn onder de standaard',
	'revcs-list-extended-offset' => 'Standaard van vergelijking:',
	'revcs-list-extended-property' => 'Eigenschappen van vergelijking:',
	'revcs-list-extended-supplement' => 'Voorwaarde van aanvullende opmerkingen:',
	'revcs-list-extended-supplement-all' => 'alle',
	'revcs-list-extended-supplement-empty' => 'leeg',
	'revcs-list-extended-supplement-notempty' => 'niet leeg',
	'revcs-list-heading' => 'Lijst met extra opmerkingen',
	'revcs-list-legend' => 'Lijst met extra opmerkingen',
	'revcs-list-limit' => 'Aantal per pagina:',
	'revcs-list-rcs-rev-id' => 'Versienummer',
	'revcs-list-rcs-rev-id-edit' => 'Bewerken',
	'revcs-list-rcs-rev-id-log' => 'Logboek',
	'revcs-list-rcs-supplement' => 'Extra opmerking',
	'revcs-list-rcs-timestamp' => 'Datum en tijd bewerkt',
	'revcs-list-rcs-user-text' => 'Gebruiker',
	'revcs-list-reset' => 'Opnieuw instellen',
	'revcs-list-sort' => 'Sorteren:',
	'revcs-list-submit' => 'Weergeven',
	'revcs-log-hidehistory-reason-hidden' => 'reden verborgen',
	'revcs-log-hidehistory-reason-unhidden' => 'reden zichtbaar gemaakt',
	'revcs-log-hidehistory-restricted' => 'heeft beperkingen toegepast',
	'revcs-log-hidehistory-row-hidden' => 'volledige geschiedenis verborgen',
	'revcs-log-hidehistory-row-unhidden' => 'volledige geschiedenis zichtbaar gemaakt',
	'revcs-log-hidehistory-supplement-hidden' => 'extra opmerking verborgen',
	'revcs-log-hidehistory-supplement-unhidden' => 'extra opmerking zichtbaar gemaakt',
	'revcs-log-hidehistory-unrestricted' => 'heeft beperkingen verwijderd',
	'revcs-log-nosupplement' => '(geen)',
	'revcs-show-deletelinktext' => 'Extra opmerking verwijderen',
	'revcs-show-editlinktext' => 'Extra opmerking bewerken',
	'revcs-show-history-id' => 'Geschiedenisnummer: $1 ($2)',
	'revcs-show-historylinktext' => 'Geschiedenis voor de extra opmerking weergeven',
	'revcs-show-loglinktext' => 'logboek voor de extra opmerking',
	'revcs-show-no-db-row' => 'De extra opmerking voor de versie $1 is niet aangetroffen.',
	'revcs-show-reason' => 'Reden: $1',
	'revcs-show-revision' => 'Versie: $1',
	'revcs-show-revision-id' => 'Versienummer: $1 ($2)',
	'revcs-show-supplement-parsed' => 'Verwerkte extra opmerking: $1',
	'revcs-show-supplement-raw' => 'Ruwe extra opmerking: $1',
	'revcs-show-timestamp' => 'Datum en tijd bewerkt: $1 ($2)',
	'revcs-show-user' => 'Gebruiker: $1 $2 (gebruikersnummer: $3)',
	'revcs-warning' => 'Waarschuwing: $1',
	'right-supplementcomment' => 'Met extra opmerkingen werken',
	'right-supplementcomment-restricted' => 'Beperkt met extra opmerkingen werken',
);

/** Polish (polski)
 * @author Chrumps
 * @author Matma Rex
 */
$messages['pl'] = array(
	'action-supplementcomment' => 'modyfikacji komentarzy uzupełniających',
	'action-supplementcomment-restricted' => 'modyfikacji komentarzy uzupełniających z ograniczonymi akcjami',
	'group-supplementcomment' => 'Uzupełniający komentarze',
	'group-supplementcomment-member' => '{{GENDER:$1|Uzupełniający|Uzupełniająca}} komentarze',
	'grouppage-supplementcomment' => '{{ns:project}}:Uzupełniający komentarze',
	'log-name-revisioncommentsupplement' => 'Rejestr komentarzy uzupełniających',
	'log-description-revisioncommentsupplement' => 'Rejestr operacji na {{#special:RevisionCommentSupplement}}.',
	'logentry-revisioncommentsupplement-create' => '$1  {{GENDER:$2|utworzył|utworzyła}} nowy komentarz uzupełniający do wersji $4 o treści "$6"',
	'logentry-revisioncommentsupplement-delete' => '$1 {{GENDER:$2|usunął|usunęła}} komentarz uzupełniający do wersji $4 o treści "$5"',
	'logentry-revisioncommentsupplement-modify' => '$1 {{GENDER:$2|zmodyfikował|zmodyfikowała}} komentarz uzupełniający do wersji $4: "$5" → "$6"',
	'revisioncommentsupplement' => 'Komentarze uzupełniające do wersji',
	'revisioncommentsupplementlist' => 'Lista komentarzy uzupełniających',
	'revcs-desc' => 'Umożliwia wyświetlenie komentarza uzupełniającego przy każdej wersji na stronach historii.',
	'revcs-action-history-supplement' => '[Uzupełnienie: $1]',
	'revcs-alert-exist-supplement' => 'komentarz uzupełniający do tej zmiany już istnieje.',
	'revcs-alert-norevision' => 'Ta wersja nie jest dostępna. Nie została utworzona lub została już usunięta.',
	'revcs-alert-revision-id' => '„$1” nie jest prawidłowym ID wersji.',
	'revcs-alert-special-parameter' => 'w parametrze jest błąd.',
	'revcs-alert-supplement-asterisk' => 'komentarz uzupełniający jest znakiem gwiazdki.',
	'revcs-alert-supplement-empty' => 'komentarz uzupełniający jest pusty.',
	'revcs-alert-supplement-zero' => 'komentarz uzupełniający jest liczbą zero.',
	'revcs-alert-supplement-same-as-summary' => 'komentarz uzupełniający jest taki sam jak opis tej edycji.',
	'revcs-alert-supplement-same-as-supplement' => 'komentarz uzupełniający jest taki sam jak uprzednio zapisany.', # Fuzzy
	'revcs-delete-failure' => 'Usuwanie komentarza uzupełniającego nie powiodło się.',
	'revcs-delete-heading' => 'Usuń komentarz uzupełniający',
	'revcs-delete-legend' => 'Usuń komentarz uzupełniający',
	'revcs-delete-submit' => 'Usuń komentarz uzupełniający',
	'revcs-delete-success' => 'Usunięto komentarz uzupełniający.',
	'revcs-edit-heading' => 'Edytuj komentarz uzupełniający',
	'revcs-error' => 'Błąd: $1',
	'revcs-error-edit-denied' => 'odmowa zapisania komentarza uzupełniającego.', # Fuzzy
	'revcs-error-unexpected' => 'wystąpił nieoczekiwany błąd.',
	'revcs-list-desc' => 'Wyświetla istniejące komentarze uzupełniające.',
	'revcs-list-descending' => 'sortuj malejąco',
	'revcs-list-extended-comparison' => 'Operacja porównania:',
	'revcs-list-extended-comparison-and-over' => 'Wartość pola większa lub równa', # Fuzzy
	'revcs-list-extended-comparison-and-under' => 'Wartość pola mniejsza lub równa', # Fuzzy
	'revcs-list-extended-comparison-equal' => 'Wartość pola równa', # Fuzzy
	'revcs-list-extended-comparison-not-equal' => 'Wartość pola nie równa', # Fuzzy
	'revcs-list-extended-comparison-over' => 'Wartość pola większa', # Fuzzy
	'revcs-list-extended-comparison-under' => 'Wartość pola mniejsza', # Fuzzy
	'revcs-list-extended-offset' => 'Ciąg do porównania:', # Fuzzy
	'revcs-list-extended-supplement' => 'Stan komentarzy uzupełniających:',
	'revcs-list-extended-supplement-all' => 'wszystkie',
	'revcs-list-extended-supplement-empty' => 'puste',
	'revcs-list-extended-supplement-notempty' => 'niepuste',
	'revcs-list-legend' => 'Lista komentarzy uzupełniających',
	'revcs-list-limit' => 'Liczba na stronie:',
	'revcs-list-rcs-rev-id' => 'ID wersji',
	'revcs-list-rcs-rev-id-edit' => 'Edytuj',
	'revcs-list-rcs-rev-id-log' => 'Log',
	'revcs-list-rcs-supplement' => 'Komentarz uzupełniający',
	'revcs-list-rcs-timestamp' => 'Data i czas edycji',
	'revcs-list-rcs-user-text' => 'Użytkownik',
	'revcs-list-reset' => 'Resetuj',
	'revcs-list-sort' => 'Sortowanie:',
	'revcs-list-submit' => 'Pokaż',
	'revcs-log-nosupplement' => '(brak)',
	'revcs-show-deletelinktext' => 'Usuń komentarz uzupełniający',
	'revcs-show-editlinktext' => 'Edytuj komentarz uzupełniający',
	'revcs-show-loglinktext' => 'rejestr zmian komentarza uzupełniającego',
	'revcs-show-no-db-row' => 'Nie znaleziono komentarza uzupełniającego dla wersji $1.',
	'revcs-show-revision' => 'Wersja: $1',
	'revcs-show-revision-id' => 'ID wersji: $1 ($2)',
	'revcs-show-supplement-parsed' => 'Komentarz uzupełniający (przetworzony): $1',
	'revcs-show-supplement-raw' => 'Komentarz uzupełniający (nieprzetworzony): $1',
	'revcs-show-timestamp' => 'Data i czas edycji: $1 ($2)',
	'revcs-show-user' => 'Użytkownik: $1 $2 (ID: $3)',
	'revcs-warning' => 'Uwaga: $1',
	'right-supplementcomment' => 'Modyfikacja komentarzy uzupełniających',
	'right-supplementcomment-restricted' => 'Modyfikacja komentarzy uzupełniających z ograniczonymi akcjami',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'action-supplementcomment' => 'sfruté ij coment suplementar',
	'action-supplementcomment-restricted' => "sfruté ij coment suplementar con dj'assion limità",
	'group-supplementcomment' => 'SupplementComment',
	'group-supplementcomment-member' => '{{GENDER:$1|SupplementComment}}',
	'grouppage-supplementcomment' => '{{ns:project}}:SupplementComment',
	'log-name-revisioncommentsupplement' => 'Registr dij Coment Suplementar',
	'log-description-revisioncommentsupplement' => "Registr dj'operassion an {{#special:RevisionCommentSupplement}}.",
	'logentry-revisioncommentsupplement-create' => "$1 a l'ha creà un coment suplementar, $6 an sla revision $4", # Fuzzy
	'logentry-revisioncommentsupplement-delete' => "$1 a l'ha scancelà un coment suplementar, $5 an sla revision $4", # Fuzzy
	'logentry-revisioncommentsupplement-modify' => "$1 a l'ha modificà un coment suplementar da $5 a $6 an sla revision $4", # Fuzzy
	'revisioncommentsupplement' => 'Coment suplementar ëd la revision',
	'revisioncommentsupplementlist' => 'Lista ëd Coment Suplementar',
	'revcs-desc' => 'A përmët ëd mostré un coment suplementar ansima a minca linia ëd revision ant le pàgine dë Stòria.',
	'revcs-action-history-supplement' => '[Suplement: $1]',
	'revcs-alert-exist-supplement' => 'ël coment suplementar an sla revision a esist ant la tàula ëd la base ëd dàit.',
	'revcs-alert-norevision' => 'la revision a esist pa ant la tàula ëd le revision.', # Fuzzy
	'revcs-alert-revision-id' => "«$1» a l'é n'ID ëd revision pa bon.",
	'revcs-alert-special-parameter' => "A-i é n'eror a propòsit dël paràmetr.",
	'revcs-alert-supplement-asterisk' => "ël coment suplementar an sl'anseriment a l'é n'asterisch.",
	'revcs-alert-supplement-empty' => "ël coment suplementar an sl'anseriment a l'é veuid.",
	'revcs-alert-supplement-zero' => "ël coment suplementar an sl'anseriment a l'é un zero.",
	'revcs-alert-supplement-same-as-summary' => "ël coment suplementar an sl'anseriment a l'é la midema stringa dël resumé dla revision.",
	'revcs-alert-supplement-same-as-supplement' => "ël coment suplementar an sl'anseriment a l'é la midema stringa dël coment suplementar ant la tàula dla base ëd dàit.", # Fuzzy
	'revcs-delete-desc' => "A peul ëscancelé ël coment suplementar da la tàula dla base ëd dàit.
Extension:RevisionCommentSupplement a dà pa d'operassion ëd riprìstin. S'a vorèissa ripristiné, a dev ripristiné dai registr.", # Fuzzy
	'revcs-delete-failure' => 'Falì a scancelé ël Coment Suplementar.',
	'revcs-delete-heading' => 'Scancelé ël Coment Suplementar',
	'revcs-delete-legend' => 'Scancelé ël Coment Suplementar',
	'revcs-delete-submit' => 'Scancelé ël Coment Suplementar',
	'revcs-delete-success' => 'Scancelà da bin ël Coment Suplementar.',
	'revcs-edit-desc' => "It peule amposté dij coment suplementar, e j'utent ch'a l'han ij drit {{int:action-supplementcomment-restricted}}(supplementcomment-restricted) a peulo modifiché ij coment suplementar",
	'revcs-edit-heading' => 'Modifiché ij Coment Suplementar',
	'revcs-error' => 'Eror: $1',
	'revcs-error-edit-denied' => 'arfud ëd salvé ël coment suplementar.', # Fuzzy
	'revcs-error-unexpected' => "a l'é capitaje n'eror pa spetà.",
	'revcs-list-desc' => 'Sòn a lista ij Coment Suplementar corent.',
	'revcs-list-descending' => 'lista an órdin calant',
	'revcs-list-extended-comparison' => 'Operassion ëd Comparassion:',
	'revcs-list-extended-comparison-and-over' => "Ij camp d'ìndes a son superior o uguaj a la condission", # Fuzzy
	'revcs-list-extended-comparison-and-under' => "Ij camp d'Ìndes a son pì cit o uguaj a la condission", # Fuzzy
	'revcs-list-extended-comparison-equal' => "Ij camp d'Ìndes a son uguaj a la condission", # Fuzzy
	'revcs-list-extended-comparison-not-equal' => "Ij camp d'Ìndes a son diferent da la condission", # Fuzzy
	'revcs-list-extended-comparison-over' => "Ij camp d'Ìndes a son superior a la condission", # Fuzzy
	'revcs-list-extended-comparison-under' => "Ij camp d'Ìndes a son pi cit che la condission", # Fuzzy
	'revcs-list-extended-offset' => 'Stringa ëd Comparassion:', # Fuzzy
	'revcs-list-extended-supplement' => 'Condission dij Coment Suplementar:',
	'revcs-list-extended-supplement-all' => 'tut',
	'revcs-list-extended-supplement-empty' => 'veuid',
	'revcs-list-extended-supplement-notempty' => 'pa veuid',
	'revcs-list-legend' => 'Lista dij Coment Suplementar',
	'revcs-list-limit' => 'Nùmer për pàgina:',
	'revcs-list-rcs-rev-id' => 'ID ëd revision',
	'revcs-list-rcs-rev-id-edit' => 'Modìfica',
	'revcs-list-rcs-rev-id-log' => 'Registr',
	'revcs-list-rcs-supplement' => 'Coment Suplementar',
	'revcs-list-rcs-timestamp' => 'Dàita e ora ëd modìfica',
	'revcs-list-rcs-user-text' => 'Utent',
	'revcs-list-reset' => 'Spian-a',
	'revcs-list-sort' => 'Ordiné:',
	'revcs-list-submit' => 'Smon',
	'revcs-log-nosupplement' => '(gnun)',
	'revcs-show-deletelinktext' => 'Scancelé ël Coment Suplementar',
	'revcs-show-editlinktext' => 'Modìfica ël Coment Suplementar',
	'revcs-show-loglinktext' => 'ël registr ëd modìfica dij Coment Suplementar',
	'revcs-show-no-db-row' => 'Coment suplementar nen trovà an sla revision $1.',
	'revcs-show-revision' => 'Revision: $1',
	'revcs-show-revision-id' => 'ID ëd la revision: $1 ($2)',
	'revcs-show-supplement-parsed' => 'Coment suplementar analisà: $1',
	'revcs-show-supplement-raw' => 'Coment Suplementar sbossà: $1',
	'revcs-show-timestamp' => 'Dàita e ora ëd modìfica: $1 ($2)',
	'revcs-show-user' => 'Utent: $1 $2 (ID Utent: $3)',
	'revcs-warning' => 'Avis: $1',
	'right-supplementcomment' => 'Sfruté ij coment suplementar',
	'right-supplementcomment-restricted' => "Agì an sij coment suplementar con dj'assion limità",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'revcs-log-nosupplement' => '(هېڅ)',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Cainamarques
 * @author Luckas
 * @author Luckas Blade
 */
$messages['pt-br'] = array(
	'revcs-delete-heading' => 'Apagar o comentário suplementar',
	'revcs-delete-legend' => 'Apagar o comentário suplementar',
	'revcs-delete-submit' => 'Apagar o comentário suplementar',
	'revcs-delete-success' => 'O comentário suplementar foi apagado com sucesso.',
	'revcs-edit-preview' => 'Mostrar previsão',
	'revcs-edit-reason' => 'Motivo:',
	'revcs-edit-revision-id' => 'ID da revisão:',
	'revcs-edit-save' => 'Salvar o comentário suplementar',
	'revcs-edit-show' => 'Exibir o comentário suplementar',
	'revcs-edit-supplement' => 'Comentário suplementar:',
	'revcs-error' => 'Erro: $1',
	'revcs-error-history-revision-id' => 'O ID da revisão está incorreto.',
	'revcs-error-history-unuse' => 'Esta wiki não salva o histórico dos comentários suplementares',
	'revcs-error-unexpected' => 'Ocorreu um erro inesperado.',
	'revcs-hidehistory-submit' => 'Aplicar',
	'revcs-history-rcsh-id' => 'ID do histórico',
	'revcs-history-rcsh-reason' => 'Motivo',
	'revcs-list-desc' => 'Esta página lista os comentários suplementares atuais.',
	'revcs-list-descending' => 'Listar em ordem descendente',
	'revcs-list-extended-comparison' => 'Operação de comparação:',
	'revcs-list-extended-supplement-all' => 'todos',
	'revcs-list-extended-supplement-empty' => 'vazio',
	'revcs-list-rcs-rev-id' => 'ID da revisão',
	'revcs-list-rcs-rev-id-edit' => 'Editar',
	'revcs-list-rcs-rev-id-log' => 'Registro',
	'revcs-list-rcs-supplement' => 'Comentário suplementar',
	'revcs-list-rcs-timestamp' => 'Editar data e hora',
	'revcs-list-rcs-user-text' => 'Usuário',
	'revcs-list-reset' => 'Reiniciar',
	'revcs-list-sort' => 'Ordenar por:',
	'revcs-list-submit' => 'Exibir',
	'revcs-log-hidehistory-reason-hidden' => 'Motivo oculto',
	'revcs-log-hidehistory-supplement-hidden' => 'comentário suplementar oculto',
	'revcs-log-hidehistory-unrestricted' => 'restrições removidas',
	'revcs-log-nosupplement' => '(nenhum)',
	'revcs-show-deletelinktext' => 'Apagar o comentário suplementar',
	'revcs-show-editlinktext' => 'Editar o comentário suplementar',
	'revcs-show-history-id' => 'ID do histórico: $1 ($2)',
	'revcs-show-historylinktext' => 'Listar o histórico do comentário suplementar',
	'revcs-show-loglinktext' => 'o registro de alterações de comentário suplementar',
	'revcs-show-no-db-row' => 'Não foi encontrado o comentário suplementar da revisão $1.',
	'revcs-show-reason' => 'Motivo: $1',
	'revcs-show-revision' => 'Revisão: $1',
	'revcs-show-revision-id' => 'ID da revisão: $1 ($2)',
	'revcs-show-supplement-parsed' => 'Comentário suplementar analisado: $1',
	'revcs-show-timestamp' => 'Editar data e hora: $1 ($2)',
	'revcs-show-user' => 'Usuário: $1 $2 (ID do Usuário: $3)',
	'revcs-warning' => 'Aviso: $1',
	'right-supplementcomment' => 'Administrar os comentários suplementares',
	'right-supplementcomment-restricted' => 'Administrar os comentários suplementares com ações restritas',
);

/** Romanian (română)
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'revcs-list-submit' => 'Arată',
	'revcs-warning' => 'Avertisment: $1',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'group-supplementcomment' => 'CommendeSupplmendare',
	'group-supplementcomment-member' => '{{GENDER:$1|CommendeSupplemendare}}',
	'grouppage-supplementcomment' => '{{ns:project}}:CommendeSupplemendate',
	'log-name-revisioncommentsupplement' => 'Archivije de le commende supplemendare',
	'revcs-action-history-supplement' => '[Supplemende: $1]',
	'revcs-edit-preview' => "Vide l'andeprime",
	'revcs-edit-reason' => 'Mutive:',
	'revcs-edit-revision-id' => "ID d'a revisione:",
	'revcs-error' => 'Errore: $1',
	'revcs-hidehistory-submit' => 'Appleche',
	'revcs-history-hidden-reason' => '(mutive scunnute)',
	'revcs-history-hidden-supplement' => '(commende aggiundive scunnute)',
	'revcs-history-hidden-user' => '(nome utende scunnute)',
	'revcs-history-rcsh-reason' => 'Mutive',
	'revcs-list-extended-supplement-all' => 'tutte',
	'revcs-list-extended-supplement-empty' => 'vacande',
	'revcs-list-extended-supplement-notempty' => 'chine',
	'revcs-list-limit' => 'Numere pe pàgene:',
	'revcs-list-rcs-rev-id' => "ID d'a revisione",
	'revcs-list-rcs-rev-id-edit' => 'Cange',
	'revcs-list-rcs-rev-id-log' => 'Archivije',
	'revcs-list-rcs-user-text' => 'Utende',
	'revcs-list-reset' => 'Azzere',
	'revcs-list-sort' => 'Ordine:',
	'revcs-list-submit' => 'Fà vedè',
	'revcs-log-nosupplement' => '(ninde)',
	'revcs-show-revision' => 'Revisione: $1',
	'revcs-show-revision-id' => "ID d'a revisione: $1 ($2)",
	'revcs-show-user' => "Utende: $1 $2 (ID de l'utende: $3)",
	'revcs-warning' => 'Avvertimende: $1',
	'right-supplementcomment' => 'Fatte commende aggiundive',
);

/** Russian (русский)
 * @author Okras
 * @author ShinePhantom
 */
$messages['ru'] = array(
	'revcs-alert-special-parameter' => 'Есть ошибка в параметре.',
	'revcs-edit-reason' => 'Причина:',
	'revcs-error' => 'Ошибка: $1',
	'revcs-hidehistory-submit' => 'Применить',
	'revcs-history-hidden-reason' => '(причина скрыта)',
	'revcs-history-rcsh-reason' => 'Причина',
	'revcs-list-extended-comparison' => 'Операция сравнения:',
	'revcs-list-extended-property' => 'Свойства сравнения:',
	'revcs-list-extended-supplement' => 'Состояние дополнительных комментариев:',
	'revcs-list-extended-supplement-all' => 'все',
	'revcs-list-extended-supplement-empty' => 'пусто',
	'revcs-list-extended-supplement-notempty' => 'не пусто',
	'revcs-list-limit' => 'Количество на странице:',
	'revcs-list-rcs-rev-id-edit' => 'Править',
	'revcs-list-rcs-rev-id-log' => 'Журнал',
	'revcs-list-rcs-user-text' => 'Участник',
	'revcs-list-reset' => 'Сбросить',
	'revcs-list-sort' => 'Сортировать по:',
	'revcs-list-submit' => 'Показать',
	'revcs-log-hidehistory-reason-hidden' => 'причина скрыта',
	'revcs-show-reason' => 'Причина: $1',
	'revcs-warning' => 'Предупреждение: $1',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'group-supplementcomment' => 'අතිරේකපරිකථනය',
	'group-supplementcomment-member' => '{{GENDER:$1|අතිරේකපරිකථනය}}',
	'grouppage-supplementcomment' => '{{ns:project}}:අතිරේකපරිකථනය',
	'log-name-revisioncommentsupplement' => 'පරිපූරක පරිකථන ලොගය',
	'revisioncommentsupplementlist' => 'අතිරේක පරිකථන ලැයිස්තුව',
	'revcs-action-history-supplement' => '[අතිරේකය: $1]',
	'revcs-alert-revision-id' => '"$1" යනු වැරදි සංශෝධන හැඳුනුමකි.',
	'revcs-delete-heading' => 'අතිරේක පරිකථනය මකා දමන්න',
	'revcs-delete-legend' => 'අතිරේක පරිකථනය මකා දමන්න',
	'revcs-delete-submit' => 'අතිරේක පරිකථනය මකා දමන්න',
	'revcs-error' => 'දෝෂය: $1',
	'revcs-list-extended-offset' => 'උපමනයේ තන්තුව:', # Fuzzy
	'revcs-list-extended-supplement' => 'අතිරේක පරිකථනවල කොන්දේසිය:',
	'revcs-list-extended-supplement-all' => 'සියල්ල',
	'revcs-list-extended-supplement-empty' => 'හිස්',
	'revcs-list-extended-supplement-notempty' => 'හිස් නැත',
	'revcs-list-legend' => 'අතිරේක පරිකථන ලැයිස්තුව',
	'revcs-list-limit' => 'පිටුවකට අංක:',
	'revcs-list-rcs-rev-id' => 'සංශෝධන හැඳුනුම',
	'revcs-list-rcs-rev-id-edit' => 'සංස්කරණය',
	'revcs-list-rcs-rev-id-log' => 'ලඝු සටහන',
	'revcs-list-rcs-supplement' => 'අතිරේක පරිකථනය',
	'revcs-list-rcs-timestamp' => 'සංස්කරණය කල දිනය සහ වෙලාව',
	'revcs-list-rcs-user-text' => 'පරිශීලක',
	'revcs-list-reset' => 'නැවත සකසන්න',
	'revcs-list-sort' => 'වර්ගය:',
	'revcs-list-submit' => 'පෙන්වන්න',
	'revcs-log-nosupplement' => '(කිසිවක් නොමැත)',
	'revcs-show-deletelinktext' => 'අතිරේක පරිකථනය මකා දමන්න',
	'revcs-show-editlinktext' => 'අතිරේක පරිකථනය සංස්කරණය කරන්න',
	'revcs-show-revision' => 'සංශෝධනය: $1',
	'revcs-show-revision-id' => 'සංශෝධන හැඳුනුම: $1 ($2)',
	'revcs-show-supplement-parsed' => 'ව්‍යාකරණ විග්‍ර කල අතිරේක පරිකථනය: $1',
	'revcs-show-supplement-raw' => 'නොනිමි අතිරේක පරිකථනය: $1',
	'revcs-show-timestamp' => 'සංස්කරණය කල දිනය සහ වෙලාව: $1 ($2)',
	'revcs-show-user' => 'පරිශීලක: $1 $2 (පරිශීලක හැඳුනුම: $3)',
	'revcs-warning' => 'අවවාදය: $1',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Milicevic01
 */
$messages['sr-ec'] = array(
	'revcs-edit-reason' => 'Разлог:',
	'revcs-hidehistory-submit' => 'Примени',
	'revcs-history-hidden-user' => '(корисничко име је сакривено)',
	'revcs-list-extended-supplement-all' => 'све',
	'revcs-list-rcs-rev-id-edit' => 'Уреди',
	'revcs-list-rcs-rev-id-log' => 'Дневник',
	'revcs-list-rcs-user-text' => 'Корисник',
	'revcs-list-sort' => 'Поређај по:',
	'revcs-list-submit' => 'Прикажи',
	'revcs-log-nosupplement' => '(ништа)',
);

/** Swedish (svenska)
 * @author Jopparn
 */
$messages['sv'] = array(
	'revcs-alert-special-parameter' => 'Det är misstag gällande parametern.',
	'revcs-error' => 'Fel: $1',
	'revcs-hidehistory-submit' => 'Verkställ',
	'revcs-history-rcsh-reason' => 'Orsak',
	'revcs-list-descending' => 'lista i fallande ordning',
	'revcs-list-extended-supplement-all' => 'alla',
	'revcs-list-extended-supplement-empty' => 'tom',
	'revcs-list-extended-supplement-notempty' => 'inte tom',
	'revcs-list-limit' => 'Antal per sida:',
	'revcs-list-rcs-rev-id-edit' => 'Redigera',
	'revcs-list-rcs-rev-id-log' => 'Logga',
	'revcs-list-rcs-timestamp' => 'Redigerade datum och tid',
	'revcs-list-rcs-user-text' => 'Användare',
	'revcs-list-reset' => 'Återställ',
	'revcs-list-sort' => 'Sortera efter:',
	'revcs-list-submit' => 'Visa',
	'revcs-log-hidehistory-reason-hidden' => 'anledningen dold',
	'revcs-log-hidehistory-reason-unhidden' => 'anledning ej längre dold',
	'revcs-log-nosupplement' => '(inga)',
	'revcs-show-reason' => 'Orsak: $1',
	'revcs-show-revision' => 'Version: $1',
	'revcs-warning' => 'Varning: $1',
);

/** Tamil (தமிழ்)
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'revcs-error' => 'பிழை: $1',
	'revcs-list-extended-supplement-all' => 'அனைத்தும்',
	'revcs-list-extended-supplement-empty' => 'காலி',
	'revcs-list-extended-supplement-notempty' => 'காலியில்லை',
	'revcs-list-rcs-rev-id-edit' => 'தொகு',
	'revcs-list-rcs-rev-id-log' => 'பதிகை',
	'revcs-list-rcs-timestamp' => 'தொகுக்கப்பட்ட தேதி மற்றும் நேரம்',
	'revcs-list-rcs-user-text' => 'பயனர்',
	'revcs-list-reset' => 'மீட்டமை',
	'revcs-list-sort' => 'வரிசைப்படுத்து:',
	'revcs-list-submit' => 'காண்பி',
	'revcs-log-nosupplement' => '(ஏதுமில்லை)',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'revcs-error' => 'పొరపాటు: $1',
	'revcs-log-nosupplement' => '(ఏమీలేదు)',
	'revcs-show-supplement-raw' => 'ముడి వ్యాఖ్య: $1',
	'revcs-warning' => 'హెచ్చరిక: $1',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author Base
 * @author Steve.rusyn
 * @author SteveR
 * @author Ата
 */
$messages['uk'] = array(
	'action-supplementcomment' => 'керування допоміжними коментарями',
	'action-supplementcomment-restricted' => 'керування допоміжними коментарями з обмеженими діями',
	'group-supplementcomment' => 'Додатковий коментар',
	'group-supplementcomment-member' => '{{GENDER:$1|Додатковий коментар|Додаткові коментарі|Додаткових коментарів}}',
	'grouppage-supplementcomment' => '{{ns:project}}:Додатковий коментар',
	'log-name-revisioncommentsupplement' => 'Журнал додаткових коментарів',
	'log-description-revisioncommentsupplement' => 'Журнал операцій у {{#special:RevisionCommentSupplement}}.',
	'logentry-revisioncommentsupplement-create' => '$1 {{GENDER:$2|створив|створила}} допоміжний коментар, $6 до версії $4',
	'logentry-revisioncommentsupplement-create2' => '$1 {{GENDER:$2|створив|створила}} допоміжний коментар до версії $4',
	'logentry-revisioncommentsupplement-delete' => '$1 {{GENDER:$2|вилучив|вилучила}} допоміжний коментар, $5 до версії $4',
	'logentry-revisioncommentsupplement-delete2' => '$1 {{GENDER:$2|вилучив|вилучила}} допоміжний коментар до версії $4',
	'logentry-revisioncommentsupplement-hidehistory' => '$1 {{GENDER:$2|змінив|змінила}} видимість запису журналу $7 додаткового коментаря для версії $4: $9',
	'logentry-revisioncommentsupplement-modify' => '$1 {{GENDER:$2|змінив|змінила}} допоміжний коментар до версії $4 з $5 на $6',
	'logentry-revisioncommentsupplement-modify2' => '$1 {{GENDER:$2|змінив|змінила}} допоміжний коментар до версії $4',
	'logentry-suppress-revcommentsupplementhidehistory' => '$1 {{GENDER:$2|змінив|змінила}} видимість запису журналу $7 допоміжного коментаря для версії $4: $9',
	'revisioncommentsupplement' => 'Допоміжний коментар до версії',
	'revisioncommentsupplementlist' => 'Перелік додаткових коментарів',
	'revcs-desc' => 'Дозволяє показати додаткові коментарі для кожного рядка версії на сторінках історії',
	'revcs-action-history-supplement' => '[Доповнення:  $1 ]',
	'revcs-alert-exist-supplement' => 'Додаткові коментарі на перегляд існує в таблиці бази даних.',
	'revcs-alert-history-id' => '"$1" невірний ID історії.',
	'revcs-alert-nohistory' => 'В історії не існує запису в таблиці бази даних.  Це ще не створено, або вже вилучено.',
	'revcs-alert-norevision' => 'Перегляд недоступний. Він не був створений ще, або його вже видалено.',
	'revcs-alert-revision-id' => '"$1" — неправильний ID версії.',
	'revcs-alert-special-parameter' => 'Є помилка у параметрі.',
	'revcs-alert-supplement-asterisk' => 'Додатковий коментар при введенні - зірочка.',
	'revcs-alert-supplement-empty' => 'Додатковий коментар при введенні - порожній.',
	'revcs-alert-supplement-zero' => 'Додатковий коментар при введенні - нуль.',
	'revcs-alert-supplement-same-as-summary' => 'Додатковий коментар при введенні - такий самий як підсумок версії.',
	'revcs-alert-supplement-same-as-supplement' => 'Додатковий коментар при введенні - такий самий, як один рядок у таблиці бази даних.',
	'revcs-delete-desc' => 'Ви можете вилучити додатковий коментар з таблиці бази даних. Розширення RevisionCommentSupplement не забезпечує операції відновлення вилученого. Якщо ви б захотіли відновити, то вам потрібно відновлювати з журналів або записів історії.',
	'revcs-delete-failure' => 'Не вдалося видалити додатковий коментар.',
	'revcs-delete-heading' => 'Видалити додатковий коментар',
	'revcs-delete-legend' => 'Видалити додатковий коментар',
	'revcs-delete-submit' => 'Видалити додатковий коментар',
	'revcs-delete-success' => 'Успішно вилучено додатковий коментар.',
	'revcs-edit-desc' => 'Ви можете встановити додаткові коментарі і користувачів, які мають дозвіл на {{int:action-supplementcomment-обмежений}} (supplementcomment обмежена), зможуть змінити додаткові коментарі.',
	'revcs-edit-heading' => 'Змінити додаткові коментарі',
	'revcs-edit-legend' => 'Змінити додаткові коментарі',
	'revcs-edit-preview' => 'Попередній перегляд',
	'revcs-edit-preview-reason' => 'Перегляд причини: $1',
	'revcs-edit-preview-supplement' => 'Перегляд додаткового коментаря:$1',
	'revcs-edit-reason' => 'Причина:',
	'revcs-edit-revision-id' => 'ID версії:',
	'revcs-edit-save' => 'Зберегти додатковий коментар',
	'revcs-edit-show' => 'Показати додатковий коментар',
	'revcs-edit-supplement' => 'Додатковий коментар:',
	'revcs-edit-written' => 'Збережено додатковий коментар.',
	'revcs-error' => 'Помилка: $1',
	'revcs-error-edit-denied' => 'Додатковий коментар не може бути збережений.',
	'revcs-error-hidehistory-hidden-restricted-only' => 'Видимість при введенні є лише обмежена (пригнічення, недогляд).',
	'revcs-error-hidehistory-hidden-same' => 'Видимість при введенні має те саме значення, що й у таблиці бази даних.',
	'revcs-error-history-nosupplement' => 'Додаткові коментарі не існує в таблиці бази даних. Його ще не створено, або вже вилучено.',
	'revcs-error-history-revision-id' => 'ID версії є неправильним.',
	'revcs-error-history-unuse' => 'Ця вікі не зберігає історію додаткових коментарів.',
	'revcs-error-unexpected' => 'Сталася неочікувана помилка.',
	'revcs-hidehistory-desc' => 'Ви можете приховати усі властивості або їх частину  запису в журнал.',
	'revcs-hidehistory-failure' => 'Не вдалося встановити видимість запису історії додаткового коментаря.',
	'revcs-hidehistory-heading' => 'Приховати/Показати історію додаткового коментаря',
	'revcs-hidehistory-legend' => 'Приховати/Показати історію додаткового коментаря',
	'revcs-hidehistory-present-supplement' => 'Присутній додатковий коментар $1',
	'revcs-hidehistory-reason' => 'Приховати причину запису історії',
	'revcs-hidehistory-row' => 'Приховати запис усієї історії',
	'revcs-hidehistory-submit' => 'Застосовувати',
	'revcs-hidehistory-success' => 'Успіх у заданні видимості запису історії додаткового коментаря.',
	'revcs-hidehistory-supplement' => 'Приховати додатковий коментар запису історії',
	'revcs-hidehistory-suppress' => 'Приховувати дані від усіх, крім користувачів з правом {{int:action-suppressrevision}} (приховання версії)',
	'revcs-hidehistory-user' => "Приховати ім'я користувача або IP-адресу запису історії",
	'revcs-history-desc' => 'У цьому списку перераховані записи додаткових коментарів.',
	'revcs-history-heading' => 'Історія додаткового коментаря $1',
	'revcs-history-heading-error' => 'Помилка історії додаткового коментаря',
	'revcs-history-hidden-reason' => '(причина прихована)',
	'revcs-history-hidden-supplement' => '(додатковий коментар прихований)',
	'revcs-history-hidden-user' => "(ім'я користувача приховане)",
	'revcs-history-legend' => 'Історія додаткового коментаря',
	'revcs-history-rcsh-id' => 'ID історії',
	'revcs-history-rcsh-reason' => 'Причина',
	'revcs-list-desc' => 'На цій сторінці перераховані діючі додаткові коментарі.',
	'revcs-list-descending' => 'список за спаданням',
	'revcs-list-extended-comparison' => 'Операція порівняння:',
	'revcs-list-extended-comparison-and-over' => 'Властивості є стандартними і більшими',
	'revcs-list-extended-comparison-and-under' => 'Властивості є стандартними і меншими',
	'revcs-list-extended-comparison-equal' => 'Властивості рівні стандартним',
	'revcs-list-extended-comparison-not-equal' => 'Властивості не рівні стандартним',
	'revcs-list-extended-comparison-over' => 'Властивості більші за стандартні',
	'revcs-list-extended-comparison-under' => 'Властивості менші за стандартні',
	'revcs-list-extended-offset' => 'Стандарт для порівняння:',
	'revcs-list-extended-property' => 'Властивості порівняння:',
	'revcs-list-extended-supplement' => 'Стан додаткових коментарів:',
	'revcs-list-extended-supplement-all' => 'всі',
	'revcs-list-extended-supplement-empty' => 'пусто',
	'revcs-list-extended-supplement-notempty' => 'не пусто',
	'revcs-list-heading' => 'Перелік додаткових коментарів',
	'revcs-list-legend' => 'Перелік додаткових коментарів',
	'revcs-list-limit' => 'Всього на сторінці:',
	'revcs-list-rcs-rev-id' => 'ID версії',
	'revcs-list-rcs-rev-id-edit' => 'Редагувати',
	'revcs-list-rcs-rev-id-log' => 'Журнал',
	'revcs-list-rcs-supplement' => 'Додатковий коментар',
	'revcs-list-rcs-timestamp' => 'Редагувати дату і час',
	'revcs-list-rcs-user-text' => 'Користувач',
	'revcs-list-reset' => 'Скинути',
	'revcs-list-sort' => 'Сортувати:',
	'revcs-list-submit' => 'Показати',
	'revcs-log-hidehistory-reason-hidden' => 'причина прихована',
	'revcs-log-hidehistory-reason-unhidden' => 'причина неприхована',
	'revcs-log-hidehistory-restricted' => 'застосовані обмеження',
	'revcs-log-hidehistory-row-hidden' => 'записи усієї історії - приховані',
	'revcs-log-hidehistory-row-unhidden' => 'записи усієї історії - відкриті',
	'revcs-log-hidehistory-supplement-hidden' => 'додатковий коментар - прихований',
	'revcs-log-hidehistory-supplement-unhidden' => 'додатковий коментар - відкритий',
	'revcs-log-hidehistory-unrestricted' => 'вилучені обмеження',
	'revcs-log-nosupplement' => '(нічого)',
	'revcs-show-deletelinktext' => 'Видалити додатковий коментар',
	'revcs-show-editlinktext' => 'Змінити додатковий коментар',
	'revcs-show-history-id' => 'ID історії: $1 ($2)',
	'revcs-show-historylinktext' => 'Список історії додаткових коментарів',
	'revcs-show-loglinktext' => 'журнал змін додаткового коментаря',
	'revcs-show-no-db-row' => 'Не знайдено додаткового коментаря для версії $1.',
	'revcs-show-reason' => 'Причина: $1',
	'revcs-show-revision' => 'Версія: $1',
	'revcs-show-revision-id' => 'ID версії: $1 ($2)',
	'revcs-show-supplement-parsed' => 'Проаналізований додатковий коментар: $1',
	'revcs-show-supplement-raw' => 'Непроаналізований додатковий коментар: $1',
	'revcs-show-timestamp' => 'Дата і час редагування: $1 ($2)',
	'revcs-show-user' => 'Користувач: $1 $2 (ID користувача: $3)',
	'revcs-warning' => 'Увага: $1',
	'right-supplementcomment' => 'Управляти додатковими коментарями',
	'right-supplementcomment-restricted' => 'Управляти додатковими коментарями з обмеженими діями',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Kuailong
 * @author Li3939108
 * @author Shirayuki
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'revisioncommentsupplementlist' => '补充评论列表',
	'revcs-desc' => '允许在历史记录页面每个修订行上线时附加的注释。',
	'revcs-edit-heading' => '编辑补充评论',
	'revcs-edit-preview' => '显示预览',
	'revcs-edit-preview-reason' => '原因预览：$1',
	'revcs-edit-reason' => '原因：',
	'revcs-edit-written' => '补充评论已保存。',
	'revcs-error' => '错误：$1',
	'revcs-error-history-unuse' => '本wiki不保存补充评论的历史记录。',
	'revcs-hidehistory-submit' => '应用',
	'revcs-history-rcsh-reason' => '原因',
	'revcs-list-extended-comparison' => '比较操作：',
	'revcs-list-extended-supplement-all' => '所有',
	'revcs-list-extended-supplement-empty' => '空',
	'revcs-list-legend' => '补充评论列表',
	'revcs-list-rcs-rev-id-edit' => '编辑',
	'revcs-list-rcs-rev-id-log' => '日志',
	'revcs-list-rcs-user-text' => '用户',
	'revcs-list-sort' => '排序方式：',
	'revcs-list-submit' => '显示',
	'revcs-log-nosupplement' => '（无）',
	'revcs-show-reason' => '原因：$1',
	'revcs-show-revision' => '版本：$1',
	'revcs-show-revision-id' => '版本ID: $1（$2）',
	'revcs-warning' => '警告：$1',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Shirayuki
 */
$messages['zh-hant'] = array(
	'revcs-list-rcs-rev-id-edit' => '編輯',
	'revcs-list-rcs-user-text' => '用戶',
);
