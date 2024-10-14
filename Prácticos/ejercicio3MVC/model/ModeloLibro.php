<?php
class ModeloLibro {
    private $libros;

    public function __construct() {
        // Iniciar la sesión si no está iniciada
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['libros'])){
            $this->libros = $_SESSION['libros'];
        } else{
            $this->libros = [];
        }
    }

    public function agregarLibro($id, $nombre) {
        $this->libros[$id] = $nombre;
        $_SESSION['libros'] = $this->libros;
    }

    public function obtenerLibros() {
        return $this->libros;
    }
}