<?php $leftLinks = [
    ["href" => "xplJS", "text" => "1 - Incrementar Etiquetas con JQuery"],
    ["href" => "inputNumber/index.php", "text" => "2 - Estilo de Numero Incremento"],
    ["href" => "alertas/index.php", "text" => "3 - Configuracion de Alertas con SweetAlert"],
    ["href" => "sumaNumerosJS/index.php", "text" => "4 - Suma de Números JS"],
    ["href" => "alineacionDiv/index.html", "text" => "5 - Alineación de Divs"],
    ["href" => "tablaPestanas/index.php", "text" => "6 - Tabla con Pestañas"],
    ["href" => "graficas/index.php", "text" => "7 - Graficas"],
    ["href" => "ejerciciosLogica/ejerciciosLogica.md", "text" => "8 - Ejercicios de Lógica"],


];

$rightLinks = [
    ["href" => "dataList/index.php", "text" => "9 - Agregar Datos desde DataList"],
    ["href" => "asincronia/index.php", "text" => "10 - Asincronia con JS"],
    ["href" => "json/index.html", "text" => "11 - JSON JavaScript/PHP"],
    ["href" => "concentrado/index.php", "text" => "12 - Concentrado de Formulas"],
    ["href" => "generaJson/index.html", "text" => "13 - Arreglo procesado con PHP"],
    ["href" => "filtroBuscar/index.php", "text" => "14 - Filtro de Buscar"],
    ["href" => "tablaPestanas/index.php", "text" => "15 - Tabla con Pestañas"],
    ["href" => "ejerciciosLogica/ejerciciosLogica.md", "text" => "16 - EN CONSTRUCCIÓN"],
];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="title">
    <h1>MENÚ PARA PRUEBAS</h1>
    <h2>LINKS</h2>
</div>
<div class="container" align="center">
    <div class="leftContainer">
        <?php foreach ($leftLinks as $link): ?>
            <div class="leftDiv" align="center">
                <a href="<?= $link['href'] ?>" title=""><h1><?= $link['text'] ?></h1></a>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="rightContainer">
        <?php foreach ($rightLinks as $link): ?>
            <div class="rightDiv" align="center">
                <a href="<?= $link['href'] ?>" title=""><h1><?= $link['text'] ?></h1></a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>