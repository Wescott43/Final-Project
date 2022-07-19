<?php
session_start();
?>

<!-- GENERAL DECLARATIONS & STYLE LINK -->
<!DOCTYPE html>
<html lang="en">


<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

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
	<title> Login </title>
	</head>
		
	<!-- HEADER -->
	
	</body>
	<link rel="stylesheet" type="text/css" href="style.css">	
	<div class="container text-center">
	<font color="#ffffff">
	<h1>Online Course Enrollment Tool (OCET)</h1>
	<h2>Please log in.</h2>
	</div>
	</body>
	
<!-- NAVIGATION -->
<header>
	<div class="container">
	<div class="alpha">
		
	<nav>
		<ul>
			<li><a href="Home.php">Home</a></li>
			<li><a href="Login.php">Login</a></li>
			<li><a href="Register.php">Register</a></li>
	</header>
		
<!-- BODY -->	

<div class="container">
	<div class="row">
	<div class="col-md-6">
		<h2> Login Here </h2>
		<form action="ValidateLog.php" method="post">
			<div class="form-group">
			<label>E-mail</label>
			<input type="text" name="email" class="form-control" required>
			</div>
		<div class="form-group">
			<label> Password </label>
			<input type="text" name="password" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-warning"> Login </button>
			
		</form>
	</div>
	</div>

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