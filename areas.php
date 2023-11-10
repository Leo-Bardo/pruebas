<?php
include("conexion.php");

$con=conectar();

echo "se realizó exitosamente la conexion a la base de datos"
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pruebas Areas</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="envarea.php" method="POST" accept-charset="utf-8">
		<input type="submit" class="claseArea" id="identificadorArea" name="area" value="Area 1" />
		<input type="submit" class="claseArea" id="identificadorArea" name="area" value="Area 2" />
		<input type="submit" class="claseArea" id="identificadorArea" name="area" value="Area 3" />
	</form>

	<h1><div class="resultado-area"></div></h1>
	        
</body>
</html>
<!-- este es un ejemplo de 2do commit para comentar esta linea de codigo para la compatibilidad de las cuentas en git -->s