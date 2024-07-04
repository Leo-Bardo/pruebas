<?php
include '../conexion.php';
include 'data.json';
$con = conectar();





// CONTRUCCIÓN DE CONSULTA SQL PARA EQUIPOS A PARTIR DE METODOS
$sqlEquipoMetodo = "SELECT metodos.*, equipos.equipo FROM metodos INNER JOIN equipos ON metodos.equipo = equipos.idEquipo ORDER BY idMetodo LIMIT 6";
$resultadoEquipoMetodo = $con->query($sqlEquipoMetodo);

// $valorFormula = "SELECT formula FROM formulas";
// $idResultadoFormula = $con->query($valorFormula);
// if ($idResultadoFormula->num_rows > 0) {
//     while ($fila = $idResultadoFormula->fetch_assoc()){
//         echo "<option value?'" . $fila["formula"] . "'>" . $fila["formula"] . "</option>";
//     }
// }



// CONTRUCCIÓN DE CONSULTA JOIN PARA TRAER EL VALOR DE FORMULA DE TABLA METODOS Y COMPARARLA CON LA QUE CONTIENE LA SELECCIÓN DEL PRODUCTO




// $valorProductoLiberado = "SELECT producto FROM liberacion_area";
// $resultadoProductoLiberado = $con->query($valorProductoLiberado);
// if ($resultadoProductoLiberado->num_rows > 0) {
//     while ($fila = $resultadoProductoLiberado->fetch_assoc()){
//         echo "<option value?'" . $fila["producto"] . "'>" . $fila["producto"] . "</option>";
//     }
// }

// echo $resultadoFormula;
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
                    $sqlProductoLiberacion = "SELECT producto FROM liberacion_area ORDER BY fecha DESC, hora DESC LIMIT 1";
                    $resultadoProductoLiberacion = $con->query($sqlProductoLiberacion);

                        if ($resultadoProductoLiberacion->num_rows > 0) {
                            while ($fila = $resultadoProductoLiberacion->fetch_assoc()) {
                                echo "<option value='" . $fila["producto"] . "'>" . $fila["producto"] . "</option>";

                                $valorProductoLiberacion = $fila["producto"];
                                echo $valorProductoLiberacion;
                            }
                        }


// SELECT metodos.*, formulas.formula FROM metodos INNER JOIN formulas ON metodos.formula = formulas.idFormula ORDER BY idMetodo LIMIT 6
// SELECT la.producto, p.producto FROM liberacion_area la INNER JOIN productos p ON la.producto = p.idProducto ORDER BY la.fecha DESC, la.hora DESC LIMIT 1



                    $sqlFormulaMetodo = "SELECT arregloMetodo FROM metodos WHERE formula = $valorProductoLiberacion";
                    $resultadoFormulaMetodo = $con->query($sqlFormulaMetodo);
                        if ($resultadoFormulaMetodo->num_rows > 0) {
                            while ($fila = $resultadoFormulaMetodo->fetch_assoc()) {
                                echo "<option value='" . $fila["arregloMetodo"] . "'>" . $fila["arregloMetodo"] . "</option>";
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