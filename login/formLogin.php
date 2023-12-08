<?php
include("../conexion.php");
$con = conectar();
if($con){
  echo "Conexion exitosa";
} else {
  echo "Conexion Fallida";
}
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
  <form id="loginForm">
    <div class="formUsuario">
      <label for="usuario">Usuario</label>
      <input type="text" name="usuario" placeholder="Ingresa Usuario">
      <label for="contrasena">Contraseña</label>
      <input type="password" name="contrasena" placeholder="Ingresa Contraseña">
      <button type="button" id="btnIngresar">Ingresar</button>
    </div>
  </form>

  <script>
    $(document).ready(function() {
      $("#btnIngresar").click(function() {
        var formData = $("#loginForm").serialize();

        $.ajax({
          type: "POST",
          url: "solUsuario.php",
          data: formData,
          success: function(response) {
            // Manejar la respuesta del servidor
            console.log(response);
          },
          error: function(error) {
            console.log("Error en la solicitud AJAX: " + error);
          }
        });
      });
    });
  </script>
</body>
</html>
