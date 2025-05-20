<?php
    include 'coption.php';
    $objEtapas = new Coption();
    $Etapas=$objEtapas->ListarEtapas();

    include 'formulario_option.php';
?>