<?php


$UserName = $_POST['username'];
$VIPRoomType = $_POST['room'];




 
$details = array('UserName' => $UserName, 'VIPRoomType' => $VIPRoomType);
$details_encoded = json_encode($details);

 $filepath = "vipreq.txt";

 $reg_file = fopen($filepath, "a");
fwrite($reg_file, $details_encoded . "\r\n ");
fclose($reg_file);

header("Location: Button.php ");
exit();


?>