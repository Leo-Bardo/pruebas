<?php
include("../conexion.php");

// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['form_enviado'])) {
    // Conectar a la base de datos
    $con = conectar();

    // Verificar la conexión a la base de datos
    if ($con) {
        // Obtener datos del formulario
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];

        //Verificar usuario ya que solo valida la contraseña y el usuario aunque este mal da acceso
        // Consultar la base de datos para verificar el usuario y contraseña
        $query = "SELECT * FROM usuarios WHERE codEmpleado = '$usuario' AND contrasena = '$contrasena'";
        $resultado = mysqli_query($con, $query);

        // Verificar el resultado de la consulta
     if ($resultado) {
            // Verificar si se encontró un usuario con esa combinación de usuario y contraseña
            if (mysqli_num_rows($resultado) > 0) {
                // Obtener información del usuario
                // Después de verificar el usuario y la contraseña
                // Obtener el rol del usuario
                $datosUsuario = mysqli_fetch_assoc($resultado);

                // Después de verificar el usuario y la contraseña
                // Obtener el rol del usuario
                $rolUsuario = $datosUsuario["rol"];

                // Guardar el rol en una variable de sesión
                session_start();
                $_SESSION['rolUsuario'] = $rolUsuario;

                if ($rolUsuario == 9) {
                    echo "OK";
                    
                }
                else if ($rolUsuario == 0) {
                    header("Location: validacionMenu.php");
                }
                else if ($rolUsuario == 0) {
                    header("Location: validacionMenu.php");
                }
                else if ($rolUsuario == 0) {
                    header("Location: validacionMenu.php");
                }
                else if ($rolUsuario == 0) {
                    header("Location: validacionMenu.php");
                }

                // Redirigir a la página correspondiente según el rol
                // switch ($rolUsuario){
                //     case "0":
                //         header("Location: master.php");
                //         exit();
                //     case "9":
                //         header("Location: consulta.php");
                //         exit();
                //     // Agrega más casos según sea necesario
                //     default:
                //         echo "Error: Rol no reconocido";
                //         exit();
                // }

            } else {
                //revisar presentación de respuesta para credenciales incorrectas
                // echo "<script>
                // alert "hola";
                // </script>";
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
