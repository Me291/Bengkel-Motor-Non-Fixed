<?php
$conn = mysqli_connect("localhost", "root", "", "project");
function Pendaftaran($data)

{
    global $conn;

    $nama2 = mysqli_real_escape_string($conn, $data['nama2']);
    $email2 = strtolower(stripslashes($data['email2']));
    $alamat = mysqli_real_escape_string($conn, $data['alamat']);
    $nomor_kendaraan2 = mysqli_real_escape_string($conn, $data['nomor_kendaraan2']);
    $no_telepon2 = mysqli_real_escape_string($conn, $data['nomor_telepon2']);
    $jenis_kendaraan2 = mysqli_real_escape_string($conn, $data['jenis_kendaraan2']);
    $result = mysqli_query($conn, "SELECT nomor_kendaraan2 FROM homes WHERE nomor_kendaraan2 = '$nomor_kendaraan2'");

    if (mysqli_fetch_assoc($result))
    {
        echo "<script>
            alert('Kendaraan Sudah Terdaftar');
            </script>";
        return false;
    }

    mysqli_query($conn, "INSERT INTO homes VALUES ('', '$nama2', '$email2','$alamat','$nomor_kendaraan2', '$no_telepon2','$jenis_kendaraan2')");
    return mysqli_affected_rows($conn);
}
?>