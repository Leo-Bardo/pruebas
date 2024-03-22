<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>suma de dos numeros</title>
</head>
<body>
	<label>valor 1: <input type="text" id="valorUno" name="" value=""></label>
	<label>valor 2: <input type="text" name="" id="valorDos" value=""></label>
	<input type="button" value="sumar" onclick="sumar()" name="">
	<label id="impResultado"></label>
	<script>
		function sumar(){
			var numUno = parseFloat(document.getElementById('valorUno').value);
			var numDos = parseFloat(document.getElementById('valorDos').value);
			var resultado = numUno + numDos;
			var valorResultado = document.getElementById('impResultado');
			valorResultado.innerHTML = "El valor de la suma es: " + resultado;
		}
	</script>
</body>
</html>