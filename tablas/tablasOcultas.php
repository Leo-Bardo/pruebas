<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Verificación de Equipos de Preparación</title>
    <link rel="stylesheet" href="../liberacionArea/css/styles.css">
</head>
<body>
    <form action="procesar.php" method="POST">
        <label for="codigoArea">CÓDIGO DE ÁREA:</label>
        <select id="codigoArea" name="codigoArea">
            <option value="">Código de área liberada</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <br>

        <label for="equipo">EQUIPO:</label>
        <select id="equipo" name="equipo">
            <option value="">Equipo a verificar</option>
            <option value="tPreparacion">Tanque de Preparación</option>
            <option value="tHolding">Tanque Holding</option>
            <option value="tPremix">Tanque Premix</option>
            <option value="hAlex">Homogenizador Alex</option>
            <option value="tPremezcla">Tanque de Premezcla</option>
        </select>
        <br>

        <button class="buttonAceptar" id="mostrarTabla" type="button">Mostrar Tabla</button>
        <br>

        <label>Seleccione ✔ si está en buen estado, de lo contrario dejar sin seleccionar y oprimir botón enviar.</label>
        <iframe id="tablaFrame" style="display: none; width: 100%; height: 400px;"></iframe>

        <input class="buttonGuardar" id="" type="submit" value="Guardar">
        <input class="buttonEnviar" id="" type="submit" value="Enviar">
        <input class="buttonCancelar" id="" type="submit" value="Cancelar">
    </form>

    <script>
        // Define las tablas para cada opción de equipo
        var tablas = {
            "tPreparacion": `<table>
                <tr>
                    <td class="tipoTanque" colspan="">TANQUE DE PREPARACIÓN</td>
                    <td><label id="horaLabel"></label></td>
                </tr>
                <!-- Contenido de la tabla del Tanque de Preparación -->
            </table>`,
            "tHolding": `<table>
                <tr>
                    <td class="tipoTanque" colspan="">TANQUE HOLDING</td>
                    <td><label id="horaLabel"></label></td>
                </tr>
                <!-- Contenido de la tabla del Tanque Holding -->
            </table>`,
        };

        // Para mostrar la tabla al hacer clic en el botón "Mostrar Tabla"
        document.getElementById("mostrarTabla").addEventListener("click", function() {
            var equipoSeleccionado = document.getElementById("equipo").value;
            var tablaFrame = document.getElementById("tablaFrame");

            if (equipoSeleccionado && tablas[equipoSeleccionado]) {
                // Muestra el iframe
                tablaFrame.style.display = "block";
                // Carga las tablas correspondientes en el iframe
                tablaFrame.contentDocument.body.innerHTML = tablas[equipoSeleccionado];
            }
        });
    </script>
</body>
</html>
