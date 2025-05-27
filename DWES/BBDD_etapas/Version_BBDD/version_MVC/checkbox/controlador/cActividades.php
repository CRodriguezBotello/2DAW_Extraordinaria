<?php
    Class CActividades{

        public function ListarActividades(){
            require_once 'modelo/mActividades.php';
            $objActividad = new MActividades();
            $Actividades=$objActividad->ListarActividades();
            return $Actividades;
        }

        public function AnadirActividad(){
            //  if (isset($_POST["nombre"]) && !empty($_POST["nombre"]) && isset($_POST["etapas"]) && !empty($_POST["etapas"])) {

            //  }

            require_once 'modelo/mActividades.php';
            $objActividad = new MActividades();
            $Actividad=$objActividad->InsertarActividad();
        }
    }
?>