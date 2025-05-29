<?php
    Class CActividades{

        public function ListarActividades(){
            
            require_once 'modelo/mActividades.php';
            $objActividad = new MActividades();
            $Actividades=$objActividad->ListarActividades();
            return $Actividades;
        }

        public function AnadirActividad(){
            if (isset($_POST["nombre"]) && !empty($_POST["nombre"]) && isset($_POST["etapas"]) && !empty($_POST["etapas"])) {

                $nombre = $_POST["nombre"];
                $etapas = $_POST["etapas"];
            }

            require_once 'modelo/mActividades.php';
            $objActividad = new MActividades();
            $Actividad=$objActividad->InsertarActividad($nombre, $etapas);
        }

        public function ActualizarActividad(){
            if (isset($_POST["actividad"]) && !empty($_POST["actividad"]) && isset($_POST["idActividad"]) && !empty($_POST["idActividad"])) {

                $idActividad = $_POST["idActividad"];
                $actividad = $_POST["actividad"];

                require_once 'modelo/mActividades.php';
                $objActividad = new MActividades();
                $Actividad=$objActividad->ModificarActividad($idActividad, $actividad);
            }
        }
    }
?>