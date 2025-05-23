<?php
    require_once 'coption.php';
    $objEtapas = new Coption();
    $Etapas=$objEtapas->ListarEtapas();

    include 'v_formulario_option.php';
?>