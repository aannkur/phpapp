<?php ?>
<div class="col-xs-12"> 
<p>
	<h4>Steps to apply your signature in Gmail</h4>
	<div>IMPORTANT: Before you begin, make sure that you don’t have <strong>Plain text mode</strong> enabled. To learn how to disable it, <a href="https://www.mail-signatures.com/articles/how-to-add-or-change-an-email-signature-in-gmailgoogle-apps/#plain-text-mode" target ="_blank">click here</a>.</div>
	<ol>
	 <li>
	 
			Copy the signature to the clipboard.
			<br>
			<button class="btn btn-info btn-apply" onclick="selectElementContents('templatepre');">Copy</button>
			
			<span class="infodiv" ng-show="$ctrl.showSignatureCopiedToClipboard"><small  id="msghide1" style="display:none;">Your signature has been copied to the clipboard.</small></span>

	</li>		
	<li>Log in to Gmail/G Suite.</li>
	<li>Click the gear icon in the upper-right corner and choose <strong>See all settings</strong>. </li>
	<li>On the <strong>General</strong> tab (default), scroll down to the <strong>Signature</strong> section.</li>
	<li>Click the <strong>Create new</strong> button to add a new email signature or the <strong>Edit button</strong> if you want to replace an existing signature.</li>
	<li><strong>Paste</strong> the copied signature in the <strong>Edit signature</strong> section (<b>Ctrl</b> + <b>V</b>). </li>
	<li>(Optional) Choose whether to insert the signature automatically for new emails and replies and forwards.</li>
	<li>Scroll down and click <strong>Save changes</strong>. </li>
	</ol>
</p>	
</div>


<?php ?>