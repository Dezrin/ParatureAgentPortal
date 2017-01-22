<!-- Include header ->
   <?php
      include "includes/header.php";
      ?>
   <!-- End Header -->
<!-- Send Notes to Parature -->
<?php
   include "includes/sendemail.php";
   ?>
<!-- End -->
<title>Parature Agent Portal - CMAT</title>
<!-- Display Welcome Message and Email -->
Welcome back <?php
   echo htmlentities($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8');
   ?>, looking to send the customer an email? YOU'RE IN THE RIGHT PLACE!<br />
<br>
<div style="font-family: Arial, Helvetica, sans-serif;">
<!-- Start Notes Form -->
<form action="" method="post" onSubmit="alert('Please confirm the notes that you are sending');">
   <b>Ticket Number:</b><br>
   <input type="text" name="ticket_number" style="width:100px;font-size:14pt;" value="30126-" disabled><input type="text" name="ticket_number2" id="ticket_number2" style="width:200px;font-size:14pt;"><br>
   <br>
   <br>
   <?php echo "Please note; this is currently in the testing phases and might not actually work!" ?>
   <br>
	<b>Enter Email Below</b>
   <br>
   <textarea name="details" rows="4" cols="75" value="Addtional Details:" placeholder="Are there any additional details that you need to include with this ticket? Just type here...">
</textarea>
   <br>
   <br>
   <br>
   <script type="text/javascript">
      function image(img) {
          var src = http://www.rnbcars.com/images/PleaseWait.gif;
          window.open(src);
      }
   </script>
   <input class="btn btn-primary" type="submit" name="submit" value="Submit" onclick="location.reload();location.href='sending.php'">
   <br>
</form>
<br>
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
Please feel free to do the same from your end by returning to the 'Need Help' tool bar at the bottom of your Admin portal screen and clicking on the orange 'Done' button. This may take a moment to appear. I invite you to rate me as a Customer Service Representative on the promptness of my original response, the technical assistance I provided, and my general demeanor.   
 
You can also leave suggestions for Microsoft on how we could improve our service or any limitations you wish to bring to our attention in the comment / feedback box.

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