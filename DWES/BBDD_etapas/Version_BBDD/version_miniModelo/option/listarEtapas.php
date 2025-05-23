<?php
    require_once 'coption.php';
    $objEtapas = new Coption();
    $Etapas=$objEtapas->ListarEtapas();

    include 'formulario_option.php';
?>