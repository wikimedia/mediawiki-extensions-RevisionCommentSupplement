<?php

$messages = array();

$messages['en'] = array(
	'action-supplementcomment' => 'operate supplementary comments',
	'action-supplementcomment-restricted' => 'operate supplementary comments with restricted actions',
	'group-supplement' => 'SupplementComment',
	'group-supplement-member' => '{{GENDER:$1|SupplementComment}}',
	'grouppage-supplement' => '{{ns:project}}:SupplementComment',
	'log-name-revisioncommentsupplement' => 'Supplementary Comment log',
	'log-description-revisioncommentsupplement' => 'Log of operations in {{ns:special}}:RevisionCommentSupplement.',
	'logentry-revisioncommentsupplement-create' => '$1 created a supplementary comment, $6 on revision $4',
	'logentry-revisioncommentsupplement-delete' => '$1 deleted a supplementary comment, $5 on revision $4',
	'logentry-revisioncommentsupplement-modify' => '$1 modified a supplementary comment from $5 to $6 on revision $4',
	'revisioncommentsupplement' => 'Revision Comment Supplement',
	'revcs-desc' => 'Allows to show supplementary comment at each revision line in History pages.',
	'revcs-alert-exist-supplement' => 'the supplementary comment on the revision exist in the database table.',
	'revcs-alert-norevision' => "the revision dosen't exist in the revision table.",
	'revcs-alert-revision-id' => '"$1" is wrong revision ID.',
	'revcs-alert-supplement-asterisk' => 'the supplementary comment on input is asterisk.',
	'revcs-alert-supplement-empty' => 'the supplementary comment on input is empty.',
	'revcs-alert-supplement-same-as-summary' => 'the supplementary comment on input is the same string as the summary of the revision.',
	'revcs-alert-supplement-same-as-supplement' => 'the supplementary comment on input is the same string as the supplementary comment in the database table.',
	'revcs-editlink' => '<nowiki>[</nowiki>[[$1|Supplement edit]]<nowiki>]</nowiki>',
	'revcs-error' => 'Error: $1',
	'revcs-error-denied' => 'denied saving the supplementary comment.',
	'revcs-error-unexpected' => 'unexpected error happened.',
	'revcs-form-legend' => 'Revision Comment Supplement',
	'revcs-form-preview' => 'preview',
	'revcs-form-revision-id' => 'Revision ID:',
	'revcs-form-show' => 'show',
	'revcs-form-submit' => 'submit',
	'revcs-form-summary' => 'Summary:',
	'revcs-form-supplement' => 'Supplementary Comment:',
	'revcs-history-supplement' => '[Supplement: $1]',
	'revcs-log-nosupplement' => '(none)',
	'revcs-log-supplement1' => '$1',
	'revcs-log-supplement2' => '$1($2)',
	'revcs-preview-summary' => 'Summary Preview: $1',
	'revcs-preview-supplement' => 'Supplementary Comment Preview: $1',
	'revcs-show-loglinktext' => 'the Supplementary Comment change log',
	'revcs-show-no-db-row' => 'Not found the supplementary comment on revision $1.',
	'revcs-show-revision' => 'Revision: $1',
	'revcs-show-revision-id' => 'Revision ID: $1 ($2)',
	'revcs-show-supplement-parsed' => 'Parsed Supplementary Comment: $1',
	'revcs-show-supplement-raw' => 'Raw Supplementary Comment: $1',
	'revcs-show-timestamp' => 'Editing date and time: $1 ($2)',
	'revcs-show-user' => 'User: $1 $2 (User ID: $3)',
	'revcs-warning' => 'Warning: $1',
	'revcs-written' => 'The supplementary comment is written.',
	'right-supplementcomment' => 'Operate supplementary comments',
	'right-supplementcomment-restricted' => 'Operate supplementary comments with restricted actions',
);

/** Message documentation (Message documentation)
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'action-supplementcomment' => '{{doc-action|supplementcomment}}',
	'action-supplementcomment-restricted' => '{{doc-action|supplementcomment-restricted}}',
	'group-supplement' => '{{doc-group|supplement}}',
	'group-supplement-member' => '{{doc-group|supplement}}',
	'grouppage-supplement' => '{{doc-group|supplement}}',
	'log-name-revisioncommentsupplement' => 'All logs of Extension:RevisonCommentSupplement in Special:Log.',
	'log-description-revisioncommentsupplement' => 'The description of all logs of Extension:RevisonCommentSupplement in Special:Log.',
	'logentry-revisioncommentsupplement-create' => 'A line of log entry in [[Special:Log]].
*$1 are links of user page and user tool page(s).
*$2 is user name.
*$3 is a link of Special:RevisionCommentSupplement/$4.
*$4 is the revision id.
*$5 is {{msg-mw|revcs-log-nosupplement}}.
*$6 is the new supplementary comment, {{msg-mw|revcs-log-supplement1}}, {{msg-mw|revcs-log-supplement2}} or {{msg-mw|revcs-log-nosupplement}}.',
	'logentry-revisioncommentsupplement-delete' => "A line of log entry in Special:Log. This message hasn't been used.
*$1 are links of the user page (or the user contributions page, Special:Contributions when the user doesn't log in), and the user tool page(s).
*$2 is the user name.
*$3 is a link of Special:RevisionCommentSupplement/$4.
*$4 is the revision id.
*$5 is the old supplementary comment, {{msg-mw|revcs-log-supplement1}}, {{msg-mw|revcs-log-supplement2}} or {{msg-mw|revcs-log-nosupplement}}.
*$6 is {{msg-mw|revcs-log-nosupplement}}.",
	'logentry-revisioncommentsupplement-modify' => 'A line of log entry in Special:Log.
*$1 are links of the user page and the user tool(s) page.
*$2 is the user name.
*$3 is a link of Special:RevisionCommentSupplement/$4.
*$4 is the revision id.
*$5 is the old supplementary comment, {{msg-mw|revcs-log-supplement1}}, {{msg-mw|revcs-log-supplement2}} or {{msg-mw|revcs-log-nosupplement}}.
*$6 is the new supplementary comment, {{msg-mw|revcs-log-supplement1}}, {{msg-mw|revcs-log-supplement2}} or {{msg-mw|revcs-log-nosupplement}}.',
	'revisioncommentsupplement' => 'This message is a link text of Special:RevisionCommentSupplement on Special:SpecialPages and first heading of Special:RevisionCommentSupplement. The meaning of "RevisionCommentSupplement" is "Supplement the comment on each revision", "the comment on each revision is Supplemented" or "a supplement to the comment on each revision."',
	'revcs-desc' => 'The description of this extension in Special:Version.',
	'revcs-alert-exist-supplement' => 'This message is a error or warning message used at save in Special:RevisionCommentSupplement.',
	'revcs-alert-norevision' => 'This message is a error or warning message used in Special:RevisionCommentSupplement.',
	'revcs-alert-revision-id' => 'This message is a error or warning message used in Special:RevisionCommentSupplement.',
	'revcs-alert-supplement-asterisk' => 'This message is a error or warning message used at save or preview in Special:RevisionCommentSupplement.',
	'revcs-alert-supplement-empty' => 'This message is a error or warning message used at save or preview in Special:RevisionCommentSupplement.',
	'revcs-alert-supplement-same-as-summary' => 'This message is a error or warning message used at save or preview in Special:RevisionCommentSupplement.',
	'revcs-alert-supplement-same-as-supplementcomment' => 'This message is a error or warning message used at save or preview in Special:RevisionCommentSupplement.',
	'revcs-editlink' => "This message isn't used.",
	'revcs-error' => '$1 is error messages, revcs-alert-* or revcs-error-*.',
	'revcs-error-denied' => 'This message is a error message used at save in Special:RevisionCommentSupplement.',
	'revcs-error-unexpected' => 'This message is a error message used in Special:RevisionCommentSupplement.',
	'revcs-form-legend' => 'This message is a content of a legend element in Special:RevisionCommentSupplement.',
	'revcs-form-preview' => 'This message is a label of a input botton in Special:RevisionCommentSupplement.',
	'revcs-form-revision-id' => 'This message is a content of a label element of a text input box of a supplementary comment in Special:RevisionCommentSupplement.',
	'revcs-form-show' => 'This message is a label of a input botton in Special:RevisionCommentSupplement.',
	'revcs-form-submit' => 'This message is a label of a input botton in Special:RevisionCommentSupplement.',
	'revcs-form-summary' => 'This message is a content of a label element of a text input box of a summary and/or a reason in Special:RevisionCommentSupplement.',
	'revcs-form-supplement' => 'This messsage is a label of a text input box of a supplementary comment in Special:RevisionCommentSupplement.',
	'revcs-history-supplement' => 'This message is used at each revision line in History pages. $1 is a parsed supplementary comment.',
	'revcs-log-nosupplement' => 'If a supplementary comment is empty, this is used at logentry-revisioncommentsupplement-* in Special:Log.',
	'revcs-log-supplement1' => 'If a supplementary comment exists, this is used at logentry-revisioncommentsupplement-* in Special:Log. $1 is a supplementary comment.',
	'revcs-log-supplement2' => 'If a supplementary comment exists, this is used at logentry-revisioncommentsupplement-* in Special:Log. $1 is a parsed supplementary comment. $2 is a raw supplementary comment.',
	'revcs-preview-summary' => 'This message is used at preview a supplementary comment and a summary in Special:RevisionCommentSupplement. $1 is a parsed summary.',
	'revcs-preview-supplement' => 'This message is used at preview a supplementary comment and a summary in Special:RevisionCommentSupplement. $1 is a parsed supplementary comment.',
	'revcs-show-loglinktext' => 'This message is a link text of $2 of {{msg-mw|revcs-show-revision-id}}, and is used at show the supplementary comment of the revision in Special:RevisionCommentSupplement.',
	'revcs-show-no-db-row' => 'This message is used at show the supplementary comment of the revision in Special:RevisionCommentSupplement. $1 is revision id.',
	'revcs-show-revision' => 'This message is used at show the supplementary comment of the revision and preview a supplementary comment and a summary in Special:RevisionCommentSupplement. $1 is a revision line like one in History pages.',
	'revcs-show-revision-id' => 'This message is used at show the supplementary comment of the revision in Special:RevisionCommentSupplement.
*$1 is revision id.
*$2 is a link of Special:Log/Special:RevisionCommentSupplement/$1. The link text of $2 is {{msg-mw|revcs-show-loglinktext}}.',
	'revcs-show-supplement-parsed' => 'This message is used at show the supplementary comment of the revision in Special:RevisionCommentSupplement. $1 is a parsed supplementary comment.',
	'revcs-show-supplement-raw' => 'This message is used at show the supplementary comment of the revision in Special:RevisionCommentSupplement. $1 is a raw supplementary comment.',
	'revcs-show-timestamp' => 'This message is used at show the supplementary comment of the revision in Special:RevisionCommentSupplement.
$1 and $2 are date and time when the supplementary comment was last modified.
*$1 is a date in format setting in Special:Preferences of each user.
*$2 is a date in database.',
	'revcs-show-user' => "This message is used at show the supplementary comment of the revision in Special:RevisionCommentSupplement.
*$1 is link of user page (or user contributions page, Special:Contributions when the user doesn't log in).
*$2 is user tool link(s).
*$3 is user id.
If user name is Example, $1 is like [[User:Example|Example]] and $2 are like ([[User_talk:Example|Talk]] | [[Special:Contributions/Example|Contributions]]).",
	'revcs-warning' => 'This message is used in Special:RevisionCommentSupplement. $1 is a warning message, revcs-alert-*.',
	'revcs-written' => 'This message is shown when writing a supplementary comment and a log entry is finished at save in Special:RevisionCommentSupplement.',
	'right-supplementcomment' => '{{doc-right|supplementcomment}}',
	'right-supplementcomment-restricted' => '{{doc-right|supplementcomment-restricted}}',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Metalhead64
 */
$messages['de'] = array(
	'action-supplementcomment' => 'mit ergänzenden Kommentaren zu arbeiten',
	'action-supplementcomment-restricted' => 'eingeschränkt mit ergänzenden Kommentaren zu arbeiten',
	'group-supplement' => 'Kommentarergänzer',
	'group-supplement-member' => '{{GENDER:$1|Kommentarergänzer|Kommentarergänzerin}}',
	'grouppage-supplement' => '{{ns:project}}:Kommentarergänzer',
	'log-name-revisioncommentsupplement' => 'Kommentarergänzungs-Logbuch',
	'log-description-revisioncommentsupplement' => 'Logbuch der Aktionen in {{ns:special}}:Versionskommentarergänzung.',
	'logentry-revisioncommentsupplement-create' => '$1 erstelle den ergänzenden Kommentar „$6“ zu Version $4',
	'logentry-revisioncommentsupplement-delete' => '$1 löschte den ergänzenden Kommentar „$5“ zu Version $4',
	'logentry-revisioncommentsupplement-modify' => '$1 änderte den ergänzenden Kommentar „$5“ in „$6“ zu Version $4',
	'revisioncommentsupplement' => 'Versionskommentarergänzung',
	'revcs-desc' => 'Ermöglicht das Anzeigen ergänzender Kommentare in Versionsgeschichten',
	'revcs-alert-exist-supplement' => 'Der ergänzende Kommentar der Version ist vorhanden.',
	'revcs-alert-norevision' => 'Die Version ist nicht in der Versionstabelle vorhanden.',
	'revcs-alert-revision-id' => '„$1“ ist eine falsche Versionskennung.',
	'revcs-alert-supplement-same-as-summary' => 'Der ergänzende Kommentar entspricht der gleichen Zeichenfolge wie die der Versionszusammenfassung.',
	'revcs-alert-supplement-same-as-supplement' => 'Der ergänzende Kommentar entspricht der gleichen Zeichenfolge wie die des ergänzenden Kommentars in der Datenbanktabelle.',
	'revcs-editlink' => '<nowiki>[</nowiki>[[$1|Bearbeitung ergänzen]]<nowiki>]</nowiki>',
	'revcs-error' => 'Fehler: $1',
	'revcs-error-denied' => 'Das Speichern des ergänzenden Kommentars wurde verweigert.',
	'revcs-error-unexpected' => 'Es ist ein unerwarteter Fehler aufgetreten.',
	'revcs-form-legend' => 'Versionskommentarergänzung',
	'revcs-form-preview' => 'Vorschau',
	'revcs-form-revision-id' => 'Versionskennung:',
	'revcs-form-show' => 'anzeigen',
	'revcs-form-submit' => 'Speichern',
	'revcs-form-summary' => 'Zusammenfassung:',
	'revcs-form-supplement' => 'Ergänzender Kommentar:',
	'revcs-history-supplement' => '[Ergänzender Kommentar: $1]',
	'revcs-log-nosupplement' => '(keine)',
	'revcs-preview-summary' => 'Vorschau der Zusammenfassung: $1',
	'revcs-preview-supplement' => 'Vorschau des ergänzenden Kommentars: $1',
	'revcs-show-loglinktext' => 'das Änderungslogbuch der ergänzenden Kommentare',
	'revcs-show-no-db-row' => 'Der ergänzende Kommentar zu Version $1 wurde nicht gefunden.',
	'revcs-show-revision' => 'Version: $1',
	'revcs-show-revision-id' => 'Versionskennung: $1 ($2)',
	'revcs-show-supplement-parsed' => 'Geparster Kommentar: $1',
	'revcs-show-supplement-raw' => 'Roher Kommentar: $1',
	'revcs-show-timestamp' => 'Bearbeitungsdatum und -zeit: $1 ($2)',
	'revcs-show-user' => 'Benutzer: $1 $2 (Benutzerkennung: $3)',
	'revcs-warning' => 'Warnung: $1',
	'revcs-written' => 'Der ergänzende Kommentar wurde gespeichert.',
	'right-supplementcomment' => 'Mit ergänzenden Kommentaren arbeiten',
	'right-supplementcomment-restricted' => 'Eingeschränkt mit ergänzenden Kommentaren arbeiten',
);

/** Spanish (español)
 * @author Armando-Martin
 */
$messages['es'] = array(
	'action-supplementcomment' => 'Utilizar comentarios adicionales',
	'action-supplementcomment-restricted' => 'Utilizar comentarios adicionales con acciones restringidas',
	'group-supplement' => 'SupplementComment',
	'group-supplement-member' => '{{GENDER:$1|SupplementComment}}',
	'grouppage-supplement' => '{{ns:project}}:SupplementComment',
	'log-name-revisioncommentsupplement' => 'Registro de comentarios adicionales',
	'log-description-revisioncommentsupplement' => 'Registro de operaciones en {{ns:special}}:RevisionCommentSupplement.',
	'logentry-revisioncommentsupplement-create' => '$1 ha creado un comentario adicional, $6 de la revisión $4',
	'logentry-revisioncommentsupplement-delete' => '$1 ha eliminado un comentario adicional, $5 de la revisión $4',
	'logentry-revisioncommentsupplement-modify' => '$1 ha modificado un comentario adicional del $5 al $6  de la revisión $4',
	'revisioncommentsupplement' => 'Revisión de comentario adicional',
	'revcs-desc' => 'Permite mostrar un comentario adicional en cada línea de revisión en las páginas de Historia.',
	'revcs-alert-exist-supplement' => 'existe el comentario adicional de la revisión.',
	'revcs-alert-norevision' => 'no existe la revisión en la tabla de revisión.',
	'revcs-alert-revision-id' => '"$1" es la revisión errónea ID.',
	'revcs-alert-supplement-same-as-summary' => 'el comentario adicional es el mismo texto que el resumen de la revisión.',
	'revcs-alert-supplement-same-as-supplement' => 'el comentario adicional es el mismo texto que el comentario adicional de la tabla de la base de datos.',
	'revcs-editlink' => '<nowiki>[</nowiki>[[$1|Edición adicional]]<nowiki>]</nowiki>',
	'revcs-error' => 'Error: $1',
	'revcs-error-denied' => 'no se permite guardar el comentario adicional.',
	'revcs-error-unexpected' => 'ha ocurrido un error inesperado.',
	'revcs-form-legend' => 'Revisión de comentario adicional',
	'revcs-form-preview' => 'vista previa',
	'revcs-form-revision-id' => 'Identificador ID de la revisión:',
	'revcs-form-show' => 'mostrar',
	'revcs-form-submit' => 'enviar',
	'revcs-form-summary' => 'Resumen:',
	'revcs-form-supplement' => 'Comentario adicional:',
	'revcs-history-supplement' => '[Comentario adicional: $1]',
	'revcs-log-nosupplement' => '(ninguno)',
	'revcs-preview-summary' => 'Vista previa de resumen: $1',
	'revcs-preview-supplement' => 'Vista previa de comentario adicional: $1',
	'revcs-show-supplement-raw' => 'Comentario en bruto: $1',
	'revcs-show-loglinktext' => 'el registro de cambios de comentarios adicionales',
	'revcs-show-no-db-row' => 'No se ha encontrado el comentario adicional de la revisión $1.',
	'revcs-show-revision' => 'Revisión: $1',
	'revcs-show-revision-id' => 'ID de la revisión:  $1  ($2)',
	'revcs-show-supplement-parsed' => 'Comentario analizado: $1',
	'revcs-show-timestamp' => 'Editar fecha y hora: $1 ($2)',
	'revcs-show-user' => 'Usuario: $1 $2 (Identificador ID del usuario: $3)',
	'revcs-warning' => 'Advertencia: $1',
	'revcs-written' => 'Se ha puesto el comentario adicional.',
	'right-supplementcomment' => 'Utilizar comentarios adicionales',
	'right-supplementcomment-restricted' => 'Utilizar comentarios adicionales con acciones restringidas',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'action-supplementcomment' => 'administrar os comentarios suplementarios',
	'action-supplementcomment-restricted' => 'administrar os comentarios suplementarios con accións restrinxidas',
	'group-supplement' => 'Comentarios suplementarios',
	'group-supplement-member' => '{{GENDER:$1|comentarios suplementarios}}',
	'grouppage-supplement' => '{{ns:project}}:Comentarios suplementarios',
	'log-name-revisioncommentsupplement' => 'Rexistro de comentarios suplementarios',
	'log-description-revisioncommentsupplement' => 'Rexistro de operacións en {{ns:special}}:RevisionCommentSupplement.',
	'logentry-revisioncommentsupplement-create' => '$1 creou un comentario suplementario, $6 da revisión $4',
	'logentry-revisioncommentsupplement-delete' => '$1 borrou un comentario suplementario, $5 da revisión $4',
	'logentry-revisioncommentsupplement-modify' => '$1 modificou un comentario suplementario de $5 a $6 da revisión $4',
	'revisioncommentsupplement' => 'Revisión dos comentarios suplementarios',
	'revcs-desc' => 'Permite mostrar comentarios suplementarios en cada liña de revisión nas páxinas de historial.',
	'revcs-alert-exist-supplement' => 'existe o comentario suplementario da revisión.',
	'revcs-alert-norevision' => 'non existe a revisión na táboa de revisións.',
	'revcs-alert-revision-id' => '"$1" é un identificador de revisión erróneo.',
	'revcs-alert-supplement-same-as-summary' => 'o comentario suplementario é o mesmo texto có resumo de edición.',
	'revcs-alert-supplement-same-as-supplement' => 'o comentario suplementario é o mesmo texto có comentario suplementario da táboa da base de datos.',
	'revcs-editlink' => '<nowiki>[</nowiki>[[$1|Edición suplementaria]]<nowiki>]</nowiki>',
	'revcs-error' => 'Erro: $1',
	'revcs-error-denied' => 'rexeitouse o gardado do comentario suplementario.',
	'revcs-error-unexpected' => 'ocorreu un erro inesperado.',
	'revcs-form-legend' => 'Revisión dos comentarios suplementarios',
	'revcs-form-preview' => 'vista previa',
	'revcs-form-revision-id' => 'ID da revisión:',
	'revcs-form-show' => 'mostrar',
	'revcs-form-submit' => 'enviar',
	'revcs-form-summary' => 'Resumo:',
	'revcs-form-supplement' => 'Comentario suplementario:',
	'revcs-history-supplement' => '[Comentario suplementario: $1]',
	'revcs-log-nosupplement' => '(ningún)',
	'revcs-preview-summary' => 'Vista previa do resumo: $1',
	'revcs-preview-supplement' => 'Vista previa do comentario suplementario: $1',
	'revcs-show-loglinktext' => 'o rexistro de cambios nos comentarios suplementarios',
	'revcs-show-no-db-row' => 'Non se atopou o comentario suplementario da revisión $1.',
	'revcs-show-revision' => 'Revisión: $1',
	'revcs-show-revision-id' => 'ID da revisión: $1 ($2)',
	'revcs-show-supplement-parsed' => 'Comentario analizado: $1',
	'revcs-show-supplement-raw' => 'Comentario en bruto: $1',
	'revcs-show-timestamp' => 'Data e hora de edición: $1 ($2)',
	'revcs-show-user' => 'Usuario: $1 $2 (ID do usuario: $3)',
	'revcs-warning' => 'Atención: $1',
	'revcs-written' => 'Definiuse o comentario suplementario.',
	'right-supplementcomment' => 'Administrar os comentarios suplementarios',
	'right-supplementcomment-restricted' => 'Administrar os comentarios suplementarios con accións restrinxidas',
);

