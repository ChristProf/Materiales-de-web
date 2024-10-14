<?php
$host = 'localhost';
$bd = 'Empresa';
$usuario = 'root'; 
$contra = '1234'; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$bd", $usuario, $contra);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
}


?>
