<?php
include("../conexion.php");

$con = conectar();
echo "Conexion exitosa";

$sql = "SELECT idcliente, cliente FROM clientes";
$resultadoCliente = $con->query($sql);

// Otras consultas y lógica según sea necesario...
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
    <label for="clientes">Selecciona Cliente:</label>
    <select id="clientes">
        <option value="">Cliente...</option>
        <?php
        if ($resultadoCliente->num_rows > 0) {
            while ($fila = $resultadoCliente->fetch_assoc()) {
                echo "<option value='" . $fila["idCliente"] . "'>" . $fila["cliente"] . "</option>";
            }
        }
        ?>
    </select>

    <label for="productos">Selecciona un Producto:</label>
    <select id="productos" disabled>
        <option value="">Producto...</option>
    </select>

    <script>
        $(document).ready(function () {
            // Hacer una solicitud a la API para obtener continentes
            $.ajax({
                url: 'api.php',
                type: 'GET',
                dataType: 'json',
                success: function (clientes) {
                    // Procesar y mostrar los datos de continentes
                    console.log('Datos de clientes:', continentes);

                    var selectContinentes = $('#clientes');
                    continentes.forEach(function (cliente) {
                        selectContinentes.append('<option value="' + clientes.idCliente + '">' + cliente.cliente + '</option>');
                    });

                    // Habilitar la selección de países después de cargar los continentes
                    $('#clientes').prop('disabled', false);
                },
                error: function (error) {
                    console.error('Error al obtener datos de clientes:', error);
                }
            });

            // Manejar el cambio en la selección de continentes
            $('#clientes').on('change', function () {
                var clienteSeleccionado = $(this).val();

                // Hacer una solicitud a la API para obtener países por continente
                $.ajax({
                    url: 'api.php?cliente=' + clienteSeleccionado,
                    type: 'GET',
                    dataType: 'json',
                    success: function (productos) {
                        // Procesar y mostrar los datos de países
                        console.log('Datos de productos:', productos);

                        var selectProductos = $('#paises');
                        selectProductos.empty().prop('disabled', productos.length === 0);

                        paises.forEach(function (pais) {
                            selectProductos.append('<option value="' + pais.idPais + '">' + producto.producto + '</option>');
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
