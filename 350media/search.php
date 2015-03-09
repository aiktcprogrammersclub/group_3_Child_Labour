<?php

$state_code=$_REQUEST['state_code'];

//connect database
$con=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db("child labour",$con) or die(mysql_error()) ;  //we have created database called state_city

	$sql="select * from search where name like '%$state_code%' limit 0,4";
		$res=mysql_query($sql,$con) or die(mysql_error());
		if(mysql_num_rows($res)>0)
		{	
			//echo'<p>Please choose the City.</p>';
			//echo '<select id="cities" name="cities" onchange="show_name()">';
			while($row=mysql_fetch_assoc($res))
			{
				//echo'<option value="'.$row['city_code'].'">'.$row['city_name'].'</option>'; // <option value = "city code" > city name </option>
				
				echo "<div style='border-bottom:1px solid grey;width:200px;'><a href=".$row['link'].">".$row['name']."</a><br></div>";
				
			}
		echo '</select>';
		}
		else
		{
			echo "<option>Wrong Choice</option>";
		}

?>