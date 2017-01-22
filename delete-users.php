<?php
$id = $_POST['id'];
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '07Bustertara1';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'DELETE FROM users
        WHERE id="<?php echo $id ?>"';

mysql_select_db('parature_notes');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
?>

<?php
	include("includes/header.php");
?>

<form action="" method="post">
<br><b>User ID to be deleted: </b><br>
   <input type="text" name="id" style="width:600px;font-size:14pt;">
   <br>
   <br>
   <br>
   <input class="btn btn-primary" type="submit" name="submit" value="Submit">
   
   
<br>
<?php
	include("includes/footer.php");
?>