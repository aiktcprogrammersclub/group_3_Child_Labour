<?php
session_start();
$con=mysql_connect("localhost","root","");
if($con)
{
mysql_select_db("child labour",$con);
$username=$_REQUEST['uname'];
$password=$_REQUEST['pwd'];
if($username=='ADMIN' && $password=='childhelper')
{
 
$_SESSION['uname']=$username;
header("location:admin.php");
}
else
{
$sql="select ID,USERNAME,PASSWORD from register where USERNAME='$username' and PASSWORD='$password'";
$result=mysql_query($sql,$con)or die(mysql_error());

if(mysql_num_rows($result)>0)
{

$array=mysql_fetch_array($result);
$id=$array['ID'];
 $_SESSION['USERID']=$id;
$_SESSION['uname']=$username;
header("location:index.php");
}
else
{
//include('support1.html');
echo '<div style="margin-left:100px;margin-right:100px;border-bottom:1px solid black;height:100px;">
 
 <div style="margin-left:200px;padding-top:10px;font-size:20px;">
 <b style="text-decoration:none;color:red;font-size:20px;">Your username Or password is Incorrect</b>
 </div><a href="login.php" style="text-decoration:none;color:red;font-size:20px;">click here to relogin</a>
 </div>';
 
 }
 //include('support2.html');
}
}
else{
echo mysql_error();
}
?>