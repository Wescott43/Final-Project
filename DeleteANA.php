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

	
	
	$check = "SELECT * FROM tblScheduled WHERE id = $id && courseID = 'ANA101'";
	$result1 = mysqli_query($conn, $check);
	$num = mysqli_num_rows($result1);
	if($num == 0){
		header("Location: DeleteFail.php");
	}else{
		header("Location: ANAVacChk.php");
	}
?>