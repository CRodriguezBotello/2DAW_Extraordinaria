<?php
    Class MEtapas{

        private $conexion;

        public function __construct() {
            require_once 'config/conexion.php';
            $this->conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
            $this->conexion->set_charset("utf8");
        }

        public function ListarEtapas(){

            $sql= "SELECT IdEtapas,NombreEtapas FROM Etapas";
            $resultado=$this->conexion->query($sql);

            if ($resultado->num_rows > 0) {
                while($fila=$resultado->fetch_assoc()){
                    
                    $Etapas[$fila["IdEtapas"]]=$fila["NombreEtapas"];
                }
            }else{
                exit('No hay filas en la tabla de Etapas');
            }
            return $Etapas;
        }

        public function InsertarEtapa($nombre){

            $sql= 'INSERT INTO etapas(NombreEtapas) VALUES("'.$nombre.'");';
            $resultado= $this->conexion->query($sql); 
            // echo $conexion->error;
            return $resultado;
        }
    }
?>