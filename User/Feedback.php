<?php
require 'dfeedback.php';

if(isset($_POST['kirim']))
{
    if(registrasi($_POST) > 0)
    {
        echo "<script>
        alert('Terima Kasih Pesanmu Sudah Diterima');
        </script>";
        echo "<meta http-equiv='refresh' content='1;url=feedback.php'>";
    }  else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kritik dan saran</title>
    <link rel="stylesheet" href="Style Feedback.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="title">
      <div class="left-side">
        <h2>SARAN ATAU KRITIK</h2>
      </div>
      <div class="right-side">
        <p><span>Selamat Datang!</span> Jika anda memiliki saran atau kritik, anda dapat mengisi pesan dibawah ini. kritik dan saran anda sangat berharga untuk kemajuan web kami</p>
      </div>
    </div>

    <div class="container">
      <div class="left-side">
        <div class="item">
          <h3>EMAIL</h3>
          <a href="">tegarshadow.29@gmail.com</a>
        </div>
        <div class="item">
          <h3>PHONE</h3>
          <a href="">(+62) 851-6183-8595</a>
        </div>
        <div class="item">
          <h3>ADDRESS</h3>
          <span>Kmp.Muara Bahari </span>
        </div>
      </div>
      <div class="right-side">
        <form action="" method = "post">
          <div class="top">
            <input type="text" name="nama" placeholder="Name">
            <input type="email" name ="email"placeholder="Email" >
          </div>
          <textarea placeholder="Message" name="message"></textarea>
          <button type = "submit" name="kirim">KIRIM PESAN</button>
          <button type = "submit"><a href="/../Project PHP/Home.php">KEMBALI KE HOME</a></button>
        </form>
      </div>
    </div>
  </body>
</html>
