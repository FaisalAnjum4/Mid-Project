<?php



$PaymentType = $_POST['Payment'];
$UserName = $_POST['username'];
$PhoneNo = $_POST['phone'];
$PinNo = $_POST['PinNo'];

if($PaymentType=='Cash')
{
	$details = array('PaymentType' => $PaymentType, 'UserName' => $UserName, 'PhoneNo' => $PhoneNo);
$details_encoded = json_encode($details);

 $filepath = "payment.txt";

 $reg_file = fopen($filepath, "a");
fwrite($reg_file, $details_encoded . "\r\n ");
fclose($reg_file);

header("Location: Button.php ");
exit();

}
else{
	$details = array('PaymentType' => $PaymentType, 'UserName' => $UserName, 'PhoneNo' => $PhoneNo, 'PinNo' => $PinNo);
$details_encoded = json_encode($details);

 $filepath = "payment.txt";

 $reg_file = fopen($filepath, "a");
fwrite($reg_file, $details_encoded . "\r\n ");
fclose($reg_file);

header("Location: Button.php ");
exit();

}



 
?>