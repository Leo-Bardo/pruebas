<?php
function conectar(){
	$user="root";
	$pass="";
	$server="localhost";
	$db="bdaguida";
	$con=mysqli_connect($server, $user, $pass) or die("Error al conectar a la BD");
	mysqli_select_db($con,$db);
	return $con;
}
?>