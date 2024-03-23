<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dato = $_POST['dato'];

    // Inicializa la variable de sesión si aún no está definida
    if (!isset($_SESSION['datos_temporales'])) {
        $_SESSION['datos_temporales'] = array();
    }

    // Agrega el nuevo dato a la variable de sesión
    $_SESSION['datos_temporales'][] = $dato;

    // Verifica si se alcanzó el número deseado (6 en este caso)
    if (count($_SESSION['datos_temporales']) >= 6) {


        // utilizando los datos almacenados en $_SESSION['datos_temporales']

        // Luego, puedes reiniciar la variable de sesión para futuros datos
        $_SESSION['datos_temporales'] = array();
    }
}
?>

<!-- // Verificar si se ha enviado información mediante el formulario
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     // Obtener el valor del campo 'dato' del formulario
//     $dato = isset($_POST['dato']) ? $_POST['dato'] : '';

//     // Procesar la información como sea necesario
//         // Puedes realizar operaciones con la base de datos, validaciones, etc.

//         // Puedes enviar una respuesta al cliente si es necesario
//     echo "Datos recibidos: Dato=$dato";
// } else {
//     // Si el formulario no ha sido enviado de manera correcta, redireccionar o mostrar un mensaje de error
//     header("Location: index.php");
//     exit();
// } -->
