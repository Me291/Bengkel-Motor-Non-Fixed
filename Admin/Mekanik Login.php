<?php
session_start();
$conn = new mysqli("localhost", "root", "","project");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mekanik Login</title>
	<link rel="stylesheet" href="Style Login.css">
</head>
<body>
	<div class="box">
		<form autocomplete="off" method="post">
			<h2>Mekanik Login</h2>
			<div class="inputBox">
				<input type="text" required="required" name="nama">
				<span>Nama Mekanik</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="text" required="required" name="id_admin">
				<span>Id Mekanik</span>
				<i></i>
			</div>
			<div class="links">
				<a href="../../Project PHP/Home.php">Back To Home</a>
			</div>
			<input type="submit" value="MASUK" name="login">
		</form>
		<?php
		if (isset($_POST['login'])) 
		{
			$ambil = $conn->query("SELECT * FROM admin WHERE nama ='$_POST[nama]' AND id_admin ='$_POST[id_admin]'");
			$yangcocok = $ambil->num_rows;
			if ($yangcocok == 1) 
			{
				$_SESSION['admin'] =$ambil->fetch_assoc();
				echo "<script>alert('Berhasil Login');</script>";
				echo "<meta http-equiv='refresh' content='1;url=Mekanik.php'>";
			}
			else
			{
				echo "<script>alert('Mekanik Tidak Terdaftar!!!');</script>";
				echo "<meta http-equiv='refresh' content='1;url=Mekanik Login.php'>";

			}
		}
		?>
	</div>
</body>
</html>