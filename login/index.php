<?php 
include("../conexion.php");
$con = conectar();
if($con){
	echo "Conexion exitosa";
}
else{
	echo "Conexion fallida";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
		<script src="../js/jquery-3.7.1.min.js"></script>
	<script src="script.js"></script>
	<button id="openModalBtn">Abrir Modal</button>
	<div id="myModal" class="modal">
	  <div class="modal-content">
	    <span class="close">&times;</span>
	    	

	  </div>
	</div>
</body>
</html>