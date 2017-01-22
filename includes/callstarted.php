<?php
if(isset($_POST['submit'])){
    $to = "office365support@microsoft.com";
    $from = $_SESSION['user']['email'];
    $subject = "Office 365 Ticket #30126-" . $_POST['ticket_number2'];
	$calltime = date("h:i:sa") . " on " . date("Y/m/d");

    $message = "I called the customer at: " . $calltime . $_POST['message'];

	$headers = "MIME-Version: 1.0\r\n" . "Content-Type: text/html;charset=UTF-8" . "\r\n" . "From: " . $from;
    mail($to,$subject,$message,$headers);
    }

?>