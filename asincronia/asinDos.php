<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Suma de dos numeros</title>
</head>
<body>
	<h1>Suma de Dos numeros</h1>
	<label>Ingresa el primer valor: <input type="text" name="" id="numUno"></label>
	<label>Ingresa el segundo valor: <input type="text" name="" id="numDos"></label>
	<input type="button" name="" value="Sumar" onclick="sumar()">
	<span id="resultadoSuma"></span>
	<script type="">
		function sumar(){
			var numeroUno = parseFloat(document.getElementById('numUno').value);
			var numeroDos = parseFloat(document.getElementById('numDos').value);
			resultadoSuma =  numeroUno + numeroDos;
			var valorResultado = document.getElementById('resultadoSuma');
			valorResultado.innerHTML = "el valor del resultado es igual a: " + resultadoSuma;
		}
	</script>
</body>
</html>