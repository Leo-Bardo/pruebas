<?php
include("conexion.php");
$con = conectar();
if ($con) {

  $sql = "SELECT valorAsi FROM asin ORDER BY idAsi DESC";
  $row = $con->query($sql);
  $fila = $row->fetch_assoc();
  $resultadoValor = ($fila["valorAsi"]);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Asincronia</title>
	<link rel="stylesheet" href="">
</head>
<body>
<!-- manipulación de valores de mysql con php para presentar con variables de JS -->
  <div id="chart1" class="bar-chart secondary" data-total="42" animated>
    <span class="rojo" style="width:42%; border: solid 1px darkred;"></span>
    <span class="amarillo" style="width: 42%; border: solid 1px yellow;"></span>
  </div>
  <br><br>
  <div>
      <label>INGRESAR EL VALOR: <input type="text" id="valorUno" value=""></label>
      <input type="button" name="" value="ACEPTAR" onclick="clikear()">
      <input type="button" name="" value="SALIR" onclick="location.href='../index.php'">
      <!-- <label id="valorUnoEtiqueta"></label> -->
      <br>
          <!-- <span class="verde" id="valorUnoEtiqueta" style="width: 42%; border: solid 1px greenyellow;"></span> -->
  </div>
  <!-- <label>#valorUno <input type="" name="" value="<script>console.log(valorUno);</script>"></label> -->
    
  </div>
  <!-- el objetivo de esta practica es usar valores JS para procesar con PHP y alimentar la base de datos -->
  <script>
    function clikear(){
  var miVariable = " Valor Variable: ";
  // Realiza una solicitud AJAX para enviar la variable al script PHP
  fetch('procesar.php', {
      method: 'POST',  // Utiliza el método POST para enviar datos al servidor
      headers: {
          'Content-Type': 'application/json'  // Especifica que el contenido es JSON
      },
      body: JSON.stringify({ variable: miVariable })  // Convierte la variable JavaScript a formato JSON y envíala en el cuerpo de la solicitud
  })
  .then(response => {
      // Maneja la respuesta del servidor si es necesario
      console.log('Variable enviada exitosamente' + miVariable);
  })
  .catch(error => {
      // Maneja cualquier error que ocurra durante la solicitud
      console.error('Error al enviar la variable:', error);
  });


  </script>





</body>
<script>
	// const valor1 = "texto impreso desde js";
	// console.log(valor1);
</script>
</html>