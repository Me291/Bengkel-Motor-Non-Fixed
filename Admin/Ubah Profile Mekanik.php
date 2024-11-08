<?php
session_start();
$conn = new mysqli("localhost", "root", "","project");
$ambil = $conn->query("SELECT * FROM profile WHERE idmekanik = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

if (!isset($_SESSION['admin'])) 
{
  echo "<script>alert('Akses Ditolak Anda Harus Login Terlebih Dahulu');</script>";
  echo "<script>location='Mekanik Login.php';</script>";
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Tambah Mekanik</title>
	<link rel="stylesheet" href="Stlye Tambah.css" />
	<!-- Font Awesome Cdn Link -->
	<script src="https://kit.fontawesome.com/c856ca633a.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
      <li><a href="#" class="logo">
          <img src="../Project PHP/Foto/Joker.jpeg">
          <span class="nav-item">Mekanik</span>
        </a></li>
        <li><a href="Mekanik.php">
          <i class="fa-solid fa-user"></i>
          <span class="nav-item"> Data Mekanik</span>
        </a></li>
        <li><a href="Info Feedback.php">
          <i class="fa-solid fa-heart"></i>
          <span class="nav-item">Message</span>
        </a></li>
        <li><a href="Konsumen.php">
          <i class="fa-solid fa-circle-user"></i>
          <span class="nav-item">Data Konsumen</span>
        </a></li>
        <li><a href="Profile Mekanik.php">
          <i class="fa-solid fa-address-card"></i>
          <span class="nav-item">Profil Mekanik</span>
        </a></li>
        <li><a href="Data Service Konsumen.php">
          <i class="fa-sharp fa-solid fa-address-book"></i>
          <span class="nav-item">Data Service</span>
        </a></li>
        </a></li>
        <li><a href="Update Tabel Service.php">
            <i class="fa-solid fa-wrench"></i>
          <span class="nav-item">Update Tabel</span>
        </a></li>
        <li><a href="Bukti Pembayaran.php">
          <i class="fa-solid fa-money-bill"></i>
          <span class="nav-item">Pembuatan Bill</span>
        </a></li>
        <li><a href="Logout Mekanik.php" class="logout">
          <i class="fa-sharp fa-solid fa-right-from-bracket"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>Pemilik Perusahaan</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        <div class="card">
          <img src="../Project PHP/Foto/1.webp">
          <h4>Tegar</h4>
          <p>Admin</p>
          <div class="per">
            <table>
              <tr>
                <td><span>85%</span></td>
                <td><span>87%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="../Project PHP/Foto/2.jpg">
          <h4>Umar</h4>
          <p>Progammer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>82%</span></td>
                <td><span>85%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="../Project PHP/Foto/3.jpg">
          <h4>Excell</h4>
          <p>tester</p>
          <div class="per">
            <table>
              <tr>
                <td><span>94%</span></td>
                <td><span>92%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="../Project PHP/Foto/4.jpg">
          <h4>Reza</h4>
          <p>Ui designer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>85%</span></td>
                <td><span>82%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
      </div>

		<section class="attendance">
		<div class="attendance-list">
			<div class="wrapper">
			<div class="title">
				Ubah Data Dan Foto Mekanik
			</div>
			<div class="form">
			<form enctype="multipart/form-data" method="post">
				<div class="inputfield">
					<label>Foto</label>
          <img src="../Foto_Mekanik/<?php echo $pecah['foto'];?>" width="100px">
				</div>
        <div class="inputfield">
					<label>Ganti Foto</label>
					<input type="file" class="input" name="foto">
				</div>    
				<div class="inputfield">
					<label>Nama</label>
					<input type="text" class="input" name="nama" value="<?php echo $pecah['nama'];?>">
				</div>  
				<div class="inputfield">
					<label>Id Mekanik</label>
					<input type="text" class="input" name="idmekanik" value="<?php echo $pecah['idmekanik'];?>">  
				</div>  
				<button type="btn btn-primary" name="ubah">Ubah</button>
				</div>
			</form>
      <?php
      if (isset($_POST['ubah'])) {
        $namafoto = $_FILES['foto']['name']; 
        $lokasifoto = $_FILES['foto']['tmp_name']; 

        if (!empty($lokasifoto)) {
          move_uploaded_file($lokasifoto,"../Foto_Mekanik/$namafoto");
          $conn->query("UPDATE profile SET idmekanik='$_POST[idmekanik]','$namafoto', nama ='$_POST[nama]' WHERE idmekanik = '$_GET[id]'");
        }
        else {
          $conn->query("UPDATE profile SET idmekanik='$_POST[idmekanik]','$namafoto', nama ='$_POST[nama]' WHERE idmekanik = '$_GET[id]'");
        }
        echo "<div class='alert alert-info'>Data Tersimpan</div>"; 
      }
      ?>
		</div>
		</section>
	</section>
	</div>

</body>
</html>