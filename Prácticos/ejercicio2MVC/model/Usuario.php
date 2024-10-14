<?php
// /model/Usuario.php
class Usuario {
    private $bd;

    public function __construct($bd) {
        $this->bd = $bd;
    }

    public function getUsuarios() {
        $query = "SELECT * FROM usuarios";
        $result = $this->bd->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUsuario($ci) {
        $query = "SELECT * FROM usuarios WHERE ci = :ci";
        $stmt = $this->bd->prepare($query);
        $stmt->bindParam(':ci', $ci);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crearUsuario($datos) {
        $query = "INSERT INTO usuarios (ci, nombre, email, contra) VALUES (:ci, :nombre, :email, :contra)";
        $stmt = $this->bd->prepare($query);
        $stmt->bindParam(':ci', $datos['ci']);
        $stmt->bindParam(':nombre', $datos['nombre']);
        $stmt->bindParam(':email', $datos['email']);
        $stmt->bindParam(':contra', password_hash($datos['password'], PASSWORD_BCRYPT));
        return $stmt->execute();
    }

    public function modificarUsuario($ci, $datos) {
        $query = "UPDATE usuarios SET nombre = :nombre, email = :email, contra = :contra WHERE ci = :ci";
        $stmt = $this->bd->prepare($query);
        $stmt->bindParam(':ci', $ci);
        $stmt->bindParam(':nombre', $datos['nombre']);
        $stmt->bindParam(':email', $datos['email']);
        $stmt->bindParam(':contra', password_hash($datos['password'], PASSWORD_BCRYPT));
        return $stmt->execute();
    }

    public function borrarUsuario($ci) {
        $query = "DELETE FROM usuarios WHERE ci = :ci";
        $stmt = $this->bd->prepare($query);
        $stmt->bindParam(':ci', $ci);
        return $stmt->execute();
    }

    public function getUssuarioPorEmail($email) {
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->bd->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
