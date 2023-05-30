<?php 
    $usuario=$_POST["usuario"];
    $pass=$_POST["pass"];
    $cadena=$usuario.':'.$pass;
    if( strpos(file_get_contents("./usuarios.txt"),$cadena) !== false) {
        echo "Usuario logueado";
    }
    else {
        echo "Usuario o contraseña incorrectos";
    }
?>