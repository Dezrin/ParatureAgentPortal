<!-- Include header ->
   <?php
      include "includes/header.php";
      ?>
   <!-- End Header -->
<!-- Send Notes to Parature -->
<?php
   include "includes/sendnotes.php";
   ?>
<!-- End -->

<title>Parature Agent Portal - Submit Notes</title>
<center>
<iframe src="//free.timeanddate.com/clock/i530z5ad/n137/tluk/fn2/fs20/ftb/bas5/th1/ta1" frameborder="0" width="156" height="40"></iframe>
<iframe src="//free.timeanddate.com/clock/i530z5ad/n80/tluk/fn2/fs20/ftb/bas5/th1/ta1" frameborder="0" width="160" height="40"></iframe>
<iframe src="//free.timeanddate.com/clock/i530z5ad/n155/tluk/fn2/fs20/ftb/bas5/th1/ta1" frameborder="0" width="157" height="40"></iframe>
<iframe src="//free.timeanddate.com/clock/i530z5ad/n179/tluk/fn2/fs20/ftb/bas5/th1/ta1" frameborder="0" width="156" height="40"></iframe>
</center>
<!-- Display Welcome Message and Email -->
Welcome back <?php
   echo htmlentities($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8');
   ?>, time to work!<br />
<br>

<div style="font-family: Arial, Helvetica, sans-serif;">
<!-- Start Notes Form -->

<form action="" method="post">
   <b>Ticket Number:</b><br>
   <input type="text" name="ticket_number" style="width:100px;font-size:14pt;" value="30126-" disabled><input type="text" name="ticket_number2" style="width:200px;font-size:14pt;"><br>
   <br>
   <br><b>Customers Issue:</b><br>
   <input type="text" name="customers_issue" style="width:600px;font-size:14pt;" placeholder="Customer cannot...">
   <br>
   <br>
   <br><b>Customers Software:</b>
   <select name="customers_software" id="software">
      <option selected="selected">Please Select the Software type...</option>
      <option value="The customers software that is experiencing the issues is Word">Word</option>
      <option value="The customers software that is experiencing the issues is Excel">Excel</option>
      <option value="The customers software that is experiencing the issues is PowerPoint">PowerPoint</option>
      <option value="The customers software that is experiencing the issues is Outlook">Outlook</option>
      <option value="The customers software that is experiencing the issues is Publisher">Publisher</option>
      <option value="The customers software that is experiencing the issues is OneNote">OneNote</option>
      <option value="The customers software that is experiencing the issues is OneDrive">OneDrive</option>
      <option value="The customers software that is experiencing the issues is SharePoint">SharePoint</option>
      <option value="The customers software that is experiencing the issues is Exchange">Exchange</option>
      <option value="The customers software that is experiencing the issues is Skype for Business">Skype</option>
      <option value="The customers software that is experiencing the issues is Yammer">Yammer</option>
      <option value="The customers software that is experiencing the issues is Project">Project</option>
      <option value="The customers software that is experiencing the issues is Azure">Azure</option>
	  <option value="The customers software that is experiencing the issues is CRM Online">CRM Online</option>
      <option value="The customers software that is experiencing the issues is Office Mobile">Office Mobile</option>
      <option value="The customers software that is experiencing the issues is Office Portal">Office Portal</option>
      <option value="The customers software that is experiencing the issues is Other">Other</option>
      <option value="The customers software that is experiencing the issues is Unknown">Unknown</option>
   </select>
   <br>
   <br><b>Customers Version of Office 365</b>
   <select name="office_version" id="office_version">
		<option selected="selected">Please select the version of Office 365 installed</option>
		<option value="Customers version of Office 365 is 2013">Office 365 2013</option>
		<option value="Customers version of Office 365 is 2016">Office 365 2016</option>
		<option value="Customers version of Office 365 is iPhone / iOS">iPhone / iOS</option>
		<option value="Customers Version of Office 365 is Android">Android</option>
		<option value="Unknown">Unknown</option>
	</select>
   <br>
   <br><b>Customers Operating System:</b>
   <select name="customers_os" id="customers_os">
      <option selected="selected">Please Select the customers Operating System</option>
      <option value="Customers Operating System: Windows 7 SP2">Windows 7 SP2</option>
      <option value="Customers Operating System: Windows 8">Windows 8</option>
      <option value="Customers Operating System: Windows 8.1">Windows 8.1</option>
      <option value="Customers Operating System: Windows 10">Windows 10</option>
      <option value="Customers Operating System: Windows Server 2012">Windows Server 2012</option>
      <option value="Customers Operating System: Windows Server 2008">Windows Server 2008</option>
      <option value="Customers Operating System: Mac OS X 10.10">Mac OS X 10.10 </option>
      <option value="Customers Operating System: Mac OS X El Capitan">Mac OS X El Capitan +</option>
	  <option value="Customers Operating System: iPhone / iOS">iPhone / iOS</option>
	  <option value="Customers Operating System: Android">Android</option>
      <option value="Customers Operating System: Other">Other</option>
      <option value="Customers Operating System: Unknown / QnA">Unknown / QnA</option>
   </select>
   <br>
<br>
   <script src="js/jquery-1.8.2.min.js"></script>
   <script src="js/modernizr-1.5.min.js"></script>
   <script src="js/scripts.js"></script>
   <br>
   <b>Please add notes for this ticket below</b>
   <div id="notes" name="notes">
      <!-- Character Limits -->
      <script>
         function countChar(val) {
           var len = val.value.length;
           if (len >= 140) {
             val.value = val.value.substring(0, 140);
           } else {
             $('#charNum').text(140 - len);
           }
         };
      </script>
      <!-- End Character Limits -->
      <br>
      <!-- Notes System -->
      <script type="text/javascript">
         $(function() {
                 var scntDiv = $('#p_scents');
                 var i = $('#p_scents p').size() + 1;
                 
                 $('#addScnt').live('click', function() {
                         $('<p><label for="p_scnts"><input type="text" id="p_scnt" size="20" name="p_scnt_' + i +'" value="" placeholder="Add More Notes Here..." maxlength="140" onkeyup="countChar(this)"/></label> <a href="#" id="remScnt">Remove</a></p>').appendTo(scntDiv);
                         i++;
                         return false;
                 });
                 
                 $('#remScnt').live('click', function() {
                         if( i > 2 ) {
                                 $(this).parents('p').remove();
                                 i--;
                         }
                         return false;
                 });
         });
         
      </script>
      <!-- End Notes System -->
      <button type="button" class="btn btn-primary pull-left" href="#" id="addScnt">Click to add more notes</button>
      <small><i>Note: Ticket notes are limited to 140 characters per entry</i></small>
      <br>
      <br>
      <div id="p_scents">
         <p>
            <label for="p_scnts"><input type="text" id="p_scnt" size="20" name="p_scnt" value="" placeholder="Called Customer..." maxlength="140" onkeyup="countChar(this)"/></label>
         <div id="charNum"></div>
         </p>
      </div>
   </div>
   <br>
   <b>Next Action Plan</b>
   <br>
   <select name="action_plan" id="action_plan">
      <option selected="selected">Please select ...</option>
      <option value="Ticket is being escalated from the following team:">Escalation</option>
      <option value="This ticket requires a call back">Call Back</option>
      <option value="This ticket is being handed over from the following team: ">Hand Over</option>
      <option value="This ticket is being closed, so no other action plan is needed.">Closing Ticket</option>
      <option value="Other">Other</option>
   </select>
   <br>
   <b>If Escalation please select your team leader below.</b>
   <br>
   <select name="team_leaders" id="team_leaders">
      <option selected="selected">No Escalation Required</option>
      <option value="mohammed.santali@inty.com">Mohammed Santali</option>
      <option value="amanda.burnett@inty.com">Amanda Burnett</option>
      <option value="Michael.Harrison@inty.com">Michael Harrison</option>
      <option value="Reuben.Turkie@inty.com">Reuben Turkie</option>
   </select>
   <br>
   <b>If Escalation please select the team leader next on shift</b>
   <br>
   <select name="next_team" id="next_team">
      <option selected="selected">No Escalation Required</option>
      <option value="mohammed.santali@inty.com">4PM - Midnight GMT</option>
      <option value="amanda.burnett@inty.com">6PM - 2AM GMT</option>
      <option value="Michael.Harrison@inty.com">Midnight - 8AM GMT</option>
      <option value="Reuben.Turkie@inty.com">8AM - 4PM GMT</option>
   </select>
   <br>
   <input type="text" name="actionplan_other" style="width:600px;font-size:14pt;" placeholder="If other, please specify...">
   <br>
   <br>
   <br>
   <b>Customer Requests</b><br>
   <input type="text" name="customer_requests" style="width:600px;font-size:14pt;" placeholder="Customer would like a call back at...">
   <br>
   <br>
   <br>
   <b>Additional Details / Other Details</b>
   <br>
   <textarea name="details" rows="4" cols="75" value="Addtional Details:" placeholder="Are there any additional details that you need to include with this ticket? Just type here...">
</textarea>
   <br>
   <br>
   <input class="btn btn-primary" type="submit" name="submit" value="Submit" onClick="parent.location='startcall.php'">
   <br>
</form>
<br>
<br>
<a href="startcall.php"><p>If PAP doesn't Auto-Redirect, click here!</p></a>
<h3><b>Ticket Closure Templates</b></h3>
<hr>
<br>
<form name="copypasteform" id="copypasteform">
<b>Customer Unresponsive Template</b>
<br>
<br>
<textarea rows="15" cols="125" name="ta1" id="ta1">
Thank you again for contacting Office 365 Support with regards to <?php echo $customers_issue ?>. Unfortunately, I have been unable to contact you via this telephone phone number [Insert telephone number] and previous emails sent. In accordance with our service policy, I will proceed to close this ‘Need Help’ request which will allow you to raise another ticket, if required. 
If you do require any further assistance with your Office 365 service then one of our agents will be more than happy to assist you further. 
  
Please feel free to do the same from your end by returning to the 'Need Help' widget at the bottom of your Admin portal screen and clicking on the orange 'Done' button. This may take a moment to appear.  

I invite to you rate me as a Customer Service Representative on the promptness of my original response and ask you to leave suggestions on how Microsoft could improve your service or any limitations you wish to bring to our attention in the comment box. 

Wishing you a wonderful rest of your day.
</textarea>

<p>

<input onclick="pasteit('copypasteform.ta1');" type="button" value="Paste" class="custombutton">

<input onclick="copyToClipboard(document.getElementById('ta1').value);" type="button" value="Copy" class="custombutton">

<input onclick="document.getElementById('ta1').value='';" type="button" value="Clear" class="custombutton">

</p>

</form>
<script type="text/javascript">
function pasteit(theField) {

  var val=eval("document."+theField);

  val.focus();

  val.select();

  therange=val.createTextRange();

  therange.execCommand("Paste");

  }
function copyToClipboard(s)

  {

  if( window.clipboardData && clipboardData.setData )

  {

  clipboardData.setData("Text", s);

  }

  else

  {

  // This is importent but it's not noted anywhere

  netscape.security.PrivilegeManager.enablePrivilege('UniversalXPConnect');

  

  // create interface to the clipboard

  var clip = Components.classes['@mozilla.org/widget/clipboard;[[[[1]]]]'].createInstance(Components.interfaces.nsIClipboard);

  if (!clip) return;

  

  // create a transferable

  var trans = Components.classes['@mozilla.org/widget/transferable;[[[[1]]]]'].createInstance(Components.interfaces.nsITransferable);

  if (!trans) return;

  

  // specify the data we wish to handle. Plaintext in this case.

  trans.addDataFlavor('text/unicode');

  

  // To get the data from the transferable we need two new objects

  var str = new Object();

  var len = new Object();

  

  var str = Components.classes["@mozilla.org/supports-string;[[[[1]]]]"].createInstance(Components.interfaces.nsISupportsString);

  

  var copytext=meintext;

  

  str.data=copytext;

  

  trans.setTransferData("text/unicode",str,copytext.length*[[[[2]]]]);

  

  var clipid=Components.interfaces.nsIClipboard;

  

  if (!clip) return false;

  

  clip.setData(trans,null,clipid.kGlobalClipboard);

  

  }

  }
></script>
<br>
<br>
<form name="copypasteform" id="copypasteform">
<b>Customer Resolved</b>
<br>
<br>
<textarea rows="5" cols="125" name="ta1" id="ta1">
Thank you again for contacting Office 365 for Business Technical Support with regards <?php echo $customers_issue ?>. I'm very pleased to hear the information I provided was of assistance. To allow you to raise tickets in the event of further technical issues, I have closed this case for you.
</textarea>

<p>

<input onclick="pasteit('copypasteform.ta1');" type="button" value="Paste" class="custombutton">

<input onclick="copyToClipboard(document.getElementById('ta1').value);" type="button" value="Copy" class="custombutton">

<input onclick="document.getElementById('ta1').value='';" type="button" value="Clear" class="custombutton">

</p>

</form>
<script type="text/javascript">
function pasteit(theField) {

  var val=eval("document."+theField);

  val.focus();

  val.select();

  therange=val.createTextRange();

  therange.execCommand("Paste");

  }
function copyToClipboard(s)

  {

  if( window.clipboardData && clipboardData.setData )

  {

  clipboardData.setData("Text", s);

  }

  else

  {

  // This is importent but it's not noted anywhere

  netscape.security.PrivilegeManager.enablePrivilege('UniversalXPConnect');

  

  // create interface to the clipboard

  var clip = Components.classes['@mozilla.org/widget/clipboard;[[[[1]]]]'].createInstance(Components.interfaces.nsIClipboard);

  if (!clip) return;

  

  // create a transferable

  var trans = Components.classes['@mozilla.org/widget/transferable;[[[[1]]]]'].createInstance(Components.interfaces.nsITransferable);

  if (!trans) return;

  

  // specify the data we wish to handle. Plaintext in this case.

  trans.addDataFlavor('text/unicode');

  

  // To get the data from the transferable we need two new objects

  var str = new Object();

  var len = new Object();

  

  var str = Components.classes["@mozilla.org/supports-string;[[[[1]]]]"].createInstance(Components.interfaces.nsISupportsString);

  

  var copytext=meintext;

  

  str.data=copytext;

  

  trans.setTransferData("text/unicode",str,copytext.length*[[[[2]]]]);

  

  var clipid=Components.interfaces.nsIClipboard;

  

  if (!clip) return false;

  

  clip.setData(trans,null,clipid.kGlobalClipboard);

  

  }

  }
></script>
<br>
<form name="copypasteform" id="copypasteform">
<b>Rating Explanaition</b>
<br>
<br>
<textarea rows="10" cols="125" name="ta1" id="ta1">
I would appreciate it if you could close the case from your end by heading back to https://portal.office.com, click on Admin, then down in the bottom right there will be a small "Need Help" box, if you could please click this it will bring up a customer feedback box. 

​The 5 stars at the top of the box are for my customer service, the small drop-down box in the middle is for the Office 365 product and the comments box at the bottom are either for my customer service or the product. When you have completed this information, click submit and your ticket will be closed.

Please note; until you close the ticket, you are unable to raise a new technical support ticket in the future, so I would appreciate it if you are able to do this at your earliest convenience. Thanks again.
</textarea>

<p>

<input onclick="pasteit('copypasteform.ta1');" type="button" value="Paste" class="custombutton">

<input onclick="copyToClipboard(document.getElementById('ta1').value);" type="button" value="Copy" class="custombutton">

<input onclick="document.getElementById('ta1').value='';" type="button" value="Clear" class="custombutton">

</p>

</form>
<script type="text/javascript">
function pasteit(theField) {

  var val=eval("document."+theField);

  val.focus();

  val.select();

  therange=val.createTextRange();

  therange.execCommand("Paste");

  }
function copyToClipboard(s)

  {

  if( window.clipboardData && clipboardData.setData )

  {

  clipboardData.setData("Text", s);

  }

  else

  {

  // This is importent but it's not noted anywhere

  netscape.security.PrivilegeManager.enablePrivilege('UniversalXPConnect');

  

  // create interface to the clipboard

  var clip = Components.classes['@mozilla.org/widget/clipboard;[[[[1]]]]'].createInstance(Components.interfaces.nsIClipboard);

  if (!clip) return;

  

  // create a transferable

  var trans = Components.classes['@mozilla.org/widget/transferable;[[[[1]]]]'].createInstance(Components.interfaces.nsITransferable);

  if (!trans) return;

  

  // specify the data we wish to handle. Plaintext in this case.

  trans.addDataFlavor('text/unicode');

  

  // To get the data from the transferable we need two new objects

  var str = new Object();

  var len = new Object();

  

  var str = Components.classes["@mozilla.org/supports-string;[[[[1]]]]"].createInstance(Components.interfaces.nsISupportsString);

  

  var copytext=meintext;

  

  str.data=copytext;

  

  trans.setTransferData("text/unicode",str,copytext.length*[[[[2]]]]);

  

  var clipid=Components.interfaces.nsIClipboard;

  

  if (!clip) return false;

  

  clip.setData(trans,null,clipid.kGlobalClipboard);

  

  }

  }
></script>
<br>
<!-- End Notes Form -->
<?php
   include "includes/footer.php";
   ?>