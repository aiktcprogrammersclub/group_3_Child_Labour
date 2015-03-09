<?php
session_start();
$con=mysql_connect("localhost","root","");
if($con)
{$comm=$_GET['comment']; 
$id=$_GET['id'];
$uname=$_SESSION['uname'];
$selectdb=mysql_select_db('child labour',$con) or die(mysql_error());
  $sql="insert into comment (id,comment,uname) values ($id,'$comm','$uname')";
 $result=mysql_query($sql,$con) or die(mysql_error());
  
  
 header("location:comment.php?id=$id");

}
else
{
die (mysql_error());
}

?>
