<?php

class Alumno {
    private $ci;
    private $nombre;
    private $apellido;
    private $pdo;

    public function __construct($ci = '', $nombre = '', $apellido = '') {
        $this->ci = $ci;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        
        try {
            $this->pdo = new PDO('mysql:host=192.168.56.104;port=3306;dbname=escuela', 'pedro', '1234');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Error de conexión: ' . $e->getMessage());
        }
    }

    public function registrar() {
        $sql = "INSERT INTO alumno (ci, nombre, apellido) VALUES (:ci, :nombre, :apellido)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':ci', $this->ci);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':apellido', $this->apellido);
        return $stmt->execute();
    }

    public function borrar($ci) {
        $sql = "DELETE FROM alumno WHERE ci = :ci";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':ci', $ci);
        return $stmt->execute();
    }

    public function listar() {
        $sql = "SELECT * FROM alumno";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscar($ci) {
        $sql = "SELECT * FROM alumno WHERE ci = :ci";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':ci', $ci);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>
