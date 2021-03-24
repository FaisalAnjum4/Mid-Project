<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>profile</title>
</head>
<body  background= "sign.jpg" >
<center>
	<?php


		$firstName = $lastName = $dob = $address = $phone = $email = $username = "";

		$firstNameErr = $lastNameErr = $dobErr = $addressErr = $phoneErr = $emailErr = $usernameErr = "";

		if($_SERVER['REQUEST_METHOD'] == "POST") {

			if(empty($_POST['fname'])) {
				$firstNameErr = "Please fill up the firstname";
			}
			else {
				$firstName = $_POST['fname'];
			}

			if(empty($_POST['lname'])) {
				$lastNameErr = "Please fill up the lastname";
			}
			else {

				$lastName = trim($_POST['lname']);
				$lastName = htmlspecialchars($_POST['lname']);
			}

			if(empty($_POST['dob'])) {
				$dobErr = "Please fill up the Date of birth";
			}
			
			else {
				$dob = $_POST['dob'];
			}

			if(empty($_POST['add'])) {
				$addressErr = "Please fill up the address";
			}
			else {

				$address = $_POST['add'];
			}

			if(empty($_POST['phone'])) {
				$phoneErr = "Please fill up the phone number";
			}
			
			else {
				$phone = $_POST['phone'];
			}

			if(empty($_POST['email'])) {
				$emailErr = "Please fill up the email";
			}
			else {
				$email = $_POST['email'];
			}

			if(empty($_POST['username'])) {
				$usernameErr = "Please fill up the username";
			}
			else {

				$username = $_POST['username'];
			}

		




			if($firstNameErr == "" && $lastNameErr == "" && $dobErr == "" && $addressErr == "" && $phoneErr == "" && $emailErr == "" && $usernameErr == "") {
				echo "Successful " . $firstName . " " . $lastName ;
			
		
	


$Firstname = $_POST['fname'];
$Lastname = $_POST['lname'];
$Birthdate = $_POST['dob'];
$Gender = $_POST['Gender'];
$Address = $_POST['add'];
$PhoneNo = $_POST['phone'];
$Email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$Confirmpassword = $_POST['confirmPass'];

if($password == $Confirmpassword){
 
$details = array('First Name' => $Firstname, 'Last Name' => $Lastname, 'Birth Date' => $Birthdate, 'Gender' => $Gender, 'Address' => $Address,'Phone' => $PhoneNo,'Email' => $Email,'username' => $username, 'password' => $password);
$details_encoded = json_encode($details);

 $filepath = "user_info.txt";

 $reg_file = fopen($filepath, "a");
fwrite($reg_file, $details_encoded . "\r\n ");
fclose($reg_file);
$_SESSION['username'] = $Lastname;
header("Location: CoverPage.html ");
exit();


 }

 else {
 
 echo "Password does not match";
}
}
}
?>

<center>
<h1 style="text-align:centre;">Create Your Account</h1>
</center>

<font color="white">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

 <fieldset >


 <center>

<br>
<br>
<label for="fname">First Name:</label>
<input type="text" name="fname" id="fname" value="<?php echo $firstName ?>">
<p><?php echo $firstNameErr; ?></p>

<br>
<br>

<label for="lname">Last Name:</label>
<input type="text" name="lname" id="lname" value="<?php echo $lastName ?>">
<p><?php echo $lastNameErr; ?></p>
<br>
<br>

<label for="dob">Date of Birth: </label>
<input type="date" id="dob" name="dob"
value="<?php echo $dob ?>">
<p><?php echo $dobErr; ?></p>

 <br>
 <br>



<label for="Gender" >Gender: </label>
<input type="radio" name="Gender" id="male" value="male" required>
<label for="male">Male</label>

<input type="radio" name="Gender" id="female" value="female" required>
<label for="female">Female</label>

 <br>
 <br>

 

<label for="add">Address: </label>
<input type="text" name="add" id="add" value="<?php echo $address ?>" >
<p><?php echo $addressErr; ?></p>

<br>
<br>


<label for="phone">Phone number: </label>
<input type="tel" id="phone" name="phone" value="<?php echo $phone ?>" >
<p><?php echo $phoneErr; ?></p>
<br>
<br>

 
<label for="email">Email: </label>
<input type="email" id="email" name="email" value="<?php echo $email ?>">
<p><?php echo $emailErr; ?></p>

<br>
<br>

<label for="username">User Name:</label>
<input type="text" name="username" id="username" value="<?php echo $username ?>">
<p><?php echo $usernameErr; ?></p>
<br>
<br>



<label for="password">Password:</label>
<input type="password" name="password" id="password" value="password" required>

<br>
<br>


<label for="confirmPass">Confirm Password:</label>
<input type="password" name="confirmPass" id="confirmPass" value="confirmPass" required>

<br>
<br>
</center>

 </fieldset></b>
<center>
<input style="color: blue; size: 1500px" type="submit" value="Sign In">

</center>
</form>
</font>



</center>


</body>
</html>