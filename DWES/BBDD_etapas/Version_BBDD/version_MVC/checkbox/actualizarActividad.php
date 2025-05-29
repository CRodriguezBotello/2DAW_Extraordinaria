<?php

    require_once 'controlador/cActividades.php';
    $objActividad = new CActividades();
    $Actividad=$objActividad->ActualizarActividad();

    include 'listarActividades.php';
?>