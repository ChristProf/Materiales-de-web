<?php
session_start();

if(isset($_SESSION["user"])) {
    echo "Bienvenido, " . $_SESSION["user"];
} else {
    echo "No hay usuario en la sesion.";
}
?>
