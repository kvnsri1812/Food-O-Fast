<?php
require 'connection.php'; 
$sql = "SELECT * FROM status ORDER BY track DESC";
$result = mysqli_query($conn, $sql);
if(!isset($_SESSION)){
session_start();
}
if($_SESSION['email']){
	
}else{
	header("Location:index.php");
}


?>

<html>
<button><a href="logout.php">logout</a></button>
<head><title>ONLINE FOOD ORDER WEBSITE</title>
<link rel="stylesheet" href="admin.css">
</head>
<body>
<center>
<table id="orders" class="center">
  <caption><h2>ORDERS ON WAITING LIST</h2></caption>
  <tr>
    <th>CUSTOMER_ID</th>
	<th>DATETIME</th>
    <th>CUSTOMER_NAME</th>
	<th>PHONE_NO</th>
    <th>ITEM_NAME</th>
	<th>QUANTITY</th>
	<th>PRICE</th>
	<th colspan="2"><center>ACTION</center></th>
	<th>PERFORMED</th>
  </tr>
  <?php
 while($row = mysqli_fetch_assoc($result)) {
 
  ?>
  <tr>
    <td><?php echo $row['id'];?></td>
	<td><?php echo $row['datetime'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['phone'];?></td>
	<td><?php echo $row['items'];?></td>
	<td><?php echo $row['quantity'];?></td>
	<td><?php echo $row['cost'];?></td>
	
	<?php if($row['track']==1){ 
	
	?>
	<td><div class="btn2">
	<form action="track.php" method="POST">
	         <input type="hidden" name="up" value="disapprove" >
	         <input type="hidden" name="id" value="<?php echo $row['id'];?>" >
			  <input type="hidden" name="email" value="<?php echo $row['email'];?>" >
			<input type="submit" name="a" value="Disapprove">
			</form>
			</div></td>
	<?php }else{?>
	<td><div class="btn4">
			<input type="button" value="Disapprove" disabled>
			</div></td>
	<?php }?>
	
	<?php if($row['track']!=0 && $row['track']!=-1){?>
	<td><div class="btn3">
	<form action="track.php" method="POST">
	        <input type="hidden" name="up" value="prepared" >
	        <input type="hidden" name="id" value="<?php echo $row['id'];?>" >
			  <input type="hidden" name="email" value="<?php echo $row['email'];?>" >
			<input type="submit" name="a" value="Prepared">
			</form>
			</div></td>
  
	<?php }else{?>
	<td><div class="btn1">
			<input type="button" value="Prepared" disabled>
			</div></td>
	<td><center><?php if($row['track']==0){ echo "Prepared"; }else if($row['track']==-1){ echo "Disapproved";}?></center></td>
  </tr>
 <?php }}?>
</table>
</center>

</body>
</html>