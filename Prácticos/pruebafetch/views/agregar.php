<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Alumno</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/estilosAgregar.css">
    <link rel="stylesheet" href="css/estilosModoOscuro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="js/scriptAgregar.js" defer></script>
</head>
<body>
    <div class="theme-switch-wrapper">
        <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="checkbox" />
            <div class="slider"></div>
        </label>
    </div>
    <div class="container">
        <h1>Agregar Alumno</h1>
        <form id="formAgregar">
            <label for="ci">Cédula de Identidad:</label>
            <input type="text" id="ci" name="ci" required>
            
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
            
            <button type="submit">Agregar Alumno</button>
        </form>
        <div id="mensaje"></div>
        <a href="../index.php" class="btn">Volver al Inicio</a>
    </div>
    <script src="js/scriptOscuro.js"></script>
    <script>
        document.getElementById('checkbox').addEventListener('change', toggleTheme);
    </script>

</body>
</html>
