<?php
session_start();

$_SESSION["user"] = "Manuel";
echo "Iniciando sesion para " . $_SESSION["user"];
?>
