<?php 
// /public/index.php
require_once '../controller/Controlador.php';
require_once '../controllers/ControladorUsuario.php';
require_once '../config/bd.php'; 

$controlador = new Controlador($bd);
$controladorUsuario = new ControladorUsuario($bd);

session_start();

if ($_SERVER['REQUEST_URI'] === '/login') {
    $controlador->login();
} elseif ($_SERVER['REQUEST_URI'] === '/logout') {
    $controlador->logout();
} elseif ($_SERVER['REQUEST_URI'] === '/user' && isset($_SESSION['user_id'])) {
    $controladorUsuario->principal();
} elseif (preg_match('/\/user\/show\/(\d+)/', $_SERVER['REQUEST_URI'], $matches) && isset($_SESSION['user_id'])) {
    $controladorUsuario->mostrar($matches[1]);
} elseif ($_SERVER['REQUEST_URI'] === '/user/create' && isset($_SESSION['user_id'])) {
    $controladorUsuario->crear();
} elseif (preg_match('/\/user\/edit\/(\d+)/', $_SERVER['REQUEST_URI'], $matches) && isset($_SESSION['user_id'])) {
    $controladorUsuario->modific($matches[1]);
} elseif (preg_match('/\/user\/delete\/(\d+)/', $_SERVER['REQUEST_URI'], $matches) && isset($_SESSION['user_id'])) {
    $userController->delete($matches[1]);
} else {
    echo "404 Not Found";
}

?>