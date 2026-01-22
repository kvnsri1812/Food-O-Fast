<?php
session_start();
?>

<html>
<head>
<title>FOOD-O-FAST</title>
	<link rel="stylesheet" type="text/css" href="home.css">
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
<h1 align="center">VEG</h1>
<?php 
$items=array("bhelpuri", "veg_vadapav", "veg_friedrice", "veg_pavbaji", "veg_onionbaji", "veg_frenchfries", 
					"veg_noodles", "veg_banabaji", "veg_mirchibaji", "veg_chilligarlicpops", "veg_cornchestnutballs", 
					"veg_deepfiredballs", "veg_vegfriedvegitableballs", "veg_paneerpopcorn", "bu_vegburger", "bu_roastedvegburger",  
				"s_italianrolles","s_somosa", "s_momos", "p_vegpizza", "p_mixvegpizza");
$itemname=array("Bhelpuri", "Vadapav", "Friedrice", "Pavbaji", "Onionbajji", "French fries", 
					"Noodles", "Banana bajji", "Mirchi bajji", "Chilli garlicpops", "Corn chestnut Balls", 
					"Deep firedballs", "Veg fried vegitableballs", "Paneer popcorn", "Vegburger", "Roasted Vegburger",  
				"Italian Rolles","Samosa", "Momos", "Vegpizza", "Mix Vegpizza");
$images=array("pic6.jpg","pic2.jpg","pic5.jpg","pic3.jpg","pic4.jpg","pic7.jpg","pic8.jpg","pic9.jpg","pic11.jpg","pic13.png","pic14.jpg","pic15.jpeg","pic16.jpeg","pic17.jpeg","b1.jpg","b2.jpg",
"pic18.jpeg","pic12.jpg","pic10.png","p2.jpg","p3.jpg");
for($i=0;$i<count($items);$i++)
{
	if($i==0 || $i==3 || $i==6 || $i==9 || $i==12 || $i==15 || $i==18)
	{
?>
<div class="veg">
	<?php }?>
	<div class="veg_products"><img src="<?php echo $images[$i];?>">
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
if($i==2 || $i==5 || $i==8 || $i==11 || $i==14 || $i==17 || $i==20)
{
?>
</div>
<?php }
}?>

</body>
</html>