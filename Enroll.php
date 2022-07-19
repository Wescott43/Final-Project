<!-- GENERAL DECLARATIONS & STYLE LINK -->
<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">


<!-- HEADER -->
<div class="container text-center">
	<font color="#ffffff">
	<h1>Online Course Enrollment Tool (OCET)</h1>
	<h2>Enrollment</h2>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	</div>
		
<!-- NAVIGATION -->
<header>
	<div class="container">
	<div class="alpha">
	<font color="#ffffff">
	<nav>
		<ul>
			
			<li><a href="Loggedin.php">Back</a></li>
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
	<h2>Please select the course to add to your schedule:</h2>
	
	<br>
		
				
			<form action="AddANA.php" method="post">
				<button type="submit" class="btn btn-danger" name="ANA101">ANA101 - Anatomy I</button>
			</form>
			<br>
			
			<form action="AddASG.php" method="post">
				<button type="submit" class="btn btn-danger" name="ASG101">ASG101 - Astrology I</button>
			</form>
			<br>
			
			<form action="AddAST.php" method="post">
				<button type="submit" class="btn btn-danger" name="AST101">AST101 - Astronomy I</button>
			</form>
			<br>
			
			<form action="AddBIO.php" method="post">
				<button type="submit" class="btn btn-success" name="BIO101">BIO101 - Biology I</button>
			</form>
			<br>
			
			<form action="AddCHE.php" method="post">
				<button type="submit" class="btn btn-success" name="CHE101">CHE101 - Chemistry I</button>
			</form>
			<br>
			
			<form action="AddCIV.php" method="post">
				<button type="submit" class="btn btn-success" name="CIV102">CIV102 - Civilizations After 1500 A.D.</button>
			</form>
			<br>
			
			<form action="AddECO.php" method="post">
				<button type="submit" class="btn btn-warning" name="ECO101">ECO101 - Ecology I</button>
			</form>
			<br>
			
			<form action="AddPHY.php" method="post">
				<button type="submit" class="btn btn-warning" name="PHY301">PHY301 - Particle Physics</button>
			</form>
			<br>
			
			<form action="AddTHE.php" method="post">
				<button type="submit" class="btn btn-warning" name="THE101">THE101 - Theology - I</button>
			</form>
			<br>
			
			<form action="AddWRP.php" method="post">
				<button type="submit" class="btn btn-warning" name="THE101">WRP101 - Basic Warp Theory</button>
			</form>
			<br>
			
			<form action="AddZOO.php" method="post">
				<button type="submit" class="btn btn-warning" name="ZOO101">ZOO101 - Zoology - I</button>
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