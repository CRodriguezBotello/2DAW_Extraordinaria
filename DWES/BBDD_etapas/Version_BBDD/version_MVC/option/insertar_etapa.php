<?php
    require_once 'controlador/cEtapas.php';
    $objEtapas = new CEtapas();
    $Etapas=$objEtapas->AnadirEtapa();

    // if ($Etapas) {
        include 'listarEtapas.php';
    // }else{
        // var_dump($Etapas);
        // include 'v_error.php';
    // }
    
?>