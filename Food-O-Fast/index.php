<html>
<head>
	<title>Login and Registration Form</title>
	<link rel = "stylesheet" href = "style.css">
</head>
<body>
	<div class = "hero">
		<div class = "form-box">
			<div class = "button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()" >Login</button>
				<button type="button" class="toggle-btn" onclick="register()" >Register</button>
			</div> 
			<form id = "login" class="input-group" action="register.php" method="POST">
			<table border="0">
			<tr>
			    <td width="140"><input type="radio" name="c1" value="admin" required>Admin</td>
				<td width="140"><input type="radio" name="c1" value="user" required>User</td></tr>
		</table>
				<input type="email" class="input-field" placeholder="Enter Email Id" name="email" required>
				<input type="password" class="input-field" placeholder="Enter Password"  name="password"required>
				<input type="checkbox" class="check-box"><span>Remember Password</span>
				<button type="submit" class="submit-btn" name="login">Login</button>
			</form>
			<form id ="register"  class="input-group" action="register.php" method="POST" name="myform" onsubmit="return validateform()" >
			    <table border="0"><tr>
			    <td width="140"><input type="radio" name="c1" value="admin" required>Admin</td>
				<td width="140"><input type="radio" name="c1" value="user" required>User</td></tr></table>
				<input type="text" class="input-field" placeholder="Enter User Name" name="name" required>
				<input type="email" class="input-field" placeholder="Enter Email Id" name="email" required>
				<input type="password" class="input-field" placeholder="Enter Password" name="password"required>
				<input type="tel" class="input-field" placeholder="Enter Phone Number" name="phone" required>
				<input type="checkbox" class="check-box"><span>I agree to the terms & contiditions</span>
				<button type="submit" class="submit-btn" name="signup">Register</button>
			</form>
		</div>
	</div>
	<script>
	var x = document.getElementById("login");
	var y = document.getElementById("register");
	var z = document.getElementById("btn");
	
	function register(){
		x.style.left = "-400px";
		y.style.left = "50px";
		z.style.left = "110px";
	}
	function login(){
		x.style.left = "50px";
		y.style.left = "450px";
		z.style.left = "0";
	}
	function validateform(){
		var phonenumber=document.myform.phone.value; 
		if(phonenumber=="" || phonenumber.length != 10 || isNaN(phonenumber)){  
			alert("Phone number must consists of 10 digits.");  
			return false;  
		}
	}
	</script>

</body>
</html>