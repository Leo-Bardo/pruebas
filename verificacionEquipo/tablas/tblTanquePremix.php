<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tanque Preparación</title>
	<link rel="stylesheet" href="css/tblStyle.css"></head>
<body>
    
    <button id="mostrarHora">Mostrar Hora</button>

    <form action="tablas/envTblTanquePreparacion.php" method="get" accept-charset="utf-8">
        <h1>TANQUE PREMIX</h1>
        <label>Seleccione ✔ si está en buen estado, de lo contrario dejar sin seleccionar y oprimir botón enviar.</label>
                
        <table>
                <td><label id="horaLabel"></label></td>
                <tr>
                    <td colspan="">Ruidos extraños en mecanismo de agitador</td>
                    <td><input type="checkbox" class="cbVerificacion" name="checklist[]" value="Item 1" id="c1"></td>
                </tr>

                <tr>
                    <td colspan="">Funcionamiento de agitador</td>
                    <td><input type="checkbox" class="cbVerificacion" name="checklist[]" value="Item 1" id="c1"></td>
                </tr>

                <tr>
                    <td colspan="">Funcionamiento de bomba</td>
                    <td><input type="checkbox" class="cbVerificacion" name="checklist[]" value="Item 1" id="c1"></td>
                </tr>

                <tr>
                    <td colspan="">Revisión de válvulas sin fugas.</td>
                    <td><input type="checkbox" class="cbVerificacion" name="checklist[]" value="Item 1" id="c1"></td>
                </tr>

                <tr>
                    <td colspan="">Revisión de filtro.</td>
                    <td><input type="checkbox" class="cbVerificacion" name="checklist[]" value="Item 1" id="c1"></td>
                </tr>

                <tr>
                    <td colspan="">Fugas en tanque y tuberias</td>
                    <td><input type="checkbox" class="cbVerificacion" name="checklist[]" value="Item 1" id="c1"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="" value="ENVIAR"> </td>
                    <td><input type="button" name="" value="CANCELAR" onclick="location.href='../tablasOcultas.php'" > </td>

                </tr>
        </table>
    </form>

</body>
</html>