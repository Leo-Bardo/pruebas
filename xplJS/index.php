<?php 
include "../conexion.php";
$con = conectar();

// 18 ENERO 23 CONFIGURAR PARA RECIBIR HOMOGENIZDORES DE LA BASE DE DATOS
// CONFIGURAR BBDD PARA SEPARAR EQUIPO DE HOMOGENIZADORES, TANQUES Y DEMAS EQUIPO
    $sql = "SELECT idCliente, cliente FROM clientes";
    $resultadoCliente = $con->query($sql);
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

<form id="miFormulario" action="procesar.php" method="POST">
        <div class="container">
            <h2>Selecciona el área a procesar:</h2>

            <label for="cliente">CLIENTE:</label>
            <select id="cliente" name="cliente" class="cliente" required>
                <option value="">Selecciona un cliente</option>
                <?php
                if ($resultadoCliente->num_rows > 0) {
                    while ($fila = $resultadoCliente->fetch_assoc()) {
                        echo "<option value='" . $fila["idCliente"] . "'>" . $fila["cliente"] . "</option>";
                    }
                }
                ?>
            </select>
            <br>
            <!-- FIN TEMPORAL DEL DIV -->
        </div>

    <div id="contador">Número de Lote: 1</div>
    <label for="dato">Dato:</label>
    <input type="text" id="dato" name="dato" required>
    <button type="button" id="enviarBtn">Enviar y Incrementar</button>
</form>


<script src="js/script.js"></script>

</body>
</html>