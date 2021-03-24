<?php


$UserName = $_POST['username'];
$EventType = $_POST['Type'];




 
$details = array('UserName' => $UserName, 'EventType' => $EventType);
$details_encoded = json_encode($details);

 $filepath = "event.txt";

 $reg_file = fopen($filepath, "a");
fwrite($reg_file, $details_encoded . "\r\n ");
fclose($reg_file);

header("Location: Button.php ");
exit();


?>