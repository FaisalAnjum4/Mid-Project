<?php

  session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>All Button </title>
</head>
<body background= "signup.jpg">

	<font  size="5">
	<center>
		
	<?php
    
 echo "<b>  Welcome " . $_SESSION['user']."</b>";
 echo "<br>";
 echo "<br>";
 ?>
 
  <h1 style=" color: blue; text-align:right ;font-size : 15px;;">
<?php
  include "DateTime.php" ?>
  </h1>

    <?php echo "<br>"; ?>

</center>
</font>
<br>

<fieldset >
<center>
	
<button onclick="window.location.href='Fsignup.php'" style="font-family: 'Vineta BT'; font-size : 15px; width: 300px; height: 40px; color:black; background:cyan; border-color:black;  ">Add Manager</button>
 
<br>
<br>



<button onclick="window.location.href='ADetails.php'" style="font-family: 'Vineta BT'; font-size : 15px; width: 300px; height: 40px; color:black; background:cyan; border-color:black;  ">Details</button>
 
<br>
<br>



<button onclick="window.location.href='ARequest.php'" style="font-family: 'Vineta BT'; font-size : 15px; width: 300px; height: 40px; color:black; background:cyan; border-color:black;  ">VIP Requests</button>
 
<br>
<br>
<button onclick="window.location.href='AMRequest.php'" style="font-family: 'Vineta BT'; font-size : 15px; width: 300px; height: 40px; color:black; background:cyan; border-color:black;  ">Manager Requests</button>
 
<br>
<br>





<button onclick="window.location.href='AJobCircular.php'" style="font-family: 'Vineta BT'; font-size : 15px; width: 300px; height: 40px; color:black; background:cyan; border-color:black;  ">Job Circular</button>
 
<br>
<br>


<button onclick="window.location.href='ViewRatings.php'" style="font-family: 'Vineta BT'; font-size : 15px; width: 300px; height: 40px; color:black; background:cyan; border-color:black;  ">View Ratings</button>
 
<br>
<br>


<button onclick="window.location.href='ALogout.php'" style="font-family: 'Vineta BT'; font-size : 15px; width: 300px; height: 40px; color:black; background:red; border-color:black;  ">Logout</button>
 
<br>
<br>



</center>
</fieldset></b>
</form>










</body>
</html>