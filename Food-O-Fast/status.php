<?php 
require 'connection.php';
?>
<html>
<head>
<title>ONLINE FOOD OREDR WEBSITE</title>
<link rel="stylesheet" href="list.css">
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

	   </li></ul></div>
	   <br><br><br><br>
<center><h1>ORDER STATUS</h1><br><table border="1" style=width:95%;>
  <tr>
                
			    <th>Date and Time</th>
                <th>Name</th>
				<th>Phone Number</th>
				<th>Items</th>
				<th>Quantity</th>
				<th>Total Cost</th>
				<th>Order Status</th>
 </tr>
  <?php 
  $email=$_SESSION['email'];
  $sql = "SELECT * FROM status WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
  
  ?>
  <tr>
             
			 <td><center><?php echo $row['datetime'];?></center></td>
			 <td><center><?php echo $row['name'];?></center></td>
			 <td><center><?php echo $row['phone'];?></center></td>
			 <td><center><?php echo $row['items'];?></center></td>
			 <td><center><?php echo $row['quantity'];?></center></td>
			 <td><center><?php echo $row['cost'];?></center></td>
			 <?php if($row['track']==1){?>
			 <td><center>In progress</center></td>
			 <?php }elseif($row['track']==0){?>
			 <td><center>Ready to pick</center></td>
			 <?php }else{?>
			 <td><center>Order Cancelled</center></td>
<?php }?>
</tr>
<?php }}?>
</center></table>
<br><br><br>

</body>
</html>