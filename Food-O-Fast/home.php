<?php
require 'connection.php';
if($_SESSION['email']){	

}else{
	header("Location:index.php");
}
?>
<html>
<head>
<title>ONLINE FOOD OREDR WEBSITE</title>
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="slider.css">
<style>
body{
background-color:#e3e39c;}
h1{
   font-size:60px;
   text-align: center;
   font-style:italic;}
h2{
    font-size:40px;
	text-align: center;}
</style>
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
<li><a href="contact.html">CONTACT US</a></li>
<li><a href="logout.php">LOGOUT</a></li>
    </div><br><br><br><br><h1>The True Taste Of <br>FastFoods</h1>
	   <br><h2>An experience that awakens all the senses</h2><br>
	   <div id="outerbox">
    <div id="sliderbox">
	  <img src="H2.jpg" height="566" width="1145px">
	  <img src="H3.jpg" height="566" width="1145px">
	  <img src="H4.jpg" height="566" width="1145px">
	  <img src="H5.jpg" height="566" width="1145px">
	</div>
</div>
<br>
<font size="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fast food refers to food that can be prepared and served quickly. It can come from many places: sit-down restaurants, counter service, take-out, drive-thru, and delivery. Fast 
food is popular because the food is inexpensive, convenient, and tastes good. However, fast food is often made with cheaper ingredients such as high fat meat, refined grains, and 
added sugar and fats, instead of nutritious ingredients such as lean proteins, whole grains, fresh fruits, and vegetables. Fast food is also high in sodium (aka salt) which is used 
as a preservative and makes food more flavorful and satisfying.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A fast food restaurant, also known as a quick service restaurant (QSR) within the industry, is a specific type of restaurant that serves fast food cuisine and has minimal table 
service. The food served in fast food restaurants is typically part of a "meat-sweet diet", offered from a limited menu, cooked in bulk in advance and kept hot, finished and 
packaged to order, and usually available for take away, though seating may be provided. Fast food restaurants are typically part of a restaurant chain or franchise operation that 
provides standardized ingredients and/or partially prepared foods and supplies to each restaurant through controlled supply channels. The term "fast food" was recognized in a 
dictionary by Merriam–Webster in 1951.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The fastest form of "fast food" consists of pre-cooked meals kept in readiness for a customer's arrival (Boston Market rotisserie chicken, Little Caesars pizza, etc.), with waiting 
time reduced to mere seconds. Other fast food outlets, primarily the hamburger outlets (McDonald's, Burger King, etc.) use mass-produced pre-prepared ingredients (bagged buns and 
condiments, frozen beef patties, vegetables which are prewashed, pre-sliced, or both; etc.) but the hamburgers and french fries are always cooked fresh (or at least relatively 
recently) and assembled "to order" (like at a diner).<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Although a vast variety of food can be "cooked fast", "fast food" is a commercial term limited to food sold in a restaurant or store with frozen, preheated or precooked 
ingredients, and served to the customer in a packaged form for take-out/take-away.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fast food restaurants are traditionally distinguished by their ability to serve food via a drive-through. Outlets may be stands or kiosks, which may provide no shelter or 
seating,or fast food restaurants (also known as quick service restaurants).<br><br>
<h2><center>Instructions:</center></h2>
<center>
<table border="0">
<tr>
<td><font size="5"><h3>STEP-1:&nbsp;</h3></font></td>
<td><font size="5">Click on MENU </font></td>
</tr>
<tr>
<td><font size="5"><h3>STEP-2:&nbsp;</h3></font></td>
<td><font size="5">Set the quantity of the item you want</font></td>
</tr>
<tr>
<td><font size="5"><h3>STEP-3:&nbsp;</h3></font></td>
<td><font size="5">Add your preffered items to my orders</font></td>
</tr>
<tr>
<td><font size="5"><h3>STEP-4:&nbsp;</h3></font></td>
<td><font size="5">Click on Next </font></td>
</tr>
<tr>
<td><font size="5"><h3>STEP-5:&nbsp;</h3></font></td>
<td><font size="5">Enter the required details </font></td>
</tr>
<tr>
<td><font size="5"><h3>STEP-6:&nbsp;</h3></font></td>
<td><font size="5">Click on CONFIRM</font></td>
</tr>
<tr>
<td><font size="5"><h3>STEP-7:&nbsp;</h3></font></td>
<td><font size="5">Check the status of the item that you have ordered</font></td>
</tr>
</table>
</center>
<br><br>
</body>
</html>