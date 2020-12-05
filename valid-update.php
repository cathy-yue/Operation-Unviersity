<?php

session_start();

$connect = mysqli_connect('localhost', 'root', '');
mysqli_select_db($connect, 'users');

$username = $_SESSION['username'];
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];

$query = "SELECT * FROM user WHERE password='$oldpassword' && username='$username'";

$result = mysqli_query($connect, $query);

$num = mysqli_num_rows($result);

if($num == 1){
	$query2 = "UPDATE user SET password='$newpassword' WHERE `username`='$username'";
	$run = mysqli_query($connect, $query2);
	header('location:home.php');
}
else{
	header('location:home.php');
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	if(isset($_POST['deletebtn'])){
		$del = "DELETE FROM user WHERE username='$username'";
		$run2 = mysqli_query($connect, $del);
		header('location:login.php');
	}
}

?>