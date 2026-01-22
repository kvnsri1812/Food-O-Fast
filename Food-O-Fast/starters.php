<?php
session_start();
?>
<html>
<head>
<title>FOOD-O-FAST</title>
	<link rel="stylesheet" type="text/css" href="starters.css">
	<link rel="stylesheet" href="home.css">
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
<h1 align="center">STARTERS</h1>
<?php 
$items=array("s_chickenlolipop", "s_chickenwings", "s_chickenpoppers", "s_chickenfingers", "s_italianrolles", "s_chickennoodels",
					"s_chickentikka", "s_chillichicken", "s_frankie", "s_spicygrilledchicken", "s_somosa", "s_momos");
$itemname=array("Chicken lolipop", "Chicken wings", "Chicken poppers", "Chicken fingers", "Italian rolles", "Chicken Noodels",
					"Chicken tikka", "Chilli chicken", "Frankie", "Spicy grilled chicken", "Samosa", "Momos");
$image=array("c1.jpg","c2.jpg","c3.jpg","c5.png","pic18.jpeg","c9.jpg",
"c6.jpg","c8.jpg","c10.jpg","c7.jpg","pic12.jpg","pic10.png");
for($i=0;$i<count($items);$i++)
{
	if($i==0 || $i==3 || $i==6 || $i==9)
	{
?>

	<div class="STARTERS">
	<?php }?>
		<div class="starters_products"><img src="<?php echo $image[$i];?>">
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
if($i==2 || $i==5 || $i==8 || $i==11)
{
?>
</div>
<?php }
}?>

</body>
</html>