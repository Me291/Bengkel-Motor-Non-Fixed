<?php
$conn = mysqli_connect("localhost", "root", "", "project");
function registrasi($data)

{
    global $conn;

    $nama = mysqli_real_escape_string($conn, $data['nama']);
    $email = strtolower(stripslashes($data['email']));
    $no_telepon = mysqli_real_escape_string($conn, $data['no_telepon']);
    $nama_pemilik = mysqli_real_escape_string($conn, $data['nama_pemilik']);
    $nomor_rekening = mysqli_real_escape_string($conn, $data['nomor_rekening']);
    $nama_penerima = mysqli_real_escape_string($conn, $data['nama_penerima']);
    $nomor_tujuan = mysqli_real_escape_string($conn, $data['nomor_tujuan']);
    $nama_bank = mysqli_real_escape_string($conn, $data['nama_bank']);
    $jumlah = mysqli_real_escape_string($conn, $data['jumlah']);

    mysqli_query($conn,"INSERT INTO pembayaran_konsumen VALUES ('', '$nama','$email','$no_telepon','$nama_pemilik','$nomor_rekening','$nama_penerima','$nomor_tujuan','$nama_bank','$jumlah')");
    return mysqli_affected_rows($conn);
}
?>