<?php
// Comprobar si se ha cargado un archivo
if (isset($_FILES['jsonFile']) && $_FILES['jsonFile']['error'] == UPLOAD_ERR_OK) {
    $jsonString = file_get_contents($_FILES['jsonFile']['tmp_name']);
    $datos = json_decode($jsonString, true); // Decodificar el JSON como un array asociativo
} else {
echo "No cargo JSON";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Array</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Datos del Array</h1>
    <?php
    // Comprobar si el array no está vacío
    if (empty($datos)) {
        echo "<p>No hay datos para mostrar</p>";
    } else {
        // Iterar sobre el array y mostrar los datos
        echo "<ul>";
        foreach ($datos as $dato) {
            echo "<li>" . htmlspecialchars($dato) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
