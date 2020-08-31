<?php
include("db_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration | FortuneN400 </title>
	<link rel="image/icon" type="icon" href="image/logo.png">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/fontawesome-all.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="form-wrapper">
	<div class="form">
		<h3>REGISTRATION</h3>
		<form action="register.php" method="post">
			<label>Name&nbsp;<span>*</span></label>
			<input type="text" name="name" required placeholder=" your name in full"><p></p>
			<label>Username&nbsp;<span>*</span></label>
			<input type="text" name="username" required placeholder=" your Username"><p></p>
			<label>Mobile Number&nbsp;<span>*</span></label>
			<input type="text" name="phone" required placeholder=" your Phone number"><p></p>
			<label>E-mail Address&nbsp;<span>*</span></label>
			<input type="email" name="email" required placeholder=" your email address"><p></p>
			<label>Date of birth&nbsp;<span>*</span></label>
			<input type="date" name="date" required><p></p>
			<label>Age&nbsp;<span>*</span></label>
			<input type="text" name="age" placeholder=" your age"><p></p>
			<label>Gender&nbsp;<span>*</span></label>
			<select name="gender">
				<option>--- Select your Gender ---</option>
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select><p></p>
			<label>Password&nbsp;<span>*</span></label>
			<input type="password" name="password" required placeholder=" your password"><p></p>
			<label>Confirm Password&nbsp;<span>*</span></label>
			<input type="password" name="confirm_password" required placeholder=" confirm your password">
			<p></p>
			<input type="submit" name="submit">
		</form>
	</div>
</div>
</body>
</html>
<!-- bg #47A1ED -->

<!--
 name
 username
phone number
email address
Address
D O B
Gender
Country
State
password
confirm password 
-->