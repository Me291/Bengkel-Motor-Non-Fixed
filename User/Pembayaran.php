<?php
require 'dpembayarankonsumen.php';

if(isset($_POST['submit']))
{
	if(registrasi($_POST) > 0)
	{
		echo "<script>
		alert('Berhasil Melakukan Pembayaran');
		</script>";
		echo "<meta http-equiv='refresh' content='1;url=Menu.php'>";
	}  else {
		echo mysqli_error($conn);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">

    <form action="" method="post">
        <div class="row">
            <div class="col">
                <h3 class="title">Pembayaran</h3>
                <div class="inputBox">
                    <span>Nama Lengkap :</span>
                    <input type="text" required name="nama">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" required name="email"> 
                </div>
                <div class="inputBox">
                    <span>No Telepon :</span>
                    <input type="text" required name="no_telepon">
                </div>
                <div class="inputBox">
                    <span>Nama Bank Pemilik :</span>
                    <input type="option" required name="nama_pemilik">
                </div>
                <div class="inputBox">
                    <span>No Rekening :</span>
                    <input type="text" required name="nomor_rekening">
                </div>
            </div>
            <div class="col">
                <h3 class="title">Kartu Kredit</h3>
                <div class="inputBox">
                    <span>Kartu Digunakan :</span>
                    <img src="card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Nama Penerima :</span>
                    <input type="text" required name="nama_penerima">
                </div>
                <div class="inputBox">
                    <span>Nomor Rekening Tujuan :</span>
                    <input type="text" required name="nomor_tujuan">
                </div>
                <div class="inputBox">
                    <span>Nama Bank Tujuan :</span>
                    <input type="text" required name="nama_bank">
                </div>
                <div class="inputBox">
                    <span>Jumlah Yang Harus Dibayarkan :</span>
                    <input type="text" required name="jumlah">
                </div>
            </div>
        </div>
        <input type="submit" name="submit" value="KONFIRMASI PEMBAYARAN" class="submit-btn">
    </form>

</div>    
    
</body>
</html>