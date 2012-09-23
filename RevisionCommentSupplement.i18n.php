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
	'revcs-alert-exist-supplement' => 'Der ergänzende Kommentar der Version ist bereits vorhanden.',
	'revcs-alert-norevision' => 'Die Version ist nicht in der Versionstabelle vorhanden.',
	'revcs-alert-revision-id' => '„$1“ ist eine falsche Versionskennung.',
	'revcs-alert-supplement-asterisk' => 'Der eingegebene ergänzende Kommentar ist mit einem Sternchen versehen.',
	'revcs-alert-supplement-empty' => 'Es wurde kein ergänzender Kommentar eingegeben.',
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
	'revcs-show-supplement-parsed' => 'Ergänzender Kommentar (geparst): $1',
	'revcs-show-supplement-raw' => 'Ergänzender Kommentar (roh): $1',
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
	'revcs-alert-supplement-asterisk' => 'el comentario adicional en la entrada es asterisco.',
	'revcs-alert-supplement-empty' => 'el comentario complementario en la entrada está vacío.',
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
	'revcs-show-loglinktext' => 'el registro de cambios de comentarios adicionales',
	'revcs-show-no-db-row' => 'No se ha encontrado el comentario adicional de la revisión $1.',
	'revcs-show-revision' => 'Revisión: $1',
	'revcs-show-revision-id' => 'ID de la revisión:  $1  ($2)',
	'revcs-show-supplement-parsed' => 'Comentario analizado: $1',
	'revcs-show-supplement-raw' => 'Comentario en bruto: $1',
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
	'revcs-alert-exist-supplement' => 'o comentario suplementario da revisión existe na táboa da base de datos.',
	'revcs-alert-norevision' => 'non existe a revisión na táboa de revisións.',
	'revcs-alert-revision-id' => '"$1" é un identificador de revisión erróneo.',
	'revcs-alert-supplement-asterisk' => 'o comentario suplementario é un asterisco.',
	'revcs-alert-supplement-empty' => 'o comentario suplementario está baleiro.',
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
	'revcs-show-supplement-parsed' => 'Comentario suplementario analizado: $1',
	'revcs-show-supplement-raw' => 'Comentario suplementario en bruto: $1',
	'revcs-show-timestamp' => 'Data e hora de edición: $1 ($2)',
	'revcs-show-user' => 'Usuario: $1 $2 (ID do usuario: $3)',
	'revcs-warning' => 'Atención: $1',
	'revcs-written' => 'Escribiuse o comentario suplementario.',
	'right-supplementcomment' => 'Administrar os comentarios suplementarios',
	'right-supplementcomment-restricted' => 'Administrar os comentarios suplementarios con accións restrinxidas',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'action-supplementcomment' => 'z wudospołnjowacymi komentarami dźěłać',
	'action-supplementcomment-restricted' => 'z wudospołnjowacymi komentarami z wobmjezowanymi akcijemi dźěłać',
	'grouppage-supplement' => '{{ns:project}}:Wudospołnjowace komentary',
	'log-name-revisioncommentsupplement' => 'Protokol wudospołnjowacych komentarow',
	'logentry-revisioncommentsupplement-create' => '$1 wutwori wudospołnjowacy komentar, $6 wersije $4',
	'logentry-revisioncommentsupplement-delete' => '$1 zhaša wudospołnjowacy komentar, $5 wersije $4',
	'logentry-revisioncommentsupplement-modify' => '$1 změni wudospołnjowacy komentar wot $5 do $6 wersije $4',
	'revcs-alert-exist-supplement' => 'wudospołnjowacy komentar wersije eksistuje.',
	'revcs-alert-norevision' => 'wersija we wersijowej tabeli njeeksistuje.',
	'revcs-alert-revision-id' => '"$1" je wopačny wersijowy ID.',
	'revcs-error' => 'Zmylk: $1',
	'revcs-error-denied' => 'składowanje wudospołnjowaceho komentara je so wotpokazało.',
	'revcs-error-unexpected' => 'njewočakowany zmylk wustupił.',
	'revcs-form-preview' => 'přehlad',
	'revcs-form-revision-id' => 'ID wersije:',
	'revcs-form-show' => 'pokazać',
	'revcs-form-submit' => 'wotpósłać',
	'revcs-form-summary' => 'Zjeće:',
	'revcs-form-supplement' => 'Wudospołnjowacy komentar:',
	'revcs-history-supplement' => '[Wudospołnjowacy komentar: $1]',
	'revcs-log-nosupplement' => '(žadyn)',
	'revcs-preview-summary' => 'Přehlad zjeća: $1',
	'revcs-preview-supplement' => 'Přehlad wudospołnjowaceho komentara: $1',
	'revcs-show-loglinktext' => 'Protokol změnow wudospołnjowaceho komentara',
	'revcs-show-no-db-row' => 'Wudospołnjowacy komentar wersije $1 njeje so namakał.',
	'revcs-show-revision' => 'Wersija: $1',
	'revcs-show-revision-id' => 'ID wersije: $1 ($2)',
	'revcs-show-supplement-parsed' => 'Parsowany komentar: $1',
	'revcs-show-supplement-raw' => 'Hruby komentar: $1',
	'revcs-show-timestamp' => 'Wobdźěłowanski datum a čas: $1 ($2)',
	'revcs-show-user' => 'Wužiwar: $1 $2 (ID wužiwarja: $3)',
	'revcs-warning' => 'Warnowanje: $1',
	'revcs-written' => 'Wudospołnjowacy komentar je so składował.',
	'right-supplementcomment' => 'Z wudospołnjowacymi komentarami dźěłać',
	'right-supplementcomment-restricted' => 'Z wudospołnjowacymi komentarami z wobmjezowanymi akcijemi dźěłać',
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
	'group-supplement' => 'コメント補足係',
	'group-supplement-member' => '{{GENDER:$1|コメント補足係}}',
	'grouppage-supplement' => '{{ns:project}}:コメント補足係',
	'log-name-revisioncommentsupplement' => '版補足コメント記録',
	'log-description-revisioncommentsupplement' => '{{ns:special}}:RevisionCommentSupplement での操作の記録です。',
	'logentry-revisioncommentsupplement-create' => '$1 が版 $4 の補足コメント $6 を作成しました',
	'logentry-revisioncommentsupplement-delete' => '$1 が版 $4 の補足コメント $5 を削除しました',
	'logentry-revisioncommentsupplement-modify' => '$1 が版 $4 の補足コメント $5 を $6 に変更しました',
	'revisioncommentsupplement' => '版のコメントの補足',
	'revcs-desc' => '履歴ページで、それぞれの版に補足コメントを表示できるようにする',
	'revcs-alert-exist-supplement' => '指定した版への補足コメントはデータベース内に存在します。',
	'revcs-alert-norevision' => '指定した版は revision テーブル内にありません。',
	'revcs-alert-revision-id' => '「$1」は正しくない版 ID です。',
	'revcs-alert-supplement-asterisk' => '入力した補足コメントがアスタリスクです。',
	'revcs-alert-supplement-empty' => '入力した補足コメントが空です。',
	'revcs-alert-supplement-same-as-summary' => '入力した補足コメントは、指定した版の要約と同じ内容です。',
	'revcs-alert-supplement-same-as-supplement' => '入力した補足コメントは、データベース内の補足コメントと同じ内容です。',
	'revcs-editlink' => '<nowiki>[</nowiki>[[$1|補足の編集]]<nowiki>]</nowiki>',
	'revcs-error' => 'エラー: $1',
	'revcs-error-denied' => '補足コメントの保存を拒否しました。',
	'revcs-error-unexpected' => '予期しないエラーが発生しました。',
	'revcs-form-legend' => '版のコメントの補足',
	'revcs-form-preview' => 'プレビュー',
	'revcs-form-revision-id' => '版 ID:',
	'revcs-form-show' => '表示',
	'revcs-form-submit' => '保存',
	'revcs-form-summary' => '要約:',
	'revcs-form-supplement' => '補足コメント:',
	'revcs-history-supplement' => '[補足: $1]',
	'revcs-log-nosupplement' => '(なし)',
	'revcs-log-supplement2' => '$1 ($2)',
	'revcs-preview-summary' => '要約のプレビュー: $1',
	'revcs-preview-supplement' => '補足コメントのプレビュー: $1',
	'revcs-show-loglinktext' => '補足コメント変更記録',
	'revcs-show-no-db-row' => '版 $1 への補足コメントはありません。',
	'revcs-show-revision' => '版: $1',
	'revcs-show-revision-id' => '版 ID: $1 ($2)',
	'revcs-show-supplement-parsed' => '構文解析済み補足コメント: $1',
	'revcs-show-supplement-raw' => '生の補足コメント: $1',
	'revcs-show-timestamp' => '編集日時: $1 ($2)',
	'revcs-show-user' => '利用者: $1 $2 (利用者 ID: $3)',
	'revcs-warning' => '警告: $1',
	'revcs-written' => '補足コメントを書き込みました。',
	'right-supplementcomment' => '補足コメントを操作',
	'right-supplementcomment-restricted' => '補足コメントへの制限された操作を実行',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'revcs-error' => 'Feeler: $1',
	'revcs-error-unexpected' => 'En onerwaarte Feeler ass geschitt.',
	'revcs-form-preview' => 'Kucken ouni ze späicheren',
	'revcs-form-show' => 'weisen',
	'revcs-form-summary' => 'Resumé:',
	'revcs-show-revision' => 'Versioun: $1',
	'revcs-show-revision-id' => 'Versioun ID: $1 ($2)',
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
	'revcs-alert-exist-supplement' => 'додатниот коментар на ревизијата постои.',
	'revcs-alert-norevision' => 'ревизијата не фигурира во табелата на ревизии.',
	'revcs-alert-revision-id' => 'Назнаката „$1“ е погрешна.',
	'revcs-alert-supplement-asterisk' => 'внесениот додатен коментар е означен со ѕвездичка',
	'revcs-alert-supplement-empty' => 'внесениот додатен коментар е празен',
	'revcs-alert-supplement-same-as-summary' => 'додатниот коментар е истата низа како описот на ревизијата.',
	'revcs-alert-supplement-same-as-supplement' => 'додатниот коментар е истата низа како додатниот коментар во табелата од базата на податоци.',
	'revcs-editlink' => '<nowiki>[</nowiki>[[$1|Додатно уредување]]<nowiki>]</nowiki>',
	'revcs-error' => 'Грешка: $1',
	'revcs-error-denied' => 'одбиено зачувувањето на додатниот коментар.',
	'revcs-error-unexpected' => 'се појави неочекувана грешка.',
	'revcs-form-legend' => 'Додатен коментар за ревизијата',
	'revcs-form-preview' => 'преглед',
	'revcs-form-revision-id' => 'Назнака на ревизијата:',
	'revcs-form-show' => 'прикажи',
	'revcs-form-submit' => 'поднеси',
	'revcs-form-summary' => 'Опис:',
	'revcs-form-supplement' => 'Додатен коментар:',
	'revcs-history-supplement' => '[Додатен коментар: $1]',
	'revcs-log-nosupplement' => '(нема)',
	'revcs-preview-summary' => 'Преглед на описот: $1',
	'revcs-preview-supplement' => 'Преглед на додатниот коментар: $1',
	'revcs-show-loglinktext' => 'дневникот на измени во додатните коментари',
	'revcs-show-no-db-row' => 'Не го пронајдов додатниот коментар на ревизијата $1.',
	'revcs-show-revision' => 'Ревизија: $1',
	'revcs-show-revision-id' => 'Назнака на ревизијата: $1 ($2)',
	'revcs-show-supplement-parsed' => 'Парсиран коментар: $1',
	'revcs-show-supplement-raw' => 'Сиров коментар: $1',
	'revcs-show-timestamp' => 'Датум и време на уредување: $1 ($2)',
	'revcs-show-user' => 'Корисник: $1 $2 (корисничка назнака: $3)',
	'revcs-warning' => 'Предупредување: $1',
	'revcs-written' => 'Додатниот коментар е зададен.',
	'right-supplementcomment' => 'Работење со додатни коментари',
	'right-supplementcomment-restricted' => 'Работење со додатни коментари со ограничени дејства',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 */
$messages['nl'] = array(
	'revcs-error' => 'Fout: $1',
	'revcs-form-revision-id' => 'Versienummer',
	'revcs-form-summary' => 'Samenvatting:',
	'revcs-log-nosupplement' => '(geen)',
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
	'revcs-log-nosupplement' => '(هېڅ)',
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
	'revcs-log-nosupplement' => '(ఏమీలేదు)',
	'revcs-show-supplement-raw' => 'ముడి వ్యాఖ్య: $1',
	'revcs-warning' => 'హెచ్చరిక: $1',
);

