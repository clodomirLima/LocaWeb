<?php
require_once './DAO/funcionarioDAO.php';

$idf = $_GET["idf"];

$funcionarioDAO = new FuncionarioDAO();
$status = $funcionarioDAO->excluirFuncionario($idf);


if(isset($status)){
    echo "<script>";
    echo "alert ('Funcionario Deletado!')";
    echo "</script>";
    echo "<script>";
    echo "window.location='../view/listarFuncionarios.php'";
    echo "</script>";
}


