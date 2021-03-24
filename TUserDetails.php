<?php

  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Info</title>
</head>
<body background= "street.jpg">
    <center>
    <h1 style=" color: white; text-align:centre; font-size : 70px;">User Information</h1>
    </center>
 <h1 style=" color: white; text-align:center; ;font-size : 25px;;">
    <?php
    
 echo "<b>  Welcome " . $_SESSION['user']."</b>";
 ?>
</h1>
 <h1 style=" color: white; text-align:right ;font-size : 15px;">
<?php
  include "SInclude.php" ?>
  </h1>
  <h1 style=" color: white; text-align:center; ;font-size : 20px;">
  <?php
     $log_file2 = fopen("user_info.txt", "r");
                    
                    $data = fread($log_file2, filesize("user_info.txt"));
                    
                    fclose($log_file2);
                    
                    $data_filter = explode("\n", $data);
                         
                    for($i = 0; $i< count($data_filter)-1; $i++) {
                  
                        $json_decode = json_decode($data_filter[$i], true);
                        echo "UserName: ". $json_decode['username'];
                        echo "<br>";
                        echo "Email: " .$json_decode['Email'];
                          echo "<br>";
                          echo "Phone: " .$json_decode['Phone'];
                          echo "<br>";
                          echo "<br>";
                      }
                      
                   

?>
</h1>
</body>
</html>