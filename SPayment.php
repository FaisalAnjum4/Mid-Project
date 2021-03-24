<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>sign in</title>
</head>
<body  background= "pay1.jpg" >
<center>
	<br>
	<br>
	
<h1 style="text-align:centre;">Payment Method</h1>
</center>

 	<?php include "SInclude.php" ?>

	<?php echo "<br>"; ?>
	
<font color="black">
	<?php
echo " ". $_SESSION['user'];
    ?>
<form action="PayMethod.php" method="POST">

 <fieldset>

<br>
<br>
 <center style="font-family: 'Arial Black';">

<label for="Payment" >Payment Type: </label>
<input type="radio" name="Payment" id="Cash" value="Cash" required>
<label for="Cash">Cash</label>

<input type="radio" name="Payment" id="bKash" value="bKash" required>
<label for="bKash">bKash</label>

<input type="radio" name="Payment" id="Credit Card" value="Credit Card" required>
<label for="Credit Card">Credit Card</label>

 <br>
 <br>
<label for="username">User Name</label>
<input type="text" name="username" id="username" required>
<br>
<br>

<label for="phone">Phone number: </label>
<input type="tel" id="phone" name="phone" required>
<br>
<br>

<label for="PinNo">Pin No. (For Only bKash/Card)</label>
<input type="text" name="PinNo" id="PinNo">
<br>
<br>
</center>
</fieldset>
<center>
<input style="font-family: 'Cooper Black'; color: darkblue; font-size : 20px; width: 100px; height: 30px; size: 2000px" type="submit" value="Submit">
</center>
</form>
</font>



</body>
</html>