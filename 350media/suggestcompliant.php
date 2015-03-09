
<?php
//include('support1.html');
$con=mysql_connect("localhost","root","");
if($con)
{
$database=mysql_select_db("child labour",$con);

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$sql= "INSERT INTO COMPLIANT 
       (NAME,EMAIL,SUBJECT,MESSAGE) 
       VALUES ('$name','$email','$subject','$message')";

$result=mysql_query($sql,$con)or die(mysql_error());
if($result)
{
  header("location:contact.php");
 // echo"thank u!";
}
else
{
echo mysql_error();
}
}


      
?>