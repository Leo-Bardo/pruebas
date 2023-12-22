<?php 
include_once("../conexion.php");
include_once("index.php");
$con = conectar();

$idUsuario = $_GET['idUsuario'];
 
$querybuscar = mysqli_query($con, "SELECT * FROM usuarios WHERE idUsuario=$idUsuario");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $codigo = $mostrar['idUsuario'];
    $nombreUsuario = $mostrar['nombreUsuario'];
    $eMail = $mostrar['eMail'];
	$telefono = $mostrar['telefono'];
}
?>
<html>
<head>    
		<title>Editar Usuario</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="caja_popup2" id="formmodificar">
  <form method="POST" class="contenedor_popup" >
        <table>
		<tr><th colspan="2">Editar Usuario</th></tr>
		     <tr> 
                <td>Codigo</td>
                <td><input type="text" name="txtcodigo" value="<?php echo $idUsuario;?>" required ></td>
            </tr>
            <tr> 
                <td>Nombre</td>
                <td><input type="text" name="txtnombre" value="<?php echo $nombreUsuario;?>" required></td>
            </tr>
            <tr> 
                <td>Correo</td>
                <td><input type="text" name="txtcorreo" value="<?php echo $eMail;?>" required></td>
            </tr>
            <tr> 
                <td>Teléfono</td>
                <td><input type="text" name="txttelefono" value="<?php echo $telefono;?>"required></td>
            </tr>
            <tr>
				
                <td colspan="2">
				<a href="index.php">Cancelar</a>
				<input type="submit" name="btnmodificar" value="Modificar" onClick="javascript: return confirm('¿Deseas modificar a este usuario?');">
				</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

<?php
	
	if(isset($_POST['btnmodificar']))
{    
    $idUsuario = $_POST['txtcodigo'];
	
	$nombreUsuario 	= $_POST['txtnombre'];
    $eMail 	= $_POST['txtcorreo'];
    $telefono 	= $_POST['txttelefono']; 
      
    $querymodificar = mysqli_query($con, "UPDATE usuarios SET nombreUsuario='$nombreUsuario',eMail='$eMail',telefono='$telefono' WHERE idUsuario=$idUsuario");

  	echo "<script>window.location= 'index.php' </script>";
    
}
?>