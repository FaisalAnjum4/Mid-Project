<?php

  session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign in </title>
</head>
<body>
<?php
      $_SESSION['user'];
      session_destroy();

   header("Location: CoverPage.html ");
 exit();

                           

?>
</body>
</html>
