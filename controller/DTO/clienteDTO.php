<?php
class ClienteDTO{
    private $idCliente;
    private $nome;
    private $codigo;
    private $cpf;
    private $idFuncinario;
   
    public function getIdCliente(){
        return $this->idCliente;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getCodigo(){
        return $this->codigo;
    }
    
    public function getCpf(){
        return $this->cpf;
    }
    
    public function getIdFuncionario(){
        return $this->idFuncinario;
    }
    
    //set
    public function setIdCliente($idCliente){
        $this->idCliente = $idCliente;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    
    public function setIdFuncionario($idFuncionario){
        $this->idFuncinario = $idFuncionario;
    }
}