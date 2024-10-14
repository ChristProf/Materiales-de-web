<?php
require_once __DIR__.'/controller/ControladorLibros.php';

$controlador = new ControladorLibros();
$controlador->manejarSolicitud();
?>