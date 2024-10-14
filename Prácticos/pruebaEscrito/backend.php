<?php
include 'conexion.php';

$stmt = $pdo->prepare("SELECT id, nombre, tipo, tamaño, dueño FROM Herramientas");
$stmt->execute();
$herramientas = $stmt->fetchAll(PDO::FETCH_ASSOC);

header(header: 'Content-Type: application/json');
echo json_encode($herramientas);
?>
