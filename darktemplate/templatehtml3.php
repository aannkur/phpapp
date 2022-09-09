<?php  ?>
<div class="col-xs-12"> 
	
	<h4>How to add this signature to Thunderbird</h4>
	<p>
		<ol>
		<li>
		Generate HTML.
		<br>
		<button class="btn btn-info btn-apply" onclick="generateHtml('templatepre');">Generate</button> <br/>	
			<div  class="output-html-textarea" contenteditable="true"><pre>
  <xmp id="signatureHtmlDestThunderbird" >

  </xmp>
</pre>
</div>

		</li>	
		<li>
		
			Copy the HTML to the clipboard.
			<br>
			<button class="btn btn-info btn-apply" onclick="selectElementContentshtml('signatureHtmlDestThunderbird');">Copy</button>
			
			<span class="infodiv" ng-show="$ctrl.showSignatureCopiedToClipboard"><small  id="msghide3" style="display:none;">Your HTML code has been copied to the clipboard.</small></span>

		</li>
		<li>Open Mozilla Thunderbird.</li>
		<li>Click on your email account name in the folder tree in the left pane.</li>
		<li>Click <strong>View settings for this account</strong> under the <strong>Accounts</strong> section.</li>
		<li>Scroll down to <strong>Signature text</strong> and select the <strong>Use HTML</strong> checkbox.</li>
		<li>Paste the copied HTML code into the signature input field.</li>
		<li>Click <strong>OK</strong> to confirm changes.</li>
		</ol>
	</p>
</div>


<?php ?>

