<?php
include '../conexion.php';
include 'data.json';
$con = conectar();

$sqlCodigoLiberacion = "SELECT codigoLiberacion FROM liberacion_area";
$resultadoCodigoLiberacion = $con->query($sqlCodigoLiberacion);

$sqlEquipoMetodo = "SELECT metodos.*, equipos.equipo FROM metodos INNER JOIN equipos ON metodos.equipo = equipos.idEquipo ORDER BY idMetodo  LIMIT 1";

$resultadoEquipoMetodo = $con->query($sqlEquipoMetodo);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diario de Preparación</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
                    <?php
            if ($resultadoCodigoLiberacion->num_rows > 0) {
                while ($fila = $resultadoCodigoLiberacion->fetch_assoc()) {
                    echo "<option value='" . $fila["codigoLiberacion"] . "'>" . $fila["codigoLiberacion"] . "</option>";
                }
            }
                    ?>
    <h1>DIARIO DE PREPARACIÓN</h1>

    <div class="tabsNav">
       <div class="tab">
              <input type="radio" name="tabs" id="t1" checked>
              <label for="t1" >
                    <?php
                    if ($resultadoEquipoMetodo->num_rows > 0) {
                        while ($fila = $resultadoEquipoMetodo->fetch_assoc()) {
                            echo "<option value='" . $fila["equipo"] . "'>" . $fila["equipo"] . "</option>";
                        }
                    }
                    ?>
              </label>
              <div class="containerJsonMetodo">
                <?php
                if (empty($datos)) {
                    echo "<p>No hay datos para mostrar</p>";
                } else {
                    // Iterar sobre el array y mostrar los datos
                    echo "<ul>";
                    foreach ($datos as $dato) {
                        echo "";
                        echo "<li><input type='checkbox' name='' value=''>" . htmlspecialchars($dato) . "</li>";
                    }
                    echo "</ul>";
                }
                ?>
                </div>

        </div>
   <div class="tab">
      <input type="radio" name="tabs" id="t2">
      <label for="t2">EQUIPO 2</label>
      <div>
            <?php
                if (empty($datos)) {
                    echo "<p>No hay datos para mostrar</p>";
                } else {
                    // Iterar sobre el array y mostrar los datos
                    echo "<ul>";
                    foreach ($datos as $dato) {
                        echo "";
                        echo "<li><input type='checkbox' name='' value=''>" . htmlspecialchars($dato) . "</li>";
                    }
                    echo "</ul>";
                }
            ?>
        </div>
   </div>
   <div class="tab"> 
      <input type="radio" name="tabs" id="t3">
      <label for="t3">EQUIPO 3</label> 
      <div>
            <?php
                if (empty($datos)) {
                    echo "<p>No hay datos para mostrar</p>";
                } else {
                    // Iterar sobre el array y mostrar los datos
                    echo "<ul>";
                    foreach ($datos as $dato) {
                        echo "";
                        echo "<li><input type='checkbox' name='' value=''>" . htmlspecialchars($dato) . "</li>";
                    }
                    echo "</ul>";
                }
            ?>
        </div>
   </div>
</div>
<input type="button" name="" value="aceptar">
</body>
</html>

