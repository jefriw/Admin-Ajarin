<?php

include "koneksi.php";

$name = $_GET['username'];
$pass = md5($_GET['pass']);
$btn = $_GET['btn'];

if($btn=="Register"){
	$sql = "insert into login(username,password) values ('$name','$pass')";
	$query = mysqli_query($con,$sql) or die ("error $sql");
	$_SESSION['username'] = $name;
	header('location:index.php');
}

?>