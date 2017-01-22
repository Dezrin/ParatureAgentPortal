<?php
if(isset($_POST['submit'])){
    $to = "mohammed.santali@inty.com";
    $from = $_SESSION['user']['email'];
    $subject = "Escalation: Office 365 Ticket #30126-" . $_POST['ticket_number2'];
	$ticket_number = $_POST['ticket_number'];
	$ticket_number2 = $_POST['ticket_number2'];
	$current_agent = $_POST['current_agent'];
	$ticket_description = $_POST['ticket_description'];
	$customer_environment = $_POST['customer_environment'];
	$internal_comment = $_POST['internal_comment'];
	$line = "<br>";
	$line1 = "\n";
	
	$message1 = '<html><body>';
	$message2 .= '<table border="1" style="background-color:FFFFCC;border-collapse:collapse;border:1px solid FFCC00;color:000000;width:100%" cellpadding="3" cellspacing="3">';
	$message3 .= "<tr><td><strong>Agent: </strong> </td><td>" . $from . "</td></tr>";
	$message4 .= "<tr><td><strong>Ticket Number:</strong> </td><td>" . "Escalation: Ticket #30126-" . $ticket_number2 . "</td></tr>";
	$message5 .= "<tr><td><strong>Current Agent: </strong> </td><td>" . $current_agent . "</td></tr>";
	$message6 .= "<tr><td><strong>Ticket Description: </strong> </td><td>" . $ticket_description . "</td></tr>";
	$message7 .= "<tr><td><strong>Screenshot Included?: </strong> </td><td>" . $screenshot . "</td></tr>";
	$message8 .= "<tr><td><strong>Internal Comment: </strong> </td><td>" . $internal_comment . "</td></tr>";
	$message9 .= "</table>";
	$message10 .= "</body></html>";

    $messageB = $subject . $line . $current_agent . $line . $ticket_description . $line . $screenshot . $_POST['message'];
    $message = $message1 . $message2 . $message3 . $message4 . $message5 . $message6 . $message7 . $message8 . $message9 . $message10 . $_POST['messageB'];

	$headers = "MIME-Version: 1.0\r\n" . "Content-Type: text/html;charset=UTF-8" . "\r\n" . "From: " . $from;
    $headers2 = "BCC: office365support@saplingservers.net\r\n" . "MIME-Version: 1.0\r\n" . "Content-Type: text/html;charset=UTF-8" . "\r\n" . "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject,$messageB,$headers2);
    echo "Your escalation of ticket:" . " " . $ticket_number . $ticket_number2 . "  has been sent." . "Thank you " . $from . ", The escalations team will deal with this as soon as possible.";    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }

?>