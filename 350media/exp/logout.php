<?php
session_start();
$uid = $_SESSION['id'];
mysql_connect('localhost','root','');
mysql_select_db('intern_cart');
echo $sql= "delete from cart where user_id='$uid'";
mysql_query($sql) or die(mysql_error());

session_destroy();
header('location:index.php');
?>