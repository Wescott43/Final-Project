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
	<title> Logged In </title>
	</head>
		
<!-- BODY -->	
</body>
<link rel="stylesheet" type="text/css" href="style.css">
	<font color="#ffffff">	
	<div class="container text-center">
	<h1>Online Course Enrollment Tool (OCET).</h1>
	<h2>Logged In!</h2>
	</div>
	</body>

<!-- NAVIGATION -->
<header>
	<div class="container">
	<div class="alpha">
	
	<nav>
		<ul>
			<li><a href="Profile.php">Profile</a></li>
			<li><a href="Enroll.php">Enroll in Courses</a></li>
			<li><a href="Delete.php">Delete Courses</a></li>
			<li><a href="ListCourses.php">List Courses</a></li>
			<li><a href="Logout.php">Log Out</a></li>
	</header>
	
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