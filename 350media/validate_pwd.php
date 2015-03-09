<?php
$pwd=$_REQUEST['p'];
if(strlen($pwd)<6)
{
 echo  "<b style='color:red;'>weak</b><div style='margin-top:1px;'> <div style='background-color:white;width:20px;height:5px;margin-right:400px;border:1px solid black;float:right;'></div><div style='background-color:white;width:20px;height:5px;border:1px solid black;float:right;'></div><div style='background-color:red;width:20px;height:5px;border:1px solid black;float:right;'></div></div>";
}
elseif(strlen($pwd)<=10)
{
echo"<b style='color:green;'>strong</b><div style='margin-top:1px;'><div style='background-color:white;width:20px;height:5px;margin-right:400px;border:1px solid black;float:right;'></div><div style='background-color:green;width:20px;height:5px;border:1px solid black;float:right;'></div><div style='background-color:green;width:20px;height:5px;border:1px solid black;float:right;'></div></div>";
}
else
{
echo" <b style='color:teal;'>very strong</b><div style='margin-top:1px;'><div style='background-color:teal;width:20px;height:5px;margin-right:400px;border:1px solid black;float:right;'></div><div style='background-color:teal;width:20px;height:5px;border:1px solid black;float:right;'></div><div style='background-color:teal;width:20px;height:5px;border:1px solid black;float:right;'></div></div>";
}
?>