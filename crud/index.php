<?php
include_once("../conexion.php");
$con = conectar();
?>
<!--Busca por VaidrollTeam para más proyectos. -->
<html>
<head>    
        <title>Menú Usuario</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <table>
    <img src="logo.png">
            <div id="barrabuscar">
        <form method="POST">
        <input type="submit" value="Buscar" name="btnbuscar"><input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270;Ingresar nombre de usuario">
        </form>
        </div>
            <tr><th colspan="5"><h1>LISTAR USUARIOS</h1></tr>
                <tr><th colspan="5" align="left"><a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">Agregar</a></th></tr>
            <tr>
            <th>Nro</th>
            <th>Código</th>
            <th>Nombre</th>
            <th>Acción</th>
            </tr>
        <?php 

if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];
$queryusuarios = mysqli_query($con, "SELECT idUsuario,nombreUsuario FROM usuarios where nombreUsuario like '".$buscar."%'");
}
else
{
$queryusuarios = mysqli_query($con, "SELECT * FROM usuarios ORDER BY nombreUsuario asc");
}
        $numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
        {    $numerofila++;    
            echo "<tr>";
            echo "<td>".$numerofila."</td>";
            echo "<td>".$mostrar['idUsuario']."</td>";
            echo "<td>".$mostrar['nombreUsuario']."</td>";
            // echo "<td>".$mostrar['correo']."</td>";    
            // echo "<td>".$mostrar['tel']."</td>";  
            echo "<td style='width:26%'><a href=\"editar.php?idUsuario=$mostrar[idUsuario]\">Modificar</a> | <a href=\"eliminar.php?idUsuario=$mostrar[idUsuario]\" onClick=\"return confirm('¿Estás seguro de eliminar a $mostrar[idUsuario]?')\">Eliminar</a></td>";           
}
        ?>
    </table>
     <script>
function abrirform() {
  document.getElementById("formregistrar").style.display = "block";
  
}

function cancelarform() {
  document.getElementById("formregistrar").style.display = "none";
}

</script>
<div class="caja_popup" id="formregistrar">
  <form action="agregar.php" class="contenedor_popup" method="POST">
        <table>
        <tr><th colspan="2">Nuevo usuario</th></tr>
            <tr> 
                <td>Nombre</td>
                <td><input type="text" name="txtnombre" required></td>
            </tr>
            <tr> 
                <td>Correo</td>
                <td><input type="email" name="txtcorreo" required></td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td><input type="number" name="txttelefono" required></td>
            </tr>
            <tr>
                <td>Rol</td>
                <td><input type="text" name="txtrol" required></td>
            </tr>
            <tr>
                <td>Estado</td>
                <td><input type="text" name="txtestado" required></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="text" name="txtstatus" required></td>
            </tr>
            <tr>
               <td colspan="2">
                   <button type="button" onclick="cancelarform()">Cancelar</button>
                   <input type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿Deseas registrar a este usuario?');">
            </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>