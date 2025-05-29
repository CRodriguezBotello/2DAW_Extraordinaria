<?php
    Class CEtapas{
        public function ListarEtapas(){
            require_once 'modelo/mEtapas.php';
            $objEtapas = new MEtapas();
            $Etapas=$objEtapas->ListarEtapas();
            return $Etapas;
        }

        public function AnadirEtapa(){

            if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {

                $nombre = $_POST["nombre"];

            }
            require_once 'modelo/mEtapas.php';
            $objEtapas = new MEtapas();
            $Etapas=$objEtapas->InsertarEtapa($nombre);
            return $Etapas;
        }
    }
?>