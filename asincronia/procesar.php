<?php
// Recibe los datos enviados desde el cliente
$data = json_decode(file_get_contents("php://input"), true);

// Verifica si se recibió la variable 'variable'
if(isset($data['variable'])) {
    // Obtiene la variable enviada desde JavaScript
    $miVariable = $data['variable'];
    
    // Procesa la variable como desees
    echo "La variable recibida es: " . $miVariable;
} else {
    // Si no se recibió la variable, muestra un mensaje de error
    echo "No se recibió la variable desde el cliente.";
}
?>
