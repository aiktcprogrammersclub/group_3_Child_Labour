<?php
session_start();
if(isset($_SESSION['id']))
{
$id = $_SESSION['id'];
$prod_id = $_REQUEST['id'];
mysql_connect('localhost','root','');
mysql_select_db('intern_cart');
$sql="insert into cart values ('','$prod_id','$id')";
mysql_query($sql);
	echo "Added to cart";
}


else
{
echo "1";
}
?>