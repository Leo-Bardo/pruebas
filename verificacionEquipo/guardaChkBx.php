<?php
include("../conexion.php");

$con=conectar();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener el valor del checkbox
    $codLiberacionArea = isset($_POST['codLiberacionArea']) ? $_POST['codLiberacionArea'] : '';
    $actGeneral1 = isset($_POST['actGeneral1']) ? 1 : 0;
    $actGeneral2 = isset($_POST['actGeneral2']) ? 1 : 0;
    $actGeneral3 = isset($_POST['actGeneral3']) ? 1 : 0;
    $actGeneral4 = isset($_POST['actGeneral4']) ? 1 : 0;
    $actGeneral5 = isset($_POST['actGeneral5']) ? 1 : 0;
    $actGeneral6 = isset($_POST['actGeneral6']) ? 1 : 0;
    $actGeneral7 = isset($_POST['actGeneral7']) ? 1 : 0;
    $actGeneral8 = isset($_POST['actGeneral8']) ? 1 : 0;
    $actGeneral9 = isset($_POST['actGeneral9']) ? 1 : 0;
    $actGeneral10 = isset($_POST['actGeneral10']) ? 1 : 0;


    //concatenar codigoLiberacion con "sftgd" u otro codigo para hacer unico codigoActividad xpl - sftgd-1234567890
    $codLiberacionEquipos = "a" . $codLiberacionArea;

    $sql = "INSERT INTO metodo_liberacion_equipos (codLiberacionEquipos, codLiberacionArea, revProcPre, libLimEqu, atp, alergeno, revFunEqu, limUteUti, retUteCor, ordLimAre, revFilLin, manTubDes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $con->prepare($sql);

    $stmt->bind_param("ssiiiiiiiiii", $codLiberacionEquipos, $codLiberacionArea, $actGeneral1, $actGeneral2, $actGeneral3, $actGeneral4, $actGeneral5, $actGeneral6, $actGeneral7, $actGeneral8, $actGeneral9, $actGeneral10);


    if ($stmt->execute()){
        echo "Datos almacenados correctamente en la base de datos.";
    } else {
        echo "Error al almacenar datos: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>


<!-- INSERT INTO `metodo_liberacion_equipos` (`codigoActividad`, `actividad`, `codigoLiberacion`, `status`, `usuRealizo`, `usuVerifico`, `usuReviso`) VALUES ('2', '6', '-14 13 20231123 1148', '1', '6', '6', '32'); -->