<?php
session_start();
$conn = new mysqli("localhost", "root", "","project");


if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $delete = mysqli_query($conn,"DELETE FROM `konsumen` WHERE `id`= '$id'");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Tampil Data.css">
    <title>Tampil Data</title>
</head>
<body>
<section class="attendance">
        <div class="attendance-list">
          <h1>Nomor Antrian</h1>
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Pemilik</th>
                <th>Nomor Kendaraan</th>
                <th>Nomor Antrian</th>
                <th>Jenis Motor</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php $nomor=1;?>
                <?php $ambil = $conn->query("SELECT * FROM konsumen");?>
                <?php while($pecah = $ambil->fetch_assoc()){?>
                <tr>
                  <td><?php echo $nomor;?></td>
                  <td><?php echo $pecah['nama_pemilik'];?></td>
                  <td><?php echo $pecah['no_kendaraan'];?></td>
                  <td><?php echo $pecah['nomor_antrian'];?></td>
                  <td><?php echo $pecah['jenis_motor'];?></td>
                  <td><?php echo $pecah['status'];?></td>
                </tr>
                <?php $nomor++; ?>
                <?php } ?>
            </tbody>
          </table>
          <a href="Menu Konsumen.php" style="text-decoration: none;" class="btn btn-primary">Back To Home</a>
        </div>
    </section>
</body>
</html>