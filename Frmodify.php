
<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body  background= "fhotel.jpg" >
	
<center>
	<br>
	<br>
	<br>
    <br>
<h1 style=" color: blue; text-align:centre;">Room Modification</h1>
</center>
<font color="cyan">
<?php
  include "DateTime.php" ?>

<?php
echo "<br><b>Welcome ". $_SESSION['user'];
?>
	
  <form  action="Froommodification.php" method="POST">
 <fieldset >


 <center>

<br>
<br>

 <label for="username">Username:</label>
<input style="color: blue; font-size : 10px; width: 90px; height: 20px;" type="text" name="username" id="username" required>
<br><br>
<label for="room"></label>
<textarea name="room" id="room" rows="8" cols="40" placeholder="If any modification required, inform here.."></textarea>
<br>
<br>
</font>


</center>

 </fieldset></b>
<center>
	<br>
<input style="font-family: 'Cooper Black'; color: black; font-size : 15px; width: 80px; height: 30px;" type="submit" value="Send">

</center>
</form>
</font>



</body>
</html>