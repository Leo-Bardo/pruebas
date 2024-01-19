<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir el archivo de conexión
    include("conexion.php");

    // Conectar a la base de datos
    $con = conectar();

    // Recuperar los datos del formulario
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $nombre = $_POST["nombre"];
// OBTENER FECHA Y ALMACENARLA EN LA VARIABLE fecha
    date_default_timezone_set('America/Mexico_City');
    $fecha = date("Y-m-d");
    $hora = date("h:i:s");
    
    $concatFecha = date("Ymd");
    $concatHora = date("his");

    $codigoUsuario = $usuario . $nombre . $concatFecha . $concatHora;

    // Preparar la consulta SQL
    $sql = "INSERT INTO usuarios (usuario, codigoUsuario, contrasena, nombre, fecha, hora) VALUES (?, ?, ?, ?, ?, ?)";

    // Preparar la sentencia
    $stmt = $con->prepare($sql);

    // Enlazar parámetros
    $stmt->bind_param("ssssss", $usuario, $codigoUsuario, $contrasena, $nombre, $fecha, $hora);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Los datos se han guardado exitosamente en la base de datos.";
    } else {
        echo "Error al guardar los datos en la base de datos: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $con->close();
}
?>
<br>
<input class="buttonCancel" type="button" value="Cancelar" onclick="location.href='index.php'">