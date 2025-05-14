<?php
    require_once 'conexion.php';
    $conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8");

    $resultado= "SELECT NombreEtapas FROM Etapas";
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
    <h1>Etapas:</h1>
        <?php
            while($fila=$resultado->fetch_assoc()){
                echo '<ul><li>' .$fila["NombreEtapas"]. '</li></ul>';
            }
        ?>
</body>
</html>
