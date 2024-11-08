<?php
    require 'dpendaftaran service.php';

    if(isset($_POST['daftar']))
    {
        if(registrasi($_POST) > 0)
        {
            echo "<script>
            alert('Terima Kasih Data Sudah Dikirim Konsumen Dapat Melakukan Pembayaran');
            </script>";
            echo "<meta http-equiv='refresh' content='1;url=menu.php'>";
        }  else {
            echo mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Service Dan Homes</title>
	<link rel="stylesheet" type="text/css" href="Style Pendaftaran Service.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="" method="post">
	<h1>HOMES</h1>
	<input type="text"  name ="nama2" placeholder="Nama" required>
    <input type="email"  name ="email2" placeholder="Email" required>
    <input type="text" name="alamat" placeholder="Alamat" required>
    <input type="text"  name= "nomor_kendaraan2" placeholder="Nomor kendaraan" required>
    <input type="text"  name ="nomor_telepon2" placeholder="Nomor Telepon" required>
    <input type="text" name ="jenis_kendaraan2"placeholder="Jenis Kendaraan" required>

	<button name="submit">Daftar</button>
	<a href="Menu Konsumen.php">Back To Home</a>
</form>
</div>
<div class="form-container sign-in-container">
	<form action="#" method="post">
		<h1>Daftar Service</h1>
		<div class="social-container">
	</div>
	<input type="text" name="nama" placeholder="Nama" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="nomor_kendaraan" placeholder="Nomor kendaraan" required>
    <input type="text" name="nomor_telepon" placeholder="Nomor Telepon" required>
    <input type="text" name="jenis_kendaraan" placeholder="Jenis Kendaraan" required>
	<button name="daftar">Daftar</button>
	<a href="Menu Konsumen.php">Back To Home</a>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Place Service</h1>
			<p>Place Service Adalah dimana konsumen bisa menservice motornya di tempat service</p>
			<button class="ghost" id="signIn">Daftar Disini</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>HOMES</h1>
			<p>Homes adalah singkatan dari Home Service yang membantu para konsumen yang tidak dapat datang ke tempat service</p>
			<button class="ghost" id="signUp">Daftar Disini</button>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>


</body>
</html>
<?php
    require 'dhomes.php';

    if(isset($_POST['submit']))
    {
        if(Pendaftaran($_POST) > 0)
        {
            echo "<script>
            alert('Terima Kasih Data Sudah Dikirim Konsumen Dapat Melakukan Pembayaran');
            </script>";
            echo "<meta http-equiv='refresh' content='1;url=menu.php'>";
        }  else {
            echo mysqli_error($conn);
        }
    }

?>