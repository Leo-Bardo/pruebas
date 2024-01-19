<?php
include("../conexion.php");

$con=conectar();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener el valor del checkbox
    $aceptado = isset($_POST['miCheckbox']) ? 1 : 0;

    $sql = "INSERT INTO status (status) VALUES (?)";

    $stmt = $con->prepare($sql);

    $stmt->bind_param("i", $aceptado);

    if ($stmt->execute()) {
        echo "Datos almacenados correctamente en la base de datos.";
    } else {
        echo "Error al almacenar datos: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>
