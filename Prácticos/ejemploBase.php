<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=empresa', 'scuola', 'Contrasena');
    $statement = $conn->prepare('SELECT * FROM persona');
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    $errors .= $e->getMessage();
}
header('Content-type: application/json; charset=utf-8');
echo json_encode($result);

echo "<table>";
echo "<tr>";
echo "<th>".$row["cedula"]."</tr>";

?>
