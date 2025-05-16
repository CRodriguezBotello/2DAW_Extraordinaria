<?php
    require_once '../../config/conexion_1n.php';
    $conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8");

    $resultado= "SELECT IdEtapas, NombreEtapas FROM Etapas";
    $resultado=$conexion->query($resultado);    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etapas Desde BBDD</title>
</head>
<body>
    <h1>Añadir Actividad</h1>
    <form action="insertar_actividades.php" method="post">
        <label for="nombre">Actividad: </label><br/>
        <input type="text" name="nombre"><br/><br/>

        <label for="etapas">Etapas:</label><br/>
        <select name="etapas">
        <?php
            while($fila=$resultado->fetch_assoc()){
                // añadimos un option nuevo al select por cada fila de etapas que haya en la base de datos
                echo '<option value='.$fila["IdEtapas"].'>'.$fila["NombreEtapas"].'</option>';
            }
        ?>
        </select>
        <br/>
        <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Reiniciar">
    </form>
</body>
</html>
