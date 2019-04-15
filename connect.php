<?php
$con = mysqli_connect("localhost","root","","admin_ajarin");

if(mysqli_connect_errno()){
	echo "koneksi database gagal". mysqli_connect_error();
}
?>