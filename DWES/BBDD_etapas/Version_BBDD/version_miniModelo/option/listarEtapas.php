<?php
    require_once 'coption.php';
    $objEtapa = new Coption();
    $Etapa=$objEtapa->ListarEtapas();

    include 'v_formulario_option.php';
?>