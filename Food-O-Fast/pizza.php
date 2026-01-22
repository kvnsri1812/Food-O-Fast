<?php
session_start();
?>
<html>
<head>
<title>ONLINE FOOD ORDER WEBSITE</title>
	<link rel="stylesheet" type="text/css" href="pizza.css">
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
<h1 align="center">PIZZA</h1>
<?php 
$items=array("p_chickenpizza", "p_vegpizza", "p_mixvegpizza", "p_mushroomhawaiianpiza", "p_paneerpizza", "p_pepperonipizza", 
"p_chocolatepizza","p_pineapple_and_chocopizza", "p_roastedvegpizza", "p_smoreschocolatepizza", "p_vegcheesepizza", "p_cheesebreadpizza",
					"p_crowncrustpizza");
$itemname=array("Chicken pizza", "Veg pizza", "Mix Veg pizza", "Mushroom Hawaian piza", "Paneer pizza", "Pepperoni pizza", 
"Chocolate pizza","Pineapple & Chocopizza", "Roasted veg pizza", "Smores chocolate pizza", "Veg cheese pizza", "Cheese bread pizza",
					"Crowncrust pizza");
$image=array("p1.jpg","p2.jpg","p3.jpg",
"p4.jpeg","p5.jpg","p6.jpeg","p7.jpeg","p8.jpeg","p9.jpeg","p10.jpeg","p12.jpg","p13.jpeg","p14.jpeg");
for($i=0;$i<count($items);$i++)
{
	if($i==0 || $i==3 || $i==6 || $i==9 || $i==12)
	{
?>

	<div class="PIZZA">
	<?php }?>
		<div class="pizza_products"><img src="<?php echo $image[$i];?>">
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