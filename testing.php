<?php
	include("includes/header.php");
	$title = "Database";
?>

<?php
$connection = mysql_connect('127.0.0.1', 'root', '07Bustertara1'); //The Blank string is the password
mysql_select_db('parature_fixes');

$query = "SELECT * FROM fixes"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['technician'] . $row['subject'] . "</td><td>" . $row['Customers_issues'] . $row['Customers_software'] . $row['Customers_OS'] . $row['Notes'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection

?>

<?php
	include("includes/footer.php");
?>