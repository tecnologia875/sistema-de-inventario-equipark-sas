<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accion = $_POST['accion'];

    if ($accion === 'agregar') {
        $codigo_centro_costos = $_POST['codigo_centro_costos'];
        $centro_costos = $_POST['centro_costos'];
        $ciudad = $_POST['ciudad'] ?? null;
        $marca = $_POST['marca'] ?? null;

        $stmt = $pdo->prepare("INSERT INTO inventario_general_equipark (codigo_centro_costos, centro_costos, ciudad, marca) VALUES (?, ?, ?, ?)");
        $stmt->execute([$codigo_centro_costos, $centro_costos, $ciudad, $marca]);
    } elseif ($accion === 'eliminar') {
        $id = $_POST['id'];
        $stmt = $pdo->prepare("DELETE FROM inventario_general_equipark WHERE id = ?");
        $stmt->execute([$id]);
    }

    header("Location: index.php");
    exit;
}
?>
