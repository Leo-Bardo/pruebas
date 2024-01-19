<?php
// Verificar si se ha enviado información mediante el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener el valor del campo 'dato' del formulario
    $dato = isset($_POST['dato']) ? $_POST['dato'] : '';

    // Procesar la información como sea necesario
    // Puedes realizar operaciones con la base de datos, validaciones, etc.

    // Puedes enviar una respuesta al cliente si es necesario
    echo "Datos recibidos: Dato=$dato";
} else {
    // Si el formulario no ha sido enviado de manera correcta, redireccionar o mostrar un mensaje de error
    header("Location: index.php");
    exit();
}
?>
