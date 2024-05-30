<?php
// JSON string (puede ser leído desde un archivo o recibido de una solicitud)
$jsonString = '[
    {
        "homogenizador": "",
        "numLote": "3",
        "horaInicio": "",
        "etapaUno": "2500",
        "etapaDos": "500",
        "valorHomogenizacion": "3000",
        "observaciones": "",
        "valoresTabla": []
    },
    {
        "homogenizador": "",
        "numLote": "3",
        "horaInicio": "",
        "etapaUno": "2500",
        "etapaDos": "500",
        "valorHomogenizacion": "3000",
        "observaciones": "",
        "valoresTabla": []
    },
    {
        "homogenizador": "10",
        "numLote": "4",
        "horaInicio": "20:12",
        "etapaUno": "2500",
        "etapaDos": "500",
        "valorHomogenizacion": "3000",
        "observaciones": "",
        "valoresTabla": [
            {
                "hora": "17:12",
                "valor": "2000"
            },
            {
                "hora": "17:12",
                "valor": "4000"
            }
        ]
    },
    {
        "homogenizador": "10",
        "numLote": "5",
        "horaInicio": "03:39",
        "etapaUno": "2500",
        "etapaDos": "50000000",
        "valorHomogenizacion": "50002500",
        "observaciones": "",
        "valoresTabla": [
            {
                "hora": "11:39",
                "valor": "20000"
            }
        ]
    },
    {
        "homogenizador": "11",
        "numLote": "6",
        "horaInicio": "03:53",
        "etapaUno": "90000",
        "etapaDos": "10000",
        "valorHomogenizacion": "100000",
        "observaciones": "prueba",
        "valoresTabla": [
            {
                "hora": "11:53",
                "valor": "2000"
            }
        ]
    },
    {
        "homogenizador": "10",
        "numLote": "7",
        "horaInicio": "16:06",
        "etapaUno": "2000",
        "etapaDos": "3000",
        "valorHomogenizacion": "5000",
        "observaciones": "",
        "valoresTabla": [
            {
                "hora": "12:05",
                "valor": "200"
            },
            {
                "hora": "12:05",
                "valor": "200"
            }
        ]
    },
    {
        "homogenizador": "4",
        "numLote": "8",
        "horaInicio": "13:09",
        "etapaUno": "800",
        "etapaDos": "400",
        "valorHomogenizacion": "1200",
        "observaciones": "",
        "valoresTabla": [
            {
                "hora": "12:09",
                "valor": "1200"
            },
            {
                "hora": "12:09",
                "valor": "1200"
            },
            {
                "hora": "12:09",
                "valor": "5643"
            }
        ]
    },
    {
        "homogenizador": "11",
        "numLote": "9",
        "horaInicio": "01:00",
        "etapaUno": "14",
        "etapaDos": "14",
        "valorHomogenizacion": "28",
        "observaciones": "",
        "valoresTabla": [
            {
                "hora": "14:16",
                "valor": "1000"
            },
            {
                "hora": "14:17",
                "valor": "234"
            },
            {
                "hora": "14:18",
                "valor": "567"
            }
        ]
    }
]';

// Decodificar el JSON a un array asociativo de PHP
$dataArray = json_decode($jsonString, true);

// Verificar si la decodificación fue exitosa
if (json_last_error() === JSON_ERROR_NONE) {
    // Iterar sobre el array y mostrar los valores
    foreach ($dataArray as $item) {
        echo "Homogenizador: " . $item['homogenizador'] . "<br>";
        echo "Número de Lote: " . $item['numLote'] . "<br>";
        echo "Hora de Inicio: " . $item['horaInicio'] . "<br>";
        echo "Etapa Uno: " . $item['etapaUno'] . "<br>";
        echo "Etapa Dos: " . $item['etapaDos'] . "<br>";
        echo "Valor Homogenización: " . $item['valorHomogenizacion'] . "<br>";
        echo "Observaciones: " . $item['observaciones'] . "<br>";
        
        // Iterar sobre valoresTabla si no está vacío
        if (!empty($item['valoresTabla'])) {
            echo "Valores Tabla:<br>";
            foreach ($item['valoresTabla'] as $valor) {
                echo "- Hora: " . $valor['hora'] . ", Valor: " . $valor['valor'] . "<br>";
            }
        }
        echo "<hr>";
    }
} else {
    echo "Error al decodificar el JSON: " . json_last_error_msg();
}
?>
