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
	'logentry-revisioncommentsupplement-create' => '$1 created a Supplementary Comment, $6 of Revision $4',
	'logentry-revisioncommentsupplement-delete' => '$1 deleted a Supplementary Comment, $5 of Revision $4',
	'logentry-revisioncommentsupplement-modify' => '$1 modified a Supplementary Comment from $5 to $6 of Revision $4',
	'revisioncommentsupplement' => 'Revision Comment Supplement',
	'revcs-desc' => 'Allows to show supplementary comment at each revision line in History pages.',
	'revcs-alert-existsupp' => 'the supplementary comment of the revision exist.',
	'revcs-alert-invalidcomment' => 'the supplementary comment is invalid.',
	'revcs-alert-norevision' => "the revision dosen't exist in revision table.",
	'revcs-alert-revid' => '"$1" is wrong Revision ID.',
	'revcs-alert-samecomment' => 'the supplementary comment is the same string as the summary of the revision.',
	'revcs-alert-samesuppcomment' => 'the supplementary comment is the same string as the supplementary comment in the database table.',
	'revcs-editlink' => '<nowiki>[</nowiki>[[$1|Supplement edit]]<nowiki>]</nowiki>',
	'revcs-error' => 'Error: $1',
	'revcs-error-denied' => 'denied saving the supplementary comment.',
	'revcs-error-unexpected' => 'unexpected error happened.',
	'revcs-form-comment' => 'Supplementary Comment:',
	'revcs-form-legend' => 'Revision Comment Supplement',
	'revcs-form-preview' => 'preview',
	'revcs-form-revision-id' => 'Revision ID:',
	'revcs-form-show' => 'show',
	'revcs-form-submit' => 'submit',
	'revcs-form-summary' => 'Summary:',
	'revcs-history-comment' => '[Supplementary Comment: $1]',
	'revcs-log-comment' => '$1($2)',
	'revcs-log-nocomment' => '(none)',
	'revcs-preview-comment' => 'Supplementary Comment preview: $1',
	'revcs-preview-summary' => 'Summary preview: $1',
	'revcs-set' => 'The Supplementary Comment is set.',
	'revcs-show-comment-parsed' => 'Parsed Comment: $1',
	'revcs-show-comment-raw' => 'Raw Comment: $1',
	'revcs-show-loglinktext' => 'the Supplementary Comment change log',
	'revcs-show-no-db-row' => 'Not found the Supplementary Comment of Revision $1.',
	'revcs-show-revision' => 'Revision: $1',
	'revcs-show-revision-id' => 'Revision ID: $1 ($2)',
	'revcs-show-timestamp' => 'Editing date and time: $1 ($2)',
	'revcs-show-user' => 'User: $1 $2 (User ID: $3)',
	'revcs-warning' => 'Warning: $1',
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
*$5 is empty.
*$6 is the new supplementary comment, {{msg-mw|revcs-log-comment}} or {{msg-mw|revcs-log-nocomment}}.',
	'logentry-revisioncommentsupplement-delete' => "A line of log entry in Special:Log. This message hasn't been used.
*$1 are links of the user page (or the user contributions page, Special:Contributions when the user doesn't log in), and the user tool page(s).
*$2 is the user name.
*$3 is a link of Special:RevisionCommentSupplement/$4.
*$4 is the revision id.
*$5 is the old supplementary comment, {{msg-mw|revcs-log-comment}} or {{msg-mw|revcs-log-nocomment}}.
*$6 is empty.",
	'logentry-revisioncommentsupplement-modify' => 'A line of log entry in Special:Log.
*$1 are links of the user page and the user tool(s) page.
*$2 is the user name.
*$3 is a link of Special:RevisionCommentSupplement/$4.
*$4 is the revision id.
*$5 is the old supplementary comment, {{msg-mw|revcs-log-comment}} or {{msg-mw|revcs-log-nocomment}}.
*$6 is the new supplementary comment, {{msg-mw|revcs-log-comment}} or {{msg-mw|revcs-log-nocomment}}.',
	'revisioncommentsupplement' => 'The name of this extension.',
	'revcs-desc' => 'The description of this extension in Special:Version.',
	'revcs-alert-existsupp' => 'This message is a error or warning message used at save in Special:RevisionCommentSupplement.',
	'revcs-alert-invalidcomment' => 'This message is a error or warning message used at save or preview in Special:RevisionCommentSupplement.',
	'revcs-alert-norevision' => 'This message is a error or warning message used in Special:RevisionCommentSupplement.',
	'revcs-alert-revid' => 'This message is a error or warning message used in Special:RevisionCommentSupplement.',
	'revcs-alert-samecomment' => 'This message is a error or warning message used at save in Special:RevisionCommentSupplement.',
	'revcs-alert-samesuppcomment' => 'This message is a error or warning message used at save in Special:RevisionCommentSupplement.',
	'revcs-editlink' => "This message isn't used.",
	'revcs-error' => '$1 is error messages, revcs-alert-* or revcs-error-*.',
	'revcs-error-denied' => 'This message is a error message used at save in Special:RevisionCommentSupplement.',
	'revcs-error-unexpected' => 'This message is a error message used in Special:RevisionCommentSupplement.',
	'revcs-form-comment' => 'This messsage is a label of a text input box of a supplementary comment in Special:RevisionCommentSupplement.',
	'revcs-form-legend' => 'This message is a content of a legend element in Special:RevisionCommentSupplement.',
	'revcs-form-preview' => 'This message is a label of a input botton in Special:RevisionCommentSupplement.',
	'revcs-form-revision-id' => 'This message is a content of a label element of a text input box of a supplementary comment in Special:RevisionCommentSupplement.',
	'revcs-form-show' => 'This message is a label of a input botton in Special:RevisionCommentSupplement.',
	'revcs-form-submit' => 'This message is a label of a input botton in Special:RevisionCommentSupplement.',
	'revcs-form-summary' => 'This message is a content of a label element of a text input box of a summary and/or a reason in Special:RevisionCommentSupplement.',
	'revcs-history-comment' => 'This message is used at each revision line in History pages. $1 is a parsed supplementary comment.',
	'revcs-log-comment' => 'If a supplementary comment exists, this is used at logentry-revisioncommentsupplement-* in Special:Log. $1 is a parsed supplementary comment. $2 is a raw supplementary comment.',
	'revcs-log-nocomment' => 'If a supplementary comment is empty, this is used at logentry-revisioncommentsupplement-* in Special:Log.',
	'revcs-preview-comment' => 'This message is used at preview a supplementary comment and a summary in Special:RevisionCommentSupplement. $1 is a parsed supplementary comment.',
	'revcs-preview-summary' => 'This message is used at preview a supplementary comment and a summary in Special:RevisionCommentSupplement. $1 is a parsed summary.',
	'revcs-set' => 'This message is shown when writing a supplementary comment and a log entry is finished at save in Special:RevisionCommentSupplement.',
	'revcs-show-comment-parsed' => 'This message is used at show the supplementary comment of the revision in Special:RevisionCommentSupplement. $1 is a parsed supplementary comment.',
	'revcs-show-comment-raw' => 'This message is used at show the supplementary comment of the revision in Special:RevisionCommentSupplement. $1 is a raw supplementary comment.',
	'revcs-show-loglinktext' => 'This message is a link text of $2 of {{msg-mw|revcs-show-revision-id}}, and is used at show the supplementary comment of the revision in Special:RevisionCommentSupplement.',
	'revcs-show-no-db-row' => 'This message is used at show the supplementary comment of the revision in Special:RevisionCommentSupplement. $1 is revision id.',
	'revcs-show-revision' => 'This message is used at show the supplementary comment of the revision and preview a supplementary comment and a summary in Special:RevisionCommentSupplement. $1 is a revision line like one in History pages.',
	'revcs-show-revision-id' => 'This message is used at show the supplementary comment of the revision in Special:RevisionCommentSupplement.
*$1 is revision id.
*$2 is a link of Special:Log/Special:RevisionCommentSupplement/$1. The link text of $2 is {{msg-mw|revcs-show-loglinktext}}.',
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
	'revcs-alert-existsupp' => 'Der ergänzende Kommentar der Version ist vorhanden.',
	'revcs-alert-invalidcomment' => 'Der ergänzende Kommentar ist ungültig.',
	'revcs-alert-norevision' => 'Die Version ist nicht in der Versionstabelle vorhanden.',
	'revcs-alert-revid' => '„$1“ ist eine falsche Versionskennung.',
	'revcs-alert-samecomment' => 'Der ergänzende Kommentar entspricht der gleichen Zeichenfolge wie die der Versionszusammenfassung.',
	'revcs-alert-samesuppcomment' => 'Der ergänzende Kommentar entspricht der gleichen Zeichenfolge wie die des ergänzenden Kommentars in der Datenbanktabelle.',
	'revcs-editlink' => '<nowiki>[</nowiki>[[$1|Bearbeitung ergänzen]]<nowiki>]</nowiki>',
	'revcs-error' => 'Fehler: $1',
	'revcs-error-denied' => 'Das Speichern des ergänzenden Kommentars wurde verweigert.',
	'revcs-error-unexpected' => 'Es ist ein unerwarteter Fehler aufgetreten.',
	'revcs-form-comment' => 'Ergänzender Kommentar:',
	'revcs-form-legend' => 'Versionskommentarergänzung',
	'revcs-form-preview' => 'Vorschau',
	'revcs-form-revision-id' => 'Versionskennung:',
	'revcs-form-show' => 'anzeigen',
	'revcs-form-submit' => 'Speichern',
	'revcs-form-summary' => 'Zusammenfassung:',
	'revcs-history-comment' => '[Ergänzender Kommentar: $1]',
	'revcs-log-nocomment' => '(keine)',
	'revcs-preview-comment' => 'Vorschau des ergänzenden Kommentars: $1',
	'revcs-preview-summary' => 'Vorschau der Zusammenfassung: $1',
	'revcs-set' => 'Der ergänzende Kommentar wurde gespeichert.',
	'revcs-show-comment-parsed' => 'Geparster Kommentar: $1',
	'revcs-show-comment-raw' => 'Roher Kommentar: $1',
	'revcs-show-loglinktext' => 'das Änderungslogbuch der ergänzenden Kommentare',
	'revcs-show-no-db-row' => 'Der ergänzende Kommentar zu Version $1 wurde nicht gefunden.',
	'revcs-show-revision' => 'Version: $1',
	'revcs-show-revision-id' => 'Versionskennung: $1 ($2)',
	'revcs-show-timestamp' => 'Bearbeitungsdatum und -zeit: $1 ($2)',
	'revcs-show-user' => 'Benutzer: $1 $2 (Benutzerkennung: $3)',
	'revcs-warning' => 'Warnung: $1',
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
	'revcs-alert-existsupp' => 'existe el comentario adicional de la revisión.',
	'revcs-alert-invalidcomment' => 'el comentario adicional no es válido.',
	'revcs-alert-norevision' => 'no existe la revisión en la tabla de revisión.',
	'revcs-alert-revid' => '"$1" es la revisión errónea ID.',
	'revcs-alert-samecomment' => 'el comentario adicional es el mismo texto que el resumen de la revisión.',
	'revcs-alert-samesuppcomment' => 'el comentario adicional es el mismo texto que el comentario adicional de la tabla de la base de datos.',
	'revcs-editlink' => '<nowiki>[</nowiki>[[$1|Edición adicional]]<nowiki>]</nowiki>',
	'revcs-error' => 'Error: $1',
	'revcs-error-denied' => 'no se permite guardar el comentario adicional.',
	'revcs-error-unexpected' => 'ha ocurrido un error inesperado.',
	'revcs-form-comment' => 'Comentario adicional:',
	'revcs-form-legend' => 'Revisión de comentario adicional',
	'revcs-form-preview' => 'vista previa',
	'revcs-form-revision-id' => 'Identificador ID de la revisión:',
	'revcs-form-show' => 'mostrar',
	'revcs-form-submit' => 'enviar',
	'revcs-form-summary' => 'Resumen:',
	'revcs-history-comment' => '[Comentario adicional: $1]',
	'revcs-log-nocomment' => '(ninguno)',
	'revcs-preview-comment' => 'Vista previa de comentario adicional: $1',
	'revcs-preview-summary' => 'Vista previa de resumen: $1',
	'revcs-set' => 'Se ha puesto el comentario adicional.',
	'revcs-show-comment-parsed' => 'Comentario analizado: $1',
	'revcs-show-comment-raw' => 'Comentario en bruto: $1',
	'revcs-show-loglinktext' => 'el registro de cambios de comentarios adicionales',
	'revcs-show-no-db-row' => 'No se ha encontrado el comentario adicional de la revisión $1.',
	'revcs-show-revision' => 'Revisión: $1',
	'revcs-show-revision-id' => 'ID de la revisión:  $1  ($2)',
	'revcs-show-timestamp' => 'Editar fecha y hora: $1 ($2)',
	'revcs-show-user' => 'Usuario: $1 $2 (Identificador ID del usuario: $3)',
	'revcs-warning' => 'Advertencia: $1',
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
	'revcs-alert-existsupp' => 'existe o comentario suplementario da revisión.',
	'revcs-alert-invalidcomment' => 'o comentario suplementario é inválido.',
	'revcs-alert-norevision' => 'non existe a revisión na táboa de revisións.',
	'revcs-alert-revid' => '"$1" é un identificador de revisión erróneo.',
	'revcs-alert-samecomment' => 'o comentario suplementario é o mesmo texto có resumo de edición.',
	'revcs-alert-samesuppcomment' => 'o comentario suplementario é o mesmo texto có comentario suplementario da táboa da base de datos.',
	'revcs-editlink' => '<nowiki>[</nowiki>[[$1|Edición suplementaria]]<nowiki>]</nowiki>',
	'revcs-error' => 'Erro: $1',
	'revcs-error-denied' => 'rexeitouse o gardado do comentario suplementario.',
	'revcs-error-unexpected' => 'ocorreu un erro inesperado.',
	'revcs-form-comment' => 'Comentario suplementario:',
	'revcs-form-legend' => 'Revisión dos comentarios suplementarios',
	'revcs-form-preview' => 'vista previa',
	'revcs-form-revision-id' => 'ID da revisión:',
	'revcs-form-show' => 'mostrar',
	'revcs-form-submit' => 'enviar',
	'revcs-form-summary' => 'Resumo:',
	'revcs-history-comment' => '[Comentario suplementario: $1]',
	'revcs-log-nocomment' => '(ningún)',
	'revcs-preview-comment' => 'Vista previa do comentario suplementario: $1',
	'revcs-preview-summary' => 'Vista previa do resumo: $1',
	'revcs-set' => 'Definiuse o comentario suplementario.',
	'revcs-show-comment-parsed' => 'Comentario analizado: $1',
	'revcs-show-comment-raw' => 'Comentario en bruto: $1',
	'revcs-show-loglinktext' => 'o rexistro de cambios nos comentarios suplementarios',
	'revcs-show-no-db-row' => 'Non se atopou o comentario suplementario da revisión $1.',
	'revcs-show-revision' => 'Revisión: $1',
	'revcs-show-revision-id' => 'ID da revisión: $1 ($2)',
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
	'log-name-revisioncommentsupplement' => 'Protokol wudospołnjowacych komentarow',
	'logentry-revisioncommentsupplement-create' => '$1 wutwori wudospołnjowacy komentar, $6 wersije $4',
	'logentry-revisioncommentsupplement-delete' => '$1 zhaša wudospołnjowacy komentar, $5 wersije $4',
	'logentry-revisioncommentsupplement-modify' => '$1 změni wudospołnjowacy komentar wot $5 do $6 wersije $4',
	'revcs-alert-existsupp' => 'wudospołnjowacy komentar wersije eksistuje.',
	'revcs-alert-invalidcomment' => 'wudospołnjowacy komentar je njepłaćiwy.',
	'revcs-alert-norevision' => 'wersija we wersijowej tabeli njeeksistuje.',
	'revcs-alert-revid' => '"$1" je wopačny wersijowy ID.',
	'revcs-error' => 'Zmylk: $1',
	'revcs-error-denied' => 'składowanje wudospołnjowaceho komentara je so wotpokazało.',
	'revcs-error-unexpected' => 'njewočakowany zmylk wustupił.',
	'revcs-form-comment' => 'Wudospołnjowacy komentar:',
	'revcs-form-preview' => 'přehlad',
	'revcs-form-revision-id' => 'ID wersije:',
	'revcs-form-show' => 'pokazać',
	'revcs-form-submit' => 'wotpósłać',
	'revcs-form-summary' => 'Zjeće:',
	'revcs-history-comment' => '[Wudospołnjowacy komentar: $1]',
	'revcs-log-nocomment' => '(žadyn)',
	'revcs-preview-comment' => 'Přehlad wudospołnjowaceho komentara: $1',
	'revcs-preview-summary' => 'Přehlad zjeća: $1',
	'revcs-set' => 'Wudospołnjowacy komentar je so składował.',
	'revcs-show-comment-parsed' => 'Parsowany komentar: $1',
	'revcs-show-comment-raw' => 'Hruby komentar: $1',
	'revcs-show-loglinktext' => 'Protokol změnow wudospołnjowaceho komentara',
	'revcs-show-no-db-row' => 'Wudospołnjowacy komentar wersije $1 njeje so namakał.',
	'revcs-show-revision' => 'Wersija: $1',
	'revcs-show-revision-id' => 'ID wersije: $1 ($2)',
	'revcs-show-timestamp' => 'Wobdźěłowanski datum a čas: $1 ($2)',
	'revcs-show-user' => 'Wužiwar: $1 $2 (ID wužiwarja: $3)',
	'revcs-warning' => 'Warnowanje: $1',
);

/** Italian (italiano)
 * @author Darth Kule
 */
$messages['it'] = array(
	'revcs-error' => 'Errore: $1',
	'revcs-form-preview' => 'anteprima',
	'revcs-form-show' => 'mostra',
	'revcs-form-submit' => 'invia',
	'revcs-warning' => 'Attenzione: $1',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'action-supplementcomment' => '補足コメントの操作',
	'action-supplementcomment-restricted' => '補足コメントへの制限された操作の実行',
	'group-supplement' => '補足コメント係',
	'group-supplement-member' => '{{GENDER:$1|補足コメント係}}',
	'grouppage-supplement' => '{{ns:project}}:補足コメント係',
	'log-name-revisioncommentsupplement' => '版補足コメント記録',
	'log-description-revisioncommentsupplement' => '{{ns:special}}:RevisionCommentSupplement での操作の記録です。',
	'logentry-revisioncommentsupplement-create' => '$1 が版 $4 の補足コメント $6 を作成しました',
	'logentry-revisioncommentsupplement-delete' => '$1 が版 $4 の補足コメント $5 を削除しました',
	'logentry-revisioncommentsupplement-modify' => '$1 が版 $4 の補足コメント $5 を $6 に変更しました',
	'revisioncommentsupplement' => '版への補足コメント',
	'revcs-desc' => '履歴ページで、それぞれの版に補足コメントを表示できるようにする',
	'revcs-alert-existsupp' => '指定した版への補足コメントが存在します。',
	'revcs-alert-invalidcomment' => '補足コメントが無効です。',
	'revcs-alert-norevision' => '指定した版は、版テーブル内にありません。',
	'revcs-alert-revid' => '「$1」は間違った版 ID です。',
	'revcs-alert-samecomment' => '保存しようとした補足コメントは、指定した版の要約と同じ内容です。',
	'revcs-alert-samesuppcomment' => '保存しようとした補足コメントは、データベース内の補足コメントと同じ内容です。',
	'revcs-editlink' => '<nowiki>[</nowiki>[[$1|補足の編集]]<nowiki>]</nowiki>',
	'revcs-error' => 'エラー: $1',
	'revcs-error-denied' => '補足コメントの保存を拒否しました。',
	'revcs-error-unexpected' => '予期しないエラーが発生しました。',
	'revcs-form-comment' => '補足コメント:',
	'revcs-form-legend' => '版への補足コメント',
	'revcs-form-preview' => 'プレビュー',
	'revcs-form-revision-id' => '版 ID:',
	'revcs-form-show' => '表示',
	'revcs-form-submit' => '保存',
	'revcs-form-summary' => '要約:',
	'revcs-history-comment' => '[補足コメント: $1]',
	'revcs-log-comment' => '$1 ($2)',
	'revcs-log-nocomment' => '(なし)',
	'revcs-preview-comment' => '補足コメントのプレビュー: $1',
	'revcs-preview-summary' => '要約のプレビュー: $1',
	'revcs-set' => '補足コメントを設定しました。',
	'revcs-show-comment-parsed' => '整形済み補足コメント: $1',
	'revcs-show-comment-raw' => '生の補足コメント: $1',
	'revcs-show-loglinktext' => '補足コメント変更記録',
	'revcs-show-no-db-row' => '版 $1 への補足コメントはありません。',
	'revcs-show-revision' => '版: $1',
	'revcs-show-revision-id' => '版 ID: $1 ($2)',
	'revcs-show-timestamp' => '編集日時: $1 ($2)',
	'revcs-show-user' => '利用者: $1 $2 (利用者 ID: $3)',
	'revcs-warning' => '警告: $1',
	'right-supplementcomment' => '補足コメントを操作',
	'right-supplementcomment-restricted' => '補足コメントへの制限された操作を実行',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'revcs-error' => 'Feeler: $1',
	'revcs-error-unexpected' => 'En onerwaarte Feeler ass geschitt.',
	'revcs-form-show' => 'weisen',
	'revcs-form-summary' => 'Resumé:',
	'revcs-log-nocomment' => '(keen)',
	'revcs-show-revision' => 'Versioun: $1',
	'revcs-show-user' => 'Benotzer: $1 $2 (Benotzer ID: $3)',
	'revcs-warning' => 'Opgepasst: $1',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'action-supplementcomment' => 'работење со додатни коментари',
	'action-supplementcomment-restricted' => 'работење со додатни коментари со ограничени дејства',
	'group-supplement' => 'ДодадниКоментари',
	'group-supplement-member' => '{{GENDER:$1|ДодатниКоментари}}',
	'grouppage-supplement' => '{{ns:project}}:ДодатниКоментари',
	'log-name-revisioncommentsupplement' => 'Дневник на додатни коментари',
	'log-description-revisioncommentsupplement' => 'Дневник на работи со {{ns:special}}:ДодатниКоментариНаРевизии.',
	'logentry-revisioncommentsupplement-create' => '$1 стави додатен коментар, $6 на ревизијата $4',
	'logentry-revisioncommentsupplement-delete' => '$1 избриша додатен коментар, $5 на ревизијата $4',
	'logentry-revisioncommentsupplement-modify' => '$1 измени додатен коментар од $5 на $6 од ревизијата $4',
	'revisioncommentsupplement' => 'Додатни коментари за ревизии',
	'revcs-desc' => 'Овозможува приказ на додатни коментари во секој ред од ревизиите во историте на страниците.',
	'revcs-alert-existsupp' => 'додатниот коментар на ревизијата постои.',
	'revcs-alert-invalidcomment' => 'додатниот коментар е неважечки.',
	'revcs-alert-norevision' => 'ревизијата не фигурира во табелата на ревизии.',
	'revcs-alert-revid' => 'Назнаката „$1“ е погрешна.',
	'revcs-alert-samecomment' => 'додатниот коментар е истата низа како описот на ревизијата.',
	'revcs-alert-samesuppcomment' => 'додатниот коментар е истата низа како додатниот коментар во табелата од базата на податоци.',
	'revcs-editlink' => '<nowiki>[</nowiki>[[$1|Додатно уредување]]<nowiki>]</nowiki>',
	'revcs-error' => 'Грешка: $1',
	'revcs-error-denied' => 'одбиено зачувувањето на додатниот коментар.',
	'revcs-error-unexpected' => 'се појави неочекувана грешка.',
	'revcs-form-comment' => 'Додатен коментар:',
	'revcs-form-legend' => 'Додатен коментар за ревизијата',
	'revcs-form-preview' => 'преглед',
	'revcs-form-revision-id' => 'Назнака на ревизијата:',
	'revcs-form-show' => 'прикажи',
	'revcs-form-submit' => 'поднеси',
	'revcs-form-summary' => 'Опис:',
	'revcs-history-comment' => '[Додатен коментар: $1]',
	'revcs-log-nocomment' => '(нема)',
	'revcs-preview-comment' => 'Преглед на додатниот коментар: $1',
	'revcs-preview-summary' => 'Преглед на описот: $1',
	'revcs-set' => 'Додатниот коментар е зададен.',
	'revcs-show-comment-parsed' => 'Парсиран коментар: $1',
	'revcs-show-comment-raw' => 'Сиров коментар: $1',
	'revcs-show-loglinktext' => 'дневникот на измени во додатните коментари',
	'revcs-show-no-db-row' => 'Не го пронајдов додатниот коментар на ревизијата $1.',
	'revcs-show-revision' => 'Ревизија: $1',
	'revcs-show-revision-id' => 'Назнака на ревизијата: $1 ($2)',
	'revcs-show-timestamp' => 'Датум и време на уредување: $1 ($2)',
	'revcs-show-user' => 'Корисник: $1 $2 (корисничка назнака: $3)',
	'revcs-warning' => 'Предупредување: $1',
	'right-supplementcomment' => 'Работење со додатни коментари',
	'right-supplementcomment-restricted' => 'Работење со додатни коментари со ограничени дејства',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 */
$messages['nl'] = array(
	'revcs-alert-revid' => '"$1" is een verkeerd versienummer.',
	'revcs-error' => 'Fout: $1',
	'revcs-form-revision-id' => 'Versienummer',
	'revcs-form-summary' => 'Samenvatting:',
	'revcs-log-nocomment' => '(geen)',
	'revcs-preview-summary' => 'Samenvatting nakijken: $1',
	'revcs-show-revision' => 'Versie: $1',
	'revcs-show-revision-id' => 'Versienummer: $1 ($2)',
	'revcs-show-timestamp' => 'Bezig met bewerken van datum en tijd: $1 ($2)',
	'revcs-show-user' => 'Gebruiker: $1 $2 (Gebruikersnummer: $3)',
	'revcs-warning' => 'Waarschuwing: $1',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'revcs-form-show' => 'ښکاره کول',
	'revcs-form-submit' => 'سپارل',
	'revcs-form-summary' => 'لنډيز:',
	'revcs-log-nocomment' => '(هېڅ)',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Luckas Blade
 */
$messages['pt-br'] = array(
	'revcs-form-submit' => 'enviar',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'revcs-form-show' => 'చూపించు',
	'revcs-form-summary' => 'సారాంశం:',
	'revcs-log-nocomment' => '(ఏమీలేదు)',
	'revcs-show-comment-raw' => 'ముడి వ్యాఖ్య: $1',
	'revcs-warning' => 'హెచ్చరిక: $1',
);

