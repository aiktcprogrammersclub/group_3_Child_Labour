<?php
session_start();
$uid=$_SESSION['id'];
$id=$_REQUEST['id'];

mysql_connect('localhost','root','');
mysql_select_db('intern_cart');

echo $sql="delete from cart where id='$id' ";
mysql_query($sql) or die(mysql_error());

header('location:cart.php');
?>