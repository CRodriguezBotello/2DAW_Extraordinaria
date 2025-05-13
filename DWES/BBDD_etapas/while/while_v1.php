<?php
    $etapas = ['ESO', 'BACH', 'CF'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>While Etapas</title>
    </head>
    <body>
        <h1>Añadir Actividad</h1>
        <form action="recoger_datos.php" method="post">
            <label for="nombre">Actividad:</label><br>
            <input type="text" name="nombre"><br>
            <br>
            <label for="etapas">Etapas: </label><br>
           <?php 
                $i=0;
                while($i<3){  
                    echo '<input type="checkbox" name="etapa[]" value="' . $etapas[$i] . '">' . $etapas[$i];
                    echo '<br>';
                    $i++;
                }
            ?>
            <br>
            <input type="submit" value="Enviar">
            <input type="reset" value="Reiniciar">
        </form>
    </body>
</html>