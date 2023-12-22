<?php include_once("../conexion.php");
$con = conectar();
    
    $nombre 	= $_POST['txtnombre'];
    $correo 	= $_POST['txtcorreo'];
    $telefono 	= $_POST['txttelefono'];
    $estado     = $_POST['txtestado'];
    $rol     = $_POST['txtrol'];
    $status     = $_POST['txtstatus'];


    
	mysqli_query($con, "INSERT INTO usuarios(nombreUsuario,eMail,telefono, estado, rol, status) VALUES('$nombre','$correo','$telefono', $estado, $rol, $status)");
    
header("Location:index.php");
?>