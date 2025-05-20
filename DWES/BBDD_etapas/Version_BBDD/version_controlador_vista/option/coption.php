<?php
    Class Coption{
        public function etapas(){
        require_once '../../config/conexion_1n.php';
        $conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
        $conexion->set_charset("utf8");

        $resultado= "SELECT NombreEtapas FROM Etapas";
        $resultado=$conexion->query($resultado);

        if ($resultado->num_rows > 0) {
            while($fila=$resultado->fetch_assoc()){
                
                $Etapas[]=$fila["NombreEtapas"];
            }
        }else{
            exit('No hay filas en la tabla de Etapas');
        }
        return $Etapas;
        }
    }
?>