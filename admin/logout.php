<?php 
// mengaktifkan session
session_start();

//menghapus session
unset($_SESSION['username']);
unset($_SESSION['status']);
// menghapus semua session
session_destroy();

// mengalihkan halaman sambil mengirim pesan logout
header("location:../index.php?pesan=logout");
?>