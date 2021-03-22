<?php

  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Request</title>
</head>
<body background= "signup.jpg">
    <center>
    <h1 style="text-align:centre; font-size : 70px;">All Request</h1>
    </center>
 <h1 style=" color: black; text-align:center; ;font-size : 25px;;">
    <?php
    
 echo "<b>  Welcome " . $_SESSION['user']."</b>";
 ?>
</h1>
 <h1 style=" color: blue; text-align:right ;font-size : 15px;">
<?php
  include "DateTime.php" ?>
  </h1>
  <h1 style=" color: black; text-align:center; ;font-size : 20px;">
  <?php
     $log_file2 = fopen("Frmodify.txt", "r");
                    
                    $data = fread($log_file2, filesize("Frmodify.txt"));
                    
                    fclose($log_file2);
                    
                    $data_filter = explode("\n", $data);
                         
                    for($i = 0; $i< count($data_filter)-1; $i++) {
                  
                        $json_decode = json_decode($data_filter[$i], true);
                        echo "UserName: ". $json_decode['username'];
                        echo "<br>";
                        echo "Manager request: " .$json_decode['Needs to modify'];
                          echo "<br>";
                          echo "<br>";
                      }
                      
                   

?>
</h1>
</body>
</html>