<?php
include("conexion.php");

$con=conectar();

echo "se realizó exitosamente la conexion a la base de datos"
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pruebas</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h2>Conexión PHP Mysql</h2>



    <h1>
        <?php
    date_default_timezone_set('America/Mexico_City');
    $fechaActual = date("Y-m-d");

    $horaActual = date("h:i:s");

    echo "La fecha es: $fechaActual y la hora es $horaActual " ;
    ?>
    </h1>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    <form action="envUsuario.php" method="POST">
        <label for="nombreRol">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        
        <label for="contrasena">Contraseña:</label>
        <input id="contrasena" name="contrasena" rows="4" required><br><br>
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="" required><br><br>
        
        <input type="submit" value="Guardar">
    </form>
</body>
</html>