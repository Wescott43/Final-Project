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

	
	
	$check = "SELECT * FROM tblWaitingList WHERE id = $id && courseID = 'WRP101'";
	$result1 = mysqli_query($conn, $check);
	$num = mysqli_num_rows($result1);
	if($num == 0){
		$register = "INSERT INTO tblWaitingList (id, courseID) VALUES ('$id', 'WRP101');";
		$result2 = mysqli_query($conn, $register);
		header("Location: ListSuccess.php");
	}else{
		header("Location: ListFail.php");
	}
?>