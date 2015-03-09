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

<body style='margin-left:20%;width:80%'>
<div style='width:100%'>
<?php
include "header.php";
?>
</div>
<style>
.display:hover{
border:groove 3px red;

}
</style>





<?php
mysql_connect('localhost','root','');
mysql_select_db('intern_cart');

$sql = "select * from product";
$result = mysql_query($sql);
$counter = 1;
echo "<table cellspacing='15%' cellpadding=5% border='grrove 1px'><tr>";
while($row = mysql_fetch_array($result))
{
?>


		<td>
			<div >
			<div class='img'>
				
				<img src='<?php echo $row['pimg'];?>' height='150px' width='200px' class='display' >
				<a href='descp.php?id=<?php echo $row['p_id'];?>'><?php echo $row['p_name'];?></a>
			</div>
		
			
			
			</div>
		</td>


<?php
if($counter == 4)
{
echo "</tr><tr>";
$counter = 0;
}
$counter++;
}
?>
</table>
</body>