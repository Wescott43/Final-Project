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

	$id = $_POST['id'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$SSN = $_POST['SSN'];
	
	$check = " select * from tblUser where id = '$id'";
	$result1 = mysqli_query($conn, $check);
	$num = mysqli_num_rows($result1);
	if($num == 1){
		header("Location: RegFail.php");
	}else{
		$register = "INSERT INTO tblUser (id, email, password, firstName, lastName, address, phone, SSN) VALUES ('$id', '$email', '$password', '$firstName', '$lastName', '$address', '$phone', '$SSN');";
	$result2 = mysqli_query($conn, $register);
		
	header("Location: RegSuccess.php");
	}
?>


