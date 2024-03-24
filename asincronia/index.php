<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Envio arreglo JSON - METHOD</title>
</head>
<body>
  <div>
      <label>: <input type="text" id="valorUno" value=""></label>
      <input type="submit" value="ACEPTAR" onclick="clikear()">
      <input type="button" value="SALIR" onclick="location.href='../index.php'">
      <label id="valorUnoEtiqueta"></label>
      <br>
  </div>
  <script>
      function clikear(){
          // Obtener el valor ingresado por el usuario
          var valorIngresado = document.getElementById('valorUno').value;

          // Realizar una solicitud AJAX para enviar el valor al script PHP
          fetch('procesar.php', {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json'
              },
              body: JSON.stringify({ variable: valorIngresado })
          })
          .then(response => {
              console.log('Valor enviado exitosamente: ' + valorIngresado);
          })
          .catch(error => {
              console.error('Error al enviar el valor:', error);
          });
      }
  </script>
</body>
</html>