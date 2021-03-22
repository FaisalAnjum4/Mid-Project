

<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
    </head>
   <body background= "Hotel.jpg" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 30px;  color: green;   border-color:black;">
    	

<?php
include "SInclude.php" ;
$files = scandir("JobCircularFile");
for($a=2; $a<count($files);$a++){

	?>

	<p>
        <center>
		 <a href="jobcircularlogin.php" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 30px;  color: green;  background: white; border-color:black;" download="<?php echo $files[$a] ?>" href="JobCircularFile/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>	
</p>
<?php
}
?>		
</center>
</body>
</html>