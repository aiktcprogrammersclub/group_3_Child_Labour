




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Payment</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script>

function validate()
{
var cname=document.getElementById('card_type').value;
if(cname=='')
{
	alert('Please select your card type');
	return false;
}
var card=document.getElementById('card').value;4
if(card=='' || card.length!=16)
{
	alert('Please enter valid card number');
	return false;
}
var cvv=document.getElementById('cvv').value;
if(cvv=='' || cvv.length!=3)
{
	alert('Please enter valid cvv number');
	return false;
}
var year=document.getElementById('year').value;
if(year=='')
{
	alert('Please select a valid year');
	return false;
}
var month=document.getElementById('month').value;
if(month=='')
{
	alert('Please select a valid month');
	return false;
}
var name=document.getElementById('name').value;
if(name=='')
{
	alert("Please enter cardholder's name");
	return false;
}
var code=document.getElementById('code').value;
if(code=='')
{
	alert('Please enter captcha');
	return false;
}
}

</script>

<script>
<?php
if(isset($_REQUEST['code']))
{
?>
$(document).ready(function(){
        $("#fail_code").show().delay(5000).fadeOut(1000);
    })
<?php
}

if(isset($_REQUEST['cvv']))
{
?>
$(document).ready(function(){
        $("#fail_cvv").show().delay(5000).fadeOut(1000);
    })
<?php
}

if(isset($_REQUEST['exp']))
{
?>
$(document).ready(function(){
        $("#fail_exp").show().delay(5000).fadeOut(1000);
    })
<?php
}

if(isset($_REQUEST['card']))
{
?>
$(document).ready(function(){
        $("#fail_card").show().delay(5000).fadeOut(1000);
    })
<?php
}
?>
</script>
<style>
select{
border-radius:5px;
}
</style>
</head>

<body >
<div style='width:100%;height:20%;'>
<img src='untitled.png' height='10%' width='20%' style='float:left'>
<img src='paypal.png' height='8%' width='20%' style='float:right'>
</div>
<center style='clear:both;color:red'>WELCOME TO MYBANK PAYMENT GATEWAY</center>
<div id="wrapper">
	<div id="welcome" class="wrapper-style1" style="margin-top: 20px;clear:both">

	
			<span style="float:right;margin-right:50px;"></span>
	<div>
		<div id='fail_code' style='display:none'>Entered Captcha is Incorrect.</div>
		<div id='fail_card' style='display:none'>Entered Card Number is Incorrect.</div>
		<div id='fail_cvv' style='display:none'>Entered cvv code is Incorrect.</div>
		<div id='fail_exp' style='display:none'>Your card is Expired.</div>
	
	</div>			

<div style='border:groove 10px; border-radius:10%;width:50%;height:80%;margin-left:25%'>
	<form method='post' action='pay.php' onsubmit='return validate()'>
	<table style='margin-left:15%;margin-top:2%;font-weight:bold' cellspacing=10px>
	<tr>
		<td>Card Type :</td>
		<td><select name='card_type' style='width:100px' id='card_type'>
		<option value=''>Select</option>
		<option value='1'> Visa </option>
		<option value='2'> Master </option>
		<option value='3'> Maestro </option>
		</select></td>
	</tr>
	
	<tr>
		<td>Card Number :</td>
		<td><input  type='text' name='card' placeholder='Enter 16 digit number' style='width:200px' id='card'></td>
	</tr>
	
	<tr>
	<td>CVV :</td>
	<td><input type='password' name='cvv' style='width:30px;font-size:1em' id='cvv'> (<a href='#' style='color:grey'>What is this?</a>)</td>
	</tr>
	
	<tr><td>Expiry Date :</td>
	<td>
	<Select name='year' style='width:60px' id='year'>
	<option value=''></option>
	<option value='2014'>2014</option>
	<option value='2015'>2015</option>
	<option value='2016'>2016</option>
	<option value='2017'>2017</option>
	<option value='2018'>2018</option>
	<option value='2019'>2019</option>
	<option value='2020'>2020</option>
	<option value='2021'>2021</option>
	<option value='2022'>2022</option>
	<option value='2023'>2023</option>
	<option value='2024'>2024</option>
	<option value='2025'>2025</option>
	</select>
	
	<select name='month' style='width:50px' id='month'>
	<option value=''></option>
	<option value='01'>Jan</option>
	<option value='02'>Feb</option>
	<option value='03'>Mar</option>
	<option value='04'>Apr</option>
	<option value='05'>May</option>
	<option value='06'>Jun</option>
	<option value='07'>Jul</option>
	<option value='08'>Aug</option>
	<option value='09'>Sep</option>
	<option value='10'>Oct</option>
	<option value='11'>Nov</option>
	<option value='12'>Dec</option>
	</select>
	</td></tr>
	
	
	<tr>
	<td>Cardholder Name :</td>
	<td><input type='text' name='name' id='name'></td>
	</tr>
	
	<tr>
	<td>Enter Code : </td>
	<td><input type='text' name='code' id='code'></td>
	</tr>
	
	<tr>
	<td></td>
	<td><!-- captcha image coming from captcha.php--><img src='captcha.php'></td>
	</tr>
	
	
	<tr>
	<td></td>
	<td><input type='submit' name='submit' value='Pay Now' style='border-radius:5px'></td>
	</tr>
	</table></form>
</div>

		</div>
		
	</div>

</body>
</html>