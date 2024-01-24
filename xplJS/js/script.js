$(document).ready(function() {
    let contador = 1;
// MODIFICAR SCRIPT PARA VALIDAR TODO EL FORMULARIO
    $("#enviarBtn").click(function() {
        // Obtener el valor del input
        const valorDato = $("#dato").val().trim();

        // Validar que el input no esté vacío
        if (valorDato !== "") {
            // Incrementar el contador
            contador++;
            // Actualizar el contenido del div con el nuevo valor del contador
            // Revisar cambio de etiqueta <b> en label Numero de lote
            $("#contador").text("Número de Lote: " + contador);

            // Enviar el formulario mediante jQuery
            $.ajax({
                type: "POST",
                url: "controlHomogenizacion.php",
                data: { dato: valorDato },
                success: function(response) {
                    console.log(response);

                    // Mostrar botones para Etapa 1 Homogenizacion y Etapa 2 Homogenizacion
                    mostrarBotonesEtapa();
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

    // Función para mostrar los botones de Etapa 1 y Etapa 2 Homogenizacion
    function mostrarBotonesEtapa() {
        // Crear los elementos de los botones
        const botonEtapa1 = $("<button>").text("Etapa 1 Homogenización");
        const botonEtapa2 = $("<button>").text("Etapa 2 Homogenización");

        // Asignar eventos a los botones (puedes personalizar según tus necesidades)
        botonEtapa1.click(function() {
            // Lógica cuando se hace clic en Etapa 1 Homogenización
            console.log("Clic en Etapa 1 Homogenización");
        });

        botonEtapa2.click(function() {
            // Lógica cuando se hace clic en Etapa 2 Homogenización
            console.log("Clic en Etapa 2 Homogenización");
        });

        // Agregar los botones al documento
        $("#contenedorBotones").empty(); // Limpiar el contenedor antes de agregar los nuevos botones
        $("#contenedorBotones").append(botonEtapa1, botonEtapa2);
    }
});