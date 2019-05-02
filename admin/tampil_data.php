<?php
include '//koneksi';

//untuk hitung banyak pengguna
$sql = 'select count(*) from //table';
$query = mysqli_query(//koneksi,$sql);
$hitung = mysqli_fetch_array($query);

?>