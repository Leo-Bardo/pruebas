<?php
    include("../conexion.php");
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
	<title>Consulta de Reportes</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <!-- <iframe src="/encabezado.html" class="miClaseIframe"></iframe> -->
    <form action="procesar.php" method="POST">
        <h1>CONSULTA DE REPORTES</h1>
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

        <label for="equipo">EQUIPO:</label>
            <select name="equipo" id="equipo" class="equipo" required>
                    <option value="">Selecciona un Equipo</option>
                    <?php
                    if ($resultadoEquipo->num_rows > 0) {
                        while ($fila = $resultadoEquipo->fetch_assoc()) {
                            echo "<option value='" . $fila["equipo"] . "'>" . $fila["equipo"] . "</option>";
                        }
                    }
                    ?>
            </select>
        </label>
<br>
            </form>
        <!-- MOSTRAR HORA DE CONSULTA DE TABLA -->
    <script>
        // Para el minutero solo muestra un numero!
        // Para imprimir la hora y quede fija
        // document.getElementById("mostrarHora").addEventListener("click", function() {
        //     var horaActual = obtenerHoraActual();
        //     document.getElementById("horaLabel").innerHTML = "Hora: " + horaActual;
        // });

        // function obtenerHoraActual() {
        //     var fecha = new Date();
        //     var horas = fecha.getHours();
        //     var minutos = fecha.getMinutes();
        //     var segundos = fecha.getSeconds();

        //     // Formatear la hora en un formato legible
        //     var horaFormateada = horas + ":" + minutos + ":" + segundos;

        //     return horaFormateada;
        // }
    </script>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Reportes</title>
</head>
<body>

<form action="conReportes.php" method="POST">
    <label for="area">CÓDIGO DE ÁREA:</label>
    <select name="area" id="area">
        <option value="area1">Área 1</option>
        <option value="area2">Área 2</option>
        <!-- Agrega más opciones según tus áreas -->
    </select>

    <br>

    <label for="fecha_inicio">Fecha de Inicio:</label>
    <input type="date" name="fecha_inicio">

    <label for="fecha_fin">Fecha de Fin:</label>
    <input type="date" name="fecha_fin">

    <br>

    <input type="submit" value="Buscar">
</form>

</body>
</html>






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