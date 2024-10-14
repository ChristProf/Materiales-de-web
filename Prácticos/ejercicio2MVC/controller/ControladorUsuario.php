<?php 
// /controller/ControladorUsuario.php
require_once '../model/Usuario.php';

class ControladorUsuario {
    private $modelo;

    public function __construct($bd) {
        $this->modelo = new Usuario($bd);
    }

    public function principal() {
        $usuarios = $this->modelo->getUsuarios();
        require '../view/usuario/principal.php';
    }

    public function mostrar($ci) {
        $user = $this->modelo->getUsuario($ci);
        require '../view/usuario/consulta.php';
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $datos = [
                'nombre' => $_POST['nombre'],
                'email' => $_POST['email'],
                'contra' => $_POST['contra']
            ];
            $this->modelo->crearUsuario($datos);
            header('Location: /usuario');
        } else {
            require '../view/usuario/alta.php';
        }
    }

    public function modificar($ci) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'nombre' => $_POST['nombre'],
                'email' => $_POST['email'],
                'contra' => $_POST['contra']
            ];
            $this->modelo->modificarUsuario($ci, $datos);
            header('Location: /usuario');
        } else {
            $usuario = $this->modelo->getUsuario($ci);
            require '../view/usuario/modificacion.php';
        }
    }

    public function borrar($ci) {
        $this->modelo->borrarUsuario($ci);
        header('Location: /usuario');
    }
}


?>