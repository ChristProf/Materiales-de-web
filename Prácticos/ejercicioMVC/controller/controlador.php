<?php 
    require_once("../model/conectar.php");
    require_once("../model/persona.php");
    session_start();
    try {
        $persona = new persona(intval($_POST['ci']), $_POST['nombre'], intval($_POST['tel']));
        $_SESSION['persona'] = $persona;
    } catch (\Throwable $th) {
        echo "Ha ocurrido un error $th";
    }
    insertarDatos();
    echo "<br>Datos ingresados";
    session_destroy();
    header("refresh:5; URL: ../index.php");
?>