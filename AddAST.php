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

	
	
	$check = "SELECT * FROM tblScheduled WHERE id = $id && courseID = 'AST101'";
	$result1 = mysqli_query($conn, $check);
	$num = mysqli_num_rows($result1);
	if($num == 1){
		header("Location: EnrollFail.php");
	}else{
		header("Location: ASTFullCheck.php");
	}
?>