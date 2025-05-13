<?php
    $curso = ['ESO', 'BACH', 'CF'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach Etapas</title>
</head>
<body>
    <h1>Añadir Actividad</h1>
    <form action="recoger_datos_v1.php" method="post">
        <label for="nombre">Actividad: </label><br/>
        <input type="text" name="nombre"><br/><br/>

        <label for="etapas">Etapas:</label><br/>
        <?php
            foreach ($curso as $valor) {
                echo '<input type="checkbox" name="etapas[]" value="' .$valor . '"> ' . $valor. '<br/>';
            }
        ?>
        <br/>
        <input type="submit" value="Enviar">
        <input type="reset" value="Reiniciar">
    </form>
</body>
</html>
