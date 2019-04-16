<?php
session_start();
include "koneksi.php";

$btn = $_GET['btn'];

if($btn == "Login")
{
	$username = $_GET['username'];
	$pass = md5($_GET['pass']);

	$sql = "select * from login where username='$username'";
		$query = mysqli_query($con,$sql) or die("Username yang anda inputkan tidak terdaftar!");
		$re = mysqli_fetch_array($query);
		$ps = $re[2];
		$us = $re[1];

		if($username == $us && $pass == $ps)
		{
			$_SESSION['status'] = "login";
			$_SESSION['username'] = $username;
			header("location:admin/index.php");
			//echo "Hello";
		}else
		{
			header("location:index.php");
			//echo "Failed";
		}
}

?>