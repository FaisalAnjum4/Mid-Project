<?php
$Type1 = $_POST['option'];
if($Type1 =='Admin')
{
	header("Location: ASignup.php ");
exit();
} 
else if($Type1 =='User')
{
	header("Location: SignIn_Page.php ");
exit();
} 

?>
<!DOCTYPE html>
<html>
<head>
<title>Type</title>
</head>
<body background= "sign.jpg">
<center>
<h1 style="text-align:centre; font-size : 70px;">Type</h1>
</center>

<font color="white">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
	<fieldset>
<center>
<font size = 6>
	<br>

 <label for="option" >Type: </label>
<input type="radio" name="option" id="Admin" value="Admin" required>
<label for="Admin">Admin</label>

 <input type="radio" name="option" id="User" value="User" required>
<label for="User">User</label>

 <br>
<br>

 </center>
 </fieldset>
<br></b>
<center>
<input style="color: green; font-size : 15px; width: 90px; height: 30px;" type="submit" value="Submit">
</font>
</center>
</form>

</font>

</body>
</html>