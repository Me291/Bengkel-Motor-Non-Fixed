<?php
$conn = mysqli_connect("localhost", "root", "", "project");

function registrasi($data)
{
    global $conn;

    $username = mysqli_real_escape_string($conn, $data['nama']);
    $email = strtolower(stripslashes($data['email']));
    $message = mysqli_real_escape_string($conn, $data['message']);

    mysqli_query($conn, "INSERT INTO feedback VALUES ('', '$username', '$email', '$message')");
    return mysqli_affected_rows($conn);
}
?>