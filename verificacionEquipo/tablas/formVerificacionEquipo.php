<?php
    include("../../../../conexion.php");
    $con = conectar();

    // Realiza la consulta para obtener el área liberada
    $sql = "SELECT codigoLiberacion FROM liberacion_area";
    $resultadoLiberacion = $con->query($sql);

    $sql = "SELECT idEquipo,equipo FROM equipos";
    $resultadoEquipo = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Verificación de Equipos de Preparación</title>
    <link rel="stylesheet" href="css/tblstyles.css">
</head>
<body>
    <iframe src="/encabezado.html" class="miClaseIframe"></iframe>
    <form action="procesar.php" method="POST">
        <h1>VERIFICACIÓN DE EQUIPOS DE PREPARACIÓN</h1>
        <label class="selectores" for="area">CÓDIGO DE ÁREA:
            <select id="liberacionArea" name="liberacionArea" class="liberacionArea" required>
                    <option value="">Selecciona el área liberada</option>
                    <?php
                    if ($resultadoLiberacion->num_rows > 0) {
                        while ($fila = $resultadoLiberacion->fetch_assoc()) {
                            echo "<option value='" . "'>" . $fila["codigoLiberacion"] . "</option>";
                        }
                    }
                    ?>
            </select>
        </label>
<br>
        <label  class="selectores" for="equipo" id="equipo">EQUIPO:
            <select name="Selecciona una opción" class="liberacionArea" required>
                    <option value="">Selecciona un Equipo</option>
                    <?php
                    if ($resultadoEquipo->num_rows > 0) {
                        while ($fila = $resultadoEquipo->fetch_assoc()) {
                            echo "<option value='" . $fila["idEquipo"] . "'>" . $fila["equipo"] . "</option>";
                        }
                    }
                    ?>
            </select>
        </label>
<br>

<!-- Revisar el input con script para la hora, por que no interactua con el form? cosa que esta excelente -->
<!-- Implementar el envio para consulta y que arroje la tabla correcta en base a la seleccion del equipo y el area a trabajar -->
        <input class="controlForm" id="mostrarHora" type="button" value="Aceptar">
        <button class="buttonAceptar" id="mostrarTablaButton" type="button">Mostrar Tabla</button>
        <iframe id="tablaFrame" style="display: none; width: 100%; height: 400px;"></iframe>
        <label id="horaLabel"></label>

        <!-- MOSTRAR HORA DE CONSULTA DE TABLA -->
    <script>
        // Para el minutero solo muestra un numero!
        // Para imprimir la hora y quede fija
        document.getElementById("mostrarHora").addEventListener("click", function() {
            var horaActual = obtenerHoraActual();
            document.getElementById("horaLabel").innerHTML = "Hora: " + horaActual;
        });

        function obtenerHoraActual() {
            var fecha = new Date();
            var horas = fecha.getHours();
            var minutos = fecha.getMinutes();
            var segundos = fecha.getSeconds();

            // Formatear la hora en un formato legible
            var horaFormateada = horas + ":" + minutos + ":" + segundos;

            return horaFormateada;
        }
    </script>

        <!-- CARGA DE TABLAS MEDIANTE JS -->
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






<!-- REVISAR SCRIPT 291123 -->
    <script>
// const selectArea = document.querySelectorAll(".toggleButton");

// selectArea.forEach(selectElement => {
//     selectElement.addEventListener("click", (event) => {
//         const resultadoArea = document.querySelector(".resultado-area");
//         resultadoArea.textContent = `Tu selección es ${event.target.value}`;

//         document.getElementById("seleccionArea").value = event.target.value;
//     });
// });

// // Estas líneas de código son para mostrar resultados de consultas
// const selectProducto = document.querySelector(".producto");
// selectProducto.addEventListener("change", (event) => {
//     const resultadoProducto = document.querySelector(".resultado-producto");
//     resultadoProducto.textContent = `Tu producto ${event.target.value}`;
// });

</script>



</body>
</html>