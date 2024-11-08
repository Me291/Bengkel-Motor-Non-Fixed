<?php
$conn = mysqli_connect("localhost", "root", "", "project");
function registrasi($data)
{
    global $conn;

    $username = mysqli_real_escape_string($conn, $data['nama']);
    $email = strtolower(stripslashes($data['email']));
    $password = mysqli_real_escape_string($conn, $data['pass']);
    $password2 = mysqli_real_escape_string($conn, $data['pass2']);
    $result = mysqli_query($conn, "SELECT nama FROM daftar WHERE nama = '$username'");

    if (mysqli_fetch_assoc($result))
    {
        echo "<script>
            alert('Username sudah terdaftar');
            </script>";
        return false;
    }

    if ($password != $password2)
    {
        echo "<script>
            alert('Password tidak sesuai, Mohon cek kembali dengan benar');
            </script>";
        return false;
    }

    mysqli_query($conn, "INSERT INTO daftar VALUES ('', '$username', '$email', '$password', '$password2')");
    return mysqli_affected_rows($conn);
}
?>