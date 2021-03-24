<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>event</title>
</head>
<body  background= "black.jpg" >
	<font size="4"; color="white">
	<center>
		<br>
		<h3 style=" color: white; text-align:centre;">ALL OF OUR EVENTS ARE OPEN FOR YOU</h3>
		<form  action="SAllEvent.php" method="POST">
	</center>
	<?php
echo " ". $_SESSION['user'];
?>
<center>
	<br>
	<br>
	<label for="username">Username:</label>
<input style="color: blue; font-size : 10px; width: 90px; height: 20px;" type="text" name="username" id="username">
<br><br>
	
	<table border="5">
		<tr>
			<td>
				<img src="wedding.jpg" width="250" height="250">
			</td>
			<td>
				<img src="birthday.jpg" width="250" height="250">
			</td>
			<td>
				<img src="meeting.jpg" width="250" height="250">
			</td>

		</tr>
		<label for="Type" > </label>
		<tr style="font-family: 'Cooper Black'; color: white; font-size : 18px;">
			<td>$350 BDT</td>
			<td>$300 BDT</td>
			<td>$250 BDT</td>
			
			

		</tr>
		
		<tr style="font-family: 'Cooper Black'; color: pink; font-size : 20px;">
			<td> <input type="radio" name="Type" id="WP" value="Wedding Planning">
				<label for="WP">Wedding planning</label>

			</td>
			<td>
			<input type="radio" name="Type" id="BP" value="Birthday Planning">
				<label for="BP">Birthday planning</label> 
			</td>
			<td>
				<input type="radio" name="Type" id="MC" value="Meeting & Conference">
				<label for="MC">Meeting & Conference</label> 
			</td>
			

			
			

		</tr>

		
	</table>
	<br>
	

	
	</center>
	<br>
	<center>
		<input style="font-family: 'Cooper Black'; color: black; font-size : 15px; width: 200px; height: 30px;" type="submit" value="Send Request">

	</center>
</form>
</font>
	</body>
</html>