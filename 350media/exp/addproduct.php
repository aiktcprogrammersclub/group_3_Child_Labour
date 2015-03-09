
<script src="jquery.min.js"></script>
<script>
	$(document).ready(function(){
	$("#ptype").change(function(){
	var p=document.getElementById('ptype').value;
	$.ajax({
	type:"post",
	url:"brand.php",
	data:"value="+p,
	success:function(response){
	$("#brand").html(response);
	}
	});
		});
	});
</script>
<body style='margin-left:18%;width:60%'>
<div >
<?php
include "header.php";
?>
</div>
</br>
<hr style="clear:both; margin:auto;width:80%;">
<center style='font-size:150%'>Admin Panel</center>
<hr style="clear:both; margin:auto;width:80%;">
</br>


<div style=" border:1px solid black; width:100%; border-radius:10px;">
<center>
<form action="addproduct_action.php" method="post" enctype="multipart/form-data">
<table>
<tr><td>Product name</td><td><input type="text" name="pname"></td></tr>
<tr><td>city name</td><td><input type="text" name="cname"></td></tr>
<tr><td>Product type</td><td><select id="ptype" name="ptype">
<option value='hidden'></option>
<option value="camera">camera</option>
<option value="mobile">Mobile</option>
<option value="laptop">laptop</option>
<option value="software">software</option>
<option value="tablets">tablets</option>
<option value="games">games</option>
<option value="audio">audio & video</option>
</select>
</td></tr>
<tr><td>Brand type</td><td id='brand'><select id="brand" name="btype">

</select>
</td></tr>
<tr><td>upload image</td><td><input type="file" name="file"></td></tr>
<tr><td>Product desc</td><td><input type="text" name="desc"></td></tr>
<tr><td>cost</td><td><input type="number" name="cost"></td></tr>
<tr><td><input type="submit" value="Add product"></td><td><input type="reset" value="reset"></td></tr>
</form>
</center>

</div>
</body>



