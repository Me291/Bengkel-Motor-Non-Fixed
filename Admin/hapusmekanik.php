<?php

$ambil = $conn->query("SELECT * FROM profile WHERE idmekanik = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotomekanik = $pecah['foto'];

if (file_exists("Foto_Mekanik/$fotomekanik")) 
{
    unlink("../foto_buku/$fotomekanik");
}

$conn->query("DELETE FROM profile WHERE mekanik = '$_GET[id]'");

echo "<script>alert('Mekanik Terhapus');</script>";
echo "<script>location='Profile Mekanik.php';</script>";

?>