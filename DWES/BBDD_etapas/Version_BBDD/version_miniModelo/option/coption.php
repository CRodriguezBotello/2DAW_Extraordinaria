<?php
    Class Coption{
        public function ListarEtapas(){
            require_once 'mOption.php';
            $objEtapas = new Moption();
            $Etapas=$objEtapas->ListarEtapas();
            return $Etapas;
        }

        public function AnadirEtapa(){
            require_once 'mOption.php';
            $objEtapas = new Moption();
            $Etapas=$objEtapas->InsertarEtapa();
        }

        public function AnadirActividad(){
            require_once 'mOption.php';
            $objEtapas = new Moption();
            $Etapas=$objEtapas->InsertarActividad();
        }
    }
?>