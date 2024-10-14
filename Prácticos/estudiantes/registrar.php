try {
    $db = new PDO('mysql:host=localhost;dbname=escuela', 'usuario', 'contraseña');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $nombre = $_POST['nombre'];
    $curso = $_POST['curso'];
    $consulta = $db->prepare('SELECT * FROM estudiantes WHERE nombre = :nombre OR curso = :curso');
    $consulta->bindParam(':nombre', $nombre);
    $consulta->bindParam(':curso', $curso);
    $consulta->execute();
    $estudiantes = $consulta->fetchAll(PDO::FETCH_ASSOC);
    if (empty($estudiantes)) {
        print "No se encontraron estudiantes con el nombre o curso especificados.";
        die();
    }
    // Aquí puedes manejar los registros obtenidos
    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Registro del Estudiante</title>";
    echo "<link rel='stylesheet' href='css/estilos.css'>";
    echo "</head>";
    echo "<body>";
    echo "<div class='container'>";
    echo "<h1>Registro del Estudiante</h1>";
    echo "<form action='registrar.php' method='post'>";
    echo "<label for='nombre'>Nombre del Estudiante:</label>";
    echo "<input type='text' id='nombre' name='nombre' required>";
    echo "<label for='curso'>Curso del Estudiante:</label>";
    echo "<input type='text' id='curso' name='curso' required>";
    echo "<input type='submit' value='Buscar'>";
    echo "</form>";
    echo "<div class='table-container'>";
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>Edad</th>";
    echo "<th>Curso</th>";
    echo "<th>Email</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($estudiantes as $estudiante) {
        echo "<tr>";
        echo "<td>" . $estudiante['nombre'] . "</td>";
        echo "<td>" . $estudiante['edad'] . "</td>";
        echo "<td>" . $estudiante['curso'] . "</td>";
        echo "<td>" . $estudiante['email'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
