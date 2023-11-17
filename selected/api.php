<?php
include("../conexion.php");

$con = conectar();

if (isset($_GET['continente'])) {
    $continente = $_GET['continente'];

    $sql = "SELECT idPais, pais FROM paises WHERE continente = '$continente'";
    $resultadoPais = $con->query($sql);

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

$con->close();
?>
