<?php

class FuncionarioDTO{
    private $idFuncionario;
    private $nome;
    private $codigo;
    private $perfil;
    
    //get
    public function getIdFuncionario() {
        return $this->idFuncionario;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function getCodigo() {
        return $this->codigo;
    }
    
    public function getPerfil() {
        return $this->perfil;
    }
    
    //set
    public function setIdFuncionario($idFuncionario) {
        $this->idFuncionario = $idFuncionario;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
    
    public function setPerfil($perfil) {
        $this->perfil = $perfil;
    }
}