<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo Status</title>
    <link rel="stylesheet" type="text/css" href="../../../css/formStyles.css">
</head>
<body>
    <iframe src="../../../encabezado.html" class="miClaseIframe"></iframe>
    <form action="envStatus.php" method="POST">
        <h2></h2>
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" required><br><br>
        
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" rows="4" required></textarea><br><br>
        
        <label for="color">Color:</label>
        <input type="text" id="color" name="color" required><br><br>
        
        <label for="icono">Icono:</label>
        <input type="text" id="icono" name="icono" required><br><br>
        
        <input type="submit" value="Crear Status">
        <input type="button" value="Cancelar" onclick="location.href='../altas.php'">
    </form>
</body>
</html> 
<!-- Se vuelve a ejecutar el env si se preciona el boton regresar despues de haber enviado una primera vez los datos -->