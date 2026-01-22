<?php
require 'connection.php';
require 'itemvalue.php';
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup']))
{
$c1=$_POST['c1'];
if($c1=="user")
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];

$check = "SELECT email FROM register WHERE email='$email'";
$result = mysqli_query($conn, $check);
if (mysqli_num_rows($result) > 0) {
echo '<script>';
echo 'alert("Email already exists.");';
echo ' window.location = "index.php";';
echo '</script>';
  }
else{
$sql = "INSERT INTO register (username,email,password,phone)
VALUES ('$name','$email','$password','$phone')";

if (mysqli_query($conn, $sql)) {
echo '<script>';
echo 'alert("Registration successful. You can login.");';
echo ' window.location = "index.php";';
echo '</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
}
elseif($c1==="admin")
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];

$check = "SELECT email FROM admin WHERE email='$email'";
$result = mysqli_query($conn, $check);
if (mysqli_num_rows($result) > 0) {
echo '<script>';
echo 'alert("Email already exists.");';
echo ' window.location = "index.php";';
echo '</script>';
  }
else{
$sql = "INSERT INTO admin (username,email,password,phone)
VALUES ('$name','$email','$password','$phone')";

if (mysqli_query($conn, $sql)) {
echo '<script>';
echo 'alert("Registration successful. You can login.");';
echo ' window.location = "index.php";';
echo '</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
}
}









if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login']))
{
	$c1=$_POST['c1'];
	if($c1==="user")
	{
	//require 'connection.php';
	$email=$_POST['email'];
	$password=$_POST['password'];
	$check = "SELECT email,password,username FROM register WHERE email='$email' AND password='$password'";
	$_SESSION['email']=$email;
$result = mysqli_query($conn, $check);
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		
    $_SESSION['name']=$row["username"];
	$_SESSION['email']=$row["email"];
	$_SESSION['phone']=$row["phone"];
  }
    echo '<script>';
echo ' window.location = "home.php";';
echo '</script>';
  }
  else{
	  echo '<script>';
echo 'alert("Incorrect email or password. Or if you may not registered yet, Please click on Register");';
echo ' window.location = "index.php";';
echo '</script>';
  }
	}
elseif($c1==="admin")
{
		$email=$_POST['email'];
	$password=$_POST['password'];
	$check = "SELECT email,password,username FROM admin WHERE email='$email' AND password='$password'";
	$_SESSION['email']=$email;
$result = mysqli_query($conn, $check);
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
    $_SESSION['name']=$row["username"];
  }
    echo '<script>';
echo ' window.location = "admin.php";';
echo '</script>';
  }
  else{
	  echo '<script>';
echo 'alert("Incorrect email or password. Or if you may not registered yet, Please click on Register");';
echo ' window.location = "index.php";';
echo '</script>';
	}
}
}

?>