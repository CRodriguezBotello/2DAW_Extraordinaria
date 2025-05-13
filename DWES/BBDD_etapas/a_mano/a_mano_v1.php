<?php
    $etapas = ['ESO', 'BACH', 'CF'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>A mano Etapas</title>
    </head>
    <body>
        <h1>Añadir Actividad</h1>
        <form action="recoger_datos_v1.php" method="post">
            <label for="nombre">Actividad:</label><br>
            <input type="text" name="nombre"><br>
            <br>
            <label for="etapas">Etapas: </label><br>
           <?php   
                echo '<input type="checkbox" name="etapa[]" value="' . $etapas[0] . '">' . $etapas[0];
                echo '<br>';
                echo '<input type="checkbox" name="etapa[]" value="' . $etapas[1] . '">' . $etapas[1];
                echo '<br>';
                echo '<input type="checkbox" name="etapa[]" value="' . $etapas[2] . '">' . $etapas[2];
            ?>
            <br>
            <input type="submit" value="Enviar">
            <input type="reset" value="Reiniciar">
        </form>
    </body>
</html>