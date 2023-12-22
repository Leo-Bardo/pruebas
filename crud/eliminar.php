<?php
include_once("../conexion.php");
$con = conectar();
 
$idUsuario = $_GET['idUsuario'];
 
mysqli_query($con, "DELETE FROM usuarios WHERE idUsuario=$idUsuario");
 
header("Location:index.php");

?>