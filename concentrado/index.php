<body>
  <h1>Aqui estoy procesando un arreglo Json a través de PHP</h1>
<?php 
$json = '{
  "arrayColores": [
    {
      "nombreColor": "rojo",
      "valorHexadec": "#f00"
    },
    {
      "nombreColor": "verde",
      "valorHexadec": "#0f0"
    },
    {
      "nombreColor": "azul",
      "valorHexadec": "#00f"
    }
  ]
}';

$arrayColores = json_decode($json, true);

foreach ($arrayColores['arrayColores'] as $color) {
    echo "Nombre: " . $color['nombreColor'] . ", Hexadecimal: " . $color['valorHexadec'] . "<br>";
}
// Para imprimir el arreglo completo
echo "<pre>";
print_r($arrayColores['arrayColores']);
echo "</pre>";
?>
</body>