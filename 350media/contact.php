<?php
session_start();
if(isset($_SESSION['uname'])){
include("header.php");
}
else{
include("header.html");

}?>
<!DOCTYPE html>
<head>
<title>LiveforLives | Contact</title>
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
<script>
Modernizr.load({
    // test if browser understands media queries
    test: Modernizr.mq('only all'),
    // if not load ie8-grid
    nope: 'css/ie8-grid-foundation-4.css'
});

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
			
			var password=document.getElementById('send').value;
		
			xmlhttp.onreadystatechange=function()
			{	
				if(xmlhttp.readyState==4)
				{	
					document.getElementById('response').innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open("POST","yes.php?p="+password,true);
			xmlhttp.send();
		}
		
		

</script>
</head>
<body>

   
     <div class="columns twelve large-12 content wrapper" style="border:1px solid black;">
      <div class="row">
        <div class="columns twelve large-12">
		<div><img src="contactimg.jpg" style="float:right;margin-right:10px;"></div>
           <h1 class="page-title">Contact Us</h1>
		  <div style="width:400px;">
            <h2 class="sub-title" >In case you need more information regarding stand for lifes,please contact us for more information;</h2>
			
          </div>
          <div class="row contact-form" >
		     
            <div class="columns four large-4" >
			 
              <ul class="vcard">
                <li class="fn">StandforLives</li>
                <li class="street-address">255, Willson Street,sector 25</li>
                <li class="locality">Nerul</li>
                <li><span class="state">Navi Mumbai</span>, <span class="zip">122211</span></li>
                <li class="email"><a href="#">stand4lives@StandforLives.com</a></li>
                <li class="mobile">Mob:<a href="#">9920550011</a></li>
                <li class="telephone">Tel:<a href="#">1800-222-1111</a></li>
                <li class="telephone">Fax:<a href="#">(022)5474455</a></li>
              </ul>
            </div>
			<div style="margin-left:10px;">
			<h2 style="font-size:20px;"> In case you want to compliant/Suggest anything please 
			
			enter the following details</h2></div>
            <div class="columns seven large-7 large-offset-1" style="margin-right:0px">
              <form id="contact-form" method="post" action="suggestcompliant.php">
                <input type="text" name="name"  placeholder="Name*:">
                <input type="text" name="email"  placeholder="Email*:">
   				<select name="subject" >
				 <option value="select">Select</option>
				 <option value="compliant">Complaint</option>
				 <option value="suggestion"> Sugession</option>
				</select>
                <textarea  name="message" placeholder="message:"></textarea onblur="validate()"><br>
                  <div id="response"></div>
                <input type="submit" class="button" name="submit" value="send" id="send"  >
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="columns twelve large-12">
          <div id="map_canvas" ></div>
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
                
              </ul>
            </section>
          </nav>
        </div>
        <div class="columns large-4 small-12">
          <h4 class="footer-call">call (022)23456687</h4>
        </div>
        <div class="columns footer-social large-3 small-12 pr0">
          <ul class="facebook">
            <li><a href="#">t</a></li>
            <li><a href="www.facebook.com">f</a></li>
            <li><a href="www.gmail.com">g</a></li>
           
          </ul>
        </div>
      </div>
      <div class="row footer-meta">
        <div class="columns one large-1 right pr0"> <a href="#" class="right"><img src="images/scrolltop.png" alt="" class="scrolltop"></a> </div>
      </div>
    </div></div>
  </footer>
  <div class="row footer-theme-credits">
    <p>Design by: <a href="http://topwebsitetemplates.org">StandForLives.org</a></p>
  </div>
  <p><a class="loader" href="#inline_content"></a></p>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/google-maps.js"></script>
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