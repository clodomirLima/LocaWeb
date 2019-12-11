<?php
require_once 'conexao.php';

class CatalogoDAO{
    private $pdo = null;
    
    public function __construct(){
        $this->pdo = Conexao::getInstance();
    }
    
    public function salvar(CatalogoDTO $catalogoDTO){
        try {
            $sql = "INSERT INTO catalogo(codigo,filme,imagen) 
                    VALUES (?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $catalogoDTO->getCodigo());
            $stmt->bindValue(2, $catalogoDTO->getFilme());
            $stmt->bindValue(3, $catalogoDTO->getImagen());
            return $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function listar(){
        try {
            $sql = "SELECT * FROM catalogo";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $catalogo = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $catalogo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function pesquisa($pesquisa){
        try {
            $sql = "SELECT * FROM catalogo
                    WHERE filme LIKE ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1,"%".$pesquisa."%");
            $stmt->execute();
            $catalogo = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $catalogo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function getByCodigo($codigo){
        try {
            $sql = "SELECT * FROM catalogo
                    WHERE codigo = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $codigo);
            $stmt->execute();
            $catalogo = $stmt->fetch(PDO::FETCH_ASSOC);
            return $catalogo;
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function alugarFilme(CatalogoDTO $catalogoDTO){
        try {
            $sql = "INSERT INTO 
            alugados(cliente,codigo,filme,dtAlugado,hrAlugado,clientes_idCliente,catalogo_idCatalogo)
            VALUES(?,?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $catalogoDTO->getCliente());
            $stmt->bindValue(2, $catalogoDTO->getCodigo());
            $stmt->bindValue(3, $catalogoDTO->getFilme());
            $stmt->bindValue(4, $catalogoDTO->getData());
            $stmt->bindValue(5, $catalogoDTO->getHora());
            $stmt->bindValue(6, $catalogoDTO->getIdCliente());
            $stmt->bindValue(7, $catalogoDTO->getIdCatalogo());
            return $stmt->execute();
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function listarAlugados(){
        try {
            $sql = "SELECT * FROM alugados";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $catalogo = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $catalogo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function pesquisaAlugados($pesquisa){
        try {
            $sql = "SELECT * FROM alugados
                    WHERE filme LIKE ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1,"%".$pesquisa."%");
            $stmt->execute();
            $catalogo = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $catalogo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function excluirAlugados($ida){
        try {
            $sql = "DELETE FROM alugados
                    WHERE idAlugado = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ida);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function resultado($codigo){
        try {
            $sql = "SELECT codigo FROM catalogo
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