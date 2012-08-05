<?php
/**
 * Copyright (C) 2012 Burthsceh  <burthsceh@gmail.com>
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
	var $save = false, $preview = false, $show = false;
	var $rId = '', $summary = '';
	var $formtype;
	var $firsttime;
	var $mTokenOk;
	var $mTokenOkExceptSuffix;

	public function __construct() {
		parent::__construct( 'RevisionCommentSupplement', 'supplementcomment', true );
	}

	function execute( $par ) {
		global $wgRequest, $wgOut, $wgLang, $wgUser;
		$this->setHeaders();

		# リクエストデータを取得する
		# from EditPage.php
		$this->importFormData( $wgRequest );

		# from EditPage.php
		if ( $this->save ) {
			$this->formtype = 'save';
		} elseif ( $this->preview ) {
			$this->formtype = 'preview';
		} elseif ( $this->show ) {
			$this->formtype = 'show';
		} else { # First time through
			$this->firsttime = true;
			$this->formtype = 'initial';
		}

		# 処理を行う

		# from EditPage.php
		$action = $this->getTitle()->getLocalURL( array( 'action' => 'submit' ) );
		$form = Xml::openElement( 'form', array( 'method' => 'post', 'action' => $action, 'id' => 'supplementcomment' ) ) . "\n";

		$form .= "<div>" . Xml::inputLabel( wfMessage( 'revcs-revision-id' ), 'rID', 'rID', 20, $this->rId, array( 'maxlength' => '14', 'accesskey' => 'r', ) ) . "</div>\n";
		$form .= "<div>";
		$form .= Xml::inputLabel( wfMessage( 'revcs-supplementary-comment' ), 'summary', 'summary', 60, $this->summary,
			array( 'maxlength' => '250', 'spellcheck' => 'true', 'accesskey' => 'c', ) );
		$form .= "</div>\n";

		$form .= "<div>";
		$form .= Xml::submitButton( wfMessage('revcs-submit'), array( 'id' => 'save', 'name' => 'save', 'accesskey' => 's', ) );
		$form .= Xml::submitButton( wfMessage('revcs-preview'), array( 'id' => 'preview', 'name' => 'preview', 'accesskey' => 'p', ) );
		$form .= Xml::submitButton( wfMessage('revcs-show'), array( 'id' => 'show', 'name' => 'show', 'accesskey' => 'h', ) );
		$form .= "</div>\n";

		$form .= "<div>";
		$form .= Xml::input( 'wpEditToken', false, $wgUser->getEditToken(), array( 'type' => 'hidden' ) );
		$form .= "</div>\n";

		$form .= Xml::closeElement( 'form' ) . "\n";

		$Output = '';
		if ( $this->formtype == 'preview' ) {
			$Output = $this->getSummaryPreview( $this->summary );
		} elseif ( $this->formtype == 'show' ) {
			$Output = $this->getRevisionCommentSupplement( $this->rId );
		} elseif ( $this->formtype == 'save') {
			$Output = $this->setRevisionCommentSupplement( $this->rId, $this->summary );
		}

		# 出力
		$wgOut->addHTML( $form );
		$wgOut->addHTML( $Output );
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
	function importFormData( &$request ) {
		global $wgLang, $wgUser;

		wfProfileIn( __METHOD__ );

		# Section edit can come from either the form or a link

		if ( $request->wasPosted() ) {
			# Truncate for whole multibyte characters. +5 bytes for ellipsis
			$this->summary = $wgLang->truncate( $request->getText( 'summary' ), 250 );
			$this->rId = $request->getText( 'rID' );
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
			}
		} else {
			# Not a posted form? Start with nothing.
			wfDebug( __METHOD__ . ": Not a posted form.\n" );
			$this->edit         = false;
			$this->preview      = false;
			$this->rId          = '';
			$this->save         = false;
			$this->summary      = '';
		}

		wfProfileOut( __METHOD__ );
	}

	# from EditPage.php
	protected function getSummaryPreview( $summary = "" ) {
		if ( !$summary || ( !$this->preview ) || $summary == '' || $summary == '*' ) # from Linker:commentBlock
			return "";

		global $wgParser;

		$summary = "Supplementary Comment preview: " . Linker::formatComment( $summary );
		return Xml::tags( 'div', array( 'class' => 'ex-rcs-summary-preview' ), $summary );
	}

	function getRevisionCommentSupplement($rev) {
		list( $success, $rcs_rev_id, $rcs_user, $rcs_user_name, $rcs_timestamp, $rcs_comment )
			= RevisionCommentSupplement::getKey($rev);

		$s = "\n" . '<div class="ex-rcs-rev-show">';

		if ( $success == false ) {
			$s = "\n<p>Nothing Supplementary Comment.</p>";
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
			$s .= "</ul>";
		}

		$s .= "\n</div>\n";

		return $s;
	}

	function setRevisionCommentSupplement( $rev, $comment ) {
		RevisionCommentSupplement::insertKey( $rev, $comment );
		return "<p>writed.</p>";
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
}
