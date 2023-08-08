<?php 
    function insertarDatos(){
        $user = "usuario";
        $password = "usuario2023";
        $hostname = "localhost";
        try {
            $dbConnect = new PDO("mysql:host=$hostname:3308;dbname=empresa", $user, $password);
            $dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexion exitosa";
            $ci = $_SESSION['persona']->getCi();
            $nombre = $_SESSION['persona']->getNombre();
            $tel = $_SESSION['persona']->getTel();
            $sql = "INSERT INTO persona (ci, nombre, tel) VALUES (?,?,?)";
            $stmt= $dbConnect->prepare($sql);
            $stmt->execute(array($ci, $nombre, $tel));
            
        }
        catch(PDOException $e) {
            echo "Fallo al conectar: " . $e->getMessage();
        }
    }




?>