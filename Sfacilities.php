<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>facility</title>
</head>
<body  background= "black.jpg" >
	<font size="4"; color="white">
	<center>
		<h1 style=" color: white; text-align:centre;">Facilities</h1>
		<form  action="SAllFacility.php" method="POST">
	</center>
	<?php
echo " ". $_SESSION['user'];
?>
<center>
	
	<br>
	<br>
	<font size = 5>
	<label for="username">Username:</label>
<input style="color: blue; font-size : 10px; width: 90px; height: 20px;" type="text" name="username" id="username">
<br><br>
	
	<table border="4">
		<tr>
			<td>
				<img src="swim1.jpg" width="250" height="250">
			</td>
			<td>
				<img src="gym.jpg" width="250" height="250">
			</td>
			<td>
				<img src="park.jpg" width="250" height="250">
			</td>

		</tr>
		
		<tr style="color: white; font-size : 25px;">
			<td>$10 BDT</td>
			<td>$20 BDT</td>
			<td>$30 BDT</td>
			

		</tr>
		
		<tr style="font-family: 'Cooper Black'; color: pink; font-size : 20px;">
			<td> <input type="radio"  name="Type" id="SP" value="Swimming Pool">
				<label for="SP">Swimming Pool</label>

			</td>
			<td>
			<input type="radio" name="Type" id="gym" value="Gym">
				<label for="gym">Gym</label> 
			</td>
			<td>
				<input type="radio" name="Type" id="park" value="Parking">
				<label for="park">Parking</label> 
			</td>
			

			
			

		</tr>


		
	</table>
</font>
	</center>
	<br>
	<center>
		<input style="font-family: 'Cooper Black'; color: black; font-size : 15px; width: 200px; height: 30px;" type="submit" value="Send Request">

	</center>
</form>
	</body>
</html>