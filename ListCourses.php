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
	<title> Course List </title>
	</head>
	
	<!-- BODY -->	
</body>
<link rel="stylesheet" type="text/css" href="style.css">
	<div class="container text-center">
	<font color="#ffffff">
	<h1>Welcome to your Course List, <?php echo $_SESSION['firstName']?>! </h1>
	</div>
	</body>

	<!-- NAVIGATION -->
<header>
	<div class="container">
	<div class="alpha">
	<font color="#ffffff">
	
	<nav>
		<ul>
			<br>
			<br>
			<li><a href="loggedin.php">Back</a></li>
			<li><a href="LogOut.php">Log Out</a></li>
	</header>

<br>






<div class="container text-center">
<h2> You are currently scheduled for: </h2>
<h3>


<?php

$email = $_SESSION['email'];
$id = $_SESSION['id'];

$sql = "SELECT courseID FROM tblScheduled WHERE id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo $row["courseID"]. "<br>";
	}
} else {
	echo "You are not enrolled in any classes";
}

?>
</h3>
</div>



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