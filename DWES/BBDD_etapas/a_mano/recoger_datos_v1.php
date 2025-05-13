<?php
    // echo $_POST["nombre"];
    // echo '<br> <br>';
    // echo $_POST["etapa"][0];
    if(isset($_POST['nombre']) && !empty($_POST['nombre'])){ 
        $nombre=$_POST['nombre'];
        echo $nombre;
    }else{
        echo 'No se eligió un nombre';
    }

    
    echo '<br>';

    if(isset($_POST['etapa']) && !empty($_POST['etapa'])){
        $etapas = $_POST['etapa'];
        echo implode(', ', $etapas);
        
    } else {
        echo 'No se seleccionaron etapas';
    }

    echo '<br>';

    echo '<a href="a_mano_v1.php">Volver</a>';
?>