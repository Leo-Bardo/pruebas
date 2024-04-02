<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suma de Dos Numeros JS</title>
</head>
<body>
    <h1>SUMA DE NÚMEROS</h1>
    <div class="sumaNumeros">
        <label>
            Número 1: <input type="number" id="numeroUno" name="numeroUno">
        </label>
        <label>
            Número 2: <input type="number" id="numeroDos" name="numeroDos">
        </label>
    </div>

    <p>El resultado es: <span id="resultado"></span></p>

    <script>
        // Obtener referencias a los campos de entrada y al elemento de resultado
        var inputNumeroUno = document.getElementById('numeroUno');
        var inputNumeroDos = document.getElementById('numeroDos');
        var resultadoElemento = document.getElementById('resultado');

        // Función para realizar la suma y actualizar el resultado
        function sumar() {
            // Obtener los valores de los campos de entrada
            var num1 = parseFloat(inputNumeroUno.value);
            var num2 = parseFloat(inputNumeroDos.value);
            
            // Verificar si los valores son números válidos
            if (!isNaN(num1) && !isNaN(num2)) {
                // Realizar la suma
                var suma = num1 + num2;

                // Mostrar el resultado
                resultadoElemento.textContent = suma;
            } else {
                // Si alguno de los valores no es válido, mostrar un mensaje de error
                resultadoElemento.textContent = ' ';
            }
        }

        Escuchar el evento de cambio en los campos de entrada y llamar a la función sumar()
        inputNumeroUno.addEventListener('input', sumar);
        inputNumeroDos.addEventListener('input', sumar);

        // Llamar a la función sumar() inicialmente para calcular la suma cuando se cargue la página
        sumar();
    </script>
</body>
</html>