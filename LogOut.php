<!-- GENERAL DECLARATIONS & STYLE LINK -->
<!DOCTYPE html>
<html lang="en">


<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

<!-- HEAD -->
<head>
	<title> Logged Out </title>
	</head>
	
	<!-- BODY -->	
</body>
		
<?php session_start();
      session_destroy();
	  header("location: home.php");
	  ?>
	
	<div class="container text-center">
	<h1>Thank you for using Online Course Enrollment Tool (OCET)!</h1>
	</div>
	</body>
<link rel="stylesheet" type="text/css" href="style.css">
<!-- NAVIGATION -->
<header>
	<div class="container">
	<font color="#ffffff">
	
	<nav>
		<ul>
			<li><a href="Home.php">Home</a></li>
			
			<li><a href="Login.php">Login</a></li>
			<li><a href="Register.php">Register</a></li>
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
			background: white;
		}
	</style>

	</html>