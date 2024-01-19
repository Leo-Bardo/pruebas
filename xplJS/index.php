<?php 
include "../conexion.php";
$con = conectar();

// 18 ENERO 23 CONFIGURAR PARA RECIBIR HOMOGENIZDORES DE LA BASE DE DATOS
// CONFIGURAR BBDD PARA SEPARAR EQUIPO DE HOMOGENIZADORES, TANQUES Y DEMAS EQUIPO
// EL VALOR 2 DE LA TABLA EQUIPO INDICA LA SELECCIÓN DE HOMOGENIZADORES EXISTENTES, SE PREVEE EL CAMBIO PARA IGUALAR A VALOR VARCHAR
    $sqlHomogenizador = "SELECT idEquipo, equipo FROM equipos WHERE tipoEquipo = 2";
    $resultadoHomogenizador = $con->query($sqlHomogenizador);

        $query = "SELECT la.codigoLiberacion, p.producto AS producto FROM liberacion_area la INNER JOIN productos p ON la.producto = p.idProducto";
        $row = $con -> query($query);
        $row = $row->fetch_assoc();
        $seleccionProducto = $row['producto'];

        $fecha = date(" Y-m-d");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con PHP y jQuery</title>
    <script src="../js/jquery-3.7.1.min.js"></script>

</head>
<body>

<form id="miFormulario" action="controlHomogenizacion.php" method="POST">
        <div class="container">
            <div class="con-producto">
                <label for="producto"><b>PRODUCTO:</b></label>
                <?php
                echo $seleccionProducto;
                ?>
                <label for="fecha"><b>FECHA:</b></label>
                <?php 
                echo $fecha;
                ?>
            </div>
<br>
            <div>
                <br>
                <label for="equipo"><b>HOMOGENIZADOR:</b></label>
                <select id="equipo" name="equipo" class="equipo" required>
                    <option value="">Selecciona un Homogenizador</option>
                    <?php
                    if ($resultadoHomogenizador->num_rows > 0) {
                        while ($fila = $resultadoHomogenizador->fetch_assoc()) {
                            echo "<option value='" . $fila["idEquipo"] . "'>" . $fila["equipo"] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <br>
            <!-- FIN TEMPORAL DEL DIV -->
    <button type="button" id="enviarBtn">Enviar y Incrementar</button>
    <br>
</form> 
<script src="js/script.js"></script>

    <div id="contador"><b>Número de Lote: </b></div>
        <label for="dato">Dato:</label>
        <input type="text" id="dato" name="dato" required>
    </div>

</body>
</html>