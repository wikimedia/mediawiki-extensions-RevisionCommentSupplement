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

		if( $wgUser->isBlocked() ){
			$wgOut->blockedPage();
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

		# Get request data from, e.g.
		# from EditPage.php
		$this->importFormData( $wgRequest, $par );

		# from EditPage.php
		if ( $this->error ) {
			$this->formtype = 'error';
		} elseif ( $this->preview ) {
			$this->formtype = 'preview';
		} elseif ( $this->show ) {
			$this->formtype = 'show';
		} elseif ( $this->save ) {
			$this->formtype = 'save';
		} else { # First time through
			$this->formtype = 'initial';
		}

		# Do stuff
		$form = $this->createForm();

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

		# output
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

	# from EditPage::importFormData in EditPage.php
	/**
	 * This function collects the form data and uses it to populate various member variables.
	 * @param $request WebRequest
	 * @param $par string
	 */
	function importFormData( &$request, $par ) {
		global $wgLang;

		wfProfileIn( __METHOD__ );

		# Section edit can come from either the form or a link

		if ( $request->wasPosted() ) {
			# Truncate for whole multibyte characters.
			$this->comment = $wgLang->truncate( $request->getText( 'comment' ), 255 );
			$this->summary = $wgLang->truncate( $request->getText( 'wpSummary' ), 255 );
			$tempId = $request->getInt( 'rID' );
			if ( $tempId > 0 ) {
				$this->rId = $tempId;
				$this->missrId = '';
				$this->error = '';
			} else {
				$this->rId = '';
				$this->missrId = $request->getText( 'rID' );
				$this->error = 'rId';
			}

			$this->save = $request->getCheck( 'save' );
			$this->preview = $request->getCheck( 'preview' );
			$this->show = $request->getCheck( 'show' );

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
				$this->save = false;
			}
		} else {
			# Not a posted form? Start with nothing.
			wfDebug( __METHOD__ . ": Not a posted form.\n" );
			$this->comment      = '';
			$this->edit         = false;
			$this->preview      = false;
			$tempId = intval( $par );
			if ( $tempId > 0 ) {
				$this->rId      = $tempId;
			} else {
				$this->rId      = '';
			}

			$this->save         = false;
			$this->summary      = '';
		}

		wfProfileOut( __METHOD__ );
	}

	# from EditPage.php
	function createForm() {
		global $wgUser;
		$action = $this->getTitle()->getLocalURL( array( 'action' => 'submit' ) );
		$form = Xml::openElement( 'form', array( 'method' => 'post', 'action' => $action, 'id' => 'supplementcomment' ) ) . "\n";

		$form .= "<div>" . Xml::inputLabel( $this->msg( 'revcs-form-revision-id' )->text(), 'rID', 'rID', 15, $this->rId,
			array( 'maxlength' => '10', 'accesskey' => 'r', ) ) . "</div>\n";
		$form .= "<div>";
		$form .= Xml::inputLabel( $this->msg( 'revcs-form-comment' )->text(), 'comment', 'comment', 60, $this->comment,
			array( 'maxlength' => '255', 'spellcheck' => 'true', 'accesskey' => 'c', ) );
		$form .= "</div>\n";
		$form .= "<div>";
		$form .= Xml::inputLabel( $this->msg( 'revcs-form-summary' )->text(), 'wpSummary', 'wpSummary', 60, $this->summary,
			array( 'maxlength' => '255', 'spellcheck' => 'true', 'accesskey' => 's', ) );
		$form .= "</div>\n";

		$form .= "<div>";
		$form .= Xml::submitButton( $this->msg( 'revcs-form-submit' )->text(), array( 'id' => 'save', 'name' => 'save', 'accesskey' => 'a', ) );
		$form .= Xml::submitButton( $this->msg( 'revcs-form-preview' )->text(), array( 'id' => 'preview', 'name' => 'preview', 'accesskey' => 'p', ) );
		$form .= Xml::submitButton( $this->msg( 'revcs-form-show' )->text(), array( 'id' => 'show', 'name' => 'show', 'accesskey' => 'h', ) );
		$form .= "</div>\n";

		$form .= "<div>";
		$form .= Xml::input( 'wpEditToken', false, $wgUser->getEditToken(), array( 'type' => 'hidden' ) );
		$form .= "</div>\n";

		$form .= Xml::closeElement( 'form' );

		return Xml::fieldset( $this->msg( 'revcs-form-legend' )->text(), $form );
	}


	# from EditPage.php
	function getPreview( $revID, $comment = "", $summary = "" ) {
		if ( ( !$this->preview ) ) {
			return '';
		}

		$s = "\n" . '<div class="revcs-rev-preview">' . "\n";

		if ( $comment == '*' ) {
			$s .= $this->getAlertMessage( 'error', 'invalidcomment' );
		}

		$dbr = wfGetDB( DB_SLAVE );
		$db_row = $dbr->selectRow( 'revision', 'rev_id,rev_comment', array( 'rev_id' => $revID ), __METHOD__ );
		if ( isset($db_row) && isset($db_row->rev_id) ) {
			if ( $db_row->rev_comment == $comment ) {
				$s .= $this->getAlertMessage( 'warning', 'samecomment' );
			}
		} else {
			$s .= $this->getAlertMessage( 'warning', 'norevision' );
		}

		$db_row = $dbr->selectRow('rev_comment_supp', 'rcs_rev_id,rcs_comment', array( 'rcs_rev_id' => $revID ), __METHOD__ );
		if ( isset($db_row) && isset($db_row->rcs_rev_id) ) {
			$s .= $this->getAlertMessage( 'warning', 'existsupp' );
			if ( $db_row->rcs_comment == $comment ) {
				$s .= $this->getAlertMessage( 'warning', 'samesuppcomment' );
			}
		} elseif ( $comment == '' ) {
			$s .= $this->getAlertMessage( 'warning', 'invalidcomment' );
		}

		$o = '';

		if ( $comment && $comment != '*' ) { # from Linker::commentBlock
			$o .= "<li>" . $this->msg( 'revcs-preview-comment' )->rawParams( Linker::formatComment( $comment ) )->escaped() . "</li>\n";
		}
		if ( $summary && $summary != '*' ) { # from Linker::commentBlock
			$o .= "<li>" . $this->msg( 'revcs-preview-summary' )->rawParams( Linker::formatComment( $summary ) )->escaped() . "</li>\n";
		}
		if ( $revID ) {
			$o .= "<li>".
				$this->msg( 'revcs-show-revision' )->rawParams( $this->showRevisionHistoryLine( $revID ) )->escaped()
				. "</li>\n";
		}

		if ( $o != '' ) {
			$s .= "<ul>\n{$o}</ul>\n";
		}

		$s .= "</div>";

		return $s;
	}

	function getRevisionCommentSupplement( $revID ) {
		list( $success, $rcs_rev_id, $rcs_user, $rcs_user_name, $rcs_timestamp, $rcs_comment )
			= RevisionCommentSupplement::getKey( $revID );

		$s = "\n" . '<div class="revcs-rev-show">';

		if ( $success == false ) {
			$s = "\n<p>" . $this->msg( 'revcs-show-no-db-row', $revID )->escaped() . "</p>";
			$s .= "\n<ul>\n";
			$s .= "<li>"
				. $this->msg( 'revcs-show-revision' )->rawParams( $this->showRevisionHistoryLine( $revID ) )->escaped()
				. "</li>\n";
			$s .= "</ul>";
		} else {
			$s .= "\n<ul>\n";
			$s .= "<li>"
				. $this->msg( 'revcs-show-revision-id' )
					->rawParams(
						$rcs_rev_id,
						Linker::link(
							Title::makeTitleSafe( NS_SPECIAL, 'Log' ),
							$this->msg( 'revcs-show-loglinktext' )->text(),
							array(),
							array(
								'page' => 'Special:RevisionCommentSupplement/' . $rcs_rev_id
							)
						)
					)
					->escaped()
				. "</li>\n";
			$s .= "<li>" . $this->msg( 'revcs-show-timestamp' )
				->rawParams( $this->getLanguage()->userTimeAndDate( $rcs_timestamp, $this->getUser() ), $rcs_timestamp )
				. "</li>\n";
			$s .= "<li>" . $this->msg( 'revcs-show-user' )
				->rawParams(
					Linker::userLink( $rcs_user, $rcs_user_name ),
					Linker::userToolLinks( $rcs_user, $rcs_user_name ),
					$rcs_user
				)
				->escaped()
				. "</li>\n";
			$s .= "<li>"
				. $this->msg( 'revcs-show-comment-raw' )->rawParams( htmlspecialchars( $rcs_comment ) )->escaped()
				. "</li>\n";
			$s .= "<li>"
				. $this->msg( 'revcs-show-comment-parsed' )->rawParams( Linker::formatComment( $rcs_comment ) )->escaped()
				. "</li>\n";
			$s .= "<li>"
				. $this->msg( 'revcs-show-revision' )->rawParams( $this->showRevisionHistoryLine( $revID ) )->escaped()
				. "</li>\n";
			$s .= "</ul>";
		}

		$s .= "\n</div>\n";

		return $s;
	}

	/**
	 * Save a Supplementary Comment
	 *
	 * @param $revID string|int: revision id
	 * @param $comment string: a new supplenentary comment
	 * @param $summary string: reason changing the supplemenary comment of the revision, comment in Special:Log
	 * @return string HTML
	 */
	private function setRevisionCommentSupplement( $revID, $comment = "", $summary = "" ) {
		global $wgUser;
		$isAllowedRestricted = $wgUser->isAllowed( 'supplementcomment-restricted' );
		$dbr = wfGetDB( DB_SLAVE );
		$e = false;
		$exist = false;
		$s = "\n" . '<div class="revcs-rev-save">' . "\n";

		if ( $comment == '*' ) {
			$e = true;
			$s .= $this->getAlertMessage( 'error', 'invalidcomment' );
		}

		$db_row = $dbr->selectRow('rev_comment_supp', '*', array( 'rcs_rev_id' => $revID ), __METHOD__ );
		if ( $isAllowedRestricted ) {
			if ( isset($db_row) && isset($db_row->rcs_rev_id) ) {
				$exist = true;
				$s .= $this->getAlertMessage( 'warning', 'existsupp' );
				if ( $db_row->rcs_comment == $comment ) {
					$e = true;
					$s .= $this->getAlertMessage( 'error', 'samesuppcomment' );
				}
			}
		} else {
			if ( isset($db_row) && isset($db_row->rcs_rev_id) ) {
				$exist = true;
				if ( $db_row->rcs_user == $wgUser->getId() &&
					 $db_row->rcs_user_name == $wgUser->getName() &&
					 ( wfTimestamp( TS_UNIX ) - wfTimestamp( TS_UNIX, $db_row->rcs_timestamp ) ) <= 3600
				) {
					$s .= $this->getAlertMessage( 'warning', 'existsupp' );

					if ( $db_row->rcs_comment == $comment ) {
						$e = true;
						$s .= $this->getAlertMessage( 'error', 'samesuppcomment' );
					}
				} else {
					$e = true;
					$s .= $this->getAlertMessage( 'error', 'existsupp' );
					if ( $db_row->rcs_comment == $comment ) {
						$s .= $this->getAlertMessage( 'error', 'samesuppcomment' );
					}
				}
			} elseif ( $comment == '' ) {
				$e = true;
				$s .= $this->getAlertMessage( 'error', 'invalidcomment' );
			}
		}

		$db_row = $dbr->selectRow( 'revision', 'rev_id,rev_comment', array( 'rev_id' => $revID ), __METHOD__ );
		if ( $isAllowedRestricted ) {
			if ( isset($db_row) && isset($db_row->rev_id) ) {
				if ( $db_row->rev_comment == $comment ) {
					if ( $exist ) {
						$s .= $this->getAlertMessage( 'warning', 'samecomment' );
					} else {
						$e = true;
						$s .= $this->getAlertMessage( 'error', 'samecomment' );
					}
				}
			} else {
				$s .= $this->getAlertMessage( 'warning', 'norevision' );
			}
		} else {
			if ( isset($db_row) && isset($db_row->rev_id) ) {
				if ( $db_row->rev_comment == $comment ) {
					if ( $exist ) {
						$s .= $this->getAlertMessage( 'warning', 'samecomment' );
					} else {
						$e = true;
						$s .= $this->getAlertMessage( 'error', 'samecomment' );
					}
				}
			} else {
				$e = true;
				$s .= $this->getAlertMessage( 'error', 'norevision' );
			}
		}

		if ( $e ) {
			$s .= $this->getErrorMessage( 'denied' );
		} else {
			RevisionCommentSupplement::insert( $revID, $comment, $summary );
			$s .= "<p>" . $this->msg( 'revcs-set' )->escaped() . "</p>";
		}

		$s .= "</div>\n";
		$s .= $this->getRevisionCommentSupplement( $revID );
		return $s;
	}

	function getAlertMessage( $alert, $message ) {
		return Xml::element( 'p', array( 'class' => $alert ),
				$this->msg( "revcs-{$alert}", $this->msg( "revcs-alert-{$message}" )->text() )->text()
			)
			. "\n";
	}

	function getErrorMessage( $message ) {
		return Xml::element( 'p', array( 'class' => 'error' ),
				$this->msg( 'revcs-error', $this->msg( "revcs-error-{$message}" )->text() )->text()
			)
			. "\n";
	}

	function showErrorMessage() {
		$s = '';
		if ( $this->error == 'rId' ) {
			$s = '<p class="error">';
			$s .= $this->msg( 'revcs-error', $this->msg( 'revcs-alert-revid',  $this->missrId )->text() )->escaped();
			$s .= "</p>\n";
		}

		return $s;
	}

	# from EditPage::tokenOk in EditPage.php
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

	/**
	 * @param $revID string|int: revision id
	 * @return string HTML
	 */
	function showRevisionHistoryLine( $revID ) {
		$dbr = wfGetDB( DB_SLAVE );
		$db_row = $dbr->selectRow('revision', '*', array( 'rev_id' => $revID ), __METHOD__ );
		if ( !isset($db_row) || !isset($db_row->rev_id) ) {
			return $this->msg( 'revcs-alert-norevision' )->escaped();
		}

		if ( $db_row->rev_id != $revID ) {
			return $this->msg( 'revcs-error-unexpected' )->escaped();
		}

		# from HistoryPager::historyLine in HistryAction.php
		$rev = new Revision( $db_row );

		$s = '';
		$link = $this->revLink( $rev );
		$lang = $this->getLanguage();
		$dirmark = $lang->getDirMark();

		$s .= "$link";
		$s .= $dirmark;
		$s .= ' <span class="history-user">' . Linker::revUserTools( $rev, true ) . "</span>";
		$s .= $dirmark;

		if ( $rev->isMinor() ) {
			$s .= ' ' . ChangesList::flag( 'minor' );
		}

		# from SpecialUndelete::formatRevisionRow in SpecialUndelete.php
		// Revision text size
		$size = $rev->getSize();
		if( !is_null( $size ) ) {
			$s .= ' ' . Linker::formatRevisionSize( $size );
		}

		$s .= Linker::revComment( $rev, false, true );

		return $s;
	}

	# from HistoryPager::revLink in HistryAction.php
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
