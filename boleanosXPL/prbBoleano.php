<?php
include("../conexion.php");

$con=conectar();

echo "se realizó exitosamente la conexion a la base de datos"
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario con Checkbox</title>
</head>
<body>
    <form action="procesaBoleano.php" method="POST">
        <label for="miCheckbox">Aceptar Términos y Condiciones</label>
        <input type="checkbox" name="miCheckbox" id="miCheckbox">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>