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
<title>350Media | Services</title>
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
          <h1 class="page-title">CONSEQUENCES OF CHILD LABOUR</h1>
		  <b style="font-size:20px;">Following are some of the consequences of Child labour </b>
            </div><br><br>
			</div><br><br>
			<div style="float:right;width:35%"><img src="images/consequence.jpg"><br><br><img src="images/consequence1.jpg" style="width:300px;"> </div>
				<div style="width:50%;">
			<ul style="font-size:15px;">
			<li><b>Stunted growth of future generation</b></li><br>
			<li><b>Inability to harness human resources
</b></li><br>
			<li><b>Inability to contribute to development
</b></li><br>
			<li><b>Inability to benefit from development</b></li><br>
			<li><b>Citizens with accumulated frustration</b></li><br>
			<li><b>Adult unemployment and Depreciation in wages</b></li><br>
			<li><b>Persistence of child labour and Perpetuation of economic inequality</b></li><br>
			<li><b>Increased abuse of children and Increased illiteracy.</b></li><br>
			<li><b>Citizens with inferiority complex</b></li><br>
			<li><b>Early morbidity of citizens</b></li><br>
			<li><b>Perpetuation of ill treatment</b></li><br>
			<li><b>Increased bottlenecks in the development process</b></li>
			</ul>
			</div>
    
  </div></div>
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
          <h4 class="footer-call">call (022)23456687</h4>
        </div>
        <div class="columns footer-social large-3 small-12 pr0">
          <ul class="facebook">
            <li><a href="www.twitter.com">t</a></li>
            <li><a href="www.facebook.com">f</a></li>
            <li><a href="www.gmail.com">g</a></li>
            
          </ul>
        </div>
      </div>
      <div class="row footer-meta">
        <div class="columns one large-1 right pr0"> <a href="#" class="right"><img src="images/scrolltop.png" alt="" class="scrolltop"></a> </div>
      </div>
    </div>
  </footer>
  <div class="row footer-theme-credits">
    <p>Design by: <a href="http://topwebsitetemplates.org">StandForLives.org</a></p>
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