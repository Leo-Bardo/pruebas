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
            // Hacer una solicitud a la API para obtener clientes
            $.ajax({
                url: '_api.php',
                type: 'GET',
                dataType: 'json',
                success: function (clientes) {
                    // Procesar y mostrar los datos de clientes
                    console.log('Datos de clientes:', clientes);

                    var selectCliente = $('#clientes');
                    clientes.forEach(function (cliente) {
                        selectCliente.append('<option value="' + cliente.idCliente + '">' + cliente.cliente + '</option>');
                    });

                    // Habilitar la selección de productos después de cargar los clientes
                    $('#clientes').prop('disabled', false);
                },
                error: function (error) {
                    console.error('Error al obtener datos de clientes:', error);
                }
            });

            // Manejar el cambio en la selección de clientes
            $('#clientes').on('change', function () {
                var clienteSeleccionado = $(this).val();

                // Hacer una solicitud a la API para obtener productos por cliente
                $.ajax({
                    url: '_api.php?cliente=' + clienteSeleccionado,
                    type: 'GET',
                    dataType: 'json',
                    success: function (productos) {
                        // Procesar y mostrar los datos de productos
                        console.log('Datos de productos:', productos);

                        var selectProductos = $('#productos');
                        selectProductos.empty().prop('disabled', productos.length === 0);

                        productos.forEach(function (producto) {
                            selectProductos.append('<option value="' + producto.idProductos + '">' + producto.producto + '</option>');
                        });
                    },
                    error: function (error) {
                        console.error('Error al obtener datos de productos:', error);
                    }
                });
            });
        });
    </script>
</body>
</html>
