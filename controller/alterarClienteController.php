<?php
require_once './DAO/clienteDAO.php';
require_once './DTO/clienteDTO.php';

$idCliente = $_POST["idCliente"];
$nome = $_POST["nome"];
$codigo = $_POST["codigo"];
$cpf = $_POST["cpf"];
$idFuncionario = $_POST["idFuncionario"];

$clienteDTO = new ClienteDTO();
$clienteDTO->setIdCliente($idCliente);
$clienteDTO->setNome($nome);
$clienteDTO->setCodigo($codigo);
$clienteDTO->setCpf($cpf);
$clienteDTO->setIdFuncionario($idFuncionario);

$clienteDAO = new ClienteDAO();
$status = $clienteDAO->alterarCliente($clienteDTO);

if(isset($status)){
    echo "<script>";
    echo "alert ('Cliente Alterado!')";
    echo "</script>";
    echo "<script>";
    echo "window.location='../view/listarClientes.php'";
    echo "</script>";
}

