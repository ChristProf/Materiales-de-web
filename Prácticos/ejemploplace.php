<?php
      $servidor = "localhost";
      $usuario = "jperez";
      $password = "contra123";
      $base = "prueba";
      
      try {
        $conn = new PDO("mysql:host=$servidor;dbname=$base", $usuario, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "INSERT INTO persona (ci, nombre, apellido)
        VALUES (12345678, 'Juan', 'Perez')";
        $conn->exec($sql);
        echo "Se creo el registro en la base de datos";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      
      $conn = null;


