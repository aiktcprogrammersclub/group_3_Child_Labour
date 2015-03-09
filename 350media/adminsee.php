<?php
session_start();
 if(isset($_SESSION['uname']))
{
 include("header.php");
}else{
header("location:login.php");}


//$id=$_REQUEST['id'];
//$userid=$_SESSION['USERID'];
$con=mysql_connect("localhost","root","");
if($con)
{ 
mysql_select_db("child labour",$con) or die(mysql_error()) ;  //we have created database called state_city

  $sql="select * from complaint  where subject='compliant' ";
 $result=mysql_query($sql,$con) or die(mysql_error());
  
 echo'<div style="margin-left:100px;margin-right:100px;border-bottom:1px solid black;height:50px;">
 <div style="margin-left:80px;padding-top:10px;font-size:20px;float:left;"><b style="text-decoration:none;color:teal;font-size:25px;">
 VIEW CART</b>
 </div>
 </div>';
 if(mysql_num_rows($result)>0)
 {
  
 echo"<div style='margin-left:100px;margin-right:100px;margin-top:10px;'>";
 echo "<table border=1 style='margin-left:100px;' cellspacing='20' cellpadding='8'>";
 echo "<tr>";
 echo "<td><b style='padding-left:15px;color:teal;'>NAME</td> ";
 echo "<td><b style='padding-left:15px;color:teal;'>EMAIL</td> ";
 echo "<td><b style='padding-left:15px;color:teal;'>SUBJECT</td> ";
 echo "<td><b style='padding-left:15px;color:teal;'>MESSAGE</td> ";
 echo "</tr>";

 while($array=mysql_fetch_assoc($result))
 {$ID=$array['id'];
  echo "<tr style='background-color:#f8f8f8;'>";
        echo "<td>".$array['name']."</td>";
   echo "<td>".$array['email']."</td>";
    echo "<td>".$array['subject']."</td>";
	echo "<td>".$array['message']."</td>";
   echo " <td><form action='reply.php' method='POST'>
   <input type='hidden' name='id' value=$ID >
   <input type='submit' name='submit' value=Reply></form></td>";
     
   echo "</tr>";
 }
 
 echo "</table>";
 
 }
 else
 {
 echo "<div style='margin-left:120px;margin_right:122px;color:teal;font-size:35px;'> No suggestion / Compliant</div>";
 }
}
else
{
die (mysql_error());
}

//include('support2.html');
?>