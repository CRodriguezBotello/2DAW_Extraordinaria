<?php
    require_once 'coption.php';
    $objActividad = new Coption();
    $Actividad=$objActividad->AnadirActividad();

    include 'v_final.php';
?>