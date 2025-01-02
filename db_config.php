<?php
$host = 'localhost';
$dbname = 'login_system';
$username = 'root'; // Cambia esto si tienes un usuario distinto
$password = ''; // Cambia esto si tienes una contraseña configurada

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
