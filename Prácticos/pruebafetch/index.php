<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    <link rel="icon" type="image/x-icon" href="views/img/favicon.ico">
    <link rel="stylesheet" href="views/css/estilosPrincipal.css">
    <link rel="stylesheet" href="views/css/estilosModoOscuro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="views/js/scriptOscuro.js" defer></script>
</head>
<body>
    <div class="theme-switch-wrapper">
        <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="checkbox" />
            <div class="slider"></div>
        </label>
    </div>  
    <div class="container">
        <img src="views/img/itsLogov3.png" alt="logoITS" width="200" height="200">
        <h1>Sistema de Gestión de Alumnos</h1>
        <a href="views/agregar.php" class="btn">Agregar Alumno</a>
        <a href="views/borrar.php" class="btn">Borrar Alumno</a>
        <a href="views/listar.php" class="btn">Listar Alumno</a>
        <a href="views/buscar.php" class="btn">Buscar Alumno</a>
    </div>
</body>
</html>
