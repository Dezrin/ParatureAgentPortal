<?php
	include "includes/header.php";
?>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Parature Agent Portal - Changelog</title>

<style type='text/css' media='all'>@import url('./userguide.css');</style>
<link rel='stylesheet' type='text/css' media='all' href='../userguide.css' />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="js/nav.js"></script>

<meta http-equiv='expires' content='-1' />
<meta http-equiv= 'pragma' content='no-cache' />
<meta name='robots' content='all' />

</head>
<body>

<!-- START NAVIGATION -->
<div id="nav"><div id="nav_inner"><script type="text/javascript">create_menu('null');</script></div></div>
<div id="masthead">
<table cellpadding="0" cellspacing="0" border="0" style="width:100%">
<tr>
<td><h1>Documentation</h1></td>
<td id="breadcrumb_right">Author:<a href="http://thedezrin.co.uk"> Bradley Comerford</a></td>
</tr>
</table>
</div>
<!-- END NAVIGATION -->


<!-- START BREADCRUMB -->
<table cellpadding="0" cellspacing="0" border="0" style="width:100%">
<tr>
<td id="breadcrumb"> &nbsp;&#8250;&nbsp;
Documentation
</td>
</tr>
</table>
<!-- END BREADCRUMB -->

<br clear="all" />


<!-- START CONTENT -->
<div id="content"><h1>Change Log</h1>

<h2>Version 1.6.2</h2>
<p>Release Date: 15/03/2016</p>
<p>Time Spent: 2 Hours</p>

<ul>
	<li>Added the option for CRM Online to the software that is experiencing issues for the customer <kbd>option value="the customers software that is experiencing the issues is CRM Online">CRM ONLINE/option</kbd></li>
</ul>

<h2>Version 1.6.1</h2>
<p>Release Date: 01/03/2016</p>
<p>Time Spent: 2.2 Hours</p>

<ul>
	<li>Created a new page for sending Escalations to the Concierge_Escalations mailbox <img src="http://i.imgur.com/8H8wqMy.png"></li>
</ul>

<h2>Version 1.6.0</h2>
<p>Release Date: 23/02/2016</p>
<p>Time Spent: 2 Hours</p>

<ul>
	<li>Removed the IT Advisor Experiment section from Parature Agent Portal as it is no longer required for agents, intY are no longer taking part in the IT Advisor Experiment.</li>
	<li>Resolved the issues with Google Search, found that there was an issue with one of the CSS files that I was using, so just ammended the code and removed the CSS file from the <kbd>Google.php</kbd> page.</li>
	<li>Removed the hyperlinks and images for the Office 365 products and the rest of the <kbd>Get Help with A Product</kbd> section to allow users to more fluidly go through there notes.</li>
	<li>Removed the Google Search from the home page and added it under tools as "Search Google for a Fix" <kbd>a href="google.php">Search Google for Fix</kbd>.</li>
	<li>Created new users accounts for new agents that recently joined intY;
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Password</th>
			</tr>
			<tr>
			<td>1</td>
			<td>Adrin Siripala</td>
			<td>adrin.siripala@inty.com</td>
			<td>Bristol123!</td>
			</tr>
			<tr>
			<td>2</td>
			<td>Awale Soffe</td>
			<td>awale.soffe@inty.com</td>
			<td>Bristol123!</td>
			</tr>
			<tr>
			<td>3</td>
			<td>Chris J Bond</td>
			<td>chris.bond@inty.com</td>
			<td>Bristol123!</td>
			</tr>
			<tr>
			<td>4</td>
			<td>James Barratt</td>
			<td>james.barratt@inty.com</td>
			<td>Bristol123!</td>
			</tr>
			<tr>
			<td>5</td>
			<td>Jimmy Yuen</td>
			<td>jimmy.yuen@inty.com</td>
			<td>Bristol123!</td>
			</tr>
			<tr>
			<td>6</td>
			<td>Johann Rakosi</td>
			<td>johann.rakosi@inty.com</td>
			<td>Bristol123!</td>
			</tr>
			<tr>
			<td>7</td>
			<td>John Fryer</td>
			<td>john.fryer@inty.com</td>
			<td>Bristol123!</td>
			</tr>
			<tr>
			<td>8</td>
			<td>Lily Joyce</td>
			<td>lily.joyce@inty.com</td>
			<td>Bristol123!</td>
			</tr>
			<tr>
			<td>9</td>
			<td>Matthew Jeal</td>
			<td>matthew.jeal@inty.com</td>
			<td>Bristol123!</td>
			</tr>
			<tr>
			<td>10</td>
			<td>Mohammed Adam  </td>
			<td>mohammed.adam@inty.com</td>
			<td>Bristol123!</td>
			</tr>
			<tr>
			<td>11</td>
			<td>Nicholas Mazur</td>
			<td>nicholas.mazur@inty.com</td>
			<td>Bristol123!</td>
			</tr>
			<tr>
			<td>12</td>
			<td>Peter Holt</td>
			<td>peter.holt@inty.com</td>
			<td>Bristol123!</td>
			</tr>
		</table></li>
</ul>

<h2>Version 1.5.9</h2>
<p>Release Date: 09/02/2016</p>
<p>Time Spent: 1.5 Hours</p>

<ul>
	<li>Amended the Symantec trial options for agents to distinguish between Symantec Protect and Symantec Safeguard.</li>
	<li>Disabled Selecting More than one option for trials as they were not working correctly. Working on fixing these now.</li>
	<li>Resolved the issues of not being able to send more than one option for the trial offerings.<kbd>foreach ($_POST['trial1'] as $trial1);</kbd></li>
</ul>

<h2>Version 1.5.8</h2>
<p>Release Date: 02/02/2016</p>
<p>Time Spent: 2 Hours</p>

<ul>
	<li>Added a new tool to PAP for the XML Configuration editor to allow users to configure customers deployment tool using a friendly interface. Also includes helpful hints for what each section is for etc.</li>
	<li>Changed the styling of XML Configuration editor to make it look more like it's Microsoft Official, this will make the user interface more friendly for the agents.</li>
	<li>Added a ticket count page for the admins so that we are able to display the total tickets taken in form of Concierge and in CMAT.</li>
</ul>

<h2>Version 1.5.7</h2>
<p>Release Date: 29/01/2016</p>
<p>Time Spent: 1.5 Hours</p>

<ul>
	<li>Added the send email function to Parature Agent Portal so that we can now send emails from PAP to customers. <kbd>if(isset($_POST['submit'])){$to = "office365support@microsoft.com";$from = $_SESSION['user']['email'];$subject = "RE: Office 365 Ticket #30126-" . $_POST['ticket_number2'];$ticket_number = $_POST['ticket_number'];$ticket_number2 = $_POST['ticket_number2'];$email = $_POST['details'];$line = "<br>";$line1 = "\n";</kbd></li>
	<li>Configured and updated PAP's database to allow sending notes to a MariaDB database and start to configure prerequisites to load the database on pages so that Admins are able to see the agents ticket responses: <kbd>$connection = mysql_connect('127.0.0.1', 'root', '*************'); //The Blank string is the passwordmysql_select_db('parature_fixes');$query = "SELECT * FROM fixes"; //You don't need a ; like you do in SQL$result = mysql_query($query);echo "<table>"; // start a table tag in the HTMLwhile($row = mysql_fetch_array($result)){   //Creates a loop to loop through resultsecho "<tr><td>" . $row['technician'] . $row['subject'] . "</td><td>" . $row['Customers_issues'] . $row['Customers_software'] . $row['Customers_OS'] . $row['Notes'] . "</td></tr>";  //$row['index'] the index here is a field name}echo "</table>"; //Close the table in HTMLmysql_close(); //Make sure to close out the database connection</kbd></li>
	<li>Added "Time Spent" on the changelog to show how long each developed stage has taken.</li>
	<li>Fixed a LARGE bug where Parature Agent Portal was parsing PHPMail() requests before sending to Parature causing notes to take ages to send.</li>
</ul>

<h2>Version 1.5.6</h2>
<p>Release Date: 20/01/2016</p>
<p>Time Spent: 0.5 Hours</p>

<ul>
	<li>Fixed a bug where Symentec Endpoint trial's were not being sent to Parature <kbd>select name="trial1" id="trial1" size="8"</kbd></li>
</ul>

<h2>Version 1.5.5</h2>
<p>Release Date: 13/01/2016</p>
<p>Time Spent: 2.5 Hours</p>

<ul>
	<li>Created two new pages for agents for the new service that is being provided by intY called "CMAT/Onboarding" with full functionality as the "Private.php" page for sending notes to Parature, just with regards to another system.</li>
	<li>Added Closure templates to the CMAT pages for all types of closures.</li>
	<li>Added copy/paste/clear options for the Closure templates so that agents can edit them on the go.<kbd>function pasteit(theField) {var val=eval("document."+theField);val.focus();val.select();therange=val.createTextRange();therange.execCommand("Paste");}function copyToClipboard(s){if( window.clipboardData && clipboardData.setData ){clipboardData.setData("Text", s);}else{</kbd></li>
</ul>

<h2>Version 1.2.5</h2>
<p>Release Date: 05/01/2016</p>
<p>Time Spent: 1.0 Hours</p>

<ul>
	<li>Added "Customers Version of Office 365" as a dropdown so that agents can specify the version of Office 365 that is experiencing the issues in the request. <kbd>$version = $_POST['office_version'];</kbd></li>
	   <br><b>Customers Version of Office 365</b>
   <select name="office_version" id="office_version">
		<option selected="selected">Please select the version of Office 365 installed</option>
		<option value="Customers version of Office 365 is 2013">Office 365 2013</option>
		<option value="Customers version of Office 365 is 2016">Office 365 2016</option>
		<option value="Unknown">Unknown</option>
	</select>
</ul>

<h2>Version 1.2.4</h2>
<p>Release Date: 18/12/2015</p>
<p>Time Spent: 0.2 Hours</p>

<ul>
	<li>Added "Callback" and "Handover" options to the next action plan dropdown.</li>
	<li>Added "Closing Ticket" to the options for the next action plan dropdown.</li>
	<li>Changed the format of the Email copy to enable bullet points <kbd>ul style='list-style-type:disc'" . $ticket_notes1 . "/li li" . $ticket_notes2 . "/li li"</kbd></li>
</ul>

<h2>Version 1.2.3</h2>
<p>Release Date: 17/12/2015</p>
<p>Time Spent: 1.5 Hours</p>

<ul>
	<li>Enabled the rest of the trial options for users to offer those trials to customers.</li>
	<li>It is now possible to see what time it is in the current locations that we are supporting customers, these are LA and Melbourne. <kbd>date_default_timezone_set('America/Los_Angeles');echo date('h:iA');</kbd></li>
	<li>Streamlined the web pages by keeping the header and footers seperate, this increases security and increases site speeds.<kbd>include "includes/footer.php";include "includes/header.php";</kbd></li>
	<li>Set the Sending Notes for as a seperate include page to disable user interaction with the website when notes are being sent, also improves site speeds<kbd>include "includes/sendnotes.php";</kbd></li>
</ul>

<h2>Version 1.2.2</h2>
<p>Release Date: 16/12/2015</p>
<p>Time Spent: 2.5 Hours</p>

<ul>
	<li>Fixed the general design of the notes sent to Parature and formatted them in HTML with the same design as Parature <kbd> $headers = "MIME-Version: 1.0\r\n" . "Content-Type: text/html; charset=ISO-8859-1\r\n" . "From: " . $from;</kbd>.</li>
	<li>Encoured an Outage at 00:10:14 AM GMT. Deprovisioned the DDoS attack to sister nodes in the US. Packets recieved: <kbd>400,000 x 100GB's from Location - IP: 101.79.242.9 (GeoIP - South Korea)</kbd>.</li>
	<li>Added the version number to all pages with AutoUpdate from Changelog. <kbd>$version = "1.2.2"; echo $version;</kbd></li>
	<li>Updated the format of the copy of notes that are sent to Parature for agents to better understand the notes that they sent, this also allows for easier pass to Escalations.</li>
	<li>All notes that are sent via Parature Agent Portal are now passed through 2 nodes to ensure that there is a copy of your message saved and able to be delivered even if the service goes offline. They are all also sent to a shared Mailbox where a copy will be stored for future referance.</li>
</ul>

<h2>Version 1.2.1</h2>
<p>Release Date: 14/12/2015</p>
<p>Time Spent: 3.0 Hours</p>

<ul>
	<li>Fixed the bug where the email copy wasn't sending the full information to the users email.</li>
	<li>Added a <kbd>Remember Me</kbd> button for users to not have to login every time.</li>
	<li>Added the version number to all pages using PHP instead of having to manually add it. <kbd>echo $version;</kbd> <kbd>document.getElementById('version').submit();</kbd></li>
	<li>Fixed a bug where the Create Trial Invite was appearing on the right below the Trial Details section <kbd>div class="row"</kbd></li>
	<li>Added a pop-up window work arround for Internet Explorer users for the trial invitation <kbd>function newPopup(url) {popupWindow = window.open(url,'popUpWindow','height=610,width=400,left=10,top=10,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes')}</kbd></li>
	<li>Added the Microsoft RSS feeds to a button on PAP so that agents can view the latest and current service issues for all locations with Office 365. <kbd>$rss->load('http://rss.servicehealth.microsoftonline.com/feed/en-US/BB1B8033DB5E49981BC7E780634F4206/d3x79w/o4u3yj/1zgoqi/gk1n7d/c8mfak/x9duf_/n-dbvo');</kbd></li>
</ul>

<h2>Version 1.2.0</h2>
<p>Release Date: 12/12/2015</p>
<p>Time Spent: 1.5 Hours</p>

<ul>
	<li>Purchased a custom domain for Parature Notes System<kbd>ParatureAgentPortal.com</kbd>.</li>
	<li>Removed the version number from the Title's and the NavBars and added them to a footer.</li>
	<li>Name change from <kbd>Parature Notes System</kbd> to <kbd>Parature Agent Portal</kbd>.</li>
	<li>Added the CASCADE Management System to Parature Agent Portal using <kbd>iframe</kbd>, then used Chrome Extension to view the iframe unrestricted.</li>
	<li>Changed the page loading system to not show the page until it has completely loaded. This disables the page whilst the notes are being sent to Parature.</li>
	<li>Added the Parature Agent Portal to web hosting with the domain for faster email sending to Parature.</li>
</ul>

<h2>Version 1.1.8</h2>
<p>Release Date: 11/12/2015</p>
<p>Time Spent: 1.0 Hours</p>

<ul>
	<li>Fixed a bug where the users couldn't select both options on the trial selections: <kbd>select name="trial1" id="trial1" size="6" multiple="multiple"</kbd>.</li>
	<li>Changed the Sign In button styling on the Log In page</li>
	<li>Change the styling of the <kbd>"Submit"</kbd> button on the main notes form</li>
	<li>Added a function, so on page reload, the page will send the user to the top of the page <kbd>$(document).ready(function(){$(this).scrollTop(0);});</kbd> this will show the users if their notes have been sent or not</li>
	<li>Added syntax to show what section is what on the HTML form <kbd><-- Example --></kbd>.</li>
</ul>

<h2>Version 1.1.6</h2>
<p>Release Date: 11/12/2015</p>
<p>Time Spent: 1.5 Hours</p>

<ul>
	<li>Fixed a bug where pressing <kbd>[ENTER]</kbd> would send notes to Parature using Javascript <kbd>function stopRKey(evt) { var evt = (evt) ? evt : ((event) ? event : null); var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} }</kbd></li>
	<li>Changed the character limit on the notes entries to 140 from 60 <kbd>function countChar(val){var len = val.value.length;if (len >= 140) {val.value = val.value.substring(0, 140);} else {$('#charNum').text(140 - len);};</kbd></li>
	<li>Created a maintenance page for when updates or bugs are being repremanded. <kbd>/maintenance.hmtl</kbd></li>
	<li>Edited the "Call Log" button to open the link in new tab. <kbd>a href="https://inty1.sharepoint.com/sites/concierge/_layouts/15/guestaccess.aspx?guestaccesstoken=KDM56Ew%2fH0c8t%2fXHZ8XXVWcxSaOUyTr3rKjakUypOFk%3d&docid=2_15ccbd479182346e7870a86474899061d" > Call Log</kbd></li>
</ul>

<h2>Version 1.1.4</h2>
<p>Release Date: 10/12/2015</p>
<p>Time Spent: 2.0 Hours</p>

<ul>
	<li>Comes with documentation, which is what you are looking at, so you probably know that.</li>
	<li>Added the <kbd>$from = $_SESSION['user']['email'];</kbd> method for grabbing users Email address for posting email to Parature.</li>
	<li>Fixed some random bugs with locating layouts, theme partials, etc.</li>
	<li>Added the Feedback form using Eager.io <kbd>script src="//fast.eager.io/XRMlarbzfk.js"<kbd> so that users can now comment on issues with the system.</li>
</ul>

<h2>Version 0.8.6</h2>
<p>Release Date: 10/12/2015</p>
<p>Time Spent: 1.0 Hours</p>

<ul>
	<li>Added Bootstrap Navbar to the website for easier user navigation and astetics.</li>
	<li>Added mobile support.</li>
	<li>Edited the user Log In session to allow users to log in correctly <kbd>$login_ok = false;</kbd> also made it so customers can change their passwords <kbd> if($password !== null) { $query_params[':password'] = $password; $query_params[':salt'] = $salt; } </kbd></li>
</ul>

<h2>Version 0.7.4</h2>
<p>Release Date: 09/12/2015</p>

<ul>
	<li>Fixed issue where the Email wouldn't select correcly<kbd>$email = $_POST['email'];</kbd> emails now select correctly used for posting internal comment under agent name.</li>
	<li>Tried to add the Concierge Portal for creating Trial Invites to PNS <kbd>iframe src="https://concierge.inty.com/concierge/CreateInvite"</kbd> unfortunately this did not work due to SSL connection requirements.</li>
</ul>

<h2>Version 0.6.2</h2>
<p>Release Date: 07/12/2015</p>

<ul>
	<li>Styled the buttons using Bootstrap CSS styles <kbd>button type="button" class="btn btn-primary pull-left" href="#" id="addScnt"</kbd>.</li>
	<li>Change the styles of the input to make them all intY Orange <kbd>input[type="number"], textarea {background-color : #FF8C00;}</kbd>.</li>
	<li>Added more options to the default config file.</li>
</ul>

<h2>Version 0.0.6</h2>
<p>Release Date: 30/11/2015</p>

<ul>
	<li>Added a Reset Password Button on the Log Me In Page. <kbd>button type="button" class="btn btn-primary pull-left btn-lg" scr="resetpassword.php" Reset Password</kbd></li>
	<li>Added the Bootstrap CSS styling to all web pages for greater functionality.</li>
</ul>

<h2>Version 0.0.4</h2>
<p>Release Date: 30/11/2015</p>

<ul>
	<li>Test the sending of the PHP mailing system to Parature <kbd>if(isset($_POST['submit'])){$to = "office365support@microsoft.com"; $from = $_SESSION['user']['email']; $subject = "Office 365 Ticket #30126-" . $_POST['ticket_number2']; $customers_issue = "Customers Issues: " . " " . $_POST['customers_issue'];</kbd>.</li>
	<li>First test emails successfully sent to Parature. I then had to fix the styling of the messages to Sharepoint <kbd>$message = $customers_issue . $line . $customers_software . $line . $customers_os . $line . $line . $ticket_notes . $line . $ticket_notes2 . $line . $ticket_notes3 . $line . $ticket_notes4 . $line . $ticket_notes5 . $line . $ticket_notes6 . $line . $ticket_notes7 . $line . $ticket_notes8 . $line . $ticket_notes9 . $line . $ticket_notes10 . $line . $line . $action_plan . $line . $team_leaders . " " . $next_team . $line . $actionplan_other . $line . $customer_requests  . $line . $line . "IT Advisor Experiment" . $line . $line . $trial . $line . $trial1 . $line . $trial2 . $line . $trial3 . $line . $trial4 . $line . $details . $_POST['message'];</kbd>.</li>
</ul>

<h2>Version 0.0.2</h2>
<p>Release Date: 29/11/2015</p>

<ul>
	<li>Created a simple Log In system for users and started to create user accounts</li>
	<li>Fixed PHP mailer so that users were emailed once their account was created, password changed etc.</li>
	<li>Added form for typing in your email address and connected this to the PHP mailer. <kbd>$email = $_POST['email'];</kbd></li>
</ul>

<h2>Version 0.0.1</h2>
<p>Release Date: 28/11/2015</p>

<ul>
	<li>Started to create Parature Notes System with a starting simple HTML form with PHP mailing system.</li>
	<li>Fixed the HTML input boxes with CSS so users can read the text.</li>
	<li>Started to add the PHP mailing system for the HTML send action.</li>
</ul>

</div>
<!-- END CONTENT -->

<?php
	include "includes/footer.php";
?>