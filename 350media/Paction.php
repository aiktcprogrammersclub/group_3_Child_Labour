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
          <h1 class="page-title">Prevention and Action</h1>
          <div>
            <h2 class="sub-title">It is pivotal to eliminating and preventing child labor, to establishing a skilled workforce, and to promoting development based on the principles of social justice and human rights.
</h2>
          </div>
		  <div style="width:40%;float:right;">
		   <img src="stop.png">
            <img src="prevent.jpg">	
           <img src="action.jpg">			
		  </div><br><br>
		  <div style="width:50%;">
		  <ul>
		    <li><b>Child labor is a major obstacle to the achievement of EFA, since children who are working full time cannot go to school.
</b></li><br><br><br>
			 <li><b>Governments, the social partners, civil society, local, regional, and national education authorities, teachers, parents, communities, and other actors need to work towards the reduction of child labor through increased enrollment and completion rates for (former) child laborers and children at risk, and through the provision of life skills and livelihood training for older children.
</b></li><br><br><br>
			  <li><b>Raising awareness of the importance of education for all children and mobilizing a wide array of actors to improve and expand education infrastructure.
</b></li><br><br><br>
			   <li><b>Developing formal and transitional education systems that encourage working children and those at risk of working to attend school
</b></li><br><br><br>
			    <li><b>The government could help give conferences to the parents about child labor and the consequences that it brings. In this way, we can help prevent other children running away from home and living as homeless children.
</b></li><br><br><br>
				 <li><b>Another option could be to build homes for those children that are living in the streets.
They will be sent to these homes and they would not have to live outside. 
In this way we can help prevent children from any abuse that they can suffer in the streets. In these homes, children are not supposed to work; they can study and learn a career, and they will get a better job and a future.
</b></li><br><br><br>
				  <li><b>Politicians should make laws to prevent child labor and find solutions. Children are our future and we have to take care of them if we want a better future.
</b></li>
				   
		  </ul>
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