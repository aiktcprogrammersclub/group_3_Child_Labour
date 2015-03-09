<?php
session_start();
if(isset($_SESSION['uname'])){
include("header.php");
}
else{include("header.html");}
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html><!--<![endif]-->
<head>
<title>Standforlives | Login</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/foundation.min.css">
<link rel="stylesheet" href="css/superfish.css">
<link rel="stylesheet" href="css/stylesheet.css">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
<link rel="stylesheet" href="css/ie-fixes.css">
<![endif]-->
<script src="js/custom.modernizr.js"></script>
<style type="text/css">
.textbox
{
width:220px;

height:29px;
padding:3px;
border-radius:5px;
}
td{
margin:5px;
}
</style>
<CENTER>
<script>
function Check()
		{ 
		  var x=document.forms["registerform"]["name"].value;
		  if(x==null || x=="")
		  {
		   alert("The First name cannot be null");
		   return false;
		  }
		  
		  if(x.length>30)
		  {
		   alert("The Name cannot be grater than 20 chars");
		   return false;
		  }
		  
		
		
  		 		  
		   var x=document.forms['registerform']['uname'].value;
		  
		    if(x==null || x=="")
		   {
		   alert("The username name cannot be null");
		   return false;
		   }
		   if(x.length>20)
		   {
		   alert("The username cannot be grater than 20 chars");
		   return false;
		   }
		   
		   var x=document.forms['form1']['email'].value;
		    var	at=x.indexOf("@");
			var dot=x.lastIndexOf(".");
			 if(x==null || x=="")
		     {
		      alert("The email cannot be null");
		       return false;
		     }
		   
			if(at<1 || dot<=at+2 || dot+2>=x.length)
	   	     {
			  alert("PLEASE enter a valid email");
			  return false;
			 }
		   var x=document.forms['registerform']['pwd'].value;
		    if(x==null || x=="")
		   {
		   alert("The password  cannot be null");
		   return false;
		   }
		   if(x.length<6)
		   {
		   alert("The password cannot be smaller than 6 chars");
		   return false;
		   }
		   var check=/^[A-Za-z0-9]+$/;
		   if(!x.match(check))
		   {
		   alert("The password can only contain characters and numbers");
		   return false;
		   }
           
           var x=document.forms['registerform']['state'].value;
		    if(x=="SELECT")
		   {
		   alert("Please select the state.");
		   return false;
		   }
		  var x=document.forms['registerform']['adress'].value;
            		 if(x==null || x=="")
		     {
		      alert("The Adress cannot be null");
		       return false;
		     }  
			
	    }
function init()
	{
		
		if (window.XMLHttpRequest)
		{	// code for IE7+, Firefox, Chrome, Opera, Safari
			a=new XMLHttpRequest();
			return a;
		}
		else
		{	// code for IE6, IE5
			a=new ActiveXObject("Microsoft.XMLHTTP");
			return xmlhttp;
		}
	}
		
		function validate()
		{	
			var xmlhttp=init();
			
			var password=document.getElementById('pwd').value;
		
			xmlhttp.onreadystatechange=function()
			{	
				if(xmlhttp.readyState==4)
				{	
					document.getElementById('reply_pwd').innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","validate_pwd.php?p="+password,true);
			xmlhttp.send();
		}
		
		
		
	
</script>

<script>
Modernizr.load({
    // test if browser understands media queries
    test: Modernizr.mq('only all'),
    // if not load ie8-grid
    nope: 'css/ie8-grid-foundation-4.css'
});
</script>
</head>
<body>
<div class="page-content">
  <div class="row outterWrapper">
    <div class="columns twelve large-12">
      <div class="row top-menu">
    <div class="columns twelve large-12 content wrapper">
      <div class="row">
	  
        <div class="columns twelve large-12">
<img src="register.jpg" style="float:right;">
		<h1 class="page-title">REGISTER</h1>
		  <b style="font-size:20px;">Register to acces your services </b>
		  
  </div><br><br>
 <div style="margin-top:50px; width:300px;">
<form method="post" action="submit.php" name="registerform" id="registerform" onsubmit="return Check()">
<table style="width:300px;">
<tr><td>
Name:</td><td><input class="textbox" type="text" name="name"  placeholder="enter your name" style="font-size:15px;height:40px;"></td></tr>
 <tr><td>Email:</td><td> <input class="textbox" type="email" name="email" id="email" style="font-size:15px;height:40px;" placeholder="email"/></td></tr>
 <tr><td> 
 State:</td>
  <td> 
 <select class="textbox" id="state" name="state"  style="height:40px;">
 <option value="0">SELECT</option>
 <option value="maharastra">MAHARASHTRA</option><br>
  <option value="Gujrat">GUJRAT</option>
   <option value="madhya pradesh">MADHYA PRADESH</option>
    <option value="Delhi">DELHI</option>
	<option value="Kerela">KERELA</option>
   </select> </td></tr> 
       <br>
  <tr><td>Address:</td><td><textarea style="font-size:15px;height:100px;resize:none;height:40px;" id="adress" name="address" class="textbox" rows="20" cols="20"></textarea></td></tr> <tr><td>Mobile:</td><td><input type="number" name="cno" class="textbox" placeholder="mob number" style="font-size:15px;	"/></td></tr>
  <tr><td>Username:</td><td><input type="text" class="textbox"  style="font-size:15px;height:40px;" name="uname" id="uname" placeholder="username"/></td></tr>
  <tr><td>Password</td><td><input type="password" class="textbox" style="font-size:15px;height:40px;" name="pwd" id="pwd" onkeyup="validate()"  placeholder="password"/></td><td><div id="reply_pwd"></div></td></td></tr>
 
 <tr><td><input type="submit" style="Width:80px;background-color:blue;height:30px;color:white;" value="Register"></td><td><input type="reset" style="Width:80px;background-color:blue;height:30px;color:white;margin-left:20px;" value="reset"></td></tr>
</table>
 </form>

</div>
	
			</div><br><br>
     		
			
	</div>
	
  </div>
  
  </div>
  </div>
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






