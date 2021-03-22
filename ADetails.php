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
      <h1 style=" color: black; text-align:center; ;font-size : 25px;;">
    <?php
    
 echo "<b>  Welcome " . $_SESSION['user']."</b>";
 ?>
</h1>
    <h1 style="text-align:centre; font-size : 50px;">Details of manager</h1>
    </center>
 
 <h1 style=" color: blue; text-align:right ;font-size : 13px;">
<?php
  include "DateTime.php" ?>
  </h1>
  <h1 style=" color: black; text-align:center; ;font-size : 15px;">
  <?php
     $log_file2 = fopen("Information.txt", "r");
                    
                    $data = fread($log_file2, filesize("Information.txt"));
                    
                    fclose($log_file2);
                    
                    $data_filter = explode("\n", $data);
                         
                    for($i = 0; $i< count($data_filter)-1; $i++) {
                  
                        $json_decode = json_decode($data_filter[$i], true);
                        echo "UserName: ". $json_decode['UserName'];
                        echo "<br>";
                        echo "Phone: " .$json_decode['Phone Number'];
                          echo "<br>";
                          echo "Email: ". $json_decode['Email_Address'];
                        echo "<br>";
                          echo "<br>";
                      }
                      
                   

?>
</h1>
</body>
</html>
