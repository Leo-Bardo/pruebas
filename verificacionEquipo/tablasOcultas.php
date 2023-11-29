<?php 
include("../conexion.php");
$con = conectar();

$sql = "SELECT codigoLiberacion FROM liberacion_area";
$resultadoLiberacion = $con->query($sql);

$sql = "SELECT equipo FROM equipos";
$resultadoEquipo = $con->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Verificación de Equipos de Preparación</title>
    <link rel="stylesheet" href="tablas/css/tblStyle.css">
</head>
<body>
    <form action="procesar.php" method="POST">
        <label class="selectores" for="area">CÓDIGO DE ÁREA:
            <select id="liberacionArea" name="liberacionArea" class="liberacionArea" required>
                <option value="">Selecciona el área liberada</option>
                <?php
                if ($resultadoLiberacion->num_rows > 0) {
                    while ($fila = $resultadoLiberacion->fetch_assoc()) {
                        echo "<option value='" . $fila["codigoLiberacion"] . "'>" . $fila["codigoLiberacion"] . "</option>";
                    }
                }
                ?>
            </select>
        </label>
        <br>

        <label for="equipo">EQUIPO:</label>
        <select id="equipo" name="equipo" class="equipo" required>
            <option value="">Selecciona el equipo a usar</option>
            <?php
            if ($resultadoEquipo->num_rows > 0) {
                while ($fila = $resultadoEquipo->fetch_assoc()) {
                    echo "<option value='" . $fila["equipo"] . "'>" . $fila["equipo"] . "</option>";
                }
            }
            ?>
        </select>
        <br>
        <button class="buttonAceptar" id="mostrarTablaButton" type="button">Mostrar Tabla</button>
        <iframe id="tablaFrame" style="display: none; width: 100%; height: 400px;"></iframe>
        
    </form>
<script>
    // Cambiar script a archivo independiente/vinculado
    document.getElementById("mostrarTablaButton").addEventListener("click", function () {
    var equipoSeleccionado = document.getElementById("equipo").value;
    var tablaFrame = document.getElementById("tablaFrame");

        if (equipoSeleccionado === "TANQUE DE PREPARACIÓN") {
            // Muestra el iframe
            tablaFrame.style.display = "block";
            // Carga la URL correspondiente en el iframe
            tablaFrame.src = "tablas/tblTanquePreparacion.php?equipo=" + encodeURIComponent(equipoSeleccionado);
        } else if (equipoSeleccionado === "TANQUE HOLDING") {
            // Muestra el iframe
            tablaFrame.style.display = "block";
            // Carga la URL correspondiente en el iframe
            tablaFrame.src = "tablas/tblTanqueHolding.php?equipo=" + encodeURIComponent(equipoSeleccionado);
        } else if (equipoSeleccionado === "TANQUE PREMIX") {
            // Muestra el iframe
            tablaFrame.style.display = "block";
            // Carga la URL correspondiente en el iframe
            tablaFrame.src = "tablas/tblTanquePremix.php?equipo=" + encodeURIComponent(equipoSeleccionado);
        } else if (equipoSeleccionado === "HOMOGENIZADOR ALEX") {
            // Muestra el iframe
            tablaFrame.style.display = "block";
            // Carga la URL correspondiente en el iframe
            tablaFrame.src = "tablas/tblHomogenizadorAlex.php?equipo=" + encodeURIComponent(equipoSeleccionado);
        } else if (equipoSeleccionado === "TANQUE DE PREMEZCLA") {
            // Muestra el iframe
            tablaFrame.style.display = "block";
            // Carga la URL correspondiente en el iframe
            tablaFrame.src = "tablas/tblTanquePremezcla.php?equipo=" + encodeURIComponent(equipoSeleccionado);
        } else if (equipoSeleccionado === "MARMITA") {
            // Muestra el iframe
            tablaFrame.style.display = "block";
            // Carga la URL correspondiente en el iframe
            tablaFrame.src = "tablas/tblMarmita.php?equipo=" + encodeURIComponent(equipoSeleccionado);
        } else if (equipoSeleccionado === "CIP") {
            // Muestra el iframe
            tablaFrame.style.display = "block";
            // Carga la URL correspondiente en el iframe
            tablaFrame.src = "tablas/tblCip.php?equipo=" + encodeURIComponent(equipoSeleccionado);
        } else if (equipoSeleccionado === "xpl1") {
            // Muestra el iframe
            tablaFrame.style.display = "block";
            // Carga la URL correspondiente en el iframe
            tablaFrame.src = "tablas/tblXpl.php?equipo=" + encodeURIComponent(equipoSeleccionado);
        } else {
            // Oculta el iframe si no hay equipo seleccionado
            tablaFrame.style.display = "none";
        }
    });
</script>
</body>
</html>
