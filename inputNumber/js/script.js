document.addEventListener('DOMContentLoaded', function() {
    // Obtener referencia al input y al botón
    const numeroInput = document.getElementById('numeroInput');
    const mostrarNumeroBtn = document.getElementById('mostrarNumero');
    const resultadoDiv = document.getElementById('resultado');

    // Agregar evento al botón para mostrar el número
    mostrarNumeroBtn.addEventListener('click', function() {
        // Obtener el valor del input
        const numero = numeroInput.value;

        // Mostrar el número en el resultado
        resultadoDiv.textContent = 'El número ingresado es: ' + numero;
    });
});
