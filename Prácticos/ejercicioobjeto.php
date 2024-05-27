<?php 
    include 'ejercicioclase.php';

    $ejemplo = new Clase(23, 'Juan', 'Perez');

    echo "<br>Su edad es ".$ejemplo->getEdad();
    echo "<br>Su nombre es ".$ejemplo->getNombre();
    echo "<br>Su apellido es ".$ejemplo->getApellido();

?>