<?php
    class Cliente{
        private $nombre;
        private $ID;
        private $descripcion;
        private $direccion;
        private $personaContacto;
        private $notas;

        public static $idNum = 1;

        public function __construct($nombre, $descripcion, $direccion, $personaContacto, $notas){
            $this->nombre = $nombre;
            $this->ID = 1;
            $this->descripcion = $descripcion;
            $this->direccion = $direccion;
            $this->personaContacto = $personaContacto;
            $this->notas = $notas;
            //Cliente::$idNum++;
        }

        #Getters
        public function getNombre(){
            return $this->nombre;
        }
        public function getID(){
            return $this->ID;
        }
        public function getDescripcion(){
            return $this->descripcion;
        } 
        public function getDireccion(){
            return $this->direccion;
        }
        public function getPersonaContacto(){
            return $this->personacontacto;
        }
        public function getNotas(){
            return $this->notas;
        }

        #Setters
        public function setNombre($value){
            $this->nombre = $value;
        }
        public function setDescripcion($value){
            $this->descripcion = $value;
        }
        public function setDireccion($value){
            $this->direccion = $value;
        }
        public function setPersonaContacto($value){
            $this->personaContacto = $value;
        }
        public function setNotas($value){
            $this->notas = $value;
        }


    }

?>