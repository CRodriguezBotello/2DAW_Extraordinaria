<?php
    require_once 'coption.php';
    $objEtapas = new Coption();
    $Etapas=$objEtapas->AnadirEtapa();

    include 'listarEtapas.php';
?>