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

class SpecialRevisionCommentSupplement extends SpecialPage
{
	var $error = '';
	var $save = false, $preview = false, $show = false;
	var $rId = '', $missrId = '', $comment = '', $summary = '';
	var $formtype;
	var $firsttime;
	var $edittime = '', $starttime = '';
	var $mTokenOk;
	var $mTokenOkExceptSuffix;

	public function __construct() {
		parent::__construct( 'RevisionCommentSupplement', 'supplementcomment', true );
	}

	function execute( $par ) {
		global $wgRequest, $wgOut, $wgLang, $wgUser;
		$this->setHeaders();

		if ( !$this->userCanExecute($wgUser) ) {
			$this->displayRestrictionError();
			return;
		}

		if ( !$wgUser->isAllowed( 'edit' ) ) {
			$wgOut->permissionRequired( 'edit' );
			return;
		}

		if ( !$wgUser->isAllowed( 'supplementcomment' ) ) {
			$wgOut->permissionRequired( 'supplementcomment' );
			return;
		}

		if ( wfReadOnly() ) {
			$wgOut->readOnlyPage();
			return;
		}

		if( $wgUser->isBlocked() ){
			$wgOut->blockedPage();
			return;
		}

		# Get request data from, e.g.
		# from EditPage.php
		$this->importFormData( $wgRequest, $par );

		# from EditPage.php
		if ( $this->error ) {
			$this->formtype = 'error';
		} elseif ( $this->save ) {
			$this->formtype = 'save';
		} elseif ( $this->preview ) {
			$this->formtype = 'preview';
		} elseif ( $this->show ) {
			$this->formtype = 'show';
		} else { # First time through
			$this->firsttime = true;
			$this->formtype = 'initial';
		}

		# Do stuff

		# from EditPage.php
		$form = "<fieldset>\n<legend>" . wfMessage( 'revcs-form-legend' ) . "</legend>\n";
		$action = $this->getTitle()->getLocalURL( array( 'action' => 'submit' ) );
		$form .= Xml::openElement( 'form', array( 'method' => 'post', 'action' => $action, 'id' => 'supplementcomment' ) ) . "\n";

		$form .= "<div>" . Xml::inputLabel( wfMessage( 'revcs-revision-id' ), 'rID', 'rID', 20, $this->rId,
			array( 'maxlength' => '14', 'accesskey' => 'r', ) ) . "</div>\n";
		$form .= "<div>";
		$form .= Xml::inputLabel( wfMessage( 'revcs-comment' ), 'comment', 'comment', 60, $this->comment,
			array( 'maxlength' => '255', 'spellcheck' => 'true', 'accesskey' => 'c', ) );
		$form .= "</div>\n";
		$form .= "<div>";
		$form .= Xml::inputLabel( wfMessage( 'revcs-summary' ), 'wpSummary', 'wpSummary', 60, $this->summary,
			array( 'maxlength' => '255', 'spellcheck' => 'true', 'accesskey' => 's', ) );
		$form .= "</div>\n";

		$form .= "<div>";
		$form .= Xml::submitButton( wfMessage( 'revcs-submit' ), array( 'id' => 'save', 'name' => 'save', 'accesskey' => 'a', ) );
		$form .= Xml::submitButton( wfMessage( 'revcs-preview' ), array( 'id' => 'preview', 'name' => 'preview', 'accesskey' => 'p', ) );
		$form .= Xml::submitButton( wfMessage( 'revcs-show' ), array( 'id' => 'show', 'name' => 'show', 'accesskey' => 'h', ) );
		$form .= "</div>\n";

		$form .= "<div>";
		$form .= Xml::input( 'wpEditToken', false, $wgUser->getEditToken(), array( 'type' => 'hidden' ) );
		$form .= Xml::input( 'wpEdittime', false, $this->edittime, array( 'type' => 'hidden' ) );
		$form .= Xml::input( 'wpStarttime', false, $this->starttime, array( 'type' => 'hidden' ) );
		$form .= "</div>\n";

		$form .= Xml::closeElement( 'form' ) . "\n</fieldset>\n";

		$output = '';
		if ( $this->formtype == 'preview' ) {
			$output = $this->getPreview( $this->rId, $this->comment, $this->summary );
		} elseif ( $this->formtype == 'show' ) {
			$output = $this->getRevisionCommentSupplement( $this->rId );
		} elseif ( $this->formtype == 'save') {
			$output = $this->setRevisionCommentSupplement( $this->rId, $this->comment, $this->summary );
		} elseif ( $this->formtype == 'error') {
			$output = $this->showErrorMessage();
		}

		# 出力
		$wgOut->addModules( 'ext.RevisionCommentSupplement.special' );
		$wgOut->addHTML( $form );
		$wgOut->addHTML( $output );
	}

	function loadMessages() {
		static $messagesLoaded = false;
		global $wgMessageCache;
		if ( $messagesLoaded ) return;
		$messagesLoaded = true;

		require( dirname( __FILE__ ) . '/RevisionCommentSupplement.i18n.php' );
		foreach ( $allMessages as $lang => $langMessages ) {
			$wgMessageCache->addMessages( $langMessages, $lang );
		}
		return true;
	}

	# from EditPage.php
	function importFormData( &$request, $par ) {
		global $wgLang, $wgUser;

		wfProfileIn( __METHOD__ );

		# Section edit can come from either the form or a link

		if ( $request->wasPosted() ) {
			# Truncate for whole multibyte characters.
			$this->comment = $wgLang->truncate( $request->getText( 'comment' ), 255 );
			$this->summary = $wgLang->truncate( $request->getText( 'wpSummary' ), 255 );
			$tempId = $request->getText( 'rID' );
			if ( is_int( $tempId ) || (int)$tempId > 0 ) {
				$this->rId = $tempId;
				$this->missrId = '';
				$this->error = '';
			} else {
				$this->rId = '';
				$this->missrId = $tempId;
				$this->error = 'rId';
			}

			$this->save = $request->getCheck( 'save' );
			$this->preview = $request->getCheck( 'preview' );
			$this->show = $request->getCheck( 'show' );

			$this->edittime = $request->getVal( 'wpEdittime' );
			$this->starttime = $request->getVal( 'wpStarttime' );

			if ( $this->tokenOk( $request ) ) {
				# Some browsers will not report any submit button
				# if the user hits enter in the comment box.
				# The unmarked state will be assumed to be a save,
				# if the form seems otherwise complete.
				wfDebug( __METHOD__ . ": Passed token check.\n" );
			} else {
				# Page might be a hack attempt posted from
				# an external site. Preview instead of saving.
				wfDebug( __METHOD__ . ": Failed token check; forcing preview\n" );
				$this->preview = true;
			}
		} else {
			# Not a posted form? Start with nothing.
			wfDebug( __METHOD__ . ": Not a posted form.\n" );
			$this->starttime    = wfTimestamp( TS_MW );
			$this->comment      = '';
			$this->edit         = false;
			$this->preview      = false;
			if ( is_int( $par ) || (int)$par > 0) {
				$this->rId      = $par;
			} else {
				$this->rId      = '';
			}

			$this->save         = false;
			$this->summary      = '';
		}

		wfProfileOut( __METHOD__ );
	}

	# from EditPage.php
	protected function getPreview( $rev, $comment = "", $summary = "" ) {
		if ( ( !$this->preview ) ) {
			return '';
		}

		$s = "\n" . '<div class="ex-rcs-rev-preview">' . "\n";

		if ( $comment == '*' ) {
			$s .= '<p class="error">' . wfMessage( 'revcs-error', wfMessage( 'revcs-error-invalidcomment' ) ) . "</p>\n";
		}

		$dbr = wfGetDB( DB_SLAVE );
		$db_row = $dbr->selectRow( 'revision', 'rev_id,rev_comment', array( 'rev_id' => $rev ), __METHOD__ );
		if ( isset($db_row) && isset($db_row->rev_id) ) {
			if ( $db_row->rev_comment == $comment ) {
				$s .= '<p class="warning">' . wfMessage( 'revcs-warning', wfMessage( 'revcs-alert-samecomment' ) ) . "</p>\n";
			}
		} else {
			$s .= '<p class="warning">' . wfMessage( 'revcs-warning', wfMessage( 'revcs-alert-norevision' ) ) . "</p>\n";
		}

		$db_row = $dbr->selectRow('rev_comment_supp', 'rcs_rev_id,rcs_comment', array( 'rcs_rev_id' => $rev ), __METHOD__ );
		if ( isset($db_row) && isset($db_row->rcs_rev_id) ) {
			$s .= '<p class="warning">' . wfMessage( 'revcs-warning', wfMessage( 'revcs-alert-existsupp' ) ) . "</p>\n";
			if ( $db_row->rcs_comment == $comment ) {
				$s .= '<p class="warning">' . wfMessage( 'revcs-warning', wfMessage( 'revcs-alert-samesuppcomment' ) ) . "</p>\n";
			}
		} elseif ( $comment == '' ) {
			$s .= '<p class="warning">' . wfMessage( 'revcs-warning', wfMessage( 'revcs-alert-invalidcomment' ) ) . "</p>\n";
		}

		$s .= "<ul>\n";

		if ( $comment && $comment != '*' ) { # from Linker::commentBlock
			$s .= "<li>" . wfMessage( 'revcs-comment-preview' ) . Linker::formatComment( $comment ) . "</li>\n";
		}

		if ( $summary && $summary != '*' ) { # from Linker::commentBlock
			$s .= "<li>" . wfMessage( 'revcs-summary-preview' ) . Linker::formatComment( $summary ) . "</li>\n";
		}

		if ( $this->rId ) {
			$s .= "<li>" . wfMessage( 'revcs-revision' ) . $this->showRevisionHistoryLine( $rev ) . "</li>\n";
		}

		$s .= "</ul>\n</div>";

		return $s;
	}

	function getRevisionCommentSupplement($rev) {
		list( $success, $rcs_rev_id, $rcs_user, $rcs_user_name, $rcs_timestamp, $rcs_comment )
			= RevisionCommentSupplement::getKey($rev);

		$s = "\n" . '<div class="ex-rcs-rev-show">';

		if ( $success == false ) {
			$s = "\n<p>" . wfMessage( 'revcs-no-db-row', $rev ) . "</p>";
			$s .= "\n<ul>\n";
			$s .= "<li>" . wfMessage( 'revcs-revision' ) . $this->showRevisionHistoryLine( $rev ) . "</li>\n";
			$s .= "</ul>";
		} else {
			$s .= "\n<ul>\n";
			$s .= "<li>" . wfMessage( 'revcs-revision-id' ) . $rcs_rev_id . "</li>\n";
			$s .= "<li>" . wfMessage( 'revcs-user' ) . Linker::userLink( $rcs_user, $rcs_user_name )
				. ' ' . Linker::userToolLinks( $rcs_user, $rcs_user_name )
				. "(" . wfMessage( 'revcs-user-id' ) . $rcs_user . ")</li>\n";
			$s .= "<li>" . wfMessage( 'revcs-timestamp' ) . $this->getLanguage()->userTimeAndDate( $rcs_timestamp, $this->getUser() )
				. " (" . $rcs_timestamp . ")</li>\n";
			$s .= "<li>" . wfMessage( 'revcs-comment-raw' ) . htmlspecialchars( $rcs_comment ) . "</li>\n";
			$s .= "<li>" . wfMessage( 'revcs-comment-parse' ) . Linker::formatComment( $rcs_comment ) . "</li>\n";
			$s .= "<li>" . wfMessage( 'revcs-revision' ) . $this->showRevisionHistoryLine( $rev ) . "</li>\n";
			$s .= "</ul>";
		}

		$s .= "\n</div>\n";

		return $s;
	}

	function setRevisionCommentSupplement( $rev, $comment, $summary ) {
		global $wgUser;
		$isAllowedRestricted = $wgUser->isAllowed( 'supplementcomment-restricted' );
		$dbr = wfGetDB( DB_SLAVE );
		$e = false;
		$s = '';

		if ( $comment == '*' ) {
			$e = true;
			$s .= '<p class="error">' . wfMessage( 'revcs-error', wfMessage( 'revcs-alert-invalidcomment' ) ) . "</p>\n";
		}

		$db_row = $dbr->selectRow( 'revision', 'rev_id,rev_comment', array( 'rev_id' => $rev ), __METHOD__ );
		if ( $isAllowedRestricted ) {
			if ( isset($db_row) && isset($db_row->rev_id) ) {
				if ( $db_row->rev_comment == $comment ) {
					$e = true;
					$s .= '<p class="error">' . wfMessage( 'revcs-error', wfMessage( 'revcs-alert-samecomment' ) ) . "</p>\n";
				}
			} else {
				$s .= '<p class="warning">' . wfMessage( 'revcs-warning', wfMessage( 'revcs-alert-norevision' ) ) . "</p>\n";
			}
		} else {
			if ( isset($db_row) && isset($db_row->rev_id) ) {
				if ( $db_row->rev_comment == $comment ) {
					$e = true;
					$s .= '<p class="error">' . wfMessage( 'revcs-error', wfMessage( 'revcs-alert-samecomment' ) ) . "</p>\n";
				}
			} else {
				$e = true;
				$s .= '<p class="error">' . wfMessage( 'revcs-error', wfMessage( 'revcs-alert-norevision' ) ) . "</p>\n";
			}
		}

		$db_row = $dbr->selectRow('rev_comment_supp', '*', array( 'rcs_rev_id' => $rev ), __METHOD__ );
		if ( $isAllowedRestricted ) {
			if ( isset($db_row) && isset($db_row->rcs_rev_id) ) {
				$s .= '<p class="warning">' . wfMessage( 'revcs-warning', wfMessage( 'revcs-alert-existsupp' ) ) . "</p>\n";
				if ( $db_row->rcs_comment == $comment ) {
					$e = true;
					$s .= '<p class="error">' . wfMessage( 'revcs-error', wfMessage( 'revcs-alert-samesuppcomment' ) ) . "</p>\n";
				}
			}
		} else {
			if ( isset($db_row) && isset($db_row->rcs_rev_id) ) {
				if ( ( $db_row->rcs_user == $wgUser->getId() ) &&
					( $db_row->rcs_user_name == $wgUser->getName() ) &&
					( wfTimestamp( TS_UNIX ) - wfTimestamp( TS_UNIX, $db_row->rcs_timestamp ) <= 3600 )
				) {
					$s .= '<p class="warning">' . wfMessage( 'revcs-warning', wfMessage( 'revcs-alert-existsupp' ) ) . "</p>\n";
					if ( $db_row->rcs_comment == $comment ) {
						$e = true;
						$s .= '<p class="error">' . wfMessage( 'revcs-error', wfMessage( 'revcs-alert-samesuppcomment' ) ) . "</p>\n";
					}
				} else {
					$e = true;
					$s .= '<p class="error">' . wfMessage( 'revcs-error', wfMessage( 'revcs-alert-existsupp' ) ) . "</p>\n";
					if ( $db_row->rcs_comment == $comment ) {
						$s .= '<p class="error">' . wfMessage( 'revcs-error', wfMessage( 'revcs-alert-samesuppcomment' ) ) . "</p>\n";
					}
				}
			} elseif ( $comment == '' ) {
				$e = true;
				$s .= '<p class="error">' . wfMessage( 'revcs-error', wfMessage( 'revcs-alert-invalidcomment' ) ) . "</p>\n";
			}
		}

		if ( $e ) {
			$s .= '<p class="error">' . wfMessage( 'revcs-error', wfMessage( 'revcs-error-denied' ) ) . "</p>\n";
		} else {
			RevisionCommentSupplement::insert( $rev, $comment, $summary );
			$s .= "<p>" . wfMessage( 'revcs-set' ) . "</p>";
		}

		$s .= $this->getRevisionCommentSupplement( $rev );
		return $s;
	}

	function showErrorMessage() {
		$s = '';
		if ( $this->error == 'rId' ) {
			$s = '<p class="error">';
			$s .= wfMessage( 'revcs-error', wfMessage( 'revcs-alert-revid', htmlspecialchars( $this->missrId ) ) );
			$s .= "</p>\n";
		}

		return $s;
	}

	# from EditPage.php
	/**
	 * Make sure the form isn't faking a user's credentials.
	 *
	 * @param $request WebRequest
	 * @return bool
	 * @private
	 */
	function tokenOk( &$request ) {
		global $wgUser;
		$token = $request->getVal( 'wpEditToken' );
		$this->mTokenOk = $wgUser->matchEditToken( $token );
		$this->mTokenOkExceptSuffix = $wgUser->matchEditTokenNoSuffix( $token );
		return $this->mTokenOk;
	}

# from HistryAction.php class HistoryPager
	function showRevisionHistoryLine( $revID ) {
		$dbr = wfGetDB( DB_SLAVE );
		$db_row = $dbr->selectRow('revision', '*', array( 'rev_id' => $revID ), __METHOD__ );
		if ( !isset($db_row) || !isset($db_row->rev_id) ) {
			return wfMessage( 'revcs-alert-norevision' );
		}

		if ( $db_row->rev_id != $revID ) {
			return wfMessage( 'revcs-error-unexpected' );
		}

		$rev = new Revision( $db_row );

		return $this->create( $rev );
	}

	function create( Revision $rev ) {
		$s = '';

		$link = $this->revLink( $rev );

		$del = '';
		$user = $this->getUser();
		// Show checkboxes for each revision
		if ( $user->isAllowed( 'deleterevision' ) ) {

		// User can only view deleted revisions...
		} elseif ( $rev->getVisibility() && $user->isAllowed( 'deletedhistory' ) ) {
			// If revision was hidden from sysops, disable the link
			if ( !$rev->userCan( Revision::DELETED_RESTRICTED, $user ) ) {
				$cdel = Linker::revDeleteLinkDisabled( false );
			// Otherwise, show the link...
			} else {
				$query = array( 'type' => 'revision',
					'target' => $this->getTitle()->getPrefixedDbkey(), 'ids' => $rev->getId() );
				$del .= Linker::revDeleteLink( $query,
					$rev->isDeleted( Revision::DELETED_RESTRICTED ), false );
			}
		}
		if ( $del ) {
			$s .= " $del ";
		}

		$lang = $this->getLanguage();
		$dirmark = $lang->getDirMark();

		$s .= " $link";
		$s .= $dirmark;
		$s .= ' <span class="history-user">' .
			Linker::revUserTools( $rev, true ) . "</span>";
		$s .= $dirmark;

		if ( $rev->isMinor() ) {
			$s .= ' ' . ChangesList::flag( 'minor' );
		}

		# from SpecialUndelete.php
		$size = $rev->getSize();
		if( !is_null( $size ) ) {
			$s .= Linker::formatRevisionSize( $size );
		}

		$s .= Linker::revComment( $rev, false, true );

		return $s;
	}

	/**
	 * Create a link to view this revision of the page
	 *
	 * @param $rev Revision
	 * @return String
	 */
	function revLink( $rev ) {
		$date = $this->getLanguage()->userTimeAndDate( $rev->getTimestamp(), $this->getUser() );
		$date = htmlspecialchars( $date );
		if ( $rev->userCan( Revision::DELETED_TEXT, $this->getUser() ) ) {
			$link = Linker::linkKnown(
				$rev->getTitle(),
				$date,
				array(),
				array( 'oldid' => $rev->getId() )
			);
		} else {
			$link = $date;
		}
		if ( $rev->isDeleted( Revision::DELETED_TEXT ) ) {
			$link = "<span class=\"history-deleted\">$link</span>";
		}
		return $link;
	}
}
