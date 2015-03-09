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
          <h1 class="page-title">BLOG</h1>
          <div>
            <h2 class="sub-title">Admin will blog on this page. you can comment on it!
</h2>
          </div>
		  <?php
		  

$con=mysql_connect("localhost","root","");
if($con)
{ 
$selectdb=mysql_select_db('child labour',$con) or die(mysql_error());
  $sql="select * from blog ";
 $result=mysql_query($sql,$con) or die(mysql_error());
  
 echo'<div style="margin-left:100px;margin-right:100px;border-bottom:1px solid black;height:50px;">
 <div style="margin-left:80px;padding-top:10px;font-size:20px;float:left;"><b style="text-decoration:none;color:teal;font-size:25px;">
 BLOG</b>
 </div>
 </div>';
 if(mysql_num_rows($result)>0)
 {
  
 echo"<table style='margin-left:50px;'>";
 
 while($array=mysql_fetch_assoc($result))
 {$ID=$array['id'];
 $img=$array['IMAGE'];
 $link=$array['link'];
 $content=$array['content'];
  echo "<tr style='background-color:#f8f8f8;'>";
        echo "<td><img src=$img width='200' height='300'></td>";
         echo "<td style='width:500px;'><p style='font-size:14px;'>$content</p></td>";
		 echo "<td><form action='$link' method='GET'>
		 <input type='hidden' value='$ID' name='id'>
		 <input type='hidden' value='$img' name='img'>
		 <input type='hidden' value='$content' name='cont'>
		 <input type='submit' value='COMMENT' style='height:30px;background-color:blue;color:white;'></form></td>";
   echo "</tr>";
   echo "<br>";
 }
  
 echo "</table>";
 
 echo"</div>";
 
 }
 else
 {
 echo "<div style='margin-left:120px;margin_right:122px;color:teal;font-size:35px;'> NO BLOGs</div>";
 }
}
else
{
die (mysql_error());

}
?>
		  
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