<?php
//include('support1.html');
$con=mysql_connect("localhost","root","");
if($con)
{
$database=mysql_select_db("child labour",$con);

$name=$_POST['name'];
$email=$_POST['email'];
$state=$_POST['state'];
$address=$_POST['address'];
$mob=$_POST['cno'];
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$sql= "INSERT INTO register 
       (NAME,EMAIL,STATE,ADDRESS,MOBILE,USERNAME,PASSWORD) 
       VALUES ('$name','$email','$state','$address','$mob','$uname','$pwd')";

$result=mysql_query($sql,$con)or die(mysql_error());
if($result)
{
//include('support1.html');
echo '<div style="margin-left:100px;margin-right:100px;border-bottom:1px solid black;height:100px;">
 <div style="margin-left:280px;padding-top:10px;font-size:20px;float:left;"><b style="text-decoration:none;color:green;font-size:20px;">Congratulations</b>
 </div>
 <div style="margin-left:200px;padding-top:10px;font-size:20px;">
 <b style="text-decoration:none;color:green;font-size:20px;">You Have Sucessfully created an account please login</b>
 </div>
 <div style="margin-left:260px;padding-top:10px;font-size:20px;">
 <a href="login.html" style="text-decoration:none;color:green;font-size:20px;">click here </a>to login
 </div>
 
 </div>';
 header("location:login.php");
 //include('support2.html');
}
}
else
{
echo mysql_error();
}


?>