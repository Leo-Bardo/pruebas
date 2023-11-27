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
    <link rel="stylesheet" href="../liberacionArea/css/styles.css">
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

        <button class="buttonAceptar" id="mostrarTabla" type="submit">Mostrar Tabla</button>
        <br>

        <iframe id="tablaFrame" style="display: none; width: 100%; height: 400px;"></iframe>

        <label>Seleccione ✔ si está en buen estado, de lo contrario dejar sin seleccionar y oprimir botón enviar.</label>
    </form>
            <input class="buttonGuardar" id="" type="submit" value="Guardar">
        <input class="buttonEnviar" id="" type="submit" value="Enviar">
        <input class="buttonCancelar" id="" type="submit" value="Cancelar">

<script>
    document.getElementById("equipo").addEventListener("change", function () {
        var equipoSeleccionado = this.value;
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
        } else {
            // Oculta el iframe si no hay equipo seleccionado
            tablaFrame.style.display = "none";
        }
    });
</script>
</body>
</html>
