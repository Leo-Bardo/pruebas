<script>
    // function mostrarTabla().onclick("change", function () {
    // // document.getElementById("equipo").
    //     var equipoSeleccionado = this.value;
    //     var tablaFrame = document.getElementById("tablaFrame");
    // document.getElementById("equipo").addEventListener("change", function mostrarTabla() {
    // var equipoSeleccionado = this.value; // this.value obtiene el valor seleccionado del elemento
    // var tablaFrame = document.getElementById("tablaFrame");
document.getElementById("mostrarTablaButton").addEventListener("click", function () {
    var equipoSeleccionado = document.getElementById("equipo").value;
    var tablaFrame = document.getElementById("tablaFrame");
        if (equipoSeleccionado === "TANQUE DE PREPARACIÓN") {
            // Muestra el iframe
            tablaFrame.style.display = "block";
            // Carga la URL correspondiente en el iframe
            tablaFrame.src = "tablas/tblTanquePreparacion.php?equipo=" + encodeURIComponent(equipoSeleccionado);
        } else if (equipoSeleccionado === "TANQUE HOLDING") {
            // Muestra el iframe
            tablaFrame.style.display = "block";
            // Carga la URL correspondiente en el iframe
            tablaFrame.src = "tablas/tblTanqueHolding.php?equipo=" + encodeURIComponent(equipoSeleccionado);
        } else if (equipoSeleccionado === "TANQUE PREMIX") {
            // Muestra el iframe
            tablaFrame.style.display = "block";
            // Carga la URL correspondiente en el iframe
            tablaFrame.src = "tablas/tblTanquePremix.php?equipo=" + encodeURIComponent(equipoSeleccionado);
        } else if (equipoSeleccionado === "HOMOGENIZADOR ALEX") {
            // Muestra el iframe
            tablaFrame.style.display = "block";
            // Carga la URL correspondiente en el iframe
            tablaFrame.src = "tablas/tblHomogenizadorAlex.php?equipo=" + encodeURIComponent(equipoSeleccionado);
        } else if (equipoSeleccionado === "TANQUE DE PREMEZCLA") {
            // Muestra el iframe
            tablaFrame.style.display = "block";
            // Carga la URL correspondiente en el iframe
            tablaFrame.src = "tablas/tblTanquePremezcla.php?equipo=" + encodeURIComponent(equipoSeleccionado);
        } else if (equipoSeleccionado === "MARMITA") {
            // Muestra el iframe
            tablaFrame.style.display = "block";
            // Carga la URL correspondiente en el iframe
            tablaFrame.src = "tablas/tblMarmita.php?equipo=" + encodeURIComponent(equipoSeleccionado);
        } else if (equipoSeleccionado === "CIP") {
            // Muestra el iframe
            tablaFrame.style.display = "block";
            // Carga la URL correspondiente en el iframe
            tablaFrame.src = "tablas/tblCip.php?equipo=" + encodeURIComponent(equipoSeleccionado);
        } else if (equipoSeleccionado === "xpl1") {
            // Muestra el iframe
            tablaFrame.style.display = "block";
            // Carga la URL correspondiente en el iframe
            tablaFrame.src = "tablas/tblxpl1.php?equipo=" + encodeURIComponent(equipoSeleccionado);
        } else {
            // Oculta el iframe si no hay equipo seleccionado
            tablaFrame.style.display = "none";
        }
    });
</script>