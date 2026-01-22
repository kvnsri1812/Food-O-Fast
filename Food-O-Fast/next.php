<?php 
require 'connection.php';
//$email=$_SESSION['email'];
//$sql = "SELECT * FROM itmes WHERE email='$email'";
//$result = mysqli_query($conn, $sql);
//$cost=0;

//if (mysqli_num_rows($result) > 0) {
  // output data of each row
  //while($row = mysqli_fetch_assoc($result)) {
    
  //}
//} 

//mysqli_close($conn);
?>




<html>
<head>
<title>ONLINE FOOD OREDR WEBSITE</title>
<link rel="stylesheet" href="list.css">
<style>
#details{
  font-family: sans-serif;
  font-size:19px;
  border-collapse: collapse;
  width: 57%;
  height:36%;
  text-align:center;
}
#details td{
  border: 1px solid;
  padding: 8px;
  width: 37%;
}
#details tr:nth-child(even){background-color: #f2f2f2;}
.btn {
  border: 2px solid black;
  background-color: cement;
  border-radius: 5px;
  color: black;
  padding: 14px 28px;
  font-size: 18px;
  cursor: pointer;
}
.conform{
  border-color: #04AA6D;
  color: green;
}
.conform:hover {
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
.text{
  width: 100%;
  height:115%;
  font-size:18px;}
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

<br><br><br><br><br><br><center><table id="details">
  <center><tr>
  <form action="confirm.php" method="POST">
    <td>Name</td>
    <td><abbr title="Please Enter full name"><input type="text" class="text" name="name" value="<?php echo $_SESSION['name'];?>"></abbr></td>
  </tr></center>
  <tr>
    <td>Phone Number</td>
    <td><input type="text" class="text" name="phone" required maxlength="10" value="<?php echo $_SESSION['phone'];?>"><?php echo $_SESSION['phone'];?></td>
  </tr>
  <tr>
   <td>Total No.of Items</td>
    <td><input type="hidden" name="quantity" value="<?php echo $_SESSION['quantity'];?>"><?php echo $_SESSION['quantity'];?></td>
  </tr>
  <tr>
    <td>List of Item Names</td>
    <td><input type="hidden" name="items" value="<?php echo $_SESSION['items'];?>"><?php echo $_SESSION['items'];?></td>
  </tr>
  <tr>
    <td>Total Price</td>
    <td><input type="hidden" name="cost" value="<?php echo $_SESSION['cost'];?>"><?php echo $_SESSION['cost'];?></td>
  </tr>
  </table><br><br><br><br>
  <button class="btn conform" type="submit">Confirm</button>
  </form>
  <a href="myorders.php"><button class="btn previous">Previous</button></a></center>
  
</body>
</html>
