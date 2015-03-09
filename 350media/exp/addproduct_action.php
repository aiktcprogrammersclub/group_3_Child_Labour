<?php
$pname=$_REQUEST['pname'];
$cname=$_REQUEST['cname'];
$ptype=$_REQUEST['ptype'];
$btype=$_REQUEST['btype'];
$file=$_FILES['file'];
$desc=$_REQUEST['desc'];
$cost=$_REQUEST['cost'];

move_uploaded_file($file['tmp_name'],"uploads/".$file['name']);
$path="uploads/".$file['name'];

$con=mysql_connect("localhost","root","");
mysql_select_db("intern_cart",$con);
$query="insert into product(p_name,c_name,p_type,brand,pimg,pdesc,cost) values('$pname','$cname','$ptype','$btype','$path','$desc','$cost')";
$result=mysql_query($query);
header("location:addproduct.php");
?>