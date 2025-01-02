<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" href="./img/favico.ico" type="image/x-icon">
    <title>SISTEMA DE INVENTARIO EQUIPARK</title>
    <style>
        body {
            /* Color de fondo como respaldo */
            background-color: #f0f0f0; 
            /* Imagen de fondo */
            background-image: url('./imag/fondo.png'); 
            /* Ajustes de la imagen de fondo */
            background-size: cover; /* Escala la imagen para cubrir todo el fondo */
            background-repeat: no-repeat; /* Evita que la imagen se repita */
            background-position: center; /* Centra la imagen */
            margin: 0;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        p {
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="image-section">
            <img src="./imag/Captura25.png" alt="Roles y Usuarios">
        </div>
        <div class="login-form" style="background-color: #ff0000;">
            <h2>Iniciar Sesión</h2>
            <form action="login.php" method="POST">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Ingresar</button>
            </form>
        </div>
        
    </div>
</body>
</html>
