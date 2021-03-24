<?php

  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
</head>
<body background= "black.jpg">
    <center>
    <h1 style=" color: white;text-align:centre; font-size : 70px;">Payment List</h1>
    </center>
 <h1 style=" color: white; text-align:center; ;font-size : 25px;;">
    <?php
    
 echo "<b>  Welcome " . $_SESSION['user']."</b>";
 ?>
</h1>
 <h1 style=" color: cyan; text-align:right ;font-size : 15px;">
<?php
  include "DateTime.php" ?>
  </h1>
  <h1 style=" color: cyan; text-align:center; ;font-size : 20px;">
  <?php
     $log_file2 = fopen("payment.txt", "r");
                    
                    $data = fread($log_file2, filesize("payment.txt"));
                    
                    fclose($log_file2);
                    
                    $data_filter = explode("\n", $data);
                         
                    for($i = 0; $i< count($data_filter)-1; $i++) {
                  
                        $json_decode = json_decode($data_filter[$i], true);
                        echo "PaymentType: ". $json_decode['PaymentType'];
                        echo "<br>";
                        echo "UserName: " .$json_decode['UserName'];
                          echo "<br>";
                          echo "PhoneNo: ". $json_decode['PhoneNo'];
                          echo "<br>";
                          echo "<br>";
                      }
                      
                   

?>
</h1>
</body>
</html>
