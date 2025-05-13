<?php
    $curso = [
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
    <title>Foreach Etapas</title>
</head>
<body>

    <h1>Añadir Actividad</h1>
    <form action="recoger_datos_v2.php" method="post">
        <label for="nombre">Actividad: </label><br/>
        <input type="text" name="nombre"><br/><br/>
        <?php
            foreach ($curso as $valor) {
               
                echo '<input type="checkbox" name="etapas[]" value="' . $valor['id'] . '"> ' . $valor['nombre'] . '<br/>';
            }
        ?>
        <br/>
        <input type="submit" value="Enviar">
        <input type="reset" value="Reiniciar">
    </form>
</body>
</html>
