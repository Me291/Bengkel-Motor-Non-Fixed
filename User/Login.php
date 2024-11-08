<?php
session_start();
$conn = new mysqli("localhost", "root", "","project");

if (isset($_POST['login'])) 
{
	$ambil = $conn->query("SELECT * FROM daftar WHERE nama ='$_POST[user]' AND password ='$_POST[pass]'");
	$yangcocok = $ambil->num_rows;
	if ($yangcocok == 1) 
	{
		$_SESSION['login'] =$ambil->fetch_assoc();
		echo "<script>alert('Berhasil Login');</script>";
		echo "<meta http-equiv='refresh' content='1;url=Menu Konsumen.php'>";
	}
	else
	{
		echo "<script>alert('User Tidak Terdaftar!!!');</script>";
		echo "<meta http-equiv='refresh' content='1;url=Login.php'>";

	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="Style Login.css">
</head>
<body>
	<div class="box">
		<form autocomplete="off" method="post">
			<h2>SIGN IN</h2>
			<div class="inputBox">
				<input type="text" required="required" name="user">
				<span>Username</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" required="required" name="pass">
				<span>Password</span>
				<i></i>
			</div>
			<div class="links">
				<a href="#">Forget Password ?</a>
				<a href="Pendaftaran.php">Signup</a>
				<a href="../../Project PHP/Home.php">Back To Home</a>
			</div>
			<input type="submit" value="MASUK" name="login">
		</form>
	</div>
</body>
</html>