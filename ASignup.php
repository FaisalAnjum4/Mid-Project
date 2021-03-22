<!DOCTYPE html>
<html>
<head>
<title>profile</title>
</head>
<body  background= "signup.jpg" >
<center>
    <?php
 

        $Name = $Fname = $Mname = $Paddress =$Peaddress =  $Phone = $Email = $Username = "";
 
         $Nameerr = $Fnameerr = $Mnameerr = $Paddresserr =$Peaddresserr =  $Phoneerr = $Emailerr = $Usernameerr = "";
 
        if($_SERVER['REQUEST_METHOD'] == "POST") {
 
            if(empty($_POST['myname'])) {
                $Nameerr = "Please fill up the name";
            }
            else {
                $Name = $_POST['myname'];
            }
 
            if(empty($_POST['fathername'])) {
                $Fnameerr = "Fill up Fathername";
            }
            else {
 
                $Fname = $_POST['fathername'];
            }

             if(empty($_POST['mothername'])) {
                $Mnameerr = "Fill up Mothername";
            }
            else {
 
                $Mname = $_POST['mothername'];
            }

            if(empty($_POST['paddress'])) {
                $Paddresserr = "Fill up Present Address";
            }
            else {
 
                $Paddress = $_POST['paddress'];
            }

            if(empty($_POST['peaddress'])) {
                $Peaddresserr = "Fill up Permanent Address";
            }
            else {
 
                $Peaddress = $_POST['peaddress'];
            }
 
        
 
            if(empty($_POST['phone'])) {
                $Phoneerr = "Please fill up the phone number";
            }

            else {
                $Phone = $_POST['phone'];
            }
 
            if(empty($_POST['email'])) {
                $Emailerr = "Please fill up the email";
            }
            else {
                $Email = $_POST['email'];
            }
 
            if(empty($_POST['username'])) {
                $Usernameerr = "Please fill up the username";
            }
            else {
 
                $Username = $_POST['username'];
            }
 
        
 
 

            if($Nameerr == "" && $Fnameerr == ""&& $Mnameerr == ""&& $Paddresserr == "" && $Peaddresserr == "" && $Phoneerr == "" && $Emailerr == "" && $Usernameerr == "") {
              

      $name = $_POST['myname'];
    $gender = $_POST['gender'];
  $dob = $_POST['dob'];
$fname = $_POST['fathername'];
$mname = $_POST['mothername'];
$paddress = $_POST['paddress'];
$peaddress = $_POST['peaddress'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['pass'];
$cpassword = $_POST['cpass'];
 
if($password == $cpassword){

$details = array('name' => $name, 'gender' => $gender, 'DOB' => $dob, 'Fathername' => $fname, 'Mothername' => $mname,'PresentAdd' => $paddress,'PermanentAdd' => $peaddress,'Phone' => $phone,'Email' => $email,'username' => $username,  'password' => $password );
$details_encoded = json_encode($details);
 
 $filepath = "APersonal_Data.txt";
 
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
 
<font >
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
 
 <label for="myname">Enter your name:</label>
        <input type="text"   name="myname" id="myname" placeholder="Enter your Name" value="<?php echo $Name ?>">
         <p><?php echo $Nameerr; ?></p>

        <br>

        <br>

        <!-- Radio -->
        <label for="gender" >Gender: </label>
        <input type="radio" name="gender" id="male" value="male" required="">
        <label for="male">Male</label>

        <input type="radio" name="gender" id="female" value="female" required="">

        <label for="female">Female</label>

        <br>
        <br>

        <!--date-->
        <label for="dob">Date of Birth: </label>

<input type="date" id="dob" name="dob"
       value="2021-02-15"
       min="1980-01-01" max="2025-12-31"  >

       <br>
       <br>

        <!-- Dropdown/Select -->
        <label for="religion">Religion:</label>
        <select id="religion" name="yourreligion">
            <option value="islam">Islam</option>
            <option value="hindu">Hindu</option>
            <option value="christian">Christian</option>
            <option value="other">Other</option>
        </select>

        <br>
        <br>
            <!-- Input Text Field -->
        <label for="fathername">Father's Name:</label>
        <input type="text" name="fathername" id="fathername"  placeholder="Enter your Father's Name" value="<?php echo $Fname ?>">
         <p><?php echo $Fnameerr; ?></p>

        <br>
        <br>

            <!-- Input Text Field -->
        <label for="mothername">Mother's Name:</label>
        <input type="text" name="mothername" id="mothername" placeholder="Enter your Mother's Name" value="<?php echo $Mname ?>">
         <p><?php echo $Mnameerr; ?></p>
        <br>
        <br>
        

        
        <label for="paddress">Present Address: </label>
        <input type="text" name="paddress" id="paddress"  placeholder="Enter Present Address" value="<?php echo $Paddress ?>">
         <p><?php echo $Paddresserr; ?></p>

        <br>
        <br>
        <label for="peaddress">Permanent Address: </label>
        <input type="text" name="peaddress" id="peaddress"  placeholder="Enter Permanent Address" value="<?php echo $Peaddress ?>">
         <p><?php echo $Peaddresserr; ?></p>


        <br>
        <br>
            <!--Phone/tel -->
        <label for="phone">Phone number: </label>
        <input type="tel" id="phone" name="phone"   placeholder="Enter Phone Number"value="<?php echo $Phone ?>">
         <p><?php echo $Phoneerr; ?></p>

        <br><br>

          <!--Email/email-->
          <label for="email">Email Address: </label>
          <input type="email" id="email" name="email"  placeholder="Enter Email Address"value="<?php echo $Email ?>">
         <p><?php echo $Emailerr; ?></p>
          <br><br>

          <label for="username">Enter a username:</label>
        <input type="text"   name="username" id="username" placeholder="Enter a UserName"value="<?php echo $Username ?>">
         <p><?php echo $Usernameerr; ?></p>
           <br><br>

          <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" ><br><br>

        <label for="cpass"> Confirm Password:</label>
        <input type="password" id="cpass" name="cpass" >

          </center>
        <br></b>
        
    <center>
        <input style="color: green;" type="submit" value="Submit">
</center>
        
</form>
</font>
 
 
</center>
 

</body>
</html>