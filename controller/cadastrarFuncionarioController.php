<?php
require_once './DAO/funcionarioDAO.php';
require_once './DTO/funcionarioDTO.php';


$funcionarioDAO = new FuncionarioDAO();

$codigo = $_POST["codigo"];
$x = $funcionarioDAO->resultado($codigo);

if($x == FALSE){

    $nome = $_POST["nome"];
    $codigo = $_POST["codigo"];
    $perfil = $_POST["perfil"];
    
    $funcionarioDTO = new FuncionarioDTO();
    $funcionarioDTO->setNome($nome);
    $funcionarioDTO->setCodigo($codigo);
    $funcionarioDTO->setPerfil($perfil);
    
    $funcionarioDAO = new FuncionarioDAO();
    $status = $funcionarioDAO->salvar($funcionarioDTO);
    if (isset($status)){
        echo "<script>";
        echo "alert('Funcionario Cadastrado com Sucesso!')";
        echo "</script>";
        echo "<script>";
        echo "window.location='../view/listarFuncionarios.php'";
        echo "</script>";
    }
}else {
    
    echo "<script>";
    echo "alert('Codigo ja esta em Uso!')";
    echo "</script>";
    echo "<script>";
    echo "window.location='../view/cadastrarFuncionario.php'";
    echo "</script>";
}
