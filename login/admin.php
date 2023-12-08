<?php
// Iniciar la sesión para acceder a la variable de sesión
session_start();
// Obtener el rol del usuario de la variable de sesión
$rolUsuario = isset($_SESSION['rolUsuario']) ? $_SESSION['rolUsuario'] : null;
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Otros encabezados y enlaces a scripts -->
</head>
<body>
  <!-- Contenido del cuerpo de la página -->


	<?php if ($rolUsuario === 'admin'): ?>
	  <button id="btnAdmin">Botón de Administrador</button>
	<?php elseif ($rolUsuario === 'usuario_normal'): ?>
	  <button id="btnUsuarioNormal">Botón de Usuario Normal</button>
	<?php else: ?>
		<h1>El Usuario no existe</h1>
	<?php endif; ?>

  <script>
    // Lógica de JavaScript adicional si es necesario
  </script>
</body>
</html>
