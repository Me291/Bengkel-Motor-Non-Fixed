<?php
    require 'dregister.php';

    if(isset($_POST['register']))
    {
        if(registrasi($_POST) > 0)
        {
            echo "<script>
            alert('User baru telah berhasil ditambahkan!');
            </script>";
            echo "<meta http-equiv='refresh' content='1;url=login.php'>";
        }  else {
            echo mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pendaftaran Form</title>
	<link rel="stylesheet" href="Style Pendaftaran.css">
    <script src="https://kit.fontawesome.com/c856ca633a.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="box">
        <form action="" method="post">
            <h2>Sign Up</h2>
            <div class="inputBox">
                <input type="text" name="nama" required="required">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="email" required="required">
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="pass" required="required">
                <span>Password</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="pass2" required="required">
                <span> Confirmed Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="Login.php">Login Here</a>
                <a href="#"></a>
                <a href="../../Project PHP/Home.php">Back To Home</a>
            </div>
            <input type="submit" name="register" value="DAFTAR">
        </form>
	</div>
</body>
</html>