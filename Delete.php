<!-- GENERAL DECLARATIONS & STYLE LINK -->
<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">


<!-- HEADER -->
<div class="container text-center">
	<font color="#ffffff">
	<h1>Online Course Enrollment Tool (OCET)</h1>
	<h2>Disenroll</h2>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	</div>
		
<!-- NAVIGATION -->
<header>
	<div class="container">
	<div class="alpha">
	<font color="#ffffff">
	<nav>
		<ul>
			
			<li><a href="LoggedIn.php">Back</a></li>
			<li><a href="Logout.php">Logout</a></li>
			<br>
	</div>
	</div>
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

	<title> Enroll </title>
	
	
	</head>
		
<!-- BODY -->	
<body>
				
	<div class="container text-center">
	<h2>Please select the course to remove from your schedule:</h2>
	
	<br>
		
				
			<form action="DeleteANA.php" method="post">
				<button type="submit" class="btn btn-danger"> ANA101 - Anatomy I</button>
			</form>
			<br>
			
			<form action="DeleteASG.php" method="post">
				<button type="submit" class="btn btn-danger"> ASG101 - Astrology I</button>
			</form>
			<br>
			
			<form action="DeleteAST.php" method="post">
				<button type="submit" class="btn btn-danger"> AST101 - Astronomy I</button>
			</form>
			<br>
			
			<form action="DeleteBIO.php" method="post">
				<button type="submit" class="btn btn-success"> BIO101 - Biology I</button>
			</form>
			<br>
			
			<form action="DeleteCHE.php" method="post">
				<button type="submit" class="btn btn-success"> CHE101 - Chemistry I</button>
			</form>
			<br>
			
			<form action="DeleteCIV.php" method="post">
				<button type="submit" class="btn btn-success"> CIV102 - Civilizations After 1500 A.D.</button>
			</form>
			<br>
			
			<form action="DeleteECO.php" method="post">
				<button type="submit" class="btn btn-warning"> ECO101 - Ecology I</button>
			</form>
			<br>
			
			<form action="DeletePHY.php" method="post">
				<button type="submit" class="btn btn-warning"> PHY301 - Particle Physics</button>
			</form>
			<br>
			
			<form action="DeleteTHE.php" method="post">
				<button type="submit" class="btn btn-warning"> THE101 - Theology I</button>
			</form>
			<br>
			
			<form action="DeleteWRP.php" method="post">
				<button type="submit" class="btn btn-warning"> WRP101 - Basic Warp Theory</button>
			</form>
			<br>
			
			<form action="DeleteZOO.php" method="post">
				<button type="submit" class="btn btn-warning"> ZOO101 - Zoology I</button>
			</form>
			<br>
			
		</div>
	
	</body>

<!-- FOOTER -->
<footer id="footer">Copyright ©2022 </footer>
	
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