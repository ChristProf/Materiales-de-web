<?php
    $texto = $_POST["texto"];
    $archivo = "./texto.txt";
    if (strpos(file_get_contents($archivo), $texto) !== false) {
        $mensaje = "El texto '$texto' fue encontrado en el archivo.";
    } else {
        $mensaje = "El texto '$texto' no fue encontrado en el archivo.";
    }
    echo $mensaje;
    
?>
