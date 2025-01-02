<?php
$host = "localhost";
$dbname = "login_system";
$username = "root"; // Cambia si es necesario
$password = ""; // Cambia si es necesario

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
