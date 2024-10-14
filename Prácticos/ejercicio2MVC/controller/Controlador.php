<?php 
// /controller/Controlador.php
require_once '../model/Usuario.php';

class Controlador {
    private $modelo;

    public function __construct($bd) {
        $this->modelo = new Usuario($bd);
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $contra = $_POST['contra'];

            $usuario = $this->modelo->getUssuarioPorEmail($email);

            if ($usuario && password_verify($contra, $usuario['contra'])) {
                session_start();
                $_SESSION['user_id'] = $usuario['ci'];
                header('Location: /usuario');
            } else {
                $error = "Error al ingresar usuario o contraseña";
                require '../view/autenticacion/login.php';
            }
        } else {
            require '../view/autenticacion/login.php';
        }
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header('Location: /login');
    }
}
