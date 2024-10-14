<?php
require_once __DIR__.'/../model/ModeloLibro.php';
require_once __DIR__.'/../view/VistaLibro.php';

class ControladorLibros {
    private $modelo;
    private $vista;

    public function __construct() {
        $this->modelo = new ModeloLibro();
        $this->vista = new VistaLibro();
    }

    public function manejarSolicitud() {
        $accion = '';
        if (isset($_GET['accion'])) {
            $accion = $_GET['accion'];
        }

        switch ($accion) {
            case 'agregar':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $id = $_POST['id'];
                    $nombre = $_POST['nombre'];
                    $this->modelo->agregarLibro($id, $nombre);
                }
                $this->vista->mostrarFormularioAgregar();
                break;
                
            case 'listar':
                $this->mostrarLibros();
                break;

            default:
                $this->vista->mostrarMenu();
                break;
        }
    }

    private function mostrarLibros() {
        $libros = $this->modelo->obtenerLibros();
        $this->vista->mostrarLibros($libros);
    }
}
?>
