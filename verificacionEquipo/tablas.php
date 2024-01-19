<?php
include("../conexion.php");

$con=conectar();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <form action="guardaChkBx.php" method="POST">
                <h1>METODO DE LIBERACIÓN DE EQUIPOS</h1>
        <label class="selectores" for="area">CÓDIGO DE ÁREA:
            <?php 

                //verificar la consulta para obtener el ultimo registro respecto a la fecha y hora
                $sql = "SELECT * FROM liberacion_area ORDER BY fecha, hora DESC LIMIT 1";
                $result = $con->query($sql);

                // Verifica si se obtuvieron resultados
                if ($result->num_rows > 0) {
                    // Obtiene los datos del último registro
                    $row = $result->fetch_assoc();

                    // Muestra el valor en un label
                    echo $row["codigoLiberacion"];
                } else {
                    echo "No hay registros en la tabla.";
                }
            ?>
<!-- Campo oculto para almacenar valor de select -->
    <input type="label" name="codLiberacionArea" value="<?php echo $row["codigoLiberacion"]; ?>">

            <table>
            <!-- <button id="mostrarHora">Mostrar Hora</button> -->
            <tr>
                <td class="tipoTanque" colspan="">TANQUE DE PREPARACIÓN</td>
                <td><label id="horaLabel"></label></td>
            </tr>
            <!-- Tomar en cuenta que la propiedad name esta basada en el numero id de la BBDD y a su vez de la posición que tienen en los formatos -->
                 <tr>
                    <td colspan="">Revisión de procedimiento de preparación</td>
                    <td><input type="checkbox" class="cbVerificacion" name="actGeneral1" value="Item 1" id="c1"></td>
                </tr>

                <tr>
                    <td colspan="">Liberación de limpieza de equipos a utilizar</td>
                    <td><input type="checkbox" class="cbVerificacion" name="actGeneral12" value="Item 1" id="c1"></td>
                </tr>

                <tr>
                    <td colspan="">Revisión de funcionamiento de Equipos</td>
                    <td><input type="checkbox" class="cbVerificacion" name="actGeneral3" value="Item 1" id="c1"></td>
                </tr>

                <tr>
                    <td colspan="">Limpieza de utensilio a u</td>
                    <td><input type="checkbox" class="cbVerificacion" name="actGeneral4" value="Item 1" id="c1"></td>
                </tr>

                <tr>
                    <td colspan="">retiro de utensilios que no corresponden</td>
                    <td><input type="checkbox" class="cbVerificacion" name="actGeneral5" value="Item 1" id="c1"></td>
                </tr>
                <tr>
                    <td colspan="">orden y limpieza de area</td>
                    <td><input type="checkbox" class="cbVerificacion" name="actGeneral6" value="Item 1" id="c1"></td>
                </tr>
                <tr>
                    <td colspan="">Revisión de filtros en linea de proceso</td>
                    <td><input type="checkbox" class="cbVerificacion" name="actGeneral7" value="Item 1" id="c1"></td>
                </tr>
                <tr>    
                    <td colspan="">mantener tuberias en deshuso con tapa</td>
                    <td><input type="checkbox" class="cbVerificacion" name="actGeneral8" value="Item 1" id="c1"></td>
                </tr>
                <tr>    
                    <td colspan="">mantener tuberias en deshuso con tapa</td>
                    <td><input type="checkbox" class="cbVerificacion" name="actGeneral9" value="Item 1" id="c1"></td>
                </tr>
                <tr>    
                    <td colspan="">mantener tuberias en deshuso con tapa</td>
                    <td><input type="checkbox" class="cbVerificacion" name="actGeneral10" value="Item 1" id="c1"></td>
                </tr>
        </table>
        <div class="inputCon">
                    <input type="submit" name="">
        </div>
            </form>

</body>
</html>