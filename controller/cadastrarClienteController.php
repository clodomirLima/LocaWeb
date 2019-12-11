<?php
require_once './DAO/clienteDAO.php';
require_once './DTO/clienteDTO.php';

$clienteDAO = new ClienteDAO();

$codigo = $_POST["codigo"];
$x = $clienteDAO->resultado($codigo);

if($x == FALSE){
    $idFuncionario = $_POST["idFuncionario"];
    $nome = $_POST["nome"];
    $codigo = $_POST["codigo"];
    $cpf = $_POST["cpf"];
    
    $clienteDTO = new ClienteDTO();
    $clienteDTO->setNome($nome);
    $clienteDTO->setCodigo($codigo);
    $clienteDTO->setCpf($cpf);
    $clienteDTO->setIdFuncionario($idFuncionario);
    
    $clienteDAO = new ClienteDAO();
    $status = $clienteDAO->salvar($clienteDTO);
    
    if (isset($status)){
        echo "<script>";
        echo "alert('Cliente Cadastrado com Sucesso!')";
        echo "</script>";
        echo "<script>";
        echo "window.location='../view/listarClientes.php'";
        echo "</script>";
    }
   
}else{
    echo "<script>";
    echo "alert('Codigo ja esta em Uso!')";
    echo "</script>";
    echo "<script>";
    echo "window.location='../view/cadastrarCliente.php'";
    echo "</script>";
}
