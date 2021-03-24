
<?php          
 $Username = $_POST['username'];
 $BookingDate = $_POST['BD'];
 $CheckOutDate = $_POST['CD'];
 $RoomType = $_POST['booking'];

        

                   $details = array('Username'=>$Username, 'BookingDate' => $BookingDate, 'CheckOutDate' => $CheckOutDate, 'RoomType' => $RoomType);
$details_encoded = json_encode($details);

 $filepath = "booking.txt";

 $reg_file = fopen($filepath, "a");
fwrite($reg_file, $details_encoded . "\r\n ");
fclose($reg_file);

header("Location: Button.php ");
exit();






    ?>
    