<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Suma de dos números</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1 align="center">PROGRAMA PARA CALCULAR LA SUMA DE DOS NÚMEROS</h1>
    <label style="font-size: 24px;">INGRESA EL PRIMER VALOR: <input type="text" id="numeroUno" name="" value="" style="font-size: 24px;"></label>
    <br><br>
    <label style="font-size: 24px;">INGRESA EL SEGUNDO VALOR: <input type="text" id="numeroDos" name="" value="" style="font-size: 24px;"></label>
    <br><br>
    <input type="button" value="SUMAR" onclick="sumar()" style="font-size: 24px; color: white; background-color: #F14A64;">
    <span id="resul" style="background-color: darkred; color: white; font-size: 44px; border: solid 4px darkblue;"></span>
    <script>
        function sumar(){
            var numUno = parseFloat(document.getElementById('numeroUno').value);
            var numDos = parseFloat(document.getElementById('numeroDos').value);

            suma = numUno + numDos;

            var resultado = document.getElementById('resul');
            resultado.innerHTML = 'El valor del resultado es igual a: ' + suma;

console.log('El primer numero ingresado es:');
console.log(numUno);
console.log('El primer segundo ingresado es:');
console.log(numDos);
console.log('El resultado es igual a: ');
console.log(suma);

        }
    </script>
</body>
</html>