<?php

    require_once 'controlador/cActividades.php';
    $objActividad = new CActividades();
    $Actividad=$objActividad->EliminarActividad();

    include 'listarActividades.php';
?>