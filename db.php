<?php
$host = "localhost";
$user = "root";        // ganti sesuai user MySQL Anda
$pass = "";            // ganti jika ada password
$db   = "db_login";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
