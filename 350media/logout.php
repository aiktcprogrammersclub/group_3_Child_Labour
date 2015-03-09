<?php
SESSION_start();
unset($_SESSION['uname']);
SESSION_destroy();
header('location:index.php');
exit;
?>