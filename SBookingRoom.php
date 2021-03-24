<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Booking Room</title>
</head>
<body  background= "black.jpg" >

 <font size="4"; color="white">	

	<center>
		<h1 style=" color: white; text-align:centre;">Any Types Of Room Is available For You</h1>
	</center>
	<?php include "SInclude.php" ?>

	<?php echo "<br>"; ?>

	<?php
echo " ". $_SESSION['user'];
?>
<form action="SBookData.php" method="POST">

<center>
	
	<br>
     
	<label for="username">Username: </label>
<input type="text" id="username" name="username">
<br><br>

	<label for="BD">Booking Date: </label>
<input type="date" id="BD" name="BD"
value="2021-01-01">

 <br>
 <br>
	<label for="CD">Check Out Date: </label>
<input type="date" id="CD" name="CD"
value="2021-01-01">
	<table border="4">

		<tr>
			<td>
				<img src="onebed.jpg" width="250" height="250">
			</td>
			<td>
				<img src="twobed.jpg" width="250" height="250">
			</td>
			<td>
				<img src="threebed.jpg" width="250" height="250">
			</td>

		</tr>
		
		<tr style="color: white; font-size : 25px;">
			<td>$30 BDT</td>
			<td>$45 BDT</td>
			<td>$60 BDT</td>
			

		</tr>

		
		<tr style="font-family: 'Cooper Black'; color: pink; font-size : 20px;">
			<td> <input type="radio"  name="booking" id="onebed" value="One Bed">
				<label for="onebed">One Bed Room</label>

			</td>
			<td>
			<input type="radio"  name="booking" id="twobed" value="Two Bed">
				<label for="twobed">Two Bed Room</label>
			</td>
			<td>
				<input type="radio"  name="booking" id="threebed" value="Three Bed">
				<label for="threebed">Three Bed Room</label>
			</td>
			

			
			

		</tr>


		
	</table>
	</center>
	<br>
	<center>
		<input style="font-family: 'Cooper Black'; color: black; font-size : 15px; width: 200px; height: 30px;" type="submit" value="Send Request">
		

	</center>
	
</form>
</font>
	</body>
</html>