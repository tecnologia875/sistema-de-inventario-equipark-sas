<?php
session_start();
require 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE username = :username AND password = SHA2(:password, 256)");
    $stmt->execute(['username' => $username, 'password' => $password]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href='index.php';</script>";
    }
} else {
    header("Location: index.php");
    exit();
}
?>
