<!-- Include header ->
   <?php
      include "includes/header.php";
      ?>
   <!-- End Header -->
   <!--ACK CALL STARTED-->
   <?php
	include "includes/callstarted.php"
   ?>
   
   <!--ACK TIME-->
   <?php
   $time = date("h:i:sa") . date("Y/m/d");
   ?>
   <title>Parature Agent Portal - Start Call</title>
   <!-- Display Welcome Message and Email -->
   <br>
   <Br>
Welcome back <?php
   echo htmlentities($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8');
   ?>, time to work!<br />
   
   <br>
   <br>
   
<form action="" method="post" onSubmit="alert('You started this call at <?php $time ?>');">
<b>Ticket Number:</b><br>
<input type="text" name="ticket_number" style="width:100px;font-size:14pt;" value="30126-" disabled><input type="text" name="ticket_number2" style="width:200px;font-size:14pt;">
<input class="btn btn-primary" type="submit" name="submit" value="Call Started" style="width:100px;font-size:14pt;">
</form>
<br>
<br>

<a href="private.php"><p>If PAP doesn't Auto-Redirect, click here!</p></a>

<!-- End Notes Form -->
<?php
   include "includes/footer.php";
   ?>