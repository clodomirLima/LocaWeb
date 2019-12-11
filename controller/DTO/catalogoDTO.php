<?php

class CatalogoDTO{
    private $idCatalogo;
    private $codigo;
    private $filme;
    private $imagen;
    private $hora;
    private $data;
    private $cliente;
    private $idCliente;
    
    public function getIdCatalogo(){
        return $this->idCatalogo;
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public function getFilme(){
        return $this->filme;
    }
    public function getImagen(){
        return $this->imagen;
    }
    
    public function getHora(){
        return $this->hora;
    }
    
    public function getData(){
        return $this->data;
    }
    public function getCliente(){
        return $this->cliente;
    }
    public function getIdCliente(){
        return $this->idCliente;
    }
    //set
    public function setIdCatalogo($idCatalogo){
        $this->idCatalogo = $idCatalogo;
    }
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function setFilme($filme){
        $this->filme = $filme;
    }
    public function setImagen($imagen){
        $this->imagen = $imagen;
    }    
    public function setHora($hora){
        $this->hora = $hora;
    }
    public function setData($data){
        $this->data = $data;
    }
    public function setCliente($cliente){
        $this->cliente = $cliente;
    }
    public function setIdCliente($idCliente){
        $this->idCliente = $idCliente;
    }
}
