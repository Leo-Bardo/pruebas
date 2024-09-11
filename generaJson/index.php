<?php
include("../login/sesion.php");
include("../conexion.php");

$con = conectar();

$sql = "SELECT idProducto, producto FROM productos";
$resultadoProducto = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Procesar Json con PHP</title>
</head>
<body>
<!-- 	TOMAR EN CUENTA LAS LAS CONSTANTES POR PRODUCTO DE LI, LS, X
	LI -> LIMITE INFERIOR
	LS -> LIMITE SUPERIOR
	X -> PROMEDIO, MEDIA ARITMETICA -->
    <iframe src="../encabezado.html" class="miClaseIframe"></iframe><!-- considerar colocarlo por fuera para abrir desde logotipo Aguida -->
	<!-- ************** Organizar estilos ************* -->
	<form action="procesarEstadistica.php" method="POST" accept-charset="utf-8">
		
		<br><br><div class="container"><br>
	<h1 style="text-align: center;">CONTROL ESTADISTICO DE ENVASADO</h1>
		<!-- REVISAR QUE LA FECHA IMPRESA EN LA INTERFAZ Y EN BD COINCIDAN -->
		<?php
			$fechaHoy = date('Y-m-d');
			$hora = date('H:i:s');
			echo $fechaHoy . " " . $hora;
		?>
			<br>
		    <label for="producto">PRODUCTO:</label>
            <select name="producto" class="producto" required autofocus>
                <option value="">Selecciona un cliente</option>
                <?php
                if ($resultadoProducto->num_rows > 0) {
                    while ($fila = $resultadoProducto->fetch_assoc()) {
                        echo "<option value='" . $fila["idProducto"] . "'>" . $fila["producto"] . "</option>";
                    }
                }
                ?>
            </select>
<label for="Equipo">MÁQUINA:
	<select name="maquina">
		<!-- Conectar con base de datos para traer los equipos, registrar los equipos, nuevo tipo de equipos -->
		<option>A3 FLex Edge</option>
		<option>A3 FLex Prisma</option>
		<option>A3 Flex Compact</option>
		<option>A3 FLex</option>
		<option>TBA 8 Slim</option>
		<option>TBA 8 Base</option>
	</select>
<br><br>
<label>CÓDIGO: <input type="text" name="codigo" value=""></label>
<label>CADUCIDAD: <input type="date" name="caducidad"  value="<?php echo date('Y-m-d', strtotime('+1 year'));?>">
	<!-- obtengo la fecha con un año de adelanto -->
</label>
	<br><br>
	<label for="">LS: <input type="number" value="965.46" name="ls"></label>
	<br>
	<br>
	<label for="">LI: <input type="number" value="955.46" name="li"></label>
	<!-- X no se captura ya que es el resultado de la formula ((LI)(LS))/2  -->
	<label for="">X: <input type="text" value="((LI)(LS))/2" name=""></label>
	<br>
	<br>




    <h2>Registro de valores de presión de homogenización durante el proceso: </h2>
    <div class="RegistroHomoge">
    	<!-- REVISIÓN DE TITULO EN SECCIÓN DE CAPTURA DE ARREGLO PARA GRÁFICO -->
        <label> Control de volumen y peso: </label><br>
        <br>
        <input type="time" id="real-time" value="hora" >
        <label>Contenido: </label>
        <input type="number" id="valor" value="" tabindex="2">
        <button type="button" class="btnGuardar" id="guardarBtn">GUARDAR</button>
        </div>
    <br>
    <table class="tbl" id="tablaValores">
        <thead>
            <tr>
                <th>Hora</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody id="cuerpoTablaValores">
        </tbody>
    </table>
    <div class="observaciones">
        <br>
<!--         <h2>Observaciones:</h2>
        <textarea class="txtObservaciones" id="observaciones"></textarea> -->
    </div>
    <br>




	<input type="button" value="ENVIAR" id="enviarBtn">
	<input type="button" value="SALIR" onclick="location.href='../index.php'">
		</form>

<script>
    // Array para almacenar los valores de presión de homogenización
let valControlEstadistico = [];

// Manejar la lógica de agregar nuevos valores a la tabla
document.getElementById('guardarBtn').addEventListener('click', function() {
    const hora = document.getElementById('real-time').value;
    const valor = document.getElementById('valor').value;

    if (hora && valor) {
        // Agregar los valores a la tabla
        const tabla = document.getElementById('cuerpoTablaValores');
        const nuevaFila = document.createElement('tr');
        nuevaFila.innerHTML = `
            <td>${hora}</td>
            <td>${valor}</td>
        `;
        tabla.appendChild(nuevaFila);

        // Agregar los valores al array
        valControlEstadistico.push({ hora: hora, valor: valor });
console.log (valControlEstadistico);
        // Limpiar el campo de valor
        document.getElementById('valor').value = '';
    }
});

// Enviar el arreglo cuando sea necesario (por ejemplo, al presionar un botón "Enviar")
document.getElementById('enviarBtn').addEventListener('click', function() {
    const valControlEstadistico = JSON.stringify
    formData.append('valControlEstadistico' tablaVa);
    fetch('procesarEstadistica.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log('Datos procesados exitosamente:', data);
    })
    .catch(error => {
        console.error('Error al procesar los datos:', error);
    });
});
    function limpiarTabla() {
        document.getElementById('cuerpoTablaValores').innerHTML = '';
    }


        function updateTime() {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        hours = (hours < 10 ? "0" : "") + hours;
        minutes = (minutes < 10 ? "0" : "") + minutes;

        var inputTime = document.getElementById("real-time");
        inputTime.value = hours + ":" + minutes;
    }
    setInterval(updateTime, 1000);
    updateTime();
    </script>
</body>
</body>
</html>