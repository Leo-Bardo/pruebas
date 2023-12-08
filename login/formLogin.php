<?php
include("../conexion.php");
$con = conectar();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Master</title>
  <script src="../js/jquery-3.7.1.min.js"></script>
</head>
<body>
  <form action="solUsuario.php" method="POST">
    <div class="formUsuario">
      <label for="usuario">Usuario</label>
      <input type="text" id="usuario" name="usuario" placeholder="Ingresa Usuario">
      <label for="contrasena">Contraseña</label>
      <input type="password" id="contrasena" name="contrasena" placeholder="Ingresa Contraseña">
      <input type="submit" id="btnIngresar" value="Ingresar">
          <input type="hidden" name="form_enviado" value="1">

    </div>
  </form>
 
</body>
</html>
















<!-- RESERVADO PARA USO POSTERIOR -->
 <script>
    // $(document).ready(function() {
    //   $("#btnIngresar").click(function(event) {
    //     event.preventDefault(); // Evitar el envío del formulario por defecto
    //     var formData = $("#loginForm").serialize();
    //     $.ajax({
    //       type: "POST",
    //       url: "solUsuario.php",
    //       data: formData,
    //       success: function(response) {
    //         // Verificar si la respuesta contiene una cadena "Location:"
    //         if (response.indexOf("Location:") !== -1) {
    //           var redirectUrl = response.split("Location: ")[1];
    //           // Redirigir directamente desde JavaScript
    //           window.location.href = redirectUrl;
    //         } else {
    //           // Si no hay redirección, manejar la respuesta del servidor
    //           console.log(response);
    //         }
    //       },
    //       error: function(error) {
    //         console.log("Error en la solicitud AJAX: " + error);
    //       }
    //     });
    //   });
    // });
  </script>
  <?php
  // Imprimir el valor de $response en el cuerpo HTML
  // if (isset($response)) {
  //   echo '<script>console.log("' . addslashes($response) . '");</script>';
  // }
  ?>