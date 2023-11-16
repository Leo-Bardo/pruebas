<?php
include("../conexion.php");

// Obtén el nombre de usuario desde el formulario POST
$username = $_POST['usuario'];
$con = conectar();

$startingPage = array(
    1 => 'siEncontrado.php',      // Redirige a esta página si el rol es 'admin'
    2 => 'encontradoMedias.php',    // Redirige a esta página si el rol es 'user'
    // Agrega más roles según sea necesario
);

// TODO: Ejecuta la consulta SQL para obtener información del usuario
$sql = "SELECT idUsuario, usuario AS rol FROM usuarios INNER JOIN roles ON roles.idRol = usuarios.rol WHERE usuario = '$username';";


// Ejemplo de ejecución de consulta (esto puede variar según tu conexión a la base de datos)
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

// Verifica si se encontró un usuario con el nombre proporcionado
if ($row) {
    // Verifica si el rol del usuario está definido en $startingPage
    $nextPage = array_key_exists($row['idusuario'], $startingPage) ? $startingPage[$row['rol']] : 'siEncontrado.php';



    // Inicia la sesión y almacena información del usuario
    session_start();
    $_SESSION['usuario'] = $row['usuario'];
    $_SESSION['rol'] = $row['rol'];
    // Redirige a la página correspondiente según el rol
    header('Location: '.$nextPage);
    exit(); // Asegúrate de salir después de la redirección
} else {
    // Usuario no encontrado, redirige a la página de inicio de sesión
    header('Location: noEncontrado.html');
    exit();
}
?>
