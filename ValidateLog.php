<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" type="text/css"
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

<?php
	
	include 'connect.php';

	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$_SESSION['email'] = $email;
	
	$sql = " select * from tblUser where email = '$email' && password = '$password'";
	$resultx = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($resultx);
	
	$_SESSION['id'] = $row['id'];
	$_SESSION['password'] = $row['password'];
	$_SESSION['firstName'] = $row['firstName'];
	$_SESSION['lastName'] = $row['lastName'];
	$_SESSION['address'] = $row['address'];
	$_SESSION['phone'] = $row['phone'];
	$_SESSION['SSN'] = $row['SSN'];
	

	
	
	$check = " select * from tblUser where email = '$email' && password = '$password'";
	$result1 = mysqli_query($conn, $check);
	$num = mysqli_num_rows($result1);
	if($num == 1){
		header("Location: LoggedIn.php");
	}else{
		header("Location: LogFail.php");
	}
?>


