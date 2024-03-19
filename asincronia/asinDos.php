<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Asincronia con JS</title>
</head>
<body>
	<h2>EJERCICIO DE SINCRONIA CON JS</h2>
	<label>Ingrese el primer valor: <input type="text" id="valorUno" name="" value=""></label>
	<label>Ingrese el segundo valor: <input type="text" id="valorDos" name="" value=""></label>
	<input type="button" name="" onclick="procesarOperacion()" value="Aceptar">
	<span id="impResultado"></span>

	<script>
		function procesarOperacion(){
			var valorUnoJs = parseFloat(document.getElementById('valorUno').value);
			var valorDosJs = parseFloat(document.getElementById('valorDos').value);

            var resultado = valorUnoJs + valorDosJs;
			console.log(resultado);

			var valorResultado =  document.getElementById('impResultado');
			valorResultado.innerHTML = "El resultado de la suma es: " + resultado;
		}
	</script>
</body>
</html>