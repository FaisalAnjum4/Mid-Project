<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>profile</title>
</head>
<body background= "Hotel.jpg">
<center>
<?php

    $USERID = $NAME = $FATHERNAME =$MOTHERNAME =  $PADDRESS = $PERADDRESS = $PHONE=$EMAIL =  "";
 
          $USERIDERR = $NAMEERR =  $FATHERNAMEERR =$MOTHERNAMEERR =  $PADDRESSERR = $PERADDRESSERR = $PHONEERR=$EMAILERR =  "";

           if($_SERVER['REQUEST_METHOD'] == "POST") {
 
            if(empty( $_POST['user'])) {
                $USERIDERR = "Please fill up ID";
            }
            else {
                $USERID = $_POST['user'];
            }
 
            if(empty($_POST['myname'])) {
                $NAMEERR = "Fill up name";
            }
            else {
 
                $NAME = $_POST['myname'];
            }

             if(empty($_POST['fathername'])) {
                $FATHERNAMEERR = "Fill up FATHERname";
            }
            else {
 
                $FATHERNAME = $_POST['fathername'];
            }

             if(empty($_POST['mothername'])) {
                $MOTHERNAMEERR = "Fill up Mothername";
            }
            else {
 
                $MOTHERNAME = $_POST['mothername'];
            }

            if(empty($_POST['paddress'])) {
                $PADDRESSERR = "Fill up Present Address";
            }
            else {
 
                $PADDRESS = $_POST['paddress'];
            }

            if(empty($_POST['permaddress'])) {
                $PERADDRESSERR = "Fill up Permanent Address";
            }
            else {
 
                $PERADDRESS = $_POST['permaddress'];
            }
 
               if(empty($_POST['phone'])) {
                $PHONEERR = "Please fill up the phone number";
            }

            else {
                $PHONE = $_POST['phone'];
            }
 
            if(empty($_POST['email'])) {
                $EMAILERR = "Please fill up the email";
            }
            else {
                $EMAIL = $_POST['email'];
            }     
 
            if( $USERIDERR=="" && $NAMEERR=="" && $FATHERNAMEERR=="" &&$MOTHERNAMEERR=="" &&  $PADDRESSERR=="" && $PERADDRESSERR =="" && $PHONEERR=="" && $EMAILERR =="") {

$User_Id = $_POST['user'];
$Name = $_POST['myname'];
$Gender = $_POST['gender'];
$Date_of_Birth = $_POST['dateOfBirth'];
$Religion = $_POST['religion'];
$Father_Name= $_POST['fathername'];
$Mother_Name= $_POST['mothername'];
$Present_Address= $_POST['paddress'];
$Permanent_Address= $_POST['permaddress'];
$Phone_Number= $_POST['phone'];
$Email_Address= $_POST['email'];
$Password= $_POST['pass'];
$Confirm_Password = $_POST['Confirmpass'];
$Language= $_POST['Language'];

if($Password == $Confirm_Password){
$details = array('Name:' => $Name, 'Gender:' => $Gender, 'Date of Birth:' => $Date_of_Birth, 'Father Name:' => $Father_Name, 'Mother Name:' => $Mother_Name,'Present Address:' => $Present_Address,'Permanent Address:' => $Permanent_Address,'Phone Number:' => $Phone_Number,'Email_Address' => $Email_Address,'User Id:' => $User_Id, 'Password' => $Password );
$details_encoded = json_encode($details);
$filepath = "UserInfo.txt";
$reg_file = fopen($filepath, "a");
fwrite($reg_file, $details_encoded . "\n");
fclose($reg_file);
$_SESSION['user'] = $User_Id;
header("Location: ProfileSave.php ");
exit();
}

else {
echo "Password doesn't match";
     }
   }
 }
?>
</center>
</body>
</html>
<html><head>
<title>Registration form</title>
</head>
<body background="Hotel.jpg">
<font color="Black"> <h1> <marquee> WELCOME TO SIGN UP PAGE (RECEPTIONIST)
</marquee> </h1> </font>
<hr>
<br>
<font size="4" color="White">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<b>
<center>

<label for="user"> User Id:</label>
<input type="text" name="user" id="user"  color="Rainbow"value="<?php echo $USERID ?>">
         <p><?php echo $USERIDERR; ?></p>
<br>

<label for="myname">Enter your name:</label>
<input type="text" name="myname" id="myname"  color="Rainbow"value="<?php echo $NAME ?>">
         <p><?php echo $NAMEERR; ?></p>
<br>

<!-- Radio -->
<label for="Gender">Gender: </label>
<input type="radio" name="gender" id="male" value="male" required="required">
<label for="male">Male</label>

<input type="radio" name="gender" id="female" value="female" required="required">
<label for="female">Female</label>

<input type="radio" name="gender" id="other" value="other" required="required">
<label for="other">Other</label>
<br>
<br>
<!--date-->
<label for="dob">Date of Birth: </label>

<input type="date" id="dob" name="dateOfBirth" value="2021-02-15" min="1980-01-01" max="2025-12-31">

<br><br>
<!-- Input Text Field -->
<label for="fathername">Father's Name:</label>
<input type="text" name="fathername" id="fathername" value="<?php echo $FATHERNAME ?>">
         <p><?php echo $FATHERNAMEERR; ?></p>

<br>

<!-- Input Text Field -->
<label for="mothername">Mother's Name:</label>
<input type="text" name="mothername" id="mothername" value="<?php echo $MOTHERNAME ?>">
         <p><?php echo $MOTHERNAMEERR; ?></p>

<br>

<label for="paddress">Present Address: </label>
<input type="text" name="paddress" id="paddress" value="<?php echo $PADDRESS ?>">
         <p><?php echo $PADDRESSERR; ?></p>
>

<br>
<label for="permaddress">Permanent Address: </label>
<input type="text" name="permaddress" id="permaddress"  value="<?php echo $PERADDRESS ?>">
         <p><?php echo $PERADDRESSERR;?></p>

<br>
<!--Phone/tel -->
<label for="phone">Phone number: </label>
<input type="tel" id="phone" name="phone" value="<?php echo $PHONE ?>">
         <p><?php echo $PHONEERR; ?></p>
<br>
<!--Email/email-->
<label for="email">Email Address: </label>
<input type="email" id="email" name="email" value="<?php echo $EMAIL ?>">
         <p><?php echo $EMAILERR; ?></p>
<br>

<label for="pass">Password</label>
<input type="password" id="pass" name="pass">
<br>

<label for="Confirmpass">Confirm Password:</label>
<input type="password" id="Confirmpass" name="Confirmpass">
<br>

</font>
<input style="color: black; size: 1500px" type="submit" value="Submit">
</center>
</b>
</form>
</body></html>