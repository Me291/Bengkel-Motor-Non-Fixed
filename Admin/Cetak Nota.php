<?php
session_start();
$conn = new mysqli("localhost", "root", "","project");
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="card">
        <div class="card-body">
          <div class="container mb-5 mt-3">
            <div class="row d-flex align-items-baseline">
              <div class="col-xl-9">
                <p style="color: #00d9ff;font-size: 20px;">Invoice >> <strong>ID: 123-123</strong></p>
              </div>
              <hr>
            </div>
      
            <div class="container">
              <div class="col-md-12">
                <div class="text-center">
                  <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>
                  <p class="pt-0">Sahara Service Motor</p>
                </div>
      
              </div>      
              <div class="row my-2 mx-1 justify-content-center">
                <table class="table table-striped table-borderless">
                  <thead style="background-color:#84B0CA ;" class="text-white">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Nama Merk</th>
                      <th scope="col">Jumlah</th>
                      <th scope="col">Harga Satuan</th>
                      <th scope="col">Harga Total</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $nomor=1;?>
                  <?php $ambil = $conn->query("SELECT * FROM pembayaran");?>
                  <?php $total = 0;?>
                  <?php while($pecah = $ambil->fetch_assoc()){
                  $sub_harga = $pecah['harga'] * $pecah['jumlah']?>
                  <tr>
                    <td><?php echo $nomor;?></td>
                    <td><?php echo $pecah['nama_barang'];?></td>
                    <td><?php echo $pecah['deskripsi'];?></td>
                    <td><?php echo $pecah['jumlah'];?></td>
                    <td><?php echo 'Rp.'.number_format($pecah['harga'])?></td>
                    <td><?php echo 'Rp.'.number_format($sub_harga)?></td>
                  </tr>
                  <?php $nomor++;?>
                  <?php $total+=$sub_harga;?>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <div class="row">
                <div class="col-xl-8">
                  <p class="ms-3">Silahkan Mentransfer Ke Bank BCA Dengan Nomor 12345679</p>
                </div>
                <div class="col-xl-3">
                  <ul class="list-unstyled">
                  <li class="text-muted ms-3"><span class="text-black me-4">Total</span><?php echo 'Rp.'.number_format($total)?></td></li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-10">
                  <p>Terima Kasih Telah Melakukan Service Di Bengkel Sahara</p>
                </div>
              </div>
      
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        window.print();
      </script>
</body>
</html>