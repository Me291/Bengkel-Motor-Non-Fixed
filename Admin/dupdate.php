<?php
$conn = mysqli_connect("localhost", "root", "", "project");
function registrasi($data)
{
    global $conn;

    $nama = mysqli_real_escape_string($conn, $data['nama']);
    $nokendaraan = mysqli_real_escape_string($conn, $data['nokendaraan']);
    $nomorantrian = mysqli_real_escape_string($conn, $data['nomorantrian']);
    $jenismotor = mysqli_real_escape_string($conn, $data['jenismotor']);
    $status = mysqli_real_escape_string($conn, $data['status']);
    $result = mysqli_query($conn, "SELECT no_kendaraan FROM konsumen WHERE no_kendaraan = '$nokendaraan'");

    if (mysqli_fetch_assoc($result))
    {
        echo "<script>
            alert('Kendaraan sudah Terdaftar');
            </script>";
        return false;
    }

    mysqli_query($conn, "INSERT INTO konsumen VALUES ('', '$nama', '$nokendaraan', '$nomorantrian', '$jenismotor','$status')");
    return mysqli_affected_rows($conn);
}
?>