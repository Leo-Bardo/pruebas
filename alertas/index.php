<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>xplAlerta 1</title>
	<script src="../src/sweetalert2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../src/sweetalert2.min.css">

</head>
<body>
<input type="button" name="" value="Mostrar Alerta" onclick="oprimir()">
</body>
	<script>
		function oprimir(){
			Swal.fire({
			  title: "Sweet!",
			  text: "Modal with a custom image.",
			  imageUrl: "https://unsplash.it/400/200",
			  imageWidth: 400,
			  imageHeight: 200,
			  imageAlt: "Custom image"
			});
		}
	</script>
</html>