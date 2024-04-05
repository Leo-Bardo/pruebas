<?php
// Leer los datos recibidos en la solicitud POST
$data = file_get_contents('php://input');

// Decodificar los datos JSON recibidos
$decodedData = json_decode($data, true);

// Imprimir los datos en la consola
if ($decodedData) {
    print_r($decodedData);
} else {
    echo "No se recibieron datos válidos.";
}
?>
