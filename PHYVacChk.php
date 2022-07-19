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

	
	
	$check1 = "SELECT * FROM tblScheduled WHERE courseID = 'PHY301'";
	$result1 = mysqli_query($conn, $check1);
	$num = mysqli_num_rows($result1);
	if($num >= 30){
		$delete2 = "DELETE FROM tblScheduled WHERE id = $id && courseID = 'PHY301'";
		$result2 = mysqli_query($conn, $delete2);
		header("Location: mailPHY.php");
	}else{
		$delete3 = "DELETE FROM tblScheduled WHERE id = $id && courseID = 'PHY301'";
		$result3 = mysqli_query($conn, $delete3);
		header("Location: DeleteSuccess.php");
	}
?>