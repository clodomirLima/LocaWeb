<?php
require_once './DAO/catalogoDAO.php';

$ida = $_GET["ida"];

$catalogoDAO = new CatalogoDAO();
$status = $catalogoDAO->excluirAlugados($ida);


if(isset($status)){
    echo "<script>";
    echo "alert ('Deletado do Historico!')";
    echo "</script>";
    echo "<script>";
    echo "window.location='../view/alugados.php'";
    echo "</script>";
}

