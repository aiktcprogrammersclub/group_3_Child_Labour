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
<div class="columns twelve large-12 content wrapper" style="border:1px solid black;">
<div style="float:right;margin-right:20px; width:45%;height:350px;background-color:f8f888">
<h2><u>Children's Stories</u></h2>
<div style="float:right;width:250px; ">
<b>At the age of five, Manju was already working on the rug looms. While she has since been found and freed from carpet work, some 250,000 children throughout South Asia still toil in obscurity. Through GoodWeave nearly 3,600 kids like Manju have been rescued, rehabilitated and educated, and thousands more deterred from entering the workforce.</b> 
</div>
<img src="manju.jpg">

<div style="float:right;margin-top:20px; width:45%;font-size:1em;">
<b style="font-size:20px;font-family:italic;"><a href="donate.php">HELP Manju</a></b></div>

</div>
<div style="width:50%;">
<h2>Child Labor and Human Trafficking Laws</h2>
<b>Child labor is a crime prosecutable under national and international laws. Nonetheless, enforcement is elusive, particularly in an industry where the supply chain is fragmented and human trafficking and child labor is often hidden, which is why GoodWeave's innovative market-based model works to end child labor in the South Asian handmade carpet industry.

Following is a list of laws crafted to eliminate the practice of child labor.<br><br>

<h3>INTERNATIONAL CONVENTIONS PROHIBITING CHILD LABOR AND SETTING AGE STANDARDS</h3>
<h4 style="font-size:15px;">Minimum Age Convention 138 (C138), 1973

</h4>

<b>Adopted by the International Labour Organization (ILO) in 1973, C138 binds ratifying countries to pursue a national policy for the abolition of child labor and to progressively raise the minimum age for employment or work to</b></div><b>
 a level consistent with the fullest physical and mental development of young persons. This minimum age should be 15 years, or the age reached by the completion of compulsory schooling. According to the convention, the minimum age for work that is likely to jeopardize the health, safety or morals of young persons is 18. To date, 144 countries have ratified C138, including Nepal in 1997. India and Pakistan are yet to ratify Convention 138.

</b><br><br>
<h4 style="font-size:15px;">Convention on the Rights of the Child (CRC), 1989</h4>
<b>The Convention on the Rights of the Child is the first legally binding international instrument to incorporate the full range of human rights for children, including civil and political rights as well as economic, social and cultural. Article 32 states that children have the right to be protected from economic exploitation and from performing any work that is likely to be hazardous or to interfere with the child's education, or to be harmful to the child's health or physical, mental, spiritual, moral or social development. The Convention is the most universally accepted human rights instrument in history and has been ratified by 192 countries––every country in the world except two, the United States and Somalia.</b><br><br>
<h4 style="font-size:15px;">Worst Forms of Child Labour Convention 182 (C182), 1999</h4>
<b>On June 17, 1999, the ILO adopted Convention 182, which calls for immediate and effective measures to prohibit and eliminate the worst forms of child labor. “Child” applies to all persons under the age of 18. “The worst forms of child labor” refers to child slavery, forced labor, trafficking, debt bondage, serfdom, prostitution, pornography and forms of work that harm the health, safety or morals of children. To date, 160 countries have ratified ILO Convention 182, including Nepal in 2002. India is yet to ratify Convention 182.</b>


</b>
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
    </div></div>
  </footer>
  <div class="row footer-theme-credits">
    <p>Design by: <a href="http://topwebsitetemplates.org">topwebsitetemplates.org</a></p>
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
</body>