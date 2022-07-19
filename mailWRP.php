<?php
session_start();
?>


<?php

//THIS SECTION ENABLES DB CONNECTION

$dbServername = "localhost";
$username = "newuser";
$password = "password";
$dbName = "OnlineCourseEnrollmentTool";

$conn = new mysqli($dbServername, $username, $password, $dbName) or die("unable to connect");

//THIS SECTION FINDS THE FIRST STUDENT IN LINE'S POSITION
$query0 = mysqli_query($conn, "SELECT MIN(waitingPosition) FROM tblWaitingList WHERE courseID = 'WRP101'");
$row = mysqli_fetch_row($query0);
foreach($row as $value){
    $captured = $value;
}

//THIS SECTION USES THAT POSITION TO GET THAT STUDENT'S EMAIL
$query1 = mysqli_query($conn, "SELECT email FROM tblWaitingList WHERE waitingPosition = '$captured'");
$row = mysqli_fetch_row($query1);
foreach($row as $value1){
    $customemail = $value1;
}

//THIS SECTION GETS ID & ENROLLS THE STUDENT INTO THE VACANCY JUST CREATED
$query2 = mysqli_query($conn, "SELECT id FROM tblWaitingList WHERE waitingPosition = '$captured'");
$row = mysqli_fetch_row($query2);
foreach($row as $value){
	$customid = $value;
}

$insert1 = "INSERT INTO tblScheduled (id, courseID) VALUES ('$customid', 'WRP101')";
$query3 = mysqli_query($conn, $insert1);



//THIS SECTION REMOVES THE STUDENT FROM THE WAIT LIST SINCE IT IS NO LONGER NEEDED
$delete9 = "DELETE FROM tblWaitingList WHERE id = '$customid' && courseID = 'WRP101'";
$query4 = mysqli_query($conn, $delete9);




//THIS SECTION HANDLES THE EMAIL ITSELF
$to = "$customemail";
$subject = "New Course Availability";
$body = "Hi, You have been scheduled for a new course!";
$headers = "From: rdb5408@gmail.com";
 
if (mail($to, $subject, $body, $headers))
 {
    echo "Email successfully sent to $to...";
	header("Location: DeleteSuccess.php");
}
 
else
 
{
    echo "Email sending failed!";
}