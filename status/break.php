   <?php
      include "../common.php";

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '07Bustertara1';
   $agent = $_SESSION['user']['email'];
   $date = date("h:i:sa") . " " . date("Y/m/d");
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   $status = "Break";
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "INSERT INTO status " . "(username, status, date)" .
	"VALUES ('$agent', '$status', '$date')";
      
   mysql_select_db('parature_status');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   
   mysql_close($conn);
   

?>

<script type="text/javascript">
alert("Thank you <?php
   echo htmlentities($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8');
   ?>, your status has been updated to <?php echo $status ?>.<br />");
   </script
   <?php    
header('Location: ../startcall.php');    
?> 