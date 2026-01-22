<?php
require 'connection.php';
$name=$_POST['name'];
$phone=$_POST['phone'];
$quantity=$_POST['quantity'];
$items=$_POST['items'];
$cost=$_POST['cost'];
$email=$_SESSION['email'];
$track=1;
if($quantity>0){

$sql = "INSERT INTO status (email,name,phone,quantity,items,cost,track)
VALUES ('$email','$name','$phone','$quantity','$items','$cost','$track')";

if (mysqli_query($conn, $sql)) {
 echo '<script>';
echo 'alert("Order Successfull");';
echo ' window.location = "status.php";';
echo '</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
else{
	 echo '<script>';
echo 'alert("You need to select items");';
echo ' window.location = "myorders.php";';
echo '</script>';
}
?>