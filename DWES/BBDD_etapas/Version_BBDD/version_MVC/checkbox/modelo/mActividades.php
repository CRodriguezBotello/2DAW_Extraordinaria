<?php
    Class MActividades{

        private $conexion;

        public function __construct() {
            require_once 'config/conexion.php';
            $this->conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
            $this->conexion->set_charset("utf8");
        }

        public function ListarActividades(){

            $sql= "SELECT IdActividades, NombreActividades FROM actividades";
            $resultado=$this->conexion->query($sql);

            if ($resultado->num_rows > 0) {
                while($fila=$resultado->fetch_assoc()){
                    
                    $Actividades[$fila["IdActividades"]]=$fila["NombreActividades"];
                }
            }else{
                exit('No hay filas en la tabla de Etapas');
            }
            return $Actividades;
        }
        
        public function InsertarActividad($nombre, $etapas){

            $sql= 'INSERT INTO actividades(NombreActividades) VALUES("'.$nombre.'");';
            $this->conexion->query($sql); 

            if (isset($_POST["etapas"]) && !empty($_POST["etapas"])) {
                
                $IdActividad = $this->conexion->insert_id;

                foreach ($etapas as $etapa) {
                    $sql = 'INSERT INTO etapas_actividades VALUES ('.$etapa.','.$IdActividad.')';
                    $this->conexion->query($sql);
                }
            }
            

        }

        public function ModificarActividad($idActividad, $actividad){

            $sql= 'UPDATE actividades
	                SET NombreActividades = "'.$actividad.'"
	                WHERE IdActividades = '.$idActividad.';';
            $this->conexion->query($sql);
            echo $this->conexion->error;

        }

        public function BorrarActividad($idActividad){

            $sql= 'DELETE FROM actividades WHERE IdActividades = '.$idActividad.';';
            $this->conexion->query($sql);
            echo $this->conexion->error;

        }
    }
?>