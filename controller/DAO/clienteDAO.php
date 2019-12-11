<?php
require_once 'conexao.php';

class ClienteDAO{
    private $pdo = null;
    
    public function __construct(){
        $this->pdo = Conexao::getInstance();
    }
    
    public function salvar(ClienteDTO $clienteDTO){
        try {
            $sql = "INSERT INTO clientes
                    (nome,codigo,cpf,funcionarios_idFuncionario)
                    VALUES (?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $clienteDTO->getNome());
            $stmt->bindValue(2, $clienteDTO->getCodigo());
            $stmt->bindValue(3, $clienteDTO->getCpf());
            $stmt->bindValue(4, $clienteDTO->getIdFuncionario());
            return $stmt->execute();
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public function listar(){
        try {
            $sql = "SELECT * FROM clientes";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $clientes;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
    }
    public function getById($idc){
        try {
            $sql = "SELECT * FROM clientes
                    WHERE idCliente = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idc);
            $stmt->execute();
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cliente;
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function alterarCliente(ClienteDTO $clienteDTO){
        try {
            $sql = "UPDATE clientes
                    SET nome = ?,codigo = ?, cpf = ?, funcionarios_idFuncionario = ?
                    WHERE idCliente = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1,$clienteDTO->getNome());
            $stmt->bindValue(2,$clienteDTO->getCodigo());
            $stmt->bindValue(3,$clienteDTO->getCpf());
            $stmt->bindValue(4,$clienteDTO->getIdFuncionario());
            $stmt->bindValue(5,$clienteDTO->getIdCliente());
            return $stmt->execute();
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function excluirCliente($idc){
        try {
            $sql = "DELETE FROM clientes 
                    WHERE idCliente = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idc);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function pesquisa($pesquisa){
        try {
            $sql = "SELECT * FROM clientes
                    WHERE nome LIKE ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1,"%".$pesquisa."%");
            $stmt->execute();
            $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $clientes;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function getCodigo($codigoCliente){
        try {
            $sql = "SELECT idCliente,nome,codigo FROM clientes
                    WHERE codigo = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $codigoCliente);
            $stmt->execute();
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function resultado($codigo){
        try {
            $sql = "SELECT codigo FROM clientes
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
    public function excluirAlugados($idc){
        try {
            $sql = "DELETE FROM alugados
                    WHERE clientes_idCliente = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idc);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
}