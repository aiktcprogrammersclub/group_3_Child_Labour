<?php
session_start(); 
if ($_POST["code"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  
{ 
    header('location:online_pay.php?code'); 
} 
else 
{
$month = $_REQUEST['month'];
$year = $_REQUEST['year'];

$current_month = date('m');
$current_year = date('Y');

if($month>=$current_month && $year>=$current_year)
{

$card = $_REQUEST['card'];

$num = array("4321987614141023","4321987614141027","4321987614141031","4321987614141035","4321987614141039","4321987614141043","4321987614141047","4321987614141051","4321987614141055","4321987614141059");

if (in_array($card, $num)) 
{
    if($card=='4321987614141023')
	{	
		$cvv =$_REQUEST['cvv'];	
		if($cvv=='320')
		{
			header("location:paid.php");
		}
		else
		{
			header("location:online_pay.php?cvv");
		}
	}
	
	else if($card=='4321987614141027')
	{	
		$cvv =$_REQUEST['cvv'];	
		if($cvv=='720')
		{
			header("location:paid.php");
		}
		else
		{
			header("location:online_pay.php?cvv");
		}
	}
	
	else if($card=='4321987614141031')
	{	
		$cvv =$_REQUEST['cvv'];	
		if($cvv=='130')
		{
			header("location:paid.php");
		}
		else
		{
			header("location:online_pay.php?cvv");
		}
	}
	
	else if($card=='4321987614141035')
	{	
		$cvv =$_REQUEST['cvv'];	
		if($cvv=='530')
		{
			header("location:paid.php");
		}
		else
		{
			header("location:online_pay.php?cvv");
		}
	}
	
	else if($card=='4321987614141039')
	{	
		$cvv =$_REQUEST['cvv'];	
		if($cvv=='930')
		{
			header("location:paid.php");
		}
		else
		{
			header("location:online_pay.php?cvv");
		}
	}
	
	else if($card=='4321987614141043')
	{	
		$cvv =$_REQUEST['cvv'];	
		if($cvv=='340')
		{
			header("location:paid.php");
		}
		else
		{
			header("location:online_pay.php?cvv");
		}
	}
	
	else if($card=='4321987614141047')
	{	
		$cvv =$_REQUEST['cvv'];	
		if($cvv=='740')
		{
			header("location:paid.php");
		}
		else
		{
			header("location:online_pay.php?cvv");
		}
	}
	
	else if($card=='4321987614141051')
	{	
		$cvv =$_REQUEST['cvv'];	
		if($cvv=='150')
		{
			header("location:paid.php");
		}
		else
		{
			header("location:online_pay.php?cvv");
		}
	}
	
	else if($card=='4321987614141055')
	{	
		$cvv =$_REQUEST['cvv'];	
		if($cvv=='550')
		{
			header("location:paid.php");
		}
		else
		{
			header("location:online_pay.php?cvv");
		}
	}
	
	else if($card=='4321987614141059')
	{	
		$cvv =$_REQUEST['cvv'];	
		if($cvv=='950')
		{
			header("location:paid.php");
		}
		else
		{
			header("location:online_pay.php?cvv");
		}
	}
}
else
{
	header("location:online_pay.php?card");
}
}
else
{
	header("location:online_pay.php?exp");
}
}
?>