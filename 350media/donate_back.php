<?php
session_start();
if(isset($_SESSION['uname'])){
header("location:donate_yar.php");
}
else{
header("location:login.php");
}
?>