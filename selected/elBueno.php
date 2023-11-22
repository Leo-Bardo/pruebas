<!DOCTYPE html>
<html>
<head>
    <title>Selección múltiple con jQuery y PHP</title>
    <script src="../js/jquery-3.7.1.min.js"></script>
</head>
<body>
    <h1>Selección múltiple con jQuery y PHP</h1>
    <form>
        <label for="cliente">Selecciona un cliente:</label>
        <select id="cliente" name="cliente">
            <?php
            // Conexión a la base de datos
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bdaguida";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }
            // Consulta para obtener los clientes
            $sql = "SELECT idCliente, cliente FROM clientes";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["idCliente"] . "'>" . $row["cliente"] . "</option>";
                }
            } else {
                echo "<option value=''>No hay clientes disponibles</option>";
            }
            $conn->close();
            ?>
        </select>
        <br><br>
        <label for="producto">Selecciona un producto:</label>
        <select id="producto" name="producto">
            <option value="">Selecciona un cliente primero</option>
        </select>
    </form>
    <script>
        $(document).ready(function() {
            $('#cliente').change(function() {
                var clienteId = $(this).val();
                $.ajax({
                    url: 'getProductos.php',
                    type: 'post',
                    data: {clienteId: clienteId},
                    dataType: 'json',
                    success:function(response) {
                        var len = response.length;
                        $('#producto').empty();
                        for( var i = 0; i<len; i++) {
                            var id = response[i]['idProducto'];
                            var name = response[i]['nombreProducto'];
                            $('#producto').append("<option value='"+id+"'>"+name+"</option>");
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
