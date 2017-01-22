<!-- Include header ->
   <?php
      include "includes/header.php";
      ?>
   <!-- End Header -->
<!-- Send Notes to Parature -->
<?php
   include "includes/sendnotes.php";
   ?>
<!-- End -->

<title>Parature Agent Portal - Counter</title>
<meta http-equiv="refresh" content="30">
<!-- Display Welcome Message and Email -->
Welcome back <?php
   echo htmlentities($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8');
   ?>, time to work!<br />
<br>
<h3>Ticket's Taken Today - Shift A</h3>
<iframe src="//o365.prod.parature.com/ics/tt/ticketList.asp?viewID=200&title=Tickets+-+Today" height="30px" width="355"></iframe>
<br>
<br>
<h3>Ticket's Taken Today - Shift B</h3>
<iframe src="//o365.prod.parature.com/ics/tt/ticketList.asp?viewID=204&title=Tickets+-+Today" height="30px" width="355"></iframe>
<br>
<br>
<h3>Ticket's Taken Today - Shift C</h3>
<b>Target Today: 145</b>
<br>
<iframe src="//o365.prod.parature.com/ics/tt/ticketList.asp?viewID=211&title=Tickets+-+Today" height="30px" width="355"></iframe>
<br>
<br>
<h3>Ticket's Taken Today - Shift D</h3>
<iframe src="//o365.prod.parature.com/ics/tt/ticketList.asp?viewID=237&title=Tickets+%2D+Today" height="30px" width="355"></iframe>
<br>
<br>
<h3>Ticket's Taken Today - ALL SHIFTS</h3>
<iframe src="//o365.prod.parature.com/ics/tt/ticketList.asp?viewID=237&title=Tickets+%2D+Today" height="30px" width="355"></iframe>
<?php
   include "includes/footer.php";
   ?>