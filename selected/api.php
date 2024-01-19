<?php
include("../conexion.php");

$con = conectar();

if (isset($_GET['continente'])) {
    $continente = $con->real_escape_string($_GET['continente']);

    // Consulta SQL
    $sql = "SELECT idPais, pais FROM paises WHERE continente = '$continente'";

    // Ejecutar la consulta y manejar errores
    $resultadoPais = $con->query($sql);

    if (!$resultadoPais) {
        header("HTTP/1.1 500 Internal Server Error");
        echo "Error en la consulta SQL: " . $con->error;
        exit();
    }

    // Procesar resultados y enviar JSON
    $data = [];
    if ($resultadoPais->num_rows > 0) {
        while ($row = $resultadoPais->fetch_assoc()) {
            $data[] = $row;
        }
    }

    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    header("HTTP/1.1 400 Bad Request");
    echo "Parámetro 'continente' no proporcionado";
}

// Cerrar la conexión
$con->close();
?>