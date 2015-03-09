<script src='jquery.min.js'></script>
<script>
	function reg()
	{
		$('#reg').show();
		$('#log').hide();
	}
	
	function log()
	{
		$('#log').show();
		$('#reg').hide();
	}
	
	function login(code)
	{
		$('#reg').hide();
		$('#log').hide();
		if(code == '1' )
		{
		
		var uname = $('#uname').val();
		var mail = $('#mail').val();
		var pass = $('#pass').val();
		var http = new XMLHttpRequest();
		http.open("GET","log.php?uname="+uname+"&pass="+pass+"&mail="+mail,true);
		
		}
		
		else if(code == '2')
		{
				
		var uname = $('#log_uname').val();
		var pass = $('#log_pass').val();
		var http = new XMLHttpRequest();
		http.open("GET","log.php?uname="+uname+"&pass="+pass,true);
		}
		http.send();

		http.onreadystatechange = function()
		{
		if (http.readyState == 4)
		{
		if ( http.responseText=='yes')
		{
		alert(" logged in successfully...");
		if(uname=='admin')
		{
			window.location="addproduct.php";
		}
		else
		{
			location.reload();
		}
		}
		
		else if ( http.responseText=='fail')
		{
		alert(" username already exists!");
		}

		else if (http.responseText=='no')
		{
		alert("username or password is incorrect.");
		}
		else
		{
		alert(http.responseText);
		}
		}
		}

	}
</script>

<script>

function cart(id)
{


var http = new XMLHttpRequest();
http.open("GET","addtocart.php?id="+id,true);

http.send();

http.onreadystatechange = function()
{
if (http.readyState == 4)
{
if ( http.responseText=='1')
{
alert("You must login first...");
}

else
{
	$('#cart').hide();
	$('#added').show();
}


}
}
}
</script>

<body style='margin-left:18%;width:60%;border:groove 2px'>
<?php
include "header.php";
$id=$_REQUEST['id'];
mysql_connect('localhost','root','');
mysql_select_db('intern_cart');

$sql = "select * from product where p_id='$id'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

?>

<div style='float:left'>
	<img src='<?php echo $row['pimg']; ?>' style='padding:5%' height='300px' width='300px'>
</div>

<div style='float:left;margin-left:5%;padding:10%'>
Model : <span style='color:#b40404;font-size:110%;font-family:cursive'><?php echo $row['p_name']; ?></span><br><br>
Description : <span style='font-family:cursive'><?php echo $row['pdesc']; ?></span><br><br>
Product Type / Brand : <span style='font-family:cursive'><?php echo $row['p_type']." / ".$row['brand']; ?></span><br><br>
Cost : <span style='font-family:cursive'> Rs. <?php echo $row['cost']; ?> /-</span><br><br>
</div>

<center><input type='Button' name='cart' id='cart' value='Add To Cart' style="height:60px;width:200px;background-color:#08452A;border-radius:30px;color:#D8D8D8;font-weight:bolder;font-size:18px;cursor:pointer;background:-webkit-linear-gradient(top,#d84565,#080540,#080451);margin-left:100px;box-shadow:1px;float:left" onclick="cart(<?php echo $row['p_id']?>)">

<div id='added' style="height:40px;display:none;margin-top:50%;width:200px;background-color:#08452A;border-radius:30px;color:#D8D8D8;font-weight:bolder;font-size:18px;cursor:pointer;background:-webkit-linear-gradient(top,#d84565,#080540,#080451);margin-left:100px;padding-top:13px">Added To Your Cart</div>
</center>
</body>