<?php
include("../conexion.php");

// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Conectar a la base de datos
    $con = conectar();

    // Verificar la conexión a la base de datos
    if ($con) {
        // Obtener datos del formulario
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];

        // Consultar la base de datos para verificar el usuario y contraseña
        $query = "SELECT * FROM usuarios WHERE codEmpleado = '$usuario' AND contrasena = '$contrasena'";
        $resultado = mysqli_query($con, $query);

        // Verificar el resultado de la consulta
     if ($resultado) {
            // Verificar si se encontró un usuario con esa combinación de usuario y contraseña
            if (mysqli_num_rows($resultado) > 0) {
                // Obtener información del usuario
                $datosUsuario = mysqli_fetch_assoc($resultado);
                $rolUsuario = $datosUsuario["rol"];

                // Redirigir a la página correspondiente según el rol
                switch ($rolUsuario) {
                    case "1":
                        header("Location: admin.php");
                        break;
                    case "usuario_normal":
                        header("Location: usuario_normal.php");
                        break;
                    // Agrega más casos según sea necesario

                    default:
                        echo "Error: Rol no reconocido";
                        break;
                }


            } else {
                echo "Usuario o contraseña incorrectos";
            }
        } else {
            echo "Error en la consulta: " . mysqli_error($con);
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($con);
    } else {
        echo "Error en la conexión a la base de datos";
    }
} else {
    // Si no es una solicitud POST, devolver un mensaje de error
    echo "Error: Solicitud no válida";
}
?>
