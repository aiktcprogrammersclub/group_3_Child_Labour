<!DOCTYPE html>
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
<script>

function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","search.php?state_code="+str,true);
  xmlhttp.send();
}


</script>

</head>
<body>
<div class="page-content" >
  
    <div class="columns twelve large-12" >
	 
	 <div style="background-color:white;margin-left:157px;margin-right:157px;height:320px;">
	 <div class="searchimg" style="float:right;width:350px;background-color:white;margin-right:200px;margin-top:20px;">
	   
	    
		<img src="Search.jpg" style=" width:20px;margin-left:100px;">
		<form style="float:right;">
		<input  style="height:30px; width:200px;float:right;margin-right:0px;" type="text" class="input" placeholder="Search " onkeyup="showResult(this.value)" autofocus>
		<div id="livesearch"></div>
		</form>
       <div style="float:right;width:160px;margin-top:40px;margin-left:250px;">
	   <a href="logout.php">LOGOUT</a>
	    
	  </div>
	  <div style="float:right;width:160px;margin-top:50px;margin-left:200px;">
			<?php
				if($_SESSION['uname']=="ADMIN"){
				echo "<button style='background-color:blue'><a style='color:white;' href='admin.php'>Admin home</a></button>";
				}
				else{echo"<button style='background-color:blue'><a style='color:white;' href='blog.php'>VIEW  BLOGS</a></button>";
				}?>
				</div>
       	
	   </div>
	   
	   
	  <div  style="width:250px ;height:250px;margin-left:100px;margin-bottom:0px;">
        <a href="index.html"><img src="images/stand.jpg" alt=""></a><b style="padding-left:10px;padding-right:50px;font-size:30px">StandForLives</b> </div>
      
	  
      <div class="row top-menu">
        <div class="columns twelve large-12 plr0 top-nav" style="margin-bottom:100px">
          <nav>
            <section>
              <ul class="sf-menu twelve large-12">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="donate.php">Donate</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li class="has-dropdown"><a href="#">Child Labour</a>
                  <ul class="dropdown">
                    <li class="has-dropdown"><a href="acts.php">ChildLabour Acts and Laws</a>
                      <ul class="dropdown">
                        <li><a href="Paction.php">Prevention and Actions</a></li>
                        
                      </ul>
                    </li>
                    <li><a href="causes.php">Causes</a></li>
					 <li><a href="consequences.php">Consequences</a></li>
                    
                  </ul>
                </li>
                <li><a href="contact.php">Contact Us</a></li>
		      </ul>
            </section>
          </nav>
        
      </div>
      
    
       </div>
