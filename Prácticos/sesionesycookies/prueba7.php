<?php
session_start();

$user = "Manuel";
$pass = "Scuola";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST["user"] == $user && $_POST["pass"] == $pass) {
        $_SESSION["user"] = $user;
        if(!empty($_POST["remember"])) {
            setcookie("user", $user, time() + 60 * 60 * 24 * 30);
        }
        echo "Inicio de sesion correcto";
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}

if(isset($_COOKIE["user"])) {
    $_SESSION["user"] = $_COOKIE["user"];
    echo "Bienvenido otra vez, " . $_SESSION["user"];
}
?>

<form method="post">
    <label for="user">Usuario: </label><br>
    <input type="text" name="user" required><br>
    <label for="pass">Contraseña: </label><br>
    <input type="password" name="pass" required><br>
    <label for="remember">
        <input type="checkbox" name="remember"> Recordarme
    </label><br>
    <button type="submit">Login</button>
</form>
