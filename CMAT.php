<!-- Include header ->
   <?php
      include "includes/header.php";
      ?>
   <!-- End Header -->
<!-- Send Notes to Parature -->
<?php
   include "includes/sendcmat.php";
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
   <br>
   <?php echo "For non-responsive calls, please fill out below!" ?>
   <br>
   <br><b>Successful contact?:</b><br>
   <select name="contact" id="contact">
      <option selected="selected">Please Select...</option>
      <option value="I attempted to call the customers and I was able to contact the customer successfully.">YES</option>
      <option value="I attempted to call the customer, but I was unable to contact the customer.">NO</option>
	</select>
   <br>
   <br><b>Voicemail left?</b><br>
   <select name="voicemail" id="voicemail">
		<option selected="selected">Please select...</option>
		<option value="I left the customer a voicemail as I could not reach the customer.">YES</option>
		<option value="I did not leave a voicemail, details of why are below.">NO</option>
	</select>
   <br>
   <br>
   <b>If you did not leave a voicemail, please state why:</b>
   <br>
   <input type="text" name="reason" id="reason" style="width:500px;font-size:14pt;">
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
Good afternoon, this is (insert name) from Office 365. I called you earlier to advise that (insert account issue here). Unfortunately I have been unable to to contact with regards to this issue, and I am just sending a quick email to please ask you to close the ticket your end.
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