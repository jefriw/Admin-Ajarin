<?php
session_start();

include 'connect.php';

$username = $_POST["username"];
$password = $_POST["password"];

$data = mysqli_query($con, "select * from login where username='$username' and password='$password'");

$check = mysqli_num_rows($data);

if($check > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/");
}else{
	header("location:index.php?pesan=gagal");
}
?>