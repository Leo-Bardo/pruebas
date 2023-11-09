<?php
include("conexion.php");

$con=conectar();

echo "se realizó exitosamente la conexion a la base de datos"
?>

<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pruebas Areas</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="envarea.php" method="POST" accept-charset="utf-8">
		<input type="button" class="claseArea" id="identificadorArea" name="area" value="Area 1" />
		<input type="button" class="claseArea" id="identificadorArea" name="area" value="Area 2" />
		<input type="button" class="claseArea" id="identificadorArea" name="area" value="Area 3" />
	</form>

	<h1><div class="resultado-area"></div></h1>
	        
</body>
</html> -->
<form id="miFormulario" action="envAreas2.php" method="post">


	<input type="button" class="claseArea" id="identificadorArea" name="area" value="Area 1" />
	<input type="button" class="claseArea" id="identificadorArea" name="area" value="Area 2" />
	<input type="button" class="claseArea" id="identificadorArea" name="area" value="Area 3" />
	<input type="hidden" id="seleccionArea" name="seleccionArea" value="">


        <div class="resultado-area"></div>

<br>
<br>
<br>
    <!-- <input type="text" id="miCampo" name="datos" value="Hola desde JavaScript"> -->
<br>
<br>
<br>	
    <input type="submit" value="Enviar">

    <script>
    const selectArea = document.querySelectorAll(".claseArea");

    selectArea.forEach(selectElement => {
        selectElement.addEventListener("click", (event) => {
            const resultadoArea = document.querySelector(".resultado-area");
            resultadoArea.textContent = `Tu selección es ${event.target.value}`;

            // Almacena la selección en el campo oculto
            document.getElementById("seleccionArea").value = event.target.value;
            
            // Realiza una solicitud AJAX después de seleccionar
            var datos = event.target.value;

            $.ajax({
                type: "POST",
                url: "envAreas2.php",
                data: { datos: datos },
                success: function(response) {
                    console.log("Respuesta del servidor: " + response);
                }
            });
        });
    });
</script>
</form>








<!-- 
    <script>
        const selectArea = document.querySelectorAll(".claseArea");

        selectArea.forEach(selectElement => {
            selectElement.addEventListener("click", (event) => {
                const resultadoArea = document.querySelector(".resultado-area");
                resultadoArea.textContent = `Tu selección es ${event.target.value}`;

                document.getElementById("seleccionArea").value = event.target.value;
            });
        });
	</script>



<script>
/*Para almacenar variable*/
	var datos = selectArea;
	// Realiza una solicitud POST a un script PHP
	$.ajax({
	    type: "POST",
	    url: "envAreas2.php",
	    data: { datos: datos }, // Los datos a enviar
	    success: function(response) {
	        console.log("Respuesta del servidor: " + response);
	    }
	});

</script>


 -->