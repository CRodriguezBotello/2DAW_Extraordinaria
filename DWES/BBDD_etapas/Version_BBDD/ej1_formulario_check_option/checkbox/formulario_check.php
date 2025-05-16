<?php
    require_once '../../config/conexion.php';
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
    <title>Etapas checkbox Desde BBDD</title>
</head>
<body>
    <h1>Añadir Actividad</h1>
    <form action="mostrar_datos.php" method="post">
        <label for="nombre">Actividad: </label><br/>
        <input type="text" name="nombre"><br/><br/>

        <label for="etapas">Etapas:</label><br/>
        <?php
            while($fila=$resultado->fetch_assoc()){
                // añadimos un checkbox nuevo por cada fila de etapas que haya en la base de datos
                echo '<input type="checkbox" name="etapas[]" value='.$fila["IdEtapas"].'>' .$fila["NombreEtapas"]. '<br/>';
            }
        ?>
        <br/>
        <input type="reset" value="Reiniciar">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
