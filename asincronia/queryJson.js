$(document).ready(function(event) {
    // Escucha el evento de clic en el botón
    $('#enviarDatos').click(function() {
        // Obtiene los valores de los inputs
        var primerValor = $('#primerValor').val();
        var segundoValor = $('#segundoValor').val();

        // Crea un objeto con los valores
        var dataToSend = {
            primerValor: primerValor,
            segundoValor: segundoValor
        };

        // Realiza la solicitud AJAX utilizando jQuery
        $.ajax({
            url: 'procesaValor.php',
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(dataToSend),
            success: function(response) {
                console.log('Datos enviados exitosamente:', response);
            },
            error: function(xhr, status, error) {
                console.error('Hubo un problema al enviar los datos:', error);
            }
        });
    });
});