<?php
session_start();
?>

<?php
	
$dbServername = "localhost";
$username = "newuser";
$password = "password";
$dbName = "OnlineCourseEnrollmentTool";

$conn = new mysqli($dbServername, $username, $password, $dbName) or die("unable to connect");

$id = $_SESSION['id'];

	
	
	$check = "SELECT * FROM tblScheduled WHERE courseID = 'BIO101'";
	$result1 = mysqli_query($conn, $check);
	$num = mysqli_num_rows($result1);
	if($num <= 29){
		$register = "INSERT INTO tblScheduled (id, courseID) VALUES ('$id', 'BIO101');";
		$result2 = mysqli_query($conn, $register);
		header("Location: EnrollSuccess.php");
	}else{
		header("Location: BIOListCheck.php");
	}
?>