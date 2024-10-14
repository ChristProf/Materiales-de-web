<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=escuela', 'usuario', 'contraseña');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $estudiantes = $db->query('SELECT * FROM estudiantes')->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
    <link rel="stylesheet" href="css/estilosListar.css">
    <link rel="stylesheet" href="css/estilosModoOscuro.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Estudiantes</h1>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Curso</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i = 0; $i < count($estudiantes); $i++): ?>
                        <tr>
                            <td><?php echo $estudiantes[$i]['nombre']; ?></td>
                            <td><?php echo $estudiantes[$i]['edad']; ?></td>
                            <td><?php echo $estudiantes[$i]['curso']; ?></td>
                            <td><?php echo $estudiantes[$i]['email']; ?></td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
        <a href="index.html" class="btn">Volver al Inicio</a>
    </div>
</body>
</html>
