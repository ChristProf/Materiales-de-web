<?php 
    class Clase{
        private int $edad;
        private string $nombre;
        private string $apellido;

        function __construct(int $edad, string $nombre, string $apellido){
            $this->edad = $edad;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }

        

        function setEdad(int $edad){
            $this->edad = $edad;
        }

        function getEdad(){
            return $this->edad;
        }

        function getNombre(){
            return $this->nombre;
        }


        function getApellido(){
            return $this->apellido;
        }



        function funcion($arg1, $arg2){
            echo "El primero es ".$arg1." y el segundo es ".$arg2;
        }
    
    
    }
