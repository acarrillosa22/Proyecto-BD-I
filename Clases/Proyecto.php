<?php
class Proyecto{
    private $IdProyecto;
    private $nombre;
    private $descripcion;
    private $tarifaPorHora;
    private $modalidad;

    public function __construct($nombre, $descripcion, $tarifaPorHora, $modalidad){
        $this->IdProyecto = 1;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion ;
        $this->tarifaPorHora = $tarifaPorHora;
        $this->modalidad = $modalidad;   
    }

    #Getters
    public function getIdProyecto(){
        return $this->IdProyecto;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getTarifaPorHora(){
        return $this->tarifaPorHora;
    }
    public function getModalidad(){
        return $this->modalidad;
    }
}

?>