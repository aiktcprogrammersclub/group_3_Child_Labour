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
          <h1 class="page-title">Services</h1>
          <div>
            <h2 class="sub-title">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique</h2>
          </div>
        </div>
      </div>
      <div class="row collapse services">
        <div class="columns three large-3"> <img src="study.jpg" alt="" class="services-image"> </div>
        <div class="columns nine large-9">
          <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repella Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</p>
        </div>
      </div>
      <div class="row collapse services">
        <div class="columns nine large-9">
          <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repella Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</p>
        </div>
        <div class="columns three large-3"> <img src="health.jpg" alt="" class="services-image right"> </div>
      </div>
      <div class="row collapse services">
        <div class="columns three large-3"> <img src="images/cup.jpg" alt="" class="services-image "> </div>
        <div class="columns large-9">
          <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repella Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</p>
        </div>
      </div>
      <div class="row collapse services">
        <div class="columns nine large-9">
          <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repella Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</p>
        </div>
        <div class="columns three large-3"> <img src="images/typewriter.jpg" alt="" class="services-image right"> </div>
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