<?php
    require_once 'coption.php';
    $objEtapas = new Coption();
    $Etapas=$objEtapas->AnadirEtapa();

    // if ($Etapas) {
        include 'listarEtapas.php';
    // }else{
        // var_dump($Etapas);
        // include 'v_error.php';
    // }
    
?>