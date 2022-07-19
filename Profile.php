<?php
session_start();
?>

<!-- GENERAL DECLARATIONS & STYLE LINK -->
<!DOCTYPE html>
<html lang="en">


<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

<!-- DATABASE CONNECTION -->
<?php

if(!isset($_SESSION['email'])){
	header("location: login.php");
}

$dbServername = "localhost";
$username = "newuser";
$password = "password";
$dbName = "OnlineCourseEnrollmentTool";

$conn = new mysqli($dbServername, $username, $password, $dbName) or die("unable to connect");

	?>

<!-- HEAD -->
<head>
	<title> User Profile </title>
	</head>
	
	<!-- BODY -->	
</body>
<link rel="stylesheet" type="text/css" href="style.css">
	<div class="container text-center">
	<font color="#ffffff">
	<h1>Welcome to your OCET Profile Page, <?php echo $_SESSION['firstName']?>! </h1>
	<br>
	<br>
	</div>
	</body>

	<!-- NAVIGATION -->
<header>
	<div class="container">
	<div class="alpha">
	<font color="#ffffff">
	
	<nav>
		<ul>
			<li><a href="loggedin.php">Back</a></li>
			<li><a href="LogOut.php">Log Out</a></li>
	</header>

<br>
<h3> User ID: <?php echo $_SESSION['id'] ?> </h3>
<h3> E-mail: <?php echo $_SESSION['email'] ?> </h3>
<h3> Password: <?php echo $_SESSION['password'] ?> </h3>
<h3> First Name: <?php echo $_SESSION['firstName'] ?> </h3>
<h3> Last Name: <?php echo $_SESSION['lastName'] ?> </h3>
<h3> Address: <?php echo $_SESSION['address'] ?> </h3>
<h3> Phone: <?php echo $_SESSION['phone'] ?> </h3>
<h3> Social Security Number: <?php echo $_SESSION['SSN'] ?> </h3>

<!-- FOOTER -->
<div id="footer">Copyright ©2022
	</div>
	
<style>
		#footer {
			position: fixed;
			padding: 10xp 10px 0px 10px;
			bottom: 0;
			width: 100%;
			/* Height of the footer*/
			height: 40px;
			background: black;
		}
	</style>

	</html>