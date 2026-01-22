<?php 
require 'connection.php'; 
$email=$_POST['email'];
$id=$_POST['id'];
 $up=$_POST['up'];
 if($up=="disapprove")
 {
	 $sql = "UPDATE status SET track=-1  WHERE id='$id' AND email='$email'";

if (mysqli_query($conn, $sql)) {
	
  echo '<script>';
echo 'alert("Disapproved Successfully");';
echo ' window.location = "admin.php";';
echo '</script>';
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
 }
 else{
$sql = "UPDATE status SET track=0 WHERE id='$id' AND email='$email'";

if (mysqli_query($conn, $sql)) {
  echo '<script>';
echo 'alert("Prepared Successfully");';
echo ' window.location = "admin.php";';
echo '</script>';
} else {
  echo "Error updating record: " . mysqli_error($conn);
}	 
 }
?>