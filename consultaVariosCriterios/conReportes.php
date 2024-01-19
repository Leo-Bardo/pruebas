<?php
include("../conexion.php");
$con = conectar();

// Obtén los valores del formulario si están definidos
$liberacionArea = isset($_POST['liberacionArea']) ? $_POST['liberacionArea'] : '';
$equipo = isset($_POST['equipo']) ? $_POST['equipo'] : '';
$fecha_inicio = isset($_POST['fecha_inicio']) ? $_POST['fecha_inicio'] : '';
$fecha_fin = isset($_POST['fecha_fin']) ? $_POST['fecha_fin'] : '';

// Realiza la consulta SQL con los valores del formulario
$sql = "SELECT r.*
        FROM reportes r
        JOIN liberacion_area t1 ON r.id_tabla1 = t1.id
        JOIN metodo_liberacion_equipos t2 ON r.id_tabla2 = t2.id
        -- Agrega más JOINs según sea necesario
        WHERE t1.codigoLiberacion = '$liberacionArea' -- Filtro para tabla1
        AND t2.codLiberacionArea = '$equipo' -- Filtro para tabla2
        AND r.fechaRevision BETWEEN '$fecha_inicio' AND '$fecha_fin' -- Filtro de fechas";

$resultadoEquipo = $con->query($sql);
?>