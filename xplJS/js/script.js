$(document).ready(function() {
    let contador = 1;

    $("#enviarBtn").click(function() {
        // Obtener el valor del input
        const valorDato = $("#dato").val().trim();

        // Validar que el input no esté vacío
        if (valorDato !== "") {
            // Incrementar el contador
            contador++;
            // Actualizar el contenido del div con el nuevo valor del contador
            $("#contador").text("Contador: " + contador);

            // Enviar el formulario mediante jQuery
            $.ajax({
                type: "POST",
                url: "procesar.php",
                data: { dato: valorDato },
                success: function(response) {
                    console.log(response);
                },
                error: function(error) {
                    console.error(error);
                }
            });

            // Limpiar el input después de enviar
            $("#dato").val("");
        } else {
            alert("Por favor, ingresa un valor antes de enviar.");
        }
    });
});
