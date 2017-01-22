<?php

define('DB_NAME', 'parature_fixes');
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

$sql = 'INSERT INTO fixes 
	(Subject,
	Customers_issues,
	Customers_software,
	Customers_OS,
	Notes)
		VALUES 
	(' . $subject . ',
	"' . $customers_issue . '",
	"' . $customers_software . '",
	"' . $customers_os . '",
	"' . $notes_start . $ticket_notes . $ticket_notes2 . $Ticket_notes3 . $ticket_notes4 . $ticket_notes5 . $ticket_notes6 . $ticket_notes7 . $ticket_notes8 . $ticket_notes9 . $ticket_notes10 . $ticket_notes11 . $ticket_notes12 . $ticket_notes13 . $ticket_notes14 . $ticket_notes15 . $ticket_notes16 . $ticket_notes17 . $ticket_notes18 . $ticket_notes19 . $ticket_notes20 . '")';

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}

mysql_close();
?>