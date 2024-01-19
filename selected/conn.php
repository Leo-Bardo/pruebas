<?php
include("../conexion.php");

$con = conectar();

if (isset($_GET['cliente'])) {
    $cliente = $con->real_escape_string($_GET['cliente']);

    // Consulta SQL
    $sql = "SELECT idproducto, producto FROM productos WHERE cliente = '$cliente'";


    // Ejecutar la consulta y manejar errores
    $resultadoProducto = $con->query($sql);

    if (!$resultadoProducto) {
        header("HTTP/1.1 500 Internal Server Error");
        echo "Error en la consulta SQL: " . $con->error;
        exit();
    }

    // Procesar resultados y enviar JSON
    $data = [];
    if ($resultadoProducto->num_rows > 0) {
        while ($row = $resultadoProducto->fetch_assoc()) {
            $data[] = $row;
        }
    }

    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    header("HTTP/1.1 400 Bad Request");
    echo "Parámetro 'cliente' no proporcionado";
}

// Cerrar la conexión
$con->close();
?>