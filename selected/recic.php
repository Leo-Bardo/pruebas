<?php 
include("../conexion.php");

$con = conectar();
echo "Conexion exitosa";

    $sql = "SELECT idContinente, continente FROM continentes";
    $resultadoContinente = $con->query($sql);

    // $sql = "SELECT idPais, pais FROM paises";
    // $resultadoPais = $con->query($sql);

?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtener Datos de MySQL</title>
    <script src="../js/jquery-3.7.1.min.js"></script>
</head>
<body>
    <label for="continentes">selec Continente:</label>
    <select id="continentes">
        <option value="">Selecciona un Continente</option>
        <?php
        if ($resultadoContinente->num_rows > 0) {
            while ($fila = $resultadoContinente->fetch_assoc()) {
                echo "<option value='" . $fila["idContinente"] . "'>" . $fila["continente"] . "</option>";
            }
        }
        ?>
    </select>

    <label for="paises">Países:</label>
    <select id="paises" disabled>

                <option value="">Selecciona un Pais</option>

                <?php
                // if ($resultadoPais->num_rows > 0) {
                //     while ($fila = $resultadoPais->fetch_assoc()) {
                //         echo "<option value='" . $fila["idpais"] . "'>" . $fila["pais"] . "</option>";
                //     }
                // }
                ?>
     </select>


    <script>
        $(document).ready(function () {
            // Hacer una solicitud a la API para obtener continentes
            $.ajax({
                url: 'api.php',
                type: 'GET',
                dataType: 'json',
                success: function (continentes) {
                    // Procesar y mostrar los datos de continentes
                    var selectContinentes = $('#continentes');
                    continentes.forEach(function (continente) {
                        selectContinentes.append('<option value="' + continente + '">' + continente + '</option>');
                    });

                    // Habilitar la selección de países después de cargar los continentes
                    $('#continentes').prop('disabled', false);
                },
                error: function (error) {
                    console.error('Error al obtener datos de continentes:', error);
                }
            });

            // Manejar el cambio en la selección de continentes
            $('#continentes').on('change', function () {
                var continenteSeleccionado = $(this).val();

                // Hacer una solicitud a la API para obtener países por continente
                $.ajax({
                    url: 'api.php?continente=' + continenteSeleccionado,
                    type: 'GET',
                    dataType: 'json',
                    success: function (paises) {
                        // Procesar y mostrar los datos de países
                        var selectPaises = $('#paises');
                        selectPaises.empty().prop('disabled', paises.length === 0);

                        paises.forEach(function (pais) {
                            selectPaises.append('<option value="' + pais.nombre + '">' + pais.nombre + '</option>');
                        });
                    },
                    error: function (error) {
                        console.error('Error al obtener datos de países:', error);
                    }
                });
            });
        });
    </script>
</body>
</html>






<form action="" method="get" accept-charset="utf-8">
    <label>Elija un Continente:
    <select class="continente" name="continente">
                <option value="">Selecciona un Continente</option>
                <?php
                if ($resultadoContinente->num_rows > 0) {
                    while ($fila = $resultadoContinente->fetch_assoc()) {
                        echo "<option value='" . $fila["idContinente"] . "'>" . $fila["continente"] . "</option>";
                    }
                }
                ?>
  </select>
<br>
    <label>Elija un Pais:
    <select class="pais" name="pais">
                <option value="">Selecciona un Pais</option>
                <?php
                if ($resultadoPais->num_rows > 0) {
                    while ($fila = $resultadoPais->fetch_assoc()) {
                        echo "<option value='" . $fila["idpais"] . "'>" . $fila["pais"] . "</option>";
                    }
                }
                ?>
  </select>
</label>
</form>