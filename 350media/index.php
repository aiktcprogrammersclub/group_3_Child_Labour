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
          <div class="flexslider">
            <ul class="slides">
              <li><img src="images/slider1.jpg" alt=""></li>
              <li><img src="images/savegirl.jpg" alt=""></li>
              <li><img src="images/banner1.jpg" alt=""></li>
			  <li><img src="images/banner2.jpg" alt=""></li>
			  <li><img src="images/banner3.jpg" alt=""></li>
			  
			  <li><img src="images/banner4.jpg" alt=""></li>
			  <li><img src="images/banner5.jpg" alt=""></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row tagline-row">
        <div class="columns twelve large-12 tagline"> Stealing a kids childhood is ILLEGAL.<br>
<CENTER>STOP CHILD LABOUR!</CENTER>		</div>
      </div>
      <div class="row">
        <div class="columns twelve small-12 wrapper service-welcome-box content">
          <div class="row">
            <div class="columns four large-4">
              <h1 class="title">Our Services</h1>
              <ul class="disc">
                <li class="bullet"><a href="#">Rescue, counseling and education for former child slaves</a></li>
                <li class="bullet"><a href="#">Day care for pre-school-aged children of adult weavers</a></li>
                <li class="bullet"><a href="#">Scholarships for children of adult weavers identified as at risk for underage work
</a></li>
                <li class="bullet"><a href="#">Preventive health checks by mobile health facilities and trainings on protection against environmental hazards in GoodWeave licensed factories
</a></li>
                <li class="bullet"><a href="#">Awareness workshops on issues such as human rights, health, sanitation, and family planning in weaving communities
</a></li>
                
              </ul>
              </div>
            <div class="columns seven large-7 large-offset-1">
              <h1 class="title">Welcome To our website</h1>
              <p class="highlight"> Based at Navi mumbai, Liveforlives Foundation is engaged in working for the betterment of poor and labour child. We with the help of the volunteers work together to provide a better future to the girls of capital. Our focus is to provide education and proper health facilities to the each child. We work as a catalyst and try provide the basic requirements of life such as food, clothing, shelter, education and health to the needy children. 

 
 </p>
              <div> <img src="images/welcome.jpg" alt="" class="welcome"> </div>
              <p> We give importance on providing better health facilities to the deprived children. We make arrangements for proper health treatment of various diseases. We make sure that a child gets proper education and medical facilities. With the support of our volunteers, we have been able to provide these facilities to the needy children of society.
</p>
              <a href="about.php" class="button read-more">read more</a> </div>
          </div>
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
            <li><a href="https://www.facebook.com/">f</a></li>
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