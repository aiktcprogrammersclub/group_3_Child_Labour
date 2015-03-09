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
          <h1 class="page-title">ABOUT US</h1>
          <div>
            <h2 class="sub-title"><CENTER>We help the Needy children to build their future.<CENTER></h2>
          </div>
		  
	<div class="row">
        <div class="columns twelve large-12">
          <ul class="large-block-grid-3 block-grid three-up">
            <li>
              <div class="img-wrapper"><img src="images/preeti.jpg" style="height:200px;" alt="" class="about-image"></div>
              <h3 class="employer-name">PREETI PANDA</h3>
              <p>I am an engineer who loves children a lot and very much interested in helping children, and building the future of children is a dream towards which i am working.</p>
            </li>
            <li>
              <div class="img-wrapper"><img src="images/akshay.jpg" style="height:200px;" alt="" class="about-image"></div>
              <h3 class="employer-name">AKSHAY PARDESHI</h3>
              <p>I am a computer engineer and very much enthusiastic about helping children especially the one which is under a labour activity. I think children are the future of our world and hence for the betterment of or world our children should also be in a Better environment and health.</p>
            </li>
            <li>
              <div class="img-wrapper"><img src="images/youngwoman.jpg" alt="" class="about-image"></div>
              <h3 class="employer-name">Shamitha S Rao</h3>
              <p>Im a MBA from MISB. I believe each and every child has right to live in a good and healthier environment. Children are the future.  </p>
            </li>
          </ul>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                
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
    <p>Design by: <a href="#">StandforLives.org</a></p>
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