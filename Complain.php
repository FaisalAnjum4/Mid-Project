<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body  background= "feedback.jpg" >
	
<center>
	<br>
	<br>
	<br>
    <br>
<h1 style=" color: blue; text-align:center;">Complain/Feedback</h1>
</center>

<font size ="5" color="black">

<?php
echo " ". $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
<title>profile</title>
</head>
<body  background= "sign.jpg" >
<center>
	

</center>


</body>
</html>
	
  <form  action="ComplainRating.php" method="POST">
 <fieldset >


 <center>

<br>
<br>


<label for="complain"></label>
<textarea name="complain" id="complain" rows="8" cols="40" placeholder="Complain Box"></textarea>
<br>
<br>
<br>
<font size="4">
<label for="rating" >Rating: </label>
<input type="radio" name="rating" id="one" value="1" required="required">
<label for="one">1</label>

<input type="radio" name="rating" id="two" value="2" required="required">
<label for="two">2</label>

<input type="radio" name="rating" id="three" value="3" required="required">
<label for="three">3</label>

<input type="radio" name="rating" id="four" value="4" required="required">
<label for="four">4</label>

<input type="radio" name="rating" id="five" value="5" required="required">
<label for="five">5</label>

</font>


</center>

 </fieldset></b>
<center>
	<br>
<input style="font-family: 'Cooper Black'; color: black; font-size : 15px; width: 80px; height: 30px;" type="submit" value="Submit">

</center>
</form>
</font>



</body>
</html>