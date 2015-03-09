<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db('intern_cart');
$uname=$_REQUEST['uname'];
$pass=$_REQUEST['pass'];

if(isset($_REQUEST['mail']))
{

$mail=$_REQUEST['mail'];


$sql="select * from user where uname='$uname'";
$result=mysql_query($sql);
if(mysql_num_rows($result)>0)
{
echo "fail";
}
else
{
$sql="insert into user values ('','$uname','$mail','$pass')";
mysql_query($sql);
}
}


$sql="select * from user where uname='$uname' and pass='$pass'";
$result=mysql_query($sql) or die(mysql_error());
if(mysql_num_rows($result)>0)
{
$row = mysql_fetch_array($result);
 $_SESSION['id']=$row['id'];
echo "yes";
}
 
else
{
echo "no";
}

?>