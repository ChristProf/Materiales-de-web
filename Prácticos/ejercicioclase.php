<?php 
    class Clase{
        private $edad;
        private $nombre;
        private $apellido;


        function setEdad(int $edad){
            $this->edad = $edad;
        }

        function getEdad(){
            return $this->edad;
        }


        function funcion($arg1, $arg2){
            echo "El primero es ".$arg1." y el segundo es ".$arg2;
        }
    
    
    }
?>