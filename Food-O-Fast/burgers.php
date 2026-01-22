<?php
session_start();
?>
<html>
<head>
<title>ONLINE FOOD ORDER WEBSITE</title>
	<link rel="stylesheet" type="text/css" href="burgers.css">
	<link rel="stylesheet" href="list1.css">
	<link rel="stylesheet" href="
	https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="menu">
<ul>
<li><a href="home.php">HOME</a></li>
<li><a href="menu.php">MENU</a>
	<ul>
	   <li><a href="veg.php">VEG</a></li>
	   <li><a href="nonveg.php">NON VEG</a></li>
	   <li><a href="pizza.php">PIZZA</a></li>
	   <li><a href="starters.php">STARTERS</a></li>
	   <li><a href="burgers.php">BURGERS</a></li>
	     </ul></li>
<li><a href="myorders.php">MY ORDERS</a></li>
<li><a href="contact.html">CONTACT US</a></li></ul>
<br><br><br>
<h1 align="center">BURGERS</h1>
<?php 
$items=array("bu_vegburger", "bu_roastedvegburger", 
					"bu_chilliburger", "bu_veggieburger", "bu_redrobinveggieburger", "bu_angusburger", "bu_kiddychickenburger");
$itemname=array("Veg burger", "Roasted Veg burger", 
					"Chilli burger", "Veggie burger", "Redrobin Veggie burger", "Angus burger", "Kiddy Chicken burger");
$image=array("b1.jpg","b2.jpg","b3.jpg","b4.png",
"b5.jpg","b7.jpeg","b6.jpeg");
for($i=0;$i<count($items);$i++)
{
	if($i==0 || $i==3 || $i==6)
	{
?>

	<div class="BURGERS">
	<?php }?>
		<div class="burgers_products"><img src="<?php echo $image[$i];?>">
			<div class="starr">
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star "></span>
			<span class="fa fa-star "></span>
			</div>
			<form action="addcart.php" method="POST">
			<div class="title">
				<p><?php echo $itemname[$i];?>  <b>INR 90/-</b>
				<input type="number" id="quantity" name="quantity" min="0" max="5" value="<?php echo  $_SESSION[$items[$i]]?>">
				</p>
			</div>
			<div class="btn">
			<input type="hidden"  name="item" value="<?php echo $items[$i];?>">
			<input type="submit" value="Add to My Orders">
			</div>
			</form>
		</div>
		
	<?php 
if($i==2 || $i==5)
{
?>
</div>
<?php }
}?>

</body>
</html>