
<?php
session_start();
if(isset($_SESSION['uname'])){
include("header.php");}
else{include("header.html");}

?>
<head>
<title>Good Weave</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/foundation.min.css">
<link rel="stylesheet" href="css/superfish.css">
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="stylesheet" href="js/slider/flexslider.css">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>

<script src="js/custom.modernizr.js"></script>
<script>
Modernizr.load({
    // test if browser understands media queries
    test: Modernizr.mq('only all'),
    // if not load ie8-grid
    nope: 'css/ie8-grid-foundation-4.css'
});
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

<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="page-content">
  <div class="row outterWrapper">
    <div class="columns twelve large-12">
	  <h1>Donate</h1>
	  <p>Make a tax-deductible donation to GoodWeave today and ensure the end of child labor in the rug industry. Your gift will go to work right away to ensure “carpet kids” are rescued from exploitation and offered educational opportunities, and to support adult weaving artisans in Nepal, India and Afghanistan. 

To give online via a secure server, please use the form below. Your donation will support GoodWeave, a 501(c)(3) organization.
</p><br><br>
	  <img src="images/donatee.jpg" style="float:right;margin-right:50px;">
	  <div style="color:blue;font-size:20px;">Donation Amount </div><br>
	  <div class="style"><div style="height:30px;width:80px;border:1px solid black;border-radius:10px;float:right;margin-right:400px;background-color:#005387;color:white;">Rs. 1000</div><div style=";border:1px solid black;height:30px;width:80px;border-radius:10px;float:right;margin-right:10px;background-color:#005387;color:white;">Rs.500</div><div style="border:1px solid black;height:30px;border-radius:10px;width:80px;float:right;background-color:#005387;margin-right:10px;color:white;">Rs.200</div><div style="border:1px solid black;height:30px;width:80px;border-radius:10px;float:right;margin-right:10px;background-color:#005387;color:white;" onclick="style='background-color:red;'">Rs.100</div><br><br>
	  <input type="number" placeholder="Enter the amount" style="width:150px;">
	  </div>
	  <div>
	  <div style='width:100%;height:20%;'><br><br>
<img src='paypal.png' height='8%' width='20%' style='float:left'>

</div>
<center style='clear:both;color:red'>WELCOME TO MYBANK PAYMENT GATEWAY</center>
<div id="wrapper" style="">
	<div id="welcome" class="wrapper-style1" style="margin-top: 20px;clear:both;">

	
			<span style="float:right;margin-right:50px;"></span>
	<div>
		<div id='fail_code' style='display:none'>Entered Captcha is Incorrect.</div>
		<div id='fail_card' style='display:none'>Entered Card Number is Incorrect.</div>
		<div id='fail_cvv' style='display:none'>Entered cvv code is Incorrect.</div>
		<div id='fail_exp' style='display:none'>Your card is Expired.</div>
	
	</div>			

<div style='width:50%;height:80%;margin-left:25%;'>
	<form method='post' action='pay.php' onsubmit='return validate()'>
	<table style='margin-left:15%;margin-top:2%;font-weight:bold;border:1px solid black;' cellspacing=10px>
	<tr>
		<td>Card Type :</td>
		<td><select name='card_type' style='width:150px' id='card_type'>
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

	  </div>
	</div> </div>
  <footer class="row footer">
    <div class="columns large-12">
      <div class="row">
        <div class="columns large-5 small-12">
          <nav class="footer-bar">
            <section class="footer-bar-section">
              <ul class="inline-list">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Products</a></li>
              </ul>
            </section>
          </nav>
        </div>
        <div class="columns large-4 small-12">
          <h4 class="footer-call">call (122)23456687</h4>
        </div>
        <div class="columns footer-social large-3 small-12 pr0">
          <ul class="facebook">
            <li><a href="#">t</a></li>
            <li><a href="#">f</a></li>
            <li><a href="#">y</a></li>
            <li><a href="#">p</a></li>
            <li class="last-child"><a href="#">d</a></li>
          </ul>
        </div>
      </div>
      <div class="row footer-meta">
        <div class="columns one large-1 right pr0"> <a href="#" class="right"><img src="images/scrolltop.png" alt="" class="scrolltop"></a> </div>
      </div>
    </div>
	
  </footer>
  <div class="row footer-theme-credits">
    <p>Design by: <a href="http://topwebsitetemplates.org">topwebsitetemplates.org</a></p>
  </div>
  <p><a class="loader" href="#inline_content"></a></p>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<script>
Modernizr.load({
    test: Modernizr.placeholder,
    nope: 'js/placeholder.min.js'
});
function goToNewPage() {
    if (document.getElementById('target').value) {
        window.location.href = document.getElementById('target').value;
    }
}
</script>
<script>
$(document).ready(function () {
    $('ul.sf-menu').superfish({
        animation: {
            height: 'show'
        },
        delay: 400
    });
    $("img.scrolltop").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });
});
</script>
</body>
</html>