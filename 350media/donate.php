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
</script>
</head>
<body>
<div class="page-content">
  <div class="row outterWrapper">
    <div class="columns twelve large-12">
	  <h1>Donate and Support</h1>
	  <div class="hover" style="height:50px;width:150px;float:right;border:1px solid black;border-radius:8px;background-color:blue;margin-right:130px;"><a href="donate_back.php" style="color:white;padding-left:18px;font-size:18px;margin-top:20px;"> Donate Online</a></div>
    <div style="width:300px;float:right;margin-right:50px;">
	  <b style="font-family:italic;">You can help us end child labor and transform the lives of the thousands of children trapped in carpet work by making a tax-deductible donation today. Every dollar makes a difference.Donate Online</b>
	  </div>
	 
	  
     <img src="images/donate.jpg"><br><br>
	  <div><h2 style="font-size:20px;">Here are some of the programs your donation helps make possible:
    <br>   <ul style="font-size:15px; margin-left:20px;">
	      <li>Rescue, counseling and education for former child slaves</li><br>
		  <li>Day care for pre-school-aged children of adult weavers
</li><br>
		  <li>Scholarships for children of adult weavers identified as at risk for underage work</li><br>
		  <li>Preventive health checks by mobile health facilities and trainings on protection against environmental hazards in GoodWeave licensed factories
</li><br>
		  <li>Awareness workshops on issues such as human rights, health, sanitation, and family planning in weaving communities</li>
	   </ul>
</h2></div>
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