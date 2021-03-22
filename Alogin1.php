<?php 

  session_start();
?>


<?php
 $username = $password = $Type="";
            $usernameerr = $passworderr = $Typeerr="";

            if($_SERVER['REQUEST_METHOD'] == "POST") {

                if(empty($_POST['username'])) {
                    $usernameerr = "Please Fill up the firstname!";
                }

                

                else if(empty($_POST['password'])) {                    
                    $passworderr = "Please Fill up the password!";
                }

                else if(empty($_POST['Type'])) {                    
                    $Typeerr = "Please Fill up the recovery email!";
                }

                if($usernameerr ==""&& $passworderr==""&& $Typeerr==""){

                     $username = $_POST['username'];
                     $password = $_POST['password'];
                     $Type = $_POST['Type'];
                     setcookie($username,$password,time()+60);

 if(isset($_COOKIE[$username])){
if($Type=='Admin'){
 $log_file = fopen("APersonal_Data.txt", "r");
                    
                    $data = fread($log_file, filesize("APersonal_Data.txt"));
                    
                    fclose($log_file);
                    
                    $data_filter = explode("\n", $data);
                         
                    for($i = 0; $i< count($data_filter); $i++) {

                        $json_decode = json_decode($data_filter[$i], true);
                        if($json_decode['username'] == $username && $json_decode['password'] == $password) 
                        {

                    
                            
                            $_SESSION['user'] = $username;
                            header("Location: ASuccessful.php ");
                           exit();
                                
                        }   
                        }                            
                    }

                     else if($Type=='Manager'){
 $log_file = fopen("Information.txt", "r");
                    
                    $data = fread($log_file, filesize("Information.txt"));
                    
                    fclose($log_file);
                    
                    $data_filter = explode("\n", $data);
                         
                    for($i = 0; $i< count($data_filter); $i++) {

                        $json_decode = json_decode($data_filter[$i], true);
                        if($json_decode['UserName'] == $username && $json_decode['Password'] == $password) 
                        {
                            
                            $_SESSION['user'] = $username;
                            header("Location: ProfileSave.php ");
                           exit();
                                
                        }   
                        }                            
                    } 

                    else if($Type=='Receptionist'){
 $log_file = fopen("UserInfo.txt", "r");
                    
                    $data = fread($log_file, filesize("UserInfo.txt"));
                    
                    fclose($log_file);
                    
                    $data_filter = explode("\n", $data);
                         
                    for($i = 0; $i< count($data_filter)-1; $i++) {

                        $json_decode = json_decode($data_filter[$i], true);
                        if($json_decode['User Id:'] == $username && $json_decode['Password'] == $password) 
                        {
                            
                            $_SESSION['user'] = $username;
                            header("Location: Profile.php ");
                           exit();
                                
                        }   
                        }                            
                    }  
 else if($Type=='User'){
 $log_file = fopen("user_info.txt", "r");
                    
                    $data = fread($log_file, filesize("user_info.txt"));
                    
                    fclose($log_file);
                    
                    $data_filter = explode("\n", $data);
                         
                    for($i = 0; $i< count($data_filter); $i++) {

                        $json_decode = json_decode($data_filter[$i], true);
                        if($json_decode['username'] == $username && $json_decode['password'] == $password) 
                        {
                            
                            $_SESSION['user'] = $username;
                            header("Location: Button.php ");
                           exit();
                                
                        }   
                        }                            
                    }                   
          }

                }
            }
 

                    

?>
<!DOCTYPE html>
<html>
<head >
    <title>Sign in </title>
</head>
<body background= "signup.jpg">

<center>
    <h1 style="text-align:centre; font-size : 70px;">Login</h1>
</center>>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  method="POST"><b>
      

      <center>
        
          <font size = 5>
          <label for="username">Enter a username:</label>
        <input style="color: green; font-size : 10px; width: 90px; height: 20px;" type="text"   name="username" id="username"  placeholder="Enter a UserName" value="<?php echo $username ?>">
         <p><?php echo $usernameerr; ?></p>
           <br><br>

          <label for="password">Password:</label>
        <input style="color: green; font-size : 8px; width: 90px; height: 20px;" type="password" id="password" name="password"  value="<?php echo $password ?>">
         <?php echo $passworderr; ?><br><br>

        <label for="Type" >Type: </label>
        <input type="radio" name="Type" id="Admin" value="Admin" >
        <label for="Admin">Admin</label>
    
        <input type="radio" name="Type" id="Manager" value="Manager" >
        <label for="Manager">Manager</label>
        
        <input type="radio" name="Type" id="Receptionist" value="Receptionist" >
        <label for="Receptionist">Receptionist</label>
         
        <input type="radio" name="Type" id="User" value="User" >
        <label for="User">User</label>
          <?php echo $Typeerr; ?>
<br><br>
      

  
          </center>
        <br></b>
        
    <center>
        <input style="color: green;  font-size : 15px; width: 90px; height: 30px;" type="submit" value="Submit">
        </font>
</center>
        
    </form>

</body>
</html>
