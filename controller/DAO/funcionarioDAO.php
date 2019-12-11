<?php
require_once 'conexao.php';

class FuncionarioDAO{
    private $pdo = null;
    
    public function __construct(){
        $this->pdo = Conexao::getInstance();
    }
    public function login($codigo){
        try {
            $sql = "SELECT idFuncionario,nome,codigo,perfil
                    FROM funcionarios
                    WHERE codigo = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1,$codigo);
            $stmt->execute();
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            return $login;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
    }
    public function salvar(FuncionarioDTO $funcionarioDTO){
        try {
            $sql = "INSERT INTO funcionarios 
                    (nome,codigo,perfil) 
                    VALUES(?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $funcionarioDTO->getNome());
            $stmt->bindValue(2, $funcionarioDTO->getCodigo());
            $stmt->bindValue(3, $funcionarioDTO->getPerfil());
            return $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function listar(){
        try {
            $sql = "SELECT * FROM funcionarios";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $funcionarios;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
    }
    public function getById($id){
        try {
            $sql = "SELECT * FROM funcionarios 
                    WHERE idFuncionario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            $funcionario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $funcionario;
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function alterarFuncionario(FuncionarioDTO $funcionarioDTO){
        try {
            $sql = "UPDATE funcionarios 
                    SET nome = ?, codigo = ?, perfil = ? 
                    WHERE idFuncionario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1,$funcionarioDTO->getNome());
            $stmt->bindValue(2,$funcionarioDTO->getCodigo());
            $stmt->bindValue(3,$funcionarioDTO->getPerfil());
            $stmt->bindValue(4,$funcionarioDTO->getIdFuncionario());
            return $stmt->execute();
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function excluirFuncionario($idf){
        try {
            $sql = "DELETE FROM funcionarios
                    WHERE idFuncionario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idf);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function pesquisa($pesquisa){
        try {
            $sql = "SELECT * FROM funcionarios 
                    WHERE nome LIKE ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1,"%".$pesquisa."%");
            $stmt->execute();
            $funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $funcionarios;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function resultado($codigo){
        try {
            $sql = "SELECT codigo FROM funcionarios
                    WHERE codigo = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $codigo);
            $stmt->execute();
            $codigo = $stmt->fetch(PDO::FETCH_ASSOC);
            return $codigo; 
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}