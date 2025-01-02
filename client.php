<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>Rol: <?php echo htmlspecialchars($_SESSION['role']); ?></p>
    <a href="logout.php">Cerrar sesión</a>