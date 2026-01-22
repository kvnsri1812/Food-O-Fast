	<?php
session_start();
?>
<html>
<head>
<title>ONLINE FOOD ORDER WEBSITE</title>
	<link rel="stylesheet" type="text/css" href="nonveg.css">
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
<h1 align="center">NON-VEG</h1>
<?php 
$items=array("non_friedchickenlegs", "non_chickenshawarma", "non_chickenfriedrice", "non_breadomelette", 
	"bu_kiddychickenburger", "s_chickenlolipop", "s_chickenwings", "s_chickenpoppers", "s_chickenfingers",
	 "s_chickennoodels","s_chickentikka", "s_chillichicken", "s_frankie", "s_spicygrilledchicken", "p_chickenpizza");
$itemname=array("Fried chickenlegs", "Chicken sharwarma", "Chicken friedrice", "Bread Omelette", 
	"Kiddy chicken Burger", "Chicken lolipop", "Chicken wings", "Chicken poppers", "Chicken fingers",
	 "Chicken Noodels","Chicken tikka", "Chilli chicken", "Frankie", "Spicy grilled chicken", "Chicken pizza");
$image=array("c4.jpeg","c11.jpg","c12.jpg","pic1.jpg","b6.jpeg","c1.jpg","c2.jpg","c3.jpg","c5.png","c9.jpg","c6.jpg","c8.jpg","c10.jpg","c7.jpg","p1.jpg");
for($i=0;$i<count($items);$i++)
{
	if($i==0 || $i==3 || $i==6 || $i==9 || $i==12)
	{
?>

	<div class="nonveg">
	<?php }?>
		<div class="nonveg_products"><img src="<?php echo $image[$i];?>">
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
if($i==2 || $i==5 || $i==8 || $i==11 || $i==14 )
{
?>
</div>
<?php }
}?>

</body>
</html>