<?php 
require 'connection.php';
?>
<html>
<head>
<title>ONLINE FOOD ORDER WEBSITE</title>
	<link rel="stylesheet" type="text/css" href="menu.css">
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
<br><br><br><br>
<h1 align="center">MENU</h1>
<?php 
$i=0;
$j=0;
$items=array("bhelpuri", "veg_vadapav", "veg_pavbaji", "veg_friedrice", "veg_onionbaji", "veg_frenchfries", 
					"veg_noodles", "veg_banabaji", "veg_mirchibaji", "veg_chilligarlicpops", "veg_cornchestnutballs", 
					"veg_deepfiredballs", "veg_vegfriedvegitableballs", "veg_paneerpopcorn", "non_friedchickenlegs", 
					"non_chickenshawarma", "non_chickenfriedrice", "non_breadomelette", "bu_vegburger", "bu_roastedvegburger", 
					"bu_chilliburger", "bu_veggieburger", "bu_redrobinveggieburger", "bu_angusburger", "bu_kiddychickenburger", 
					"s_chickenlolipop", "s_chickenwings", "s_chickenpoppers", "s_chickenfingers", "s_italianrolles", "s_chickennoodels",
					"s_chickentikka", "s_chillichicken", "s_frankie", "s_spicygrilledchicken", "s_somosa", "s_momos", "p_chickenpizza", 
					"p_vegpizza", "p_mixvegpizza", "p_mushroomhawaiianpiza", "p_paneerpizza", "p_pepperonipizza", "p_chocolatepizza", 
					"p_pineapple_and_chocopizza", "p_roastedvegpizza", "p_smoreschocolatepizza", "p_vegcheesepizza", "p_cheesebreadpizza",
					"p_crowncrustpizza");
$itemname=array("Bhelpuri", "Vadapav", "Pav baji", "Fried rice", "Onion Baji", "French fries", 
					"Noodles", "Banana Bajji", "Mirchi Bajji", "Chilli Garlicpops", "Corn chestnut Balls", 
					"Deepfried balls", "Fried Vegitable balls", "Paneer popcorn", "Fried chicken legs", 
					"Chicken Sharwarma", "Chicken Friedrice", "Bread Omelette", "Veg Burger", "Roasted Veg burger", 
					"Chilli Burger", "Veggie burger", "Redrobin Veggieburger", "Angus Burger", "Kiddy chicken burger", 
					"chicken Lolipop", "chicken Wings", "chicken Poppers", "chicken Fingers", "italian Rolles", "Chicken Noodels",
					"Chicken tikka", "Chilli chicken", "Frankie", "Spicy grilled chicken", "Somosa", "Momos", "Chicken pizza", 
					"Veg pizza", "Mix Veg pizza", "Mushroom hawaiian pizza", "Paneer Pizza", "Pepperoni pizza", "Chocolate pizza", 
					"Pineapple & Chocopizza", "Roasted Vegpizza", "Smores chocolatepizza", "Veg Cheesepizza", "Cheese Breadpizza",
					"Crowncrust pizza");
$image=array("pic6.jpg","pic2.jpg","pic3.jpg","pic5.jpg","pic4.jpg","pic7.jpg",
"pic8.jpg","pic9.jpg","pic11.jpg","pic13.png","pic14.jpg","pic15.jpeg","pic16.jpeg",
"pic17.jpeg","c4.jpeg","c11.jpg","c12.jpg","pic1.jpg","b1.jpg","b2.jpg","b3.jpg","b4.png",
"b5.jpg","b7.jpeg","b6.jpeg","c1.jpg","c2.jpg","c3.jpg","c5.png","pic18.jpeg","c9.jpg",
"c6.jpg","c8.jpg","c10.jpg","c7.jpg","pic12.jpg","pic10.png","p1.jpg","p2.jpg","p3.jpg",
"p4.jpeg","p5.jpg","p6.jpeg","p7.jpeg","p8.jpeg","p9.jpeg","p10.jpeg","p12.jpg","p13.jpeg","p14.jpeg");
for($i=0,$j=0;$i<count($items);$i++,$j++)
{
	
   if($j==0 || $j==3 || $j==6 || $j==9 || $j==12 || $j==15 || $j==18 || $j==21 || $j==24 || $j==27 || $j==30 || $j==33 || $j==36 || $j==39 || $j==42 || $j==45 || $j==48)
   {
       
?>
    <div class="menu">
   <?php }?>
		<div class="menu_products"><img src="<?php echo $image[$i];?>">
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
				<input type="number" id="quantity" name="quantity" min="0" max="5" value="<?php echo  $_SESSION[$items[$i]];?>">
				</p>
			</div>
			<div class="btn">
			<input type="hidden"  name="item" value="<?php echo $items[$i];?>">
			<input type="submit" value="Add to My Orders">
			</div>
			</form>
		</div>
	<?php if($j==2 || $j==5 || $j==8 || $j==11 || $j==14 || $j==17 || $j==20 || $j==23 || $j==26 || $j==29 || $j==32 || $j==35 || $j==38 || $j==41 || $j==44 || $j==47 || $j==50)
	{
		?> 
    </div>
	<?php 
	}
	?>	
<?php 

}
?>	
</body>
</html>