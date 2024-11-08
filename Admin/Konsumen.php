<?php
session_start();
$conn = new mysqli("localhost", "root", "","project");


if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $delete = mysqli_query($conn,"DELETE FROM `daftar` WHERE `id` = '$id'");
  echo "<script>alert('Data Berhasil Dihapus');</script>";
	echo "<meta http-equiv='refresh' content='1;url=Konsumen.php'>";
}

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
  <title>Data Login Konsumen</title>
  <link rel="stylesheet" href="Mekanik.css" />
  <script src="https://kit.fontawesome.com/c856ca633a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
      <li><a href="#" class="logo">
          <img src="Joker.jpeg">
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
          <img src="1.webp">
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
          <img src="2.jpg">
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
          <img src="3.jpg">
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
          <img src="4.jpg">
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
          <h1>Informasi Data Login Konsumen</h1>
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Konfirmasi Password</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $nomor=1;?>
              <?php $ambil = $conn->query("SELECT * FROM daftar");?>
              <?php while($pecah = $ambil->fetch_assoc()){?>
              <tr>
                <td><?php echo $nomor;?></td>
                <td><?php echo $pecah['nama'];?></td>
                <td><?php echo $pecah['email'];?></td>
                <td><?php echo $pecah['password'];?></td>
                <td><?php echo $pecah['password2'];?></td>
                <td>
                  <a href="Konsumen.php?halaman=hapus konsumen&id=<?php echo $pecah['id']?>" style ="width:auto;" class="btn btn-primary" onclick="confirm('Yakin mau hapus data?')"><i class="fa-sharp fa-solid fa-trash"></i></a>
                </td>
              </tr>
              <?php $nomor++; ?>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>

</body>
</html>
