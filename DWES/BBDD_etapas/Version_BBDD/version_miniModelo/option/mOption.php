<?php
    Class Moption{
        public function ListarEtapas(){
            require_once '../../config/conexion_1n.php';
            $conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
            $conexion->set_charset("utf8");

            $resultado= "SELECT IdEtapas,NombreEtapas FROM Etapas";
            $resultado=$conexion->query($resultado);

            if ($resultado->num_rows > 0) {
                while($fila=$resultado->fetch_assoc()){
                    
                    $Etapas[$fila["IdEtapas"]]=$fila["NombreEtapas"];
                }
            }else{
                exit('No hay filas en la tabla de Etapas');
            }
            return $Etapas;
        }
        
        public function InsertarActividad(){
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
        }

        public function InsertarEtapa(){
            require_once '../../config/conexion_1n.php';
            $conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
            $conexion->set_charset("utf8");

            if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {  
                // echo $_POST["etapas"];
                // echo '<br/>';
                $sql= 'INSERT INTO etapas(NombreEtapas) VALUES("'.$_POST["nombre"].'");';
                $conexion->query($sql); 
                // echo $conexion->error;
            }
        }
    }
?>