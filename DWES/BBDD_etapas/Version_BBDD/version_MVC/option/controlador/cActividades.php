<?php
    Class CActividades{

        public function ListarActividades(){
            require_once 'modelo/mActividades.php';
            $objActividad = new MActividades();
            $Actividades=$objActividad->ListarActividades();
            return $Actividades;
        }

        public function AnadirActividad(){
            require_once 'modelo/mActividades.php';
            $objActividad = new MActividades();
            $Actividad=$objActividad->InsertarActividad();
        }
    }
?>