<?php
      $servidor = "192.168.56.104";
      $usuario = "juan";
      $password = "Juan123";
      $base = "prueba";
      
      try {
        $conn = new PDO("mysql:host=$servidor;dbname=$base", $usuario, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $conn->prepare("SELECT * FROM persona");
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $fila) {
            foreach($fila as $campo => $valor) {
                echo "$campo: $valor<br>";
            }
            echo "<br>";
        }
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
      
    $conn = null;
