<!-- Include header ->
   <?php
      include "includes/header.php";
      ?>
   <!-- End Header -->
<!-- Send Notes to Parature -->
<?php
   include "includes/sendcmat2.php";
   ?>
<!-- End -->

<title>Parature Agent Portal - CMAT</title>
<!-- Display Welcome Message and Email -->
Welcome back <?php
   echo htmlentities($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8');
   ?>, STOP! CMAT time!<br />
<br>
<div style="font-family: Arial, Helvetica, sans-serif;">
<!-- Start Notes Form -->
<form action="" method="post" onSubmit="alert('Please confirm the notes that you are sending');">
   <b>Ticket Number:</b><br>
   <input type="text" name="ticket_number" style="width:100px;font-size:14pt;" value="30126-" disabled><input type="text" name="ticket_number2" id="ticket_number2" style="width:200px;font-size:14pt;"><br>
   <br>
   <br><b>Ticket Type:</b><br>
   <select name="customers_status" id="customers_status">
      <option selected="selected">Please Select...</option>
      <option value="The account is currently in Grace Period.">In Grace Period</option>
      <option value="The account requires a SKU Migration from one of the old Office 365 plans.">SKU Migration</option>
	  <option value="The account requires engagement, as the Exchange mailboxes weren't being utilized.">Engagement</option>
	  <option value="The account was in Office Client as you had not yet downloaded the Office 365 software.">Office Client</option>
	</select>
   <br>
   <br><b>Successful contact?:</b><br>
   <select name="contact" id="contact">
      <option selected="selected">Please Select...</option>
      <option value="I was able to contact the customer successfully.">YES</option>
      <option value="I was unale to contact the customer.">NO</option>
	</select>
   <br>
	<br><b>Have you verified the customers Identity?</b>
	<br>
  <input type="checkbox" name="verification" id="verification" value="I have verified the customers Identity"> YES<br>
   <br><b>Have you updated the Customers Email Address on Parature?:</b><br>
   <select name="update_email" id="update_email">
      <option selected="selected">Please select...</option>
      <option value="I have updated the customers email address on Parature to the latest one that the customer has provided.">YES</option>
      <option value="I have not updated the customers email address as it was already the correct email address.">NO</option>
	</select>
  <br>
	<br><b>Any changes to Customers subscription status?</b>
	<br>
	<select name="changes" id="changes">
		<option selected="selected">Please Select...</option>
		<option value="I have changed the customers Subscription to: Active">Active</option>
		<option value="I have changed the customers Subscription to: Deprovisioned">Deprovisioned</option>
		<option value="I have changed the customers Subscription to: In-Grace Period">In-Grace Period</option>
		<option value="I have changed the customers subscription to: Cancelled">Cancelled</option>
		<option value="No changes to the customers Subscription">No Changes</option>
	</select>
	<br>
   <br><b>Next Step:</b><br>
   <select name="next" id="next">
      <option selected="selected">Please select...</option>
      <option value="I am going to send the customer an email and call the customer back tomorrow.">Send Email & Call Tomorrow</option>
      <option value="I am closing the ticket as the case has been resolved.">Close Ticket</option>
      <option value="I am going to attempt to call the customer again tomorrow.">Call tomorrow</option>
      <option value="I am going to send the customer an email with regards to this ticket.">Send Email</option>
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
<b>If the customer required technical support, enter here:</b>
			<br>
			<br>
   <textarea name="tech_details" id="tech_details" rows="4" cols="60" value="Addtional Details:">
</textarea>
            <br>
   <br>
   <br>
   <input class="btn btn-primary" type="submit" name="submit" value="Submit">
   <br>
</form>
<br>
<br>

<form name="copypasteform" id="copypasteform">
<b>Closing the ticket? Here's a closure template!</b>
<br>
<br>
<textarea rows="10" cols="125" name="ta1" id="ta1">
Good afternoon, this is (insert name) from Office 365. I called you earlier to advise that (insert account issue here). I am glad to hear that you were happy to be contacted with regards to this issue, and I am just sending a quick email to please ask you to close the ticket your end.
This is done using the following steps:

Navigate to portal.office.com 
Navigate to your admin panel
Locate the red Need Help bar in the bottom right of your panel
Click on it to bring up the closure screen
Fill out the first two sections of the closure screen which are the up to five star rating based on the quality of my customer service, and the drop down menu on how satisfied with office 365 you are
Leave a comment if you desire, though this is not mandatory
Hit submit

You can now use this bar to request technical support whenever you need it.
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
<!-- End Notes Form -->
<?php
   include "includes/footer.php";
   ?>