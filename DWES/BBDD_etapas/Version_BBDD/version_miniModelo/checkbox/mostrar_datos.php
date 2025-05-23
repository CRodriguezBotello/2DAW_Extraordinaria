<?php
    if(isset($_POST['nombre']) && !empty($_POST['nombre'])){ 
        $nombre=$_POST['nombre'];
        echo $nombre;
    }else{
        echo 'No se eligió un nombre';
    }

    

    if(isset($_POST['etapas']) && !empty($_POST['etapas'])){
        $etapas = $_POST['etapas'];
        echo implode(', ', $etapas);
    } else {
        echo 'No se seleccionaron etapas';
    }

    echo '<br>';

    echo '<a href="formulario_check.php">Volver</a>';
?>