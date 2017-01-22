<!-- Require Login -->
<?php 

    require("common.php"); 
     
    if(empty($_SESSION['user'])) 
    { 
        header("Location: login.php"); 
         
        die("Redirecting to login.php"); 
    } 
     
?> 

<?php
	include "version.php";
?>

<!-- Login Ends -->
<!-- Send Email -->
<?php 
if(isset($_POST['submit'])){
    $to = "office365support@microsoft.com";
    $from = $_SESSION['user']['email'];
    $subject = "Office 365 Ticket #30126-" . $_POST['ticket_number2'];
	$customers_issue = "Customers Issues: " . " " . $_POST['customers_issue'];
	$customers_software = $_POST['customers_software'];
	$customers_os = $_POST['customers_os'];
	$ticket_notes = "Steps to resolve: " . $line . $line . $_POST['p_scnt'];
	$ticket_notes2 = $_POST['p_scnt_2'];
	$ticket_notes3 = $_POST['p_scnt_3'];
	$ticket_notes4 = $_POST['p_scnt_4'];
	$ticket_notes5 = $_POST['p_scnt_5'];
	$ticket_notes6 = $_POST['p_scnt_6'];
	$ticket_notes7 = $_POST['p_scnt_7'];
	$ticket_notes8 = $_POST['p_scnt_8'];
	$ticket_notes9 = $_POST['p_scnt_9'];
	$ticket_notes10 = $_POST['p_scnt_10'];
	$ticket_notes11 = $_POST['p_scnt_11'];
	$ticket_notes12 = $_POST['p_scnt_12'];
	$ticket_notes13 = $_POST['p_scnt_13'];
	$ticket_notes14 = $_POST['p_scnt_14'];
	$ticket_notes15 = $_POST['p_scnt_15'];
	$ticket_notes16 = $_POST['p_scnt_16'];
	$ticket_notes17 = $_POST['p_scnt_17'];
	$ticket_notes18 = $_POST['p_scnt_18'];
	$ticket_notes19 = $_POST['p_scnt_19'];
	$ticket_notes20 = $_POST['p_scnt_20'];
	$action_plan = "Action Plan: " . $_POST['action_plan'];
	$customer_requests = $_POST['customer_requests'];
	$team_leaders = $_POST['team_leaders'];
	$actionplan_other = $_POST['actionplan_other'];
	$details = "Additional Notes: " . $line . $line . $_POST['details'];
	$line = "<br>";
	$line1 = "\n";
	$ticket_number = $_POST['ticket_number'];
	$ticket_number2 = $_POST['ticket_number2'];
	$next_team = $_POST['next_team'];
	$trial = $_POST['trial'];
	$trial1 = $_POST['trial1'];
	$trial2 = $_POST['trial2'];
	$trial3 = $_POST['trial3'];
	$trial4 = $_POST['trial4'];
	$Shift = $_POST['shift'];
	
	$message1 = '<html><body>';
	$message2 .= '<table border="1" style="background-color:FFFFCC;border-collapse:collapse;border:1px solid FFCC00;color:000000;width:100%" cellpadding="3" cellspacing="3">';
	$message3 .= "<tr><td><strong>Agent: </strong> </td><td>" . $from . "</td></tr>";
	$message4 .= "<tr><td><strong>Ticket Number:</strong> </td><td>" . "Office 365 Ticket #30126-" . $ticket_number2 . "</td></tr>";
	$message5 .= "<tr><td><strong>Customers Issue:</strong> </td><td>" . $customers_issue . "</td></tr>";
	$message6 .= "<tr><td><strong>Customers Software:</strong> </td><td>" . $customers_software . "</td></tr>";
	$message7 .= "<tr><td><strong>Customers Operating System: </strong> </td><td>" . $customers_os . "</td></tr>";
	$message8 .= "<tr><td><strong>Steps to Resolve:</strong> </td><td>" . $ticket_notes . "<br>" . $ticket_notes2 . "<br>" . $ticket_notes3 . "<br>" . $ticket_notes4 . "<br>" . $ticket_notes5 . "<br>" . $ticket_notes6 . "<br>" . $ticket_notes7 . "<br>" . $ticket_notes8 . "<br>" . $ticket_notes9 . "<br>" . $ticket_notes10 . "<br>" . $ticket_notes11 . "<br>" . $ticket_notes12 . "<br>" . $ticket_notes13 . "<br>" . $ticket_notes14 . "<br>" . $ticket_notes15 . "<br>" . $ticket_notes16 . "<br>" . $ticket_notes17 . "<br>" . $ticket_notes18 . "<br>" . $ticket_notes19 . "<br>" . $ticket_notes20 . "</td></tr>";
    $message9 .= "<tr><td><strong>Action Plan:</strong> </td><td>" . $action_plan . "</td></tr>";
    $message10 .= "<tr><td><strong>Action Plan Details: </strong> </td><td>" . $actionplan_other . "</td></tr>";
	$message11 .= "<tr><td><strong>Customer Requests: </strong> </td><td>" . $customer_requests . "</td></tr>";
	$message12 .= "<tr><td><strong>Additional Notes: </strong> </td><td>" . $details . "</td></tr>";
	$message13 .= "<tr><td><strong>IT Advisor Experiment: </strong> </td><td>" . $trial . "<br>" . $trial1 . "<br>" . $trial2 . "<br>" . $trial3 . "<br>" . $trial4 . "</td></tr>";
	$message14 .= "</table>";
	$message15 .= "</body></html>";

    $message = $customers_issue . $line . $customers_software . $line . $customers_os . $line . $line . $ticket_notes . $line . $ticket_notes2 . $line . $ticket_notes3 . $line . $ticket_notes4 . $line . $ticket_notes5 . $line . $ticket_notes6 . $line . $ticket_notes7 . $line . $ticket_notes8 . $line . $ticket_notes9 . $line . $ticket_notes10 . $line . $ticket_notes11 . $line . $ticket_notes12 . $line . $ticket_notes13 . $line . $ticket_notes14 . $line . $ticket_notes15 . $line . $ticket_notes16 . $line . $ticket_notes17 . $line . $ticket_notes18 . $line . $ticket_notes19 . $line . $ticket_notes20 . $line . $line . $action_plan . $line . $team_leaders . " " . $next_team . $line . $actionplan_other . $line . $customer_requests  . $line . $line . "IT Advisor Experiment" . $line . $line . $trial . $line . $trial1 . $line . $trial2 . $line . $trial3 . $line . $trial4 . $line . $details . $_POST['message'];
    $messageB = "Here is a copy of the notes that you have sent to Parature " . "\n\n" . $message1 . $message2 . $message3 . $message4 . $message5 . $message6 . $message7 . $message8 . $message9 . $message10 . $message11 . $message12 . $message13 . $message14 . $message15 . $_POST['message'];

	$headers = "BCC: office365support@saplingservers.net\r\n" . "MIME-Version: 1.0\r\n" . "Content-Type: text/html; charset=ISO-8859-1\r\n" . "From: " . $from;
    $headers2 = "MIME-Version: 1.0\r\n" . "Content-Type: text/html; charset=ISO-8859-1\r\n" . "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject,$messageB,$headers2);
    echo "Ticket Notes Sent to ticket number:" . " " . $ticket_number . $ticket_number2 . " " . "Thank you " . $from . ", these have now been added to Parature.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!-- End -->
<!-- Start HTML -->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script src="../_nav/js/nav.js" type="text/javascript"></script>
<!-- Feedback Script and Loading Bar -->
<script data-cfasync="false" src="//fast.eager.io/UGoxcdtLJJ.js"></script>
<!-- END feedback and loading bar -->
<!-- Disable [ENTER] button -->
<script type="text/javascript"> 

function stopRKey(evt) { 
  var evt = (evt) ? evt : ((event) ? event : null); 
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
  if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
} 

document.onkeypress = stopRKey; 

</script>
<!-- End -->
<!-- Send User to Top of Page on Reload -->
<script>
$(document).ready(function(){
    $(this).scrollTop(0);
});
</script>
<!-- End  -->
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
	<a href="#" class="pull-left"><img src="logo.png" height="50px"></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Parature Agent Portal</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Submit Notes</a></li>
		<!-- Pop up window for call log -->
		<script type="text/javascript">
		// Popup window code
		function newPopup(url) {
		popupWindow = window.open(
		url,'popUpWindow','height=610,width=400,left=10,top=10,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes')
	}
</script>
<li><a href="JavaScript:newPopup('https://inty1.sharepoint.com/sites/concierge/_layouts/15/guestaccess.aspx?guestaccesstoken=KDM56Ew%2fH0c8t%2fXHZ8XXVWcxSaOUyTr3rKjakUypOFk%3d&docid=2_15ccbd479182346e7870a86474899061d');">Call Log</a></li>
<!-- End -->
        <li><a href="#">Open Rave</a></li>
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin <span class="caret"></span></a>
          <ul class="dropdown-menu">
			<li><a href="register.php">Create Agent Account</a></li>
            <li><a href="memberlist.php">View Agents</a></li>
            <li><a href="#">View Active Tickets</a></li>
            <li><a href="#">Unlock Accounts</a></li>
			<li><a href="changelog.php">ChangeLog</a></li>
			<li><a href="maintenance.php">Maintenance Page</a></li>
          </ul>
        </li>
		<li><a href="#" data-toggle="modal" data-target="#myModal">Office 365 Service Status</a></li>
		<!-- Service Status Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Current Service Issues</h4>
      </div>
      <div class="modal-body">
        <?php
	$rss = new DOMDocument();
	$rss->load('http://rss.servicehealth.microsoftonline.com/feed/en-US/BB1B8033DB5E49981BC7E780634F4206/d3x79w/o4u3yj/1zgoqi/gk1n7d/c8mfak/x9duf_/n-dbvo');
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}
	$limit = 5;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		$date = date('l F d, Y', strtotime($feed[$x]['date']));
		echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
		echo '<small><em>Posted on '.$date.'</em></small></p>';
		echo '<p>'.$description.'</p>';
	}
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- End Modal -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="edit_account.php"><span class="glyphicon glyphicon-user"></span> Edit Account</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- End -->
<div class="alert alert-danger alert-dismissable" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <center><strong>NOTICE:</strong> To use the Parature Agent Portal as intended, it is recommended that you use Google Chrome or FireFox and download this <a href="https://chrome.google.com/webstore/detail/ignore-x-frame-headers/gleekbfjekiniecknbkamfmkohkpodhe">Chrome Addon</a> or this <a href="https://addons.mozilla.org/en-GB/firefox/addon/ignore-x-frame-options/">FireFox Addon</a></center>
  <center><strong>NOTICE:</strong> Once you click submit, the page will constantly load until the notes have been sent to Parature. <strong>Do not refresh the page until it reloads itself.</strong></a></center>
</div>
<!-- Scripts -->
<title>Parature Agent Portal</title>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="css/styles-2.css" />

<!-- CSS: implied media="all" -->
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,600,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" media="all" href="logo.css"/>
  <link rel="icon" type="image/jpg" href="http://intycascade.com/static/images/furniture/favicon.jpg" />

  <!--[if lte IE 7]><script src="/static/js/lte-ie7.js"></script><![endif]-->

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <!-- End -->
</head>
<body lang="en">
<div id="page-wrap">
<!-- Display Welcome Message and Email -->
Welcome back <?php echo htmlentities($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8'); ?>, time to work!<br /> 
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
	<option value="The customers software that is experiencing the issues is Office Mobile">Office Mobile</option>
	<option value="The customers software that is experiencing the issues is Office Portal">Office Portal</option>
	<option value="The customers software that is experiencing the issues is Other">Other</option>
</select>
<br>
	<br><b>Customers Operating System:</b>
<select name="customers_os" id="customers_os">
	<option selected="selected">Please Select the customers Operating System</option>
	<option value="Customers Operating System: Windows XP">Windows XP</option>
	<option value="Customers Operating System: Windows 7">Windows 7</option>
	<option value="Customers Operating System: Windows 8">Windows 8</option>
	<option value="Customers Operating System: Windows 8.1">Windows 8.1</option>
	<option value="Customers Operating System: Windows 10">Windows 10</option>
	<option value="Customers Operating System: Windows Server 2012">Windows Server 2012</option>
	<option value="Customers Operating System: Windows Server 2008">Windows Server 2008</option>
	<option value="Customers Operating System: Mac OS X 10.10">Mac OS X 10.10 </option>
	<option value="Customers Operating System: Mac OS X El Capitan">Mac OS X El Capitan</option>
	<option value="Customers Operating System: Other">Other</option>
	<option value="Customers Operating System: Unknown / QnA">Unknown / QnA</option>
</select>
<br>
<a href="https://inty1.sharepoint.com/sites/concierge/_layouts/15/guestaccess.aspx?guestaccesstoken=r1XVfiu54FDO4yfSnsJuBXYkz03AYpr0%2fevWu9tk2xM%3d&folderid=2_1e81481f0636c4be1a175604c2808d352">OneNote Tools</a>
<br>
			<h2>Get help with a product</h2>
<div id='cse' style='width: 45%;'>Loading</div>
<script src='//www.google.com/jsapi' type='text/javascript'></script>
<script type='text/javascript'>
google.load('search', '1', {language: 'en', style: google.loader.themes.DEFAULT});
google.setOnLoadCallback(function() {
  var customSearchOptions = {};
  var orderByOptions = {};
  orderByOptions['keys'] = [{label: 'Relevance', key: ''} , {label: 'Date', key: 'date'}];
  customSearchOptions['enableOrderBy'] = true;
  customSearchOptions['orderByOptions'] = orderByOptions;
  customSearchOptions['overlayResults'] = true;
  var customSearchControl =   new google.search.CustomSearchControl('016657836365192182791:6ig3w2ovmci', customSearchOptions);
  customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
  var options = new google.search.DrawOptions();
  options.setAutoComplete(true);
  customSearchControl.draw('cse', options);
}, true);
</script>

	<div id="images_hz">
		<a href="https://support.office.com/en-us/excel"><img src="img/excel-logo.png" alt="excel" width="50px" height="50px">Excel</img></a>
		<a href="https://support.office.com/en-us/onenote"><img src="img/onenote-logo.png" alt="onenote" width="50px" height="50px">OneNote</img></a>
		<a href="https://support.office.com/en-us/outlook"><img src="img/outlook-logo.png" alt="outlook" width="50px" height="50px">Outlook</img></a>
		<a href="https://support.office.com/en-us/powerpoint"><img src="img/powerpoint-logo.png" alt="powerpoint" width="50px" height="50px">PowerPoint</img></a>
		<a href="https://support.office.com/en-us/word"><img src="img/word-logo.png" alt="word" width="50px" height="50px">Word</img></a>
		<a href="https://support.office.com/en-us/onedrive"><img src="img/onedrive-logo.png" alt="onedrive" width="60px" height="50px">OneDrive</img></a>
	</div>
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
<option value="Other">Other</option>
</select>
<br>
<b>If Escalation please select your team leader below.</b>
<br>
<select name="team_leaders" id="team_leaders">
<option selected="selected">No Escalation Required</option>
<option value="Mohammed Santali">Mohammed Santali</option>
<option value="Amanda Burnett">Amanda Burnett</option>
<option value="Micheal Harrison">Michael Harrison</option>
<option value="Reuben Turkie">Reuben Turkie</option>
</select>
<br>
<b>If Escalation please select the time required for the hand over</b>
<br>
<select name="next_team" id="next_team">
<option selected="selected">No Escalation Required</option>
<option value="to Mohammed Santali's team, he has been CCed and the ticket's details have been sent to Concierge_Escalations">4PM - Midnight GMT</option>
<option value="to Amanda Burnett's team, she has been CCed and the ticket's details have been sent to Concierge_Escalations">6PM - 2AM GMT</option>
<option value="to Michael Harrison's team, he has been CCed and the ticket's details have been sent to Concierge_Escalations">Midnight - 8AM GMT</option>
<option value="to Reuben Turkie's team, he has been CCed and the ticket's details have been sent to Concierge_Escalations">8AM - 4PM GMT</option>
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
<h3><b>Concierge Trial / IT Advisor Experiment</b></h3>
<hr>
<!-- Trial Box -->
<script>
$(function(){
  $('.header').click(function(){
    $(this).closest('.container').toggleClass('collapsed');
  });
  
});
</script>
<!-- End -->
<!-- Trial / IT Advisor Experiment -->
<div class="row">
<div class="container collapsed">
  <div class="header">If you have offered a customer the trial, please click the arrow on the right!</div>
    <div class="content">
<b>Trial Offered?</b>
<br>
<select name="trial" id="trial">
<option selected="selected" value="IT Advisor 1 - No Offer / I have not offered the customer the IT Advisor Experiment">No</option>
<option value="I have verbally offered the customer the IT Advisor Eperiment">Yes</option>
</select>
<br>
<br>
<b>Which software from the trial did you offer the customer</b>
<br>
<select name="trial1" id="trial1" size="6" multiple="multiple">
<option selected="selected" value="I did not offer the customer the IT Advisor Experiment"> Trial not offered</option>
<option value="I offered the customer the IT Advisor Experiment for Acronis Cloud Backup"> Acronis</option>
<option value="I offered the customer the IT Advisor Experiment for MigrationWiz"> MigrationWiz</option>
<option value="I offered the customer the IT Advisor Experiment for DocuSign SMB" disabled> DocuSign SMB</option>
<option value="I offered the customer the IT Advisor Experiment for Intuit Quickbooks" disabled> Intuit Quickbooks</option>
<option value="I offered the customer the IT Advisor Experiment for Exclaimer Signature Manager O365" disabled>Exclaimer Signature Manager O365</option>
<option value="I offered the customer the IT Advisor Experiment for Sage One Accounting" disabled>Sage One Accounting</option>
</select>
<br>
<br>
<b>Did the customer accept the trial offer from you?</b>
<br>
<select name="trial2" id="trial2">
<option selected="selected" value="I did not offer the customer the IT Advisor Experiment">Trial not offered</option>
<option value="IT Advisor 1 - Trial Invite / The customer accepted the IT Advisor Experiment"> Yes</option>
<option value="IT Advisor 1 - No Offer / The customer did not accept the IT Advisor Experiment"> No</option>
</select>
<br>
<br>
<br>
<b>If the customer declined, please explain why:</b>
<br>
<textarea name="trial3" rows="4" cols="30" value="IT Experiement:" placeholder="Why did the customer decline the experiment?">
</textarea>
<br>
<br>
<b>Explain why you offered the customer the trial:</b>
<br>
<textarea name="trial4" rows="4" cols="30" value="IT Experiement:" placeholder="Why did you offer the customer the trial">
</textarea>
<br>
</div>
</div>
</div>
<!-- Trial / IT Advisor Experiment END -->
<div class="row">
<div class="pull-right">
<!-- iframe variable size code -->
<script type="text/javascript" language="javascript"> 
$('.myIframe').css('height', $(window).height()+'px');
</script>
<!-- End iframe code -->
<!-- iFrame on Click -->
<h3>Send Customer Trial Invitiation</h3>
<script type="text/javascript">
$(function(){
    $('#button').click(function(){
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" class="myIframe" src="https://concierge.inty.com/concierge/CreateInvite" width="900px" height="610px" frameborder="0"></iframe>');
        }
    });   
});
</script>
<a id="button">Create Trial Invite - For FireFox and Chrome Users</a>
<div id="iframeHolder"></div>
<!-- Pop up window for intY Trial -->
<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=610,width=400,left=10,top=10,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes')
}
</script>
<p><a href="JavaScript:newPopup('https://concierge.inty.com/concierge/CreateInvite');">Create Trial Invite - For All Other Users</a></p> 
<!-- End -->
<!-- End iFrame on Click -->
</div>
</div>
<hr>
<b>Additional Details / Other Details</b>
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
<input class="btn btn-primary" type="submit" name="submit" value="Submit" onclick="image(img)">	
<br>

</form>
<!-- End Notes Form -->
	 <!-- footer -->


    <!-- scripts -->
    <script src="http://intycascade.com/static/js/jquery-ui-1.8.18.custom.min.js"></script>
    <script src="http://intycascade.com/static/js/jquery.html5support.min.js"></script>
    <script src="http://intycascade.com/static/js/jquery.form.js"></script>
    <script src="http://intycascade.com/static/js/json2.js"></script>
    <script src="http://intycascade.com/static/js/initialize.js"></script>    
    <script src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
	
	<br>
	<br>
	<br>

<div id="footer">
	<p><a href="http://inty.com">intY Limited</a> &nbsp;&middot;&nbsp; Copyright &#169; 2015 Sapling Servers Limited &nbsp;&middot;&nbsp; Parature Agent Portal Version - <?php echo $version; ?></p>
</div>
	</div>
	</div>
</html>