<?php
session_start();
?>

 


<!DOCTYPE html>
<html>
<head>
<title>Button </title>
</head>
<body background= "hotel.jpg">

 

 <font size="5">
<center>
<?php
echo "Welcome ". $_SESSION['user'];
?>
</center>
</font>

 


    <br>
    <br>

 


 <fieldset >

 


 <br>
<br>

 

 
<center>

 <button onclick="window.location.href='Tsignup.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Add Receptionist</button>
<br>
<br>

<button onclick="window.location.href='Fprofileview.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Receptionist details</button>
<br>
<br>
 

<button onclick="window.location.href='FPayment.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Payment List</button>
<br>
<br>
 

<button onclick="window.location.href='Frmodify.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Room Modification</button>

<br>
<br>



<button onclick="window.location.href='FEvent.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;"> Event Management</button>
<br>
<br>

<button onclick="window.location.href='FUserInfo.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">User Information</button>
<br>
<br>

<button onclick="window.location.href='Flogout.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Logout</button>
<br>
<br>

 

</center>
</fieldset></b>

 

 

</body>
</html>