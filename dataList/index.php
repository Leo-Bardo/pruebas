<?php
    include("../conexion.php");
    $con = conectar();
    if($con){
        $sql = "SELECT idMateriaPrima, materiaPrima FROM materias_primas";
        $resultadoMateriaPrima = $con->query($sql);

        $sql = "SELECT idAccion, accion FROM acciones";
        $resultadoAccion = $con->query($sql);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DataList</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<form id="formulario">
    <label for="parametro">ACCIÓN: </label>
    <input type="text" id="parametro" name="parametro" list="parametros">
    <datalist id="parametros">
        <?php
        if ($resultadoAccion->num_rows > 0) {
            while ($fila = $resultadoAccion->fetch_assoc()) {
                echo "<option value='" . $fila["accion"] . "'>" . $fila["accion"] . "</option>";
            }
        }
        ?>
    </datalist>
<br>
<br>
    <label for="materiaPrima">MATERIA PRIMA:</label>
    <input type="text" id="materiaPrima" name="materiaPrima" list="materiasPrimas">
    <datalist id="materiasPrimas">
        <?php
        if ($resultadoMateriaPrima->num_rows > 0) {
            while ($fila = $resultadoMateriaPrima->fetch_assoc()) {
                echo "<option value='" . $fila["materiaPrima"] . "'>" . $fila["materiaPrima"] . "</option>";
            }
        }
        ?>
    </datalist>
    <label>COMPLEMENTO: <input type="text" name="complemento" id="complemento" value=""></label>
<br>
<br>
    <label>UNIDAD: <input type="text" name="unidad" id="unidad" value=""></label>

    <button type="button" id="agregar">AGREGAR</button>
</form>
<br> 
<table class="tbl" id="tablaParametros">
    <thead>
        <tr>
            <th colspan="3">PARAMETROS PARA REPORTE DIARIO DE PREPARACIÓN</th>
        </tr>

    </thead>
    <tbody id="cuerpoTabla">
    </tbody>
</table>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const formulario = document.getElementById("formulario");
    const parametroInput = document.getElementById("parametro");
    const materiaPrimaInput = document.getElementById("materiaPrima");
    const complementoInput = document.getElementById("complemento");
    const unidadInput = document.getElementById("unidad");
    const agregarBtn = document.getElementById("agregar");
    const cuerpoTabla = document.getElementById("cuerpoTabla");

    agregarBtn.addEventListener("click", function() {
        const valorParametro = parametroInput.value;
        const valorMateriaPrima = materiaPrimaInput.value;
        const valorComplemento = complementoInput.value;
        const valorUnidad = unidadInput.value;

        // Crear una nueva fila en la tabla y agregar los valores seleccionados
        const nuevaFila = document.createElement("tr");

        // Concatenar los valores en una sola cadena
        const contenidoCelda = valorParametro + " " + valorMateriaPrima  + " " + valorComplemento + " " + valorUnidad;

        // Agregar la celda con el contenido concatenado
        const nuevaCelda = document.createElement("td");
        nuevaCelda.textContent = contenidoCelda;
        nuevaFila.appendChild(nuevaCelda);

        cuerpoTabla.appendChild(nuevaFila);

        // Limpiar los inputs después de agregar los valores a la tabla
        parametroInput.value = "";
        materiaPrimaInput.value = "";
        complementoInput.value = "";
        unidadInput.value = "";
    });
});


</script>
</body>
</html>