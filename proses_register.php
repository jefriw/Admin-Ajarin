<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$data = "insert into login(username, password) values('$username', $password)";

$query = mysqli_query($koneksi, $data);

header("location:index.php");
?>