<?php
   $etapas = [
    ['id' => 1, 'nombre' => 'ESO'],
    ['id' => 2, 'nombre' => 'BACH'],
    ['id' => 3, 'nombre' => 'CF']
];
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
        <form action="resultwhile.php" method="post">
            <label for="nombre">Nombre de la actividad:</label><br>
            <input type="text" name="nombre"><br>
            <br>
            <label for="etapas">Etapas: </label><br>
           <?php 
                $i=0;
                while($i<3){  
                    echo '<input type="checkbox" name="etapa[]" value="' . $etapas[$i]["id"] . '">' . $etapas[$i]["nombre"];
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