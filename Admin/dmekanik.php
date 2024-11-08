<?php
$conn = mysqli_connect("localhost", "root", "", "project");
function registrasi($data)
{
    global $conn;

    $username = mysqli_real_escape_string($conn, $data['nama']);
    $bagian = mysqli_real_escape_string($conn, $data['bagian']);
    $jeniskelamin = mysqli_real_escape_string($conn, $data['jeniskelamin']);
    $ttl = mysqli_real_escape_string($conn, $data['ttl']);
    $id_admin = mysqli_real_escape_string($conn, $data['id_admin']);
    $alamat = mysqli_real_escape_string($conn, $data['alamat']);
    $no_telpon = mysqli_real_escape_string($conn, $data['no_telpon']);
    $result = mysqli_query($conn, "SELECT nama FROM admin WHERE nama = '$username'");

    if (mysqli_fetch_assoc($result))
    {
        echo "<script>
            alert('Mekanik sudah Terdaftar');
            </script>";
        return false;
    }

    mysqli_query($conn, "INSERT INTO admin VALUES ('', '$username', '$bagian','$jeniskelamin','$ttl', '$id_admin','$alamat','$no_telpon')");
    return mysqli_affected_rows($conn);
}
?>