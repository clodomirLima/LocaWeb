<?php
require_once './DAO/funcionarioDAO.php';
require_once './DTO/funcionarioDTO.php';

$idFuncionario = $_POST["idFuncionario"];
$nome = $_POST["nome"];
$codigo = $_POST["codigo"];
$perfil = $_POST["perfil"];

$funcionarioDTO = new FuncionarioDTO();
$funcionarioDTO->setNome($nome);
$funcionarioDTO->setCodigo($codigo);
$funcionarioDTO->setPerfil($perfil);
$funcionarioDTO->setIdFuncionario($idFuncionario);

$funcionarioDAO = new FuncionarioDAO();
$status = $funcionarioDAO->alterarFuncionario($funcionarioDTO);


if(isset($status)){
    echo "<script>";
    echo "alert ('Funcionario Alterado!')";
    echo "</script>";
    echo "<script>";
    echo "window.location='../view/listarFuncionarios.php'";
    echo "</script>";
}

