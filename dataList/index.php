<?php
    include("../conexion.php");
    $con = conectar();
    if($con){
        $sql = "SELECT idMateriaPrima, materiaPrima FROM materias_primas";
        $resultadoMateriaPrima = $con->query($sql);
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
    <label for="parametro">Seleccionar Materia Prima:</label>
    <input type="text" id="parametro" name="parametro" list="parametros">
    <datalist id="parametros">
        <?php
        if ($resultadoMateriaPrima->num_rows > 0) {
            while ($fila = $resultadoMateriaPrima->fetch_assoc()) {
                echo "<option value='" . $fila["materiaPrima"] . "'>" . $fila["materiaPrima"] . "</option>";
            }
        }
        ?>
    </datalist>
    <button type="button" id="agregar">AGREGAR</button>
</form>
<br> 
<table class="tbl" id="tablaParametros">
    <thead>
        <tr>
            <th>PARAMETROS PARA REPORTE DIARIO DE PREPARACIÓN</th>
        </tr>
    </thead>
    <tbody id="cuerpoTabla">
    </tbody>
</table>
<script>
   document.addEventListener("DOMContentLoaded", function() {
    const formulario = document.getElementById("formulario");
    const parametroInput = document.getElementById("parametro");
    const agregarBtn = document.getElementById("agregar");
    const cuerpoTabla = document.getElementById("cuerpoTabla");

    agregarBtn.addEventListener("click", function() {
        const valorParametro = parametroInput.value;

        // Crear una nueva fila en la tabla y agregar el valor seleccionado
        const nuevaFila = document.createElement("tr");

        // Agregar primera columna con el valor seleccionado
        const nuevaCelda = document.createElement("td");
        nuevaCelda.textContent = valorParametro;
        nuevaFila.appendChild(nuevaCelda);

        cuerpoTabla.appendChild(nuevaFila);

        // Limpiar el input después de agregar el valor a la tabla
        parametroInput.value = "";
    });
});

</script>
</body>
</html>