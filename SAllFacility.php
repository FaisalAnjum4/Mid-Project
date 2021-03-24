<?php


$UserName = $_POST['username'];
$FacilityType = $_POST['Type'];




 
$details = array('UserName' => $UserName, 'FacilityType' => $FacilityType);
$details_encoded = json_encode($details);

 $filepath = "facility.txt";

 $reg_file = fopen($filepath, "a");
fwrite($reg_file, $details_encoded . "\r\n ");
fclose($reg_file);

header("Location: Button.php ");
exit();


?>