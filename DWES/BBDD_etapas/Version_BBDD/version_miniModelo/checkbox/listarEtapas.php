<?php
    include 'ccheckbox.php';

    $objEtapas= new Ccheckbox();
    $Etapas=$objEtapas->ListarEtapas();

    include 'formulario_check.php';
?>