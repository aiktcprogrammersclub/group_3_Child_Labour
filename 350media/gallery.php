<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['uname'])){
include("header.php");}
else{include("header.html");}
?>
<html>
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
</script>
</head>
<body>
   
  <div class="row outterWrapper">

    <div class="columns twelve large-12">
      <div class="row flexslider-row">
        <div class="columns twelve large-12 plr0">
		<div > <h1>GALLERY</h1></div>
          <div class="flexslider">
            <ul class="slides">
              <li><img src="image/banner7.jpg" alt=""></li>
              <li><img src="image/banner6.jpg" alt=""></li>
              <li><img src="image/banner1.jpg" alt=""></li>
			  <li><img src="image/banner2.jpg" alt=""></li>
			  <li><img src="image/banner3.jpg" alt=""></li>
			  <li><img src="image/banner8.jpg" alt=""></li>
			  <li><img src="image/banner9.jpg" alt=""></li>
			  <li><img src="image/banner10.jpg" alt=""></li>
			   <li><img src="image/banner11.jpg" alt=""></li>
			  <li><img src="image/banner12.jpg" alt=""></li>
			  <li><img src="image/banner13.jpg" alt=""></li>
			  <li><img src="image/banner14.jpg" alt=""></li>
			  <li><img src="image/banner15.jpg" alt=""></li>
<li><img src="image/banner16.jpg" alt=""></li>
			 
			  <li><img src="image/banner4.jpg" alt=""></li>
			  <li><img src="image/banner5.jpg" alt=""></li>
            </ul>
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
                <li><a href="index.php">Home</a></li>
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
      
      <div class="row footer-meta">
        <div class="columns one large-1 right pr0"> <a href="#" class="right"><img src="images/scrolltop.png" alt="" class="scrolltop"></a> </div>
      </div>
    </div>  </footer>
  <div class="row footer-theme-credits">
    <p>Design by: <a href="http://topwebsitetemplates.org">StandforLives</a></p>
  </div>
  <p><a class="loader" href="#inline_content"></a></p>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<script src="js/slider/jquery.flexslider.js"></script>
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
    $('.flexslider').flexslider();
});
</script>
</body>
</html>