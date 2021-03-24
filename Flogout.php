<?php

 session_start();
?>

<?php
$_SESSION['username'];
session_destroy();

 header("Location: CoverPage.html ");
exit();


?>
