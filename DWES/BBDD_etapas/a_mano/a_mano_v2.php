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
        <title>A mano Etapas</title>
    </head>
    <body>
        <h1>Añadir Actividad</h1>
        <form action="recoger_datos_v2.php" method="post">
            <label for="nombre">Nombre de la actividad:</label><br>
            <input type="text" name="nombre"><br>
            <br>
            <label for="etapas">Etapas: </label><br>
           <?php   
                echo '<input type="checkbox" name="etapa[]" value="' . $etapas[0]["id"] . '">' . $etapas[0]["nombre"];
                echo '<br>';
                echo '<input type="checkbox" name="etapa[]" value="' . $etapas[1]["id"]  . '">' . $etapas[1]["nombre"];
                echo '<br>';
                echo '<input type="checkbox" name="etapa[]" value="' . $etapas[2]["id"]  . '">' . $etapas[2]["nombre"];
            ?>
            <br>
            <input type="submit" value="Enviar">
            <input type="reset" value="Reiniciar">
        </form>
    </body>
</html>