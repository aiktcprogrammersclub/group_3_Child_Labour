<script>
function rem(id)
{
window.location='remove.php?id='+id;
}
</script>
<div style='width:60%;margin-left:18%'>
<?php
include "header.php";
$cost=0;
$id = $_SESSION['id'];
?>
<div style='min-height:100%;overflow:auto;border:groove 1px;width:100%'>
<?php 
mysql_connect('localhost','root','');
mysql_select_db('intern_cart');
$sql="select a.*, b.* from product a, cart b where b.user_id='$id' and b.prod_id = a.p_id";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result))
{
?>

<div style='clear:both;float:left'>
<img src='<?php echo $row['pimg']; ?>' style='padding:5%' height='300px' width='300px'></div>
<div style='margin-left:5%;padding:10%'>
Model : <span style='color:#b40404;font-size:110%;font-family:cursive'><?php echo $row['p_name']; ?></span><br><br>
Description : <span style='font-family:cursive'><?php echo $row['pdesc']; ?></span><br><br>
Product Type / Brand : <span style='font-family:cursive'><?php echo $row['p_type']." / ".$row['brand']; ?></span><br><br>
Cost : <span style='font-family:cursive'> Rs. <?php echo $row['cost']; ?> /-</span><br><br>
<input type='button' name='rem' id='rem' style='float:right' value='Remove from Cart' onclick="rem('<?php echo $row['id'];?>')">
</div>

<?php
 $cost=$cost+$row['cost'];
}
?>
<div style='float:right;border:solid 1px;margin:5%;width:50%;height:7%;padding:2%' > 
<?php
if($cost==0)
{
echo "Please Add Products into your cart to proceed to payment.";
}
else
{
?>
<form action='online_pay.php' method='post' >
Total Bill: <font style='font-family:cursive'><?php echo "Rs. ".$cost." /-"?></font>
<input type='submit' value='Proceed To Payment &gt;&gt;' style='margin-left:10%'></div>
</form>
<?php
}
?>
</div>
</div>

</div>