<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
<title>Button </title>
</head>
<body background= "shotel.jpg">



 	<?php include "SInclude.php" ?>

	<?php echo "<br>"; ?>
<font size="5">
<center>
<?php
echo "Welcome ". $_SESSION['user'];
?>
</center>
</font>


	<br>
	


 <fieldset >

 
<center>
<button onclick="window.location.href='SBookingRoom.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Booking Room</button>
<br>
<br>

<button onclick="window.location.href='SEvent.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Select Event Type</button>
<br>
<br>
<button onclick="window.location.href='ViewFood.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Select Food</button>
<br>
<br>

<button onclick="window.location.href='SPayment.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Payment Method</button>
<br>
<br>

<button onclick="window.location.href='SVipReq.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Special Request</button>
<br>
<br>

<button onclick="window.location.href='Sfacilities.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Facilities</button>
<br>
<br>

<button onclick="window.location.href='Complain.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Complain/Feedback</button>

<br>
<br>


<button onclick="window.location.href='SLogout.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Log Out</button>
<br>
<br>

</center>
</fieldset></b>



</body>
</html>