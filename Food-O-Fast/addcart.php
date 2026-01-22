<?php
 require 'connection.php';
 $quant=$_POST['quantity'];
 $item=$_POST['item'];
 $email=$_SESSION['email'];
 $value=array("bhelpuri", "veg_vadapav", "veg_friedrice", "veg_pavbaji", "veg_onionbaji", "veg_frenchfries", 
					"veg_noodles", "veg_banabaji", "veg_mirchibaji", "veg_chilligarlicpops", "veg_cornchestnutballs", 
					"veg_deepfiredballs", "veg_vegfriedvegitableballs", "veg_paneerpopcorn", "non_friedchickenlegs", 
					"non_chickenshawarma", "non_chickenfriedrice", "non_breadomelette", "bu_vegburger", "bu_roastedvegburger", 
					"bu_chilliburger", "bu_veggieburger", "bu_redrobinveggieburger", "bu_angusburger", "bu_kiddychickenburger", 
					"s_chickenlolipop", "s_chickenwings", "s_chickenpoppers", "s_chickenfingers", "s_italianrolles", "s_chickennoodels",
					"s_chickentikka", "s_chillichicken", "s_frankie", "s_spicygrilledchicken", "s_somosa", "s_momos", "p_chickenpizza", 
					"p_vegpizza", "p_mixvegpizza", "p_mushroomhawaiianpiza", "p_paneerpizza", "p_pepperonipizza", "p_chocolatepizza", 
					"p_pineapple_and_chocopizza", "p_roastedvegpizza", "p_smoreschocolatepizza", "p_vegcheesepizza", "p_cheesebreadpizza",
					"p_crowncrustpizza");
 $check = "SELECT email FROM items WHERE email='$email'";
$result = mysqli_query($conn, $check);
if (mysqli_num_rows($result) > 0) {
 $sql= "UPDATE items SET $item='$quant' WHERE email='$email'";
 for($i=0;$i<count($value);$i++)
 {
	 if($value[$i]==$item)
	 {
		 $_SESSION[$value[$i]]=$quant;
	 }
 }
if (mysqli_query($conn, $sql)) {
   echo '<script>';
echo ' window.location = "myorders.php";';
echo '</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
} 

else{
$sql = "INSERT INTO items ($item,email)
VALUES ('$quant','$email')";

if (mysqli_query($conn, $sql)) {
     echo '<script>';
echo ' window.location = "myorders.php";';
echo '</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);	
}

 
?>