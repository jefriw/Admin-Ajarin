<!DOCTYPE html>
<html>
<head>
	<title>Login To Admin</title>
</head>
<body>
	<?php
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<script>alert('Login Gagal! Periksa kembali Username dan Password Anda!');</script>";
			}else if ($_GET['pesan'] == "logout") {
				echo "<script>alert('Anda telah Logout!');</script>";
			}else if ($_GET['pesan'] == "belum_login") {
				echo "<script>alert('Anda harus login terlebih dahulu!');</script>";
			}
		}
	?>
	<form method="post" action="login_check.php" onSubmit="return validasi()">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username" onkeydown="press()"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password" onkeydown="press()"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN" disabled></td>
			</tr>
		</table>
	</form>
</body>
<script type="text/javascript">
	function press() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if(username != "" && password != ""){
			
		}
	}
</script>
</html>