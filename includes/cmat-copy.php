<?php

define('DB_NAME', 'parature_cmat');
define('DB_USER', 'root');
define('DB_PASSWORD', '07Bustertara1');
define('DB_HOST', '127.0.0.1');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

$sql = 'INSERT INTO cmat 
	(Agent,
	subject,
	Customers_status,
	Contacted,
	Voicemail,
	Next_Action,
	Ticket_notes,
	Details)
		VALUES 
	(' . $from . ',
	"' . $subject . '",
	"' . $customers_status . '",
	"' . $contact . '",
	"' . $voicemail . '",
	"' . $next . '",
	"' . $ticket_notes . $line . $ticket_notes2 . $line . $ticket_notes3 . $line . $ticket_notes4 . $line . $ticket_notes5 . $line . $ticket_notes6 . $line . $ticket_notes7 . $line . $ticket_notes8 . $line . $ticket_notes9 . $line . $ticket_notes10 . '")';

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}

mysql_close();
?>