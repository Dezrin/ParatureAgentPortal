
<!-- Require Login -->
<?php

    require("../common.php");
     
    if(empty($_SESSION['user']))
    {
        header("Location: ../login.php");
         
        die("Redirecting to login.php");
    }
     
?>
<!-- Version number for the footer -->
<?php
                include "../version.php";
?>
<!-- End Version Number -->
<?php
   include "sendescalation.php";
   ?>
<!-- Login Ends -->

<!-- Start HTML -->
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="../includes/favicon.ico"/>
  <link rel="icon" href="../includes/favicon.ico"/>
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
                <a href="../private.php" class="pull-left"><img src="../logo.png" height="50px"></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../private.php"><a class="navbar-brand">Parature Agent Portal</a></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../private.php">Submit Notes</a></li>
                                <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> CMAT Notes <span class="caret"></span></a>
          <ul class="dropdown-menu">
                                                <li><a href="../CMAT.php">Customer Unreachable</a></li>
            <li><a href="../CMAT2.php">Customer Reachable</a></li>
          </ul>
        </li>
                                <!-- Pop up window for call log -->
                                <script type="text/javascript">
                                // Popup window code
                                function newPopup(url) {
                                popupWindow = window.open(
                url,'popUpWindow','height=610,width=400,left=10,top=10,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes')
                }
</script>
<li><a href="JavaScript:newPopup('//inty1.sharepoint.com/sites/concierge/_layouts/15/WopiFrame.aspx?sourcedoc={AF55E496-6FB2-4485-A4FD-7F67BD30AA10}&file=February%20Spreadsheet.xlsx&action=default');">Call Log</a></li>
<!-- End -->
                                <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Admin <span class="caret"></span></a>
          <ul class="dropdown-menu">
                                                <li><a href="../register.php">Create Agent Account</a></li>
                                                <li><a href="../ticketcounter.php">Ticket Counts</a></li>
            <li><a href="../memberlist.php">View Agents</a></li>
            <li><a href="#">View Active Tickets</a></li>
            <li><a href="../delete-users.php">Remove Accounts</a></li>
                                                <li><a href="../changelog.php">ChangeLog</a></li>
                                                <li><a href="../maintenance.php">Maintenance Page</a></li>
          </ul>
        </li>
                                <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Tools <span class="caret"></span></a>
          <ul class="dropdown-menu">
                                                <li><a href="../deploymentconfigeditor">Deployment Tool Config Editor</a></li>
                                                <li><a href="../downloads">Office 365 Downloads</a></li>
                                                <li><a href="../google.php">Search Google for Fix</a></li>
          </ul>
        </li>
                                <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-globe"></span> Office 365 Service Status</a></li>
                                <!-- Service Status Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-globe"></span> Current Service Issues</h4>
      </div>
      <div class="modal-body">
        <!-- RSS feed for Micorsoft Service Updates -->
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
<!-- End RSS Feeds -->
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
                                <!-- End Time Zone Displays -->
        <li><a href="../edit_account.php"><span class="glyphicon glyphicon-user"></span> Edit Account</a></li>
        <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- End -->
<!-- Alert at top of page -->
<div class="alert alert-danger alert-dismissable" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <center><strong>ALERT:</strong> We are currently experiencing a high latency between sending notes from PAP to them appearing on Parature. We are working to fix this!</strong></a></center>
</div>
<!-- End Alert at top of page -->
<!-- Scripts -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link rel="stylesheet" href="escalations.css" />
<link rel="stylesheet" href="../css/styles-2.css" />

<!-- CSS: implied media="all" -->
  <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,600,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" media="all" href="logo.css"/>


  <!--[if lte IE 7]><script src="/static/js/lte-ie7.js"></script><![endif]-->

  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <!-- End -->
</head>
<body lang="en">
<div id="page-wrap">
<!-- Display Welcome Message and Email -->
Welcome back <?php
   echo htmlentities($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8');
   ?>, RAISE A ESCALATION!<br />
<title>Create an Escalation</title>
<h2 class="formInfo">Create an Escalation</h2>
<p class="formInfo">
<form action="" method="post">
<center>
<table style="width:90%">
                    <tr>
                        <td>Ticket Number</td>
                        <td>Current Agent</td>
                        <td>Ticket Description</td>
						<td>Screenshot Included?</td>
						<td>Internal Comment?</td>
                     </tr>
                     <tr>
                          <td><input type="text" name="ticket_number" style="width:100px;font-size:14pt;" value="30126-" disabled><input type="text" name="ticket_number2" id="ticket_number2" style="width:200px;font-size:14pt;"></td>
                          <td><input type="text" name="current_agent" value="The Current Agent working on this is:"></td>
                          <td><input type="text" name="ticket_description" value="Ticket Description:"></td>
						  <td><input type="checkbox" name="screenshot" value="Screenshot included: yes"></td>
                          <td><input type="checkbox" name="internal_comment" value="Internal Comment has been posted: yes"></td>
                     </tr>
       </table>
	   </center>
	   <input type="submit" value="submit">
</form>

</p>


<?php
	include "../includes/footer.php";
?>