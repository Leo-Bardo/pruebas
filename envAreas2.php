<?php
if (isset($_POST['seleccionArea'])) {
    $seleccionArea = $_POST['seleccionArea'];
    echo $seleccionArea;
    // Resto del código
} else {
    echo "Error: La clave 'seleccionArea' no está presente en la solicitud POST.";
}

?>
