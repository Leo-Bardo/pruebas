<?php
    include("conexion.php");
    $con = conectar();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos enviados desde el cliente
    $data = json_decode(file_get_contents("php://input"), true);
    
    // Verificar si se recibió la variable correctamente
    if(isset($data['variable'])) {
        // Obtener el valor de la variable
        $valorIngresado = $data['variable'];
        
        // Procesar el valor como desees
        // Por ejemplo, guardarlo en un archivo de registro
        file_put_contents('log.txt', $valorIngresado . " Cualquier texto generado" . PHP_EOL, FILE_APPEND);




        
        // Devolver una respuesta indicando que se recibió el valor
        echo json_encode(['success' => true, 'message' => 'Valor recibido correctamente']);
    } else {
        // Si no se recibió la variable correctamente, devolver un mensaje de error
        echo json_encode(['success' => false, 'message' => 'No se recibió el valor correctamente']);
    }
} else {
    // Si la solicitud no es de tipo POST, devolver un mensaje de error
    echo json_encode(['success' => false, 'message' => 'Método de solicitud no permitido']);
}
?>
