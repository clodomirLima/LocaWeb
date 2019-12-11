<?php
session_start();
require_once './DAO/funcionarioDAO.php';

$codigo = $_POST["codigo"];

$funcionarioDAO = new FuncionarioDAO(); 
$login = $funcionarioDAO->login($codigo);

//var_dump($login);
//exit();
if (!empty($login)){
    
    $_SESSION["idFuncionario"] = $login["idFuncionario"];
    $_SESSION["nome"] = $login["nome"];
    $_SESSION["codigo"] = $login["codigo"];
    $_SESSION["perfil"] = $login["perfil"];
    
    header("location: ../view/home.php ");
}else{
    echo "<script>";
    echo "alert('Codigo Nao Encontrado!')";
    echo "</script>";
    echo "<script>";
    echo "window.location='../index.php'";
    echo "</script>";
}


