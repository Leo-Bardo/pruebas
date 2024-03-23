<?php 
include("../conexion.php");
$con = conectar();
if ($con) {
	$sql = "SELECT formula FROM formulas";
	$resultadoFormula = $con->query($sql);
}
else{
	"conexion fallida";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Generar Vista de Formula</title>
</head>
<body>
    <label for="formula">FORMULA: </label>

    <input type="text" name="parametro" id="parametro" list="formula">
	    <datalist id="formula">
	        <?php
	        if ($resultadoFormula->num_rows > 0) {
	            while ($fila = $resultadoFormula->fetch_assoc()) {
	                echo "<option value='" . $fila["formula"] . "'>" . $fila["formula"] . "</option>";
	            }
	        }
	        ?>
	    </datalist>
	    <input type="button" name="" value="Aceptar" onclick="mostrar()">
	    <script>
	    	function mostrar(){
	    		let formulaJs = document.getElementById('formula').value;
	    		// console.log(formulaJs);
		          fetch('procesar.php', {
		              method: 'POST',
		              headers: {
		                  'Content-Type': 'application/json'
		              },
		              body: JSON.stringify({ newFormula: formula })
		          })
		          .then(response => {
		              console.log('Valor enviado exitosamente: ' + valorIngresado);
		          })
		          .catch(error => {
		              console.error('Error al enviar el valor:', error);
		          });
		      }
	    </script>
</body>
</html>