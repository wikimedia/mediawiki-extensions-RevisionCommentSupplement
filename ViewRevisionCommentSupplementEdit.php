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

class ViewRevisionCommentSupplementEdit extends ContextSource {

	var $error = '';
	var $save = false, $preview = false, $show = false;
	var $rId = '', $missrId = '', $comment = '', $summary = '';
	var $formtype;
	var $mPage;
	var $mParam;
	var $mTokenOk;
	var $mTokenOkExceptSuffix;

	# from abstract class AbuseFilterView in AbuseFilterView.php into extension AbuseFilter
	/**
	 * @param $page SpecialPage
	 * @param $params array
	 */
	function __construct( $page, $param ) {
		$this->mPage = $page;
		$this->mParam = $param;
		$this->setContext( $this->mPage->getContext() );
	}

	function show() {
		$out = $this->getOutput();
		$user = $this->getUser();

		$out->setPageTitle( $this->msg( 'revcs-edit-heading' )->plain() );

		if ( !$user->isAllowed( 'edit' ) ) {
			$out->permissionRequired( 'edit' );
			return;
		}

		# Get request data from, e.g.
		# from EditPage.php
		$this->importFormData( $this->mParam );

		# from EditPage.php
		if ( $this->error ) {
			$this->formtype = 'error';
		} elseif ( $this->preview ) {
			$this->formtype = 'preview';
		} elseif ( $this->show ) {
			$this->formtype = 'show';
		} elseif ( $this->save ) {
			$this->formtype = 'save';
		} else {
			# First time through
			$this->formtype = 'initial';
		}

		# Do stuff
		$form = $this->createForm();

		$output = '';
		if ( $this->formtype == 'preview' ) {
			$output = $this->getPreview( $this->rId, $this->comment, $this->summary );
		} elseif ( $this->formtype == 'show' ) {
			$output = $this->getRevisionCommentSupplement( $this->rId );
		} elseif ( $this->formtype == 'save' ) {
			$output = $this->setRevisionCommentSupplement( $this->rId, $this->comment, $this->summary );
		} elseif ( $this->formtype == 'error' ) {
			if ( $this->error == 'rId' ) {
				$output = $this->msg( 'revcs-alert-revision-id', $this->missrId )->escaped();
			} else {
				$output = $this->msg( 'revcs-error-unexpected' )->escaped();
			}
		}

		# output
		$out->addModules( 'ext.RevisionCommentSupplement.special' );
		$out->addHTML( $this->msg( 'revcs-edit-desc' )->parseAsBlock() );
		if ( $this->mParam == 'error' && $this->formtype == 'initial' ) {
			$out->addHTML( $this->getAlertMessage( 'warning', 'special-parameter' ) );
		}
		$out->addHTML( $form );
		$out->addHTML( $output );
	}

	# from EditPage::importFormData in EditPage.php
	/**
	 * This function collects the form data and uses it to populate various member variables.
	 *
	 * @param $par string
	 */
	function importFormData( $par ) {
		$request = $this->getRequest();

		wfProfileIn( __METHOD__ );

		# Section edit can come from either the form or a link

		if ( $request->wasPosted() ) {
			# Truncate for whole multibyte characters.
			$language = $this->getLanguage();
			$this->comment = $language->truncate( $request->getText( 'supplement' ), 255 );
			$this->summary = $language->truncate( $request->getText( 'wpSummary' ), 255 );
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

			if ( $this->mPage->tokenOk( $request ) ) {
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
				$this->show     = true;
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
		$action = $this->getTitle()->getLocalURL( array( 'action' => 'submit' ) );
		$form = Xml::openElement(
				'form',
				array( 'method' => 'post', 'action' => $action, 'id' => 'supplementcomment' )
			) .
			"\n";

		$form .= "<div>" .
			Xml::inputLabel(
				$this->msg( 'revcs-form-revision-id' )->plain(),
				'rID', 'rID', 15, $this->rId,
				array( 'maxlength' => '10', 'accesskey' => 'r' )
			) .
			"</div>\n";

		$form .= "<div>" .
			Xml::inputLabel(
				$this->msg( 'revcs-form-supplement' )->plain(),
				'supplement', 'supplement', 60, $this->comment,
				array( 'maxlength' => '255', 'spellcheck' => 'true', 'accesskey' => 'c' )
			) .
			"</div>\n";

		$form .= "<div>" .
			Xml::inputLabel(
				$this->msg( 'revcs-form-summary' )->plain(),
				'wpSummary', 'wpSummary', 60, $this->summary,
				array( 'maxlength' => '255', 'spellcheck' => 'true', 'accesskey' => 's' )
			) . "</div>\n";

		$form .= "<div>" .
			Xml::submitButton(
				$this->msg( 'revcs-form-save' )->plain(),
				array( 'id' => 'save', 'name' => 'save', 'accesskey' => 'a' )
			) .
			Xml::submitButton(
				$this->msg( 'revcs-form-preview' )->plain(),
				array( 'id' => 'preview', 'name' => 'preview', 'accesskey' => 'p' )
			) .
			Xml::submitButton(
				$this->msg( 'revcs-form-show' )->plain(),
				array( 'id' => 'show', 'name' => 'show', 'accesskey' => 'h' )
			) .
			"</div>\n";

		$form .= "<div>" .
			Xml::input(
				'wpEditToken', false,
				$this->getUser()->getEditToken(),
				array( 'id' => 'wpEditToken', 'type' => 'hidden' )
			) .
			"</div>\n";

		$form .= Xml::closeElement( 'form' );

		return Xml::fieldset( $this->msg( 'revcs-form-legend' )->plain(), $form );
	}


	# from EditPage.php
	function getPreview( $revId, $comment = '', $summary = '' ) {
		$empty = false;
		$s = "\n" . '<div class="revcs-rev-preview">' . "\n";

		if ( $comment == '*' ) {
			$s .= $this->getAlertMessage( 'warning', 'supplement-asterisk' );
		} elseif ( $comment == '0' ) {
			$s .= $this->getAlertMessage( 'warning', 'supplement-zero' );
		} elseif ( $comment == '' ) {
			$empty = true;
		}

		$dbr = wfGetDB( DB_SLAVE );
		$revRow = $dbr->selectRow(
			'revision',
			'rev_id,rev_comment',
			array( 'rev_id' => $revId ),
			__METHOD__
		);
		if ( isset( $revRow ) && isset( $revRow->rev_id ) ) {
			if ( $revRow->rev_comment == $comment ) {
				if ( !$empty ) {
					$s .= $this->getAlertMessage( 'warning', 'supplement-same-as-summary' );
				}
			}
		} else {
			$s .= $this->getAlertMessage( 'warning', 'norevision' );
		}

		$suppRow = $dbr->selectRow(
			'rev_comment_supp',
			'*',
			array( 'rcs_rev_id' => $revId ),
			__METHOD__
		);
		if ( isset( $suppRow ) && isset( $suppRow->rcs_rev_id ) ) {
			$s .= $this->getAlertMessage( 'warning', 'exist-supplement' );

			if ( $suppRow->rcs_comment == $comment ) {
				$s .= $this->getAlertMessage( 'warning', 'supplement-same-as-supplement' );
			}

			if ( $empty ) {
				$s .= $this->getAlertMessage( 'warning', 'supplement-empty' );
			}
		} else {
			if ( $empty ) {
				$s .= $this->getAlertMessage( 'warning', 'supplement-empty' );
			}
		}

		$o = '';

		# from Linker::commentBlock
		if ( $comment && $comment != '*' ) {
			$o .= "<li>" .
				$this->msg( 'revcs-preview-supplement' )
					->rawParams( Linker::formatComment( $comment ) )->escaped() .
				"</li>\n";
		}

		# from Linker::commentBlock
		if ( $summary && $summary != '*' ) {
			$o .= "<li>" .
				$this->msg( 'revcs-preview-summary' )
					->rawParams( Linker::formatComment( $summary ) )->escaped() .
				"</li>\n";
		}
		if ( $revId ) {
			$o .= "<li>" .
				$this->msg( 'revcs-show-revision' )
					->rawParams( $this->showRevisionHistoryLine( $revId ) )->escaped() .
				"</li>\n";
		}

		if ( $o != '' ) {
			$s .= "<ul>\n{$o}</ul>\n";
		}

		$s .= "</div>";

		return $s;
	}

	function getRevisionCommentSupplement( $revId ) {
		return $this->mPage->getRevisionCommentSupplement( $revId );
	}

	/**
	 * Save a Supplementary Comment
	 *
	 * @param string|int $revId: revision id
	 * @param string $comment: a new supplenentary comment
	 * @param string $summary: reason changing the supplemenary comment of the revision, comment in Special:Log
	 * @return string HTML
	 */
	function setRevisionCommentSupplement( $revId, $comment = '', $summary = '' ) {
		$user = $this->getUser();
		$isAllowedRestricted = $user->isAllowed( 'supplementcomment-restricted' );
		$dbr = wfGetDB( DB_SLAVE );
		$e = false;
		$empty = false;
		$s = "\n" . '<div class="revcs-rev-save">' . "\n";

		if ( $comment == '*' ) {
			$e = true;
			$s .= $this->getAlertMessage( 'error', 'supplement-asterisk' );
		} elseif ( $comment == '0' ) {
			$e = true;
			$s .= $this->getAlertMessage( 'error', 'supplement-zero' );
		} elseif ( $comment == '' ) {
			$empty = true;
		}

		$revRow = $dbr->selectRow(
			'revision',
			'rev_id,rev_comment',
			array( 'rev_id' => $revId ),
			__METHOD__
		);
		if ( isset($revRow) && isset($revRow->rev_id) ) {
			if ( $revRow->rev_comment == $comment ) {
				if ( !$empty ) {
					$e = true;
					$s .= $this->getAlertMessage( 'error', 'supplement-same-as-summary' );
				}
			}
		} else {
			if ( $isAllowedRestricted ) {
				$s .= $this->getAlertMessage( 'warning', 'norevision' );
			} else {
				$e = true;
				$s .= $this->getAlertMessage( 'error', 'norevision' );
			}
		}

		$suppRow = $dbr->selectRow(
			'rev_comment_supp',
			'*',
			array( 'rcs_rev_id' => $revId ),
			__METHOD__
		);
		if ( isset($suppRow) && isset($suppRow->rcs_rev_id) ) {
			$modifiedRecently
				= $suppRow->rcs_user == $user->getId()
				&& $suppRow->rcs_user_text == $user->getName()
				&& wfTimestamp( TS_UNIX ) - wfTimestamp( TS_UNIX, $suppRow->rcs_timestamp ) <= 3600;

			if ( $isAllowedRestricted || $modifiedRecently ) {
				$s .= $this->getAlertMessage( 'warning', 'exist-supplement' );
			} else {
				$e = true;
				$s .= $this->getAlertMessage( 'error', 'exist-supplement' );
			}

			if ( $suppRow->rcs_comment == $comment ) {
				$e = true;
				$s .= $this->getAlertMessage( 'error', 'supplement-same-as-supplement' );
			}

			if ( $empty ) {
				if ( $isAllowedRestricted || $modifiedRecently ) {
					$s .= $this->getAlertMessage( 'warning', 'supplement-empty' );
				} else {
					$e = true;
					$s .= $this->getAlertMessage( 'error', 'supplement-empty' );
				}
			}
		} else {
			if ( $empty ) {
				if ( $isAllowedRestricted ) {
					$s .= $this->getAlertMessage( 'warning', 'supplement-empty' );
				} else {
					$e = true;
					$s .= $this->getAlertMessage( 'error', 'supplement-empty' );
				}
			}
		}

		if ( $e ) {
			$s .= $this->getErrorMessage( 'denied' );
		} else {
			RevisionCommentSupplement::insert( $revId, $comment, $summary );
			$s .= "<p>" . $this->msg( 'revcs-written' )->escaped() . "</p>\n";
		}

		$s .= "</div>\n";
		$s .= $this->getRevisionCommentSupplement( $revId );
		return $s;
	}

	function getAlertMessage( $alert, $message ) {
		return $this->mPage->getAlertMessage( $alert, $message );
	}

	function getErrorMessage( $message ) {
		return $this->mPage->getErrorMessage( $message );
	}

	/**
	 * @param string|int $revId: revision id
	 * @return string HTML
	 */
	function showRevisionHistoryLine( $revId ) {
		return $this->mPage->showRevisionHistoryLine( $revId );
	}
}
