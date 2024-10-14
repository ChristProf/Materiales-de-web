<?php
if(isset($_COOKIE["user"])) {
    echo "Hola " . $_COOKIE["user"];
} else {
    echo "No hay cookie 'user' establecida.";
}
?>