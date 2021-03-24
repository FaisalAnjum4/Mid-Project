<?php

 session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign in </title>
</head>
<body background= "signup.jpg">
<center>
<h1 style="text-align:centre; font-size : 70px;">My Profile</h1>
</center>
<h1 style=" color: black; text-align:center; ;font-size : 25px;;">
<?php
echo "<b> Welcome " . $_SESSION['user']."</b>";
?>
</h1>

</h1>
<h1 style=" color: black; text-align:center; ;font-size : 20px;">
<?php
$log_file2 = fopen("UserInfo.txt", "r");
$data = fread($log_file2, filesize("UserInfo.txt"));
fclose($log_file2);
$data_filter = explode("\n", $data);
for($i = 0; $i< count($data_filter)-1; $i++) {
$json_decode = json_decode($data_filter[$i], true);
echo "UserID: ". $json_decode['User Id:'];
echo "<br>";
echo "Phone: " .$json_decode['Phone Number:'];
echo "<br>";
echo "Email: ". $json_decode['Email_Address'];
echo "<br>";
echo "Name: ". $json_decode['Name:'];
echo "<br>";
echo "<br>";
}


?>
</h1>
</body>
</html>