<?php
    Class MActividades{

        public function ListarActividades(){
            require_once 'config/conexion_1n.php';
            $conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
            $conexion->set_charset("utf8");

            $sql= "SELECT IdActividades, NombreActividades, NombreEtapas FROM actividades 
                            INNER JOIN etapas ON
                            actividades.IdEtapas = etapas.IdEtapas";
            $resultado=$conexion->query($sql);

            if ($resultado->num_rows > 0) {
                while($fila=$resultado->fetch_assoc()){
                    
                    $Actividades[$fila["IdActividades"]]=[$fila["NombreActividades"], $fila["NombreEtapas"]];
                }
            }else{
                exit('No hay filas en la tabla de Etapas');
            }
            return $Actividades;
        }
        
        public function InsertarActividad(){
            require_once 'config/conexion_1n.php';
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
        }
    }
?>