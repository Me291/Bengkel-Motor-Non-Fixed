<?php
$conn = mysqli_connect("localhost", "root", "", "project");
function registrasi($data)

{
    global $conn;

    $nama = mysqli_real_escape_string($conn, $data['nama_barang']);
    $merk = mysqli_real_escape_string($conn, $data['merk']);
    $jumlah = mysqli_real_escape_string($conn, $data['jumlah']);
    $harga = mysqli_real_escape_string($conn, $data['harga']);
    $harga_total = mysqli_real_escape_string($conn, $data['harga_total']);

    mysqli_query($conn, "INSERT INTO pembayaran VALUES ('', '$nama', '$merk','$jumlah','$harga','$harga_total')");
    return mysqli_affected_rows($conn);
}
?>