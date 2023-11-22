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
// Obtener el id del cliente seleccionado
$clienteId = $_POST['clienteId'];
// Consulta para obtener los productos del cliente seleccionado
$sql = "SELECT idProducto, producto FROM productos WHERE cliente = $clienteId";
$result = $conn->query($sql);
$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = array(
            'idProducto' => $row['idProducto'],
            'nombreProducto' => $row['producto']
        );
    }
}

$conn->close();
echo json_encode($data);
?>




