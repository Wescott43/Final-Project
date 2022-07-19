<!-- GENERAL DECLARATIONS & STYLE LINK -->
<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

<!-- HEADER -->
<div class="container text-center">
	<font color="#ffffff">
	<h1>Online Course Enrollment Tool (OCET)</h1>
	<h2>Register</h2>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	</div>
		
<!-- NAVIGATION -->
<header>
	<div class="container">
	<div class="alpha">
	<font color="#ffffff">
	<nav>
		<ul>
			<li><a href="Home.php">Home</a></li>
			
			<li><a href="Login.php">Login</a></li>
			<li><a href="Register.php">Register</a></li>
	</header>

<!-- DATABASE CONNECTION -->
<?php

$dbServername = "localhost";
$username = "newuser";
$password = "password";
$dbName = "OnlineCourseEnrollmentTool";

$conn = new mysqli($dbServername, $username, $password, $dbName) or die("unable to connect");

	?>

<!-- HEAD -->
<head>
	<title> Register </title>
	</head>
		
<!-- BODY -->	
<body>
				
		<div class="container">
		<div class="row">
		<div class="col-md-12">
				
	<div>
	<h4>Please enter user's information.</h4>
	</div>
	
	<form action="ValidateReg.php" method="POST">
		<h5>User ID:</h5> 
		<input type="text" name="id" placeholder="user ID" required>
		<h5>Email:</h5>
		<input type="text" name="email" placeholder="e-mail address" required>
		<h5>Password:</h5>
		<input type="text" name="password" placeholder="password" required>
		<h5>First Name:</h5>
		<input type="text" name="firstName" placeholder="First Name" required>
		<h5>Last Name:</h5>
		<input type="text" name="lastName" placeholder="Last Name" required>
		<h5>Address:</h5>
		<input type="text" name="address" placeholder="Mailing Address" required>
		<h5>Phone:</h5>
		<input type="text" name="phone" placeholder="Phone Number" required>
		<h5>SSN:</h5>
		<input type="text" name="SSN" placeholder="Social Security Number" required>
		<br>
		<button type="submit" class="btn btn-danger">Register</button>
	</form>
	
	</body>

<!-- FOOTER -->
<div id="footer">Copyright ©2022
	</div>
	
<style>
		#footer {
			position: fixed;
			padding: 0xp 0px 0px 0px;
			bottom: 0;
			width: 100%;
			/* Height of the footer*/
			height: 40px;
			background: black;
		}
	</style>

	</html>