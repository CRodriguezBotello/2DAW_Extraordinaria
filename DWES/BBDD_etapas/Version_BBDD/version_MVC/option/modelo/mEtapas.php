<?php
    Class MEtapas{

        private $conexion;

        public function __construct() {
            require_once 'config/conexion_1n.php';
            $conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
            $conexion->set_charset("utf8");
        }
        
        public function ListarEtapas(){

            $resultado= "SELECT IdEtapas,NombreEtapas FROM Etapas";
            $resultado=$this->conexion->query($resultado);

            if ($resultado->num_rows > 0) {
                while($fila=$resultado->fetch_assoc()){
                    
                    $Etapas[$fila["IdEtapas"]]=$fila["NombreEtapas"];
                }
            }else{
                exit('No hay filas en la tabla de Etapas');
            }
            return $Etapas;
        }

        public function InsertarEtapa(){

            if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {  
                // echo $_POST["etapas"];
                // echo '<br/>';
                $sql= 'INSERT INTO etapas(NombreEtapas) VALUES("'.$_POST["nombre"].'");';
                $resultado= $this->conexion->query($sql); 
                // echo $conexion->error;
                return $resultado;
            }
        }
    }
?>