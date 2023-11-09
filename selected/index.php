<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Prb</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<label>Elija un sabor de nieve:
  <select class="nieve" name="nieve">
    <option value="">Seleccione Uno …</option>
    <option value="chocolate">Chocolate</option>
    <option value="sardina">Sardina</option>
    <option value="vainilla">Vainilla</option>
  </select>
</label>

</body>
<!-- <script>
	const selectElement = document.querySelector(".nieve");

selectElement.addEventListener("change", (event) => {
  const resultado = document.querySelector(".resultado");
  resultado.textContent = `Te gusta el sabor ${event.target.value}`;
});</script> -->

<!--             <br>
            <input class="toggleButton" name="area[]" type="button" value="ÁREA 1">
            <input class="toggleButton" name="area[]" type="button" value="ÁREA 2">
            <input class="toggleButton" name="area[]" type="button" value="ÁREA 3">
            <br>
            <input class="buttonEnviar" type="submit" value="Enviar selección">

            <script>
              const selectElement = document.queryySelector(".toggleButton");
              selectElement.addEventListener("change", (event) => {
                const resultado = document.querySelector(".resultado");
                resultado.textContent = `Tu selecció es ${event.target.value}`;
              })
            </script>
</html>
 -->
<br>
    <!-- Tus elementos HTML -->
    <input class="toggleButton" name="area" type="button" value="AREA 1">
    <input class="toggleButton" name="area" type="button" value="AREA 2">
    <input class="toggleButton" name="area" type="button" value="AREA 3">
    <br>
    <input class="buttonEnviar" type="submit" value="Enviar selección">
    <p class="resultado"></p>

    <script>
        const selectElements = document.querySelectorAll(".toggleButton");

        selectElements.forEach(selectElement => {
            selectElement.addEventListener("click", (event) => {
                const resultado = document.querySelector(".resultado");
                resultado.textContent = `Tu selección es ${event.target.value}`;
            });
        });
    </script>
</body>
</html>
