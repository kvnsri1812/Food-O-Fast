<?php 
require 'connection.php';
$email=$_SESSION['email'];
$sql = "SELECT * FROM itmes WHERE email='$email'";
$result = mysqli_query($conn, $sql);
 $cost=0;
$quantity=0;
?>

<html>
<head>
<title>ONLINE FOOD OREDR WEBSITE</title>
<link rel="stylesheet" href="myorders.css">
<style>
.btn {
  border: 2px solid black;
  background-color: cement;
  border-radius: 5px;
  color: black;
  padding: 14px 28px;
  font-size: 18px;
  cursor: pointer;
}
.next{
  border-color: #04AA6D;
  color: green;
}

.next:hover {
  background-color: #04AA6D;
  color: white;
}
.previous{
  border-color: #04AA6D;
  color: green;
}
.previous:hover {
  background-color: #04AA6D;
  color: white;
}
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
<li><a href="contact.html">CONTACT US</a>
<li><a href="status.php">STATUS</a>
	   </li></ul></div>
	   <br><br><br><br><br><br>
<center><table border="1" height="10%" style=width:50%;>
  <tr>
				
                <th>Item</th>
                <th>Quantity</th>
				<th>Amount</th>
 </tr>
  <?php   
             $_SESSION['quantity']=0;
			 $_SESSION['cost']=0;
			 $_SESSION['items']=" ";
                while($rows=$result->fetch_assoc())
                {
					
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
					for($i=0;$i<count($items);$i++)
					{
					if($rows[$items[$i]]>0)
					{
					
					
             ?> 
			   <tr>
			   <td><center><?php echo $items[$i];?></center></td>
              <td><center><?php echo $rows[$items[$i]];?></center></td>
			  <td><center><?php echo $rows[$items[$i]]*90;?></center></td>
            </tr>
			
            <?php
			$_SESSION['quantity']=$rows[$items[$i]]+$_SESSION['quantity'];
			$_SESSION['cost']=$rows[$items[$i]]*90+$_SESSION['cost'];
			$_SESSION['items']=$items[$i]." ".$rows[$items[$i]].",".$_SESSION['items'];
					}
					
					}
                }
             ?>
</center></table>
<br><br><br>
<a href="menu.php"><button class="btn previous" >Add More</button></a>
<a href="next.php"><button class="btn next">Next</button>
</head>
</html>