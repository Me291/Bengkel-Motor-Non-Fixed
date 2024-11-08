<?php
$conn = mysqli_connect("localhost", "root", "", "project");
function registrasi($data)
{
    global $conn;

    $nama = mysqli_real_escape_string($conn, $data['nama']);
    $email = strtolower(stripslashes($data['email']));
    $nomor_kendaraan = mysqli_real_escape_string($conn, $data['nomor_kendaraan']);
    $no_telepon = mysqli_real_escape_string($conn, $data['nomor_telepon']);
    $jenis_kendaraan = mysqli_real_escape_string($conn, $data['jenis_kendaraan']);
    $result = mysqli_query($conn, "SELECT nomor_kendaraan FROM daftar_service WHERE nomor_kendaraan = '$nomor_kendaraan'");

    if (mysqli_fetch_assoc($result))
    {
        echo "<script>
            alert('Kendaraan Sudah Terdaftar');
            </script>";
        return false;
    }

    mysqli_query($conn, "INSERT INTO daftar_service VALUES ('', '$nama', '$email', '$nomor_kendaraan', '$no_telepon','$jenis_kendaraan')");
    return mysqli_affected_rows($conn);
}
?>