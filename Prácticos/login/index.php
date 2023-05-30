<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio de Sesión</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
  
  <div class="formulario-login">
    <?php 
      include("titulo.php");
    ?>
    <div class="logo">
      <img src="ITSlogo.jpg" alt="Logo">
    </div>
    <form action="response.php" method="post">
      <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>
      <br>
      <input type="password" name="pass" id="pass" placeholder="Contraseña" required>
      <br>
      <input type="submit" value="Iniciar sesión">
      <br>
    </form>
  </div>
</body>
</html>
