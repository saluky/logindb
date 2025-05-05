<?php
session_start();
require_once 'db.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    
   // if (password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        header("Location: dashboard.php");
        exit();
   // } else {
   //     echo "<script>alert('Password salah!'); window.location='login.php';</script>";
   // }
} else {
    echo "<script>alert('Username tidak ditemukan!'); window.location='login.php';</script>";
}

$stmt->close();
$conn->close();
?>
