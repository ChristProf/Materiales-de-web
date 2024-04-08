<?php
    $texto = $_POST["texto"];
    $archivo = "./texto.txt";
    $fp = fopen($archivo, "w");

    fwrite($fp, $texto);
    fclose($fp);

    header("Location: ejemplo3.html");
    exit();
?>
