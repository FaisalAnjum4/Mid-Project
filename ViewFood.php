<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Food</title>
</head>
<body  background= "black.jpg" >
	<font size="4"; color="white">
	<center>
		<br>
		<h3 style=" color: white; text-align:centre;">Any Types Of Food You Can Order</h3>
		<form  action="FoodSelect.php" method="POST">
	</center>
	<?php
echo " ". $_SESSION['user'];
?>
<center>
	<br>
	<br>
	<label for="username">Username:</label>
<input style="color: blue; font-size : 10px; width: 90px; height: 20px;" type="text" name="username" id="username" required>
<br><br>
	
	<table border="4">
		<tr>
			<td>
				<img src="biriyani.jpg" width="250" height="250">
			</td>
			<td>
				<img src="rice.jpg" width="250" height="250">
			</td>
			<td>
				<img src="chicken.jpg" width="250" height="250">
			</td>

		</tr>
		<label for="Type" > </label>
		<tr style="font-family: 'Cooper Black'; color: white; font-size : 18px;">
			<td>$5 BDT</td>
			<td>$2 BDT</td>
			<td>$3 BDT</td>
			
			

		</tr>
		
		<tr style="font-family: 'Cooper Black'; color: cyan; font-size : 20px;">
			<td> <input type="radio" name="Type" id="Biriyani" value="Biriyani">
				<label for="Biriyani">Biriyani</label>

			</td>
			<td>
			<input type="radio" name="Type" id="Rice" value="Rice">
				<label for="Rice">Rice</label> 
			</td>
			<td>
				<input type="radio" name="Type" id="Chicken" value="ChickenCurry">
				<label for="Chicken">Chicken Curry</label> 
			</td>
			

			
			

		</tr>

		
	</table>
	<br>

	<table border="4">
		<tr>
			<td>
				<img src="beef.jpg" width="250" height="250">
			</td>
			<td>
				<img src="fish.jpg" width="250" height="250">
			</td>
			<td>
				<img src="vegetable.jpg" width="250" height="250">
			</td>

		</tr>
		<label for="Type" > </label>
		<tr style="font-family: 'Cooper Black'; color: white; font-size : 18px;">
			<td>$4 BDT</td>
			<td>$2.5 BDT</td>
			<td>$1 BDT</td>
			
			

		</tr>
		
		<tr style="font-family: 'Cooper Black'; color: cyan; font-size : 20px;">
			<td> <input type="radio" name="Type" id="Beef" value="Beef">
				<label for="Beef">Beef</label>

			</td>
			<td>
			<input type="radio" name="Type" id="Fish" value="FishFry">
				<label for="Fish">Fish Fry</label> 
			</td>
			<td>
				<input type="radio" name="Type" id="vegetable" value="ChineseVegetables">
				<label for="vegetable">Chinese Vegetables</label> 
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