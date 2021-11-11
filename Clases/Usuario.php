<?php
class Usuario{
    private $IdUsuario;
    private $nombre;
    private $contrasegna;
    private $notas;
    private $tarifaPorHora;
    private $IdUsuarioRef;
    private $registroCreacion;
    private $tienePerfil;

    public function __construct($nombre, $contrasegna, $notas, $tarifaPorHora, $IdUsuarioRef, $registroCreacion){
        $this->nombre = $nombre;
        $this->contrasegna = $contrasegna;
        $this->notas = $notas;
        $this->tarifaPorHora = $tarifaPorHora;
        $this->IdUsuarioRef = $IdUsuarioRef;
    }

    //Getters
    public function getIdUsuario(){
        return $this->IdUsuario;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getContrasegna(){
        return $this->contrasegna;
    }
    public function getNotas(){
        return $this->notas;
    }
    public function getTarifaPorHora(){
        return $this->tarifaPorHora;
    }
    public function getIdUsuarioRef(){
        return $this->IdUsuarioRef;
    }
    public function getRegistroCreacion(){
        return $this->registroCreacion;
    }
    public function getTienePerfil(){
        return $this->tienePerfil;
    }
    
}
?>