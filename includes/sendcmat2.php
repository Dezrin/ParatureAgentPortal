<?php
if(isset($_POST['submit'])){
    $to = "office365support@microsoft.com";
    $from = $_SESSION['user']['email'];
    $subject = "Office 365 Ticket #30126-" . $_POST['ticket_number2'];
	$ticket_number = $_POST['ticket_number'];
	$ticket_number2 = $_POST['ticket_number2'];
	$customers_status = $_POST['customers_status'];
	$contact = $_POST['contact'];
	$next = $_POST['next'];
	$details = $_POST['details'];
	$business_hours = $_POST['business_hours'];
	$identity = $_POST['verification'];
	$changes = $_POST['changes'];
	$update_email = $_POST['update_email'];
	$opening = $_POST['"opening"'];
	$customer = $_POTS['customer'];
	$trial = $_POST['trial'];
	$trial1 = $_POST['trial1'];
	$tech_details = $_POST['tech_details'];
	$line = "<br>";
	$line1 = "\n";
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
	
	
	$message1 = '<html><body>';
	$message2 .= '<table border="1" style="background-color:FFFFCC;border-collapse:collapse;border:1px solid FFCC00;color:000000;width:100%" cellpadding="3" cellspacing="3">';
	$message3 .= "<tr><td><strong>Agent: </strong> </td><td>" . $from . "</td></tr>";
	$message4 .= "<tr><td><strong>Ticket Number:</strong> </td><td>" . "Office 365 Ticket #30126-" . $ticket_number2 . "</td></tr>";
	$message5 .= "<tr><td><strong>Customers Status:</strong> </td><td>" . $customers_status . "</td></tr>";
	$message6 .= "<tr><td><strong>Contacted?</strong> </td><td>" . $contact . "</td></tr>";
	$message7 .= "<tr><td><strong>Customer Verified Identity: </strong> </td><td>" . $identity . "</td></tr>";
	$message8 .= "<tr><td><strong>Updated Customers Email?: </strong> </td><td>" . $update_email . "</td></tr>";
	$message9 .= "<tr><td><strong>Changes to the customers Subscription: </strong> </td><td>" . $changes . "</td></tr>";
	$message10 .= "<tr><td><strong>Next Plan: </strong> </td><td>" . $next . "</td></tr>";
	$message11 .= "<tr><td><strong>Why?: </strong> </td><td>" . $trial1 . "</td></tr>";
	$message12 .= "<tr><td><strong>Technician Remarks: </strong> </td><td>" . $opening . "</td></tr>";
	$message13 .= "<tr><td><stron>Ticket Notes: </strong> </td><td><ul style='list-style-type:disc'><li>" . $notes_start . "<br>" . $ticket_notes . "</li><li>" . $ticket_notes2 . "</li><li>" . $ticket_notes3 . "</li><li>" . $ticket_notes4 . "</li><li>" . $ticket_notes5 . "</li><li>" . $ticket_notes6 . "</li><li>" . $ticket_notes7 . "</li><li>" . $ticket_notes8 . "</li><li>" . $ticket_notes9 . "</li><li>" . $ticket_notes10 . "</li></ul></td></tr>";
	$message14 .= "<tr><td><stron>Additional Details: </strong> </td><td>" . $details . "</td></tr>";
	$message15 .= "<tr><td><strong>Technical Details: </strong> </td><td>" . $tech_details . "</td></tr>";
	$message16 .= "</table>";
	$message17 .= "</body></html>";

    $message = $customers_status . $line . $contact . $line . $identity . $line . $update_email . $line . $changes . $line . $next . $line . $trial . $line . $trial1 . $line . $line . "Steps to resolve issues: " . $line . $ticket_notes . $line . $ticket_notes2 . $line . $ticket_notes3 . $line . $ticket_notes4 . $line . $ticket_notes5 . $line . $ticket_notes6 . $line . $ticket_notes7 . $line . $ticket_notes8 . $line . $ticket_notes9 . $line . $ticket_notes10 . $line . $tech_details . $_POST['message'];
    $messageB = "Here is a copy of the notes that you have sent to Parature " . "\n\n" . $message1 . $message2 . $message3 . $message4 . $message5 . $message6 . $message7 . $message8 . $message9 . $message10 . $message11 . $message12 . $message13 . $message14 . $message15 . $message16 . $message17 . $_POST['messageB'];

	$headers = "MIME-Version: 1.0\r\n" . "Content-Type: text/html;charset=UTF-8" . "\r\n" . "From: " . $from;
    $headers2 = "BCC: office365support@saplingservers.net\r\n" . "MIME-Version: 1.0\r\n" . "Content-Type: text/html;charset=UTF-8" . "\r\n" . "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject,$messageB,$headers2);
    echo "Ticket Notes Sent to ticket number:" . " " . $ticket_number . $ticket_number2 . " " . "Thank you " . $from . ", these have now been added to Parature.";    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }

?>