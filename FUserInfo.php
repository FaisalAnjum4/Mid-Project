<?php

 session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>User Information </title>
</head>
<body background= "fhotel.jpg">
<center>
<h1 style="text-align:centre; font-size : 70px;">User Details</h1>
</center>
<h1 style=" color: black; text-align:center; ;font-size : 25px;;">
<?php
echo "<b> Welcome " . $_SESSION['user']."</b>";
?>
</h1>
<h1 style=" color: white; text-align:right ;font-size : 13px;">
<?php
  include "DateTime.php" ?>
  </h1>
</h1>
<h1 style=" color: blue; text-align:center; ;font-size : 20px;">
<?php
$log_file2 = fopen("user_info.txt", "r");
$data = fread($log_file2, filesize("user_info.txt"));
fclose($log_file2);
$data_filter = explode("\n", $data);
for($i = 0; $i< count($data_filter)-1; $i++) {
$json_decode = json_decode($data_filter[$i], true);
echo "First Name: ". $json_decode['First Name'];
echo "<br>";
echo "Phone: " .$json_decode['Phone'];
echo "<br>";
echo "Email: ". $json_decode['Email'];
echo "<br>";
echo "Address: ". $json_decode['Address'];
echo "<br>";
echo "Username: ". $json_decode['username'];
echo "<br>";
echo "<br>";
}


?>
</h1>
</body>
</html>