<?php
if(isset($_POST['submit'])){
    $to = "office365support@microsoft.com";
    $from = $_SESSION['user']['email'];
    $subject = "Office 365 Ticket #30126-" . $_POST['ticket_number2'];
	$ticket_number = $_POST['ticket_number'];
	$ticket_number2 = $_POST['ticket_number2'];
	$contact = $_POST['contact'];
	$voicemail = $_POST['voicemail'];
	$reason = $_POST['reason'];
	$line = "<br>";
	$line1 = "\n";
	
	$message1 = '<html><body>';
	$message2 .= '<table border="1" style="background-color:FFFFCC;border-collapse:collapse;border:1px solid FFCC00;color:000000;width:100%" cellpadding="3" cellspacing="3">';
	$message3 .= "<tr><td><strong>Agent: </strong> </td><td>" . $from . "</td></tr>";
	$message4 .= "<tr><td><strong>Ticket Number:</strong> </td><td>" . "Office 365 Ticket #30126-" . $ticket_number2 . "</td></tr>";
	$message5 .= "<tr><td><strong>Contacted?</strong> </td><td>" . $contact . "</td></tr>";
	$message6 .= "<tr><td><strong>Voicemail? </strong> </td><td>" . $voicemail . "</td></tr>";
	$message7 .= "<tr><td><strong>Why did you not leave a voicemail?: </strong> </td><td>" . $reason . "</td></tr>";
	$message8 .= "</table>";
	$message9 .= "</body></html>";

    $message = $contact . $line . $voicemail . $line . $reason . $line . $_POST['message'];
    $messageB = "Here is a copy of the notes that you have sent to Parature " . "\n\n" . $message1 . $message2 . $message3 . $message4 . $message5 . $message6 . $message7 . $message8 . $message9 . $_POST['messageB'];

	$headers = "MIME-Version: 1.0\r\n" . "Content-Type: text/html;charset=UTF-8" . "\r\n" . "From: " . $from;
    $headers2 = "BCC: office365support@saplingservers.net\r\n" . "MIME-Version: 1.0\r\n" . "Content-Type: text/html;charset=UTF-8" . "\r\n" . "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject,$messageB,$headers2);
    echo "Ticket Notes Sent to ticket number:" . " " . $ticket_number . $ticket_number2 . " " . "Thank you " . $from . ", these have now been added to Parature.";    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }

?>