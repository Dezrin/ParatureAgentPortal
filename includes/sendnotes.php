<?php
if(isset($_POST['submit'])){
    $to = "office365support@microsoft.com";
    $from = $_SESSION['user']['email'];
    $subject = "Office 365 Ticket #30126-" . $_POST['ticket_number2'];
	$customers_issue = "Customers Issues: " . " " . $_POST['customers_issue'];
	$customers_software = $_POST['customers_software'];
	$customers_os = $_POST['customers_os'];
	$notes_start = "Steps to resolve:" . $line;
	$ticket_notes = $_POST['p_scnt'];
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
	foreach ($_POST['trial1'] as $trial1);
	$trial2 = $_POST['trial2'];
	$trial3 = $_POST['trial3'];
	$trial4 = $_POST['trial4'];
	$Shift = $_POST['shift'];
	$version = $_POST['office_version'];
	
	$message1 = '<html><body>';
	$message2 .= '<table border="1" style="background-color:FFFFCC;border-collapse:collapse;border:1px solid FFCC00;color:000000;width:100%" cellpadding="3" cellspacing="3">';
	$message3 .= "<tr><td><strong>Agent: </strong> </td><td>" . $from . "</td></tr>";
	$message4 .= "<tr><td><strong>Ticket Number:</strong> </td><td>" . "Office 365 Ticket #30126-" . $ticket_number2 . "</td></tr>";
	$message5 .= "<tr><td><strong>Customers Issue:</strong> </td><td>" . $customers_issue . "</td></tr>";
	$message6 .= "<tr><td><strong>Customers Software:</strong> </td><td>" . $customers_software . "</td></tr>";
	$message7 .= "<tr><td><strong>Customers Operating System: </strong> </td><td>" . $customers_os . "</td></tr>";
	$message8 .= "<tr><td><strong>Customers Version of Office 365: </strong> </td><td>" . $version . "</td></tr>";
	$message9 .= "<tr><td><stron>Ticket Notes: </strong> </td><td><ul style='list-style-type:disc'><li>" . $notes_start . "<br>" . $ticket_notes . "</li><li>" . $ticket_notes2 . "</li><li>" . $ticket_notes3 . "</li><li>" . $ticket_notes4 . "</li><li>" . $ticket_notes5 . "</li><li>" . $ticket_notes6 . "</li><li>" . $ticket_notes7 . "</li><li>" . $ticket_notes8 . "</li><li>" . $ticket_notes9 . "</li><li>" . $ticket_notes10 . "</li><li>" . $ticket_notes11 . "</li><li>" . $ticket_notes12 . "</li><li>" . $ticket_notes13 . "</li><li>" . $ticket_notes14 . "</li><li>" . $ticket_notes15 . "</li><li>" . $ticket_notes16 . "</li><li>" . $ticket_notes17 . "</li><li>" . $ticket_notes18 . "</li><li>" . $ticket_notes19 . "</li><li>" . $ticket_notes20 . "</li></ul></td></tr>";
    $message10 .= "<tr><td><strong>Action Plan:</strong> </td><td>" . $action_plan . "</td></tr>";
    $message11 .= "<tr><td><strong>Action Plan Details: </strong> </td><td>" . $actionplan_other . "</td></tr>";
	$message12 .= "<tr><td><strong>Customer Requests: </strong> </td><td>" . $customer_requests . "</td></tr>";
	$message13 .= "<tr><td><strong>Additional Notes: </strong> </td><td>" . $details . "</td></tr>";
	$message14 .= "<tr><td><strong>IT Advisor Experiment: </strong> </td><td>" . $trial . "<br><br>" . $trial1 . "<br><br>" . $trial2 . "<br><br>" . $trial3 . "<br><br>" . $trial4 . "</td></tr>";
	$message15 .= "</table>";
	$message16 .= "</body></html>";

    $message = $customers_issue . $line . $customers_software . $line . $version . $line . $customers_os . $line . $line . "Steps to resolve issues: " . $line . $ticket_notes . $line . $ticket_notes2 . $line . $ticket_notes3 . $line . $ticket_notes4 . $line . $ticket_notes5 . $line . $ticket_notes6 . $line . $ticket_notes7 . $line . $ticket_notes8 . $line . $ticket_notes9 . $line . $ticket_notes10 . $line . $ticket_notes11 . $line . $ticket_notes12 . $line . $ticket_notes13 . $line . $ticket_notes14 . $line . $ticket_notes15 . $line . $ticket_notes16 . $line . $ticket_notes17 . $line . $ticket_notes18 . $line . $ticket_notes19 . $line . $ticket_notes20 . $line . $line . $action_plan . $line . $team_leaders . " " . $next_team . $line . $actionplan_other . $line . $customer_requests  . $line . $line . "IT Advisor Experiment" . $line . $line . $trial . $line . $trial1 . $line . $trial2 . $line . $trial3 . $line . $trial4 . $line . $details . $_POST['message'];
    $messageB = "Here is a copy of the notes that you have sent to Parature " . "\n\n" . $message1 . $message2 . $message3 . $message4 . $message5 . $message6 . $message7 . $message8 . $message9 . $message10 . $message11 . $message12 . $message13 . $message14 . $message15 . $message16 . $_POST['message'];

	$headers = "MIME-Version: 1.0\r\n" . "Content-Type: text/html;charset=UTF-8" . "\r\n" . "From: " . $from;
    $headers2 = "MIME-Version: 1.0\r\n" . "Content-Type: text/html;charset=UTF-8" . "\r\n" . "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject,$messageB,$headers2);
    echo "Ticket Notes Sent to ticket number:" . " " . $ticket_number . $ticket_number2 . " " . "Thank you " . $from . ", these have now been added to Parature.";    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }

?>