<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suma de numeros</title>
</head>
<body>
    <h1>Suma de numeros</h1>
    <label>Ingresa el primer Numero: <input type="text" id="numUno"></label>
    <label>Ingresa el segundo Numero: <input type="text" id="numDos"></label>
    <input type="button" value="sumar" name="" onclick="sumar()">
    <span id="resultadoq"></span>
    <script>
        function sumar(){
            var num1 = parseFloat(document.getElementById('numUno').value);
            var num2 = parseFloat(document.getElementById('numDos').value);
            resultado = num1 + num2;
            console.log(resultado);
            var rest = document.getElementById('resultadoq');
            rest.innerHTML = "el valor de resultado: " + resultado;
        }
    </script>
</body>
</html>