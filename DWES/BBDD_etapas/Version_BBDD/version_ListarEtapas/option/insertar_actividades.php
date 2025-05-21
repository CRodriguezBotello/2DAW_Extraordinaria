<?php
    require_once '../../config/conexion_1n.php';
    $conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8");

    if (isset($_POST["nombre"]) && !empty($_POST["nombre"]) && isset($_POST["etapas"]) && !empty($_POST["etapas"])) {
        // echo $_POST["nombre"];
        // echo '<br/>';
        // echo $_POST["etapas"];
        // echo '<br/>';
        $sql= 'INSERT INTO actividades(NombreActividades, IdEtapas) VALUES("'.$_POST["nombre"].'",'.$_POST["etapas"].');';
        $conexion->query($sql); 
        // echo $conexion->error;
    }
?>