<?php
require_once './DAO/clienteDAO.php';

$idc = $_GET["idc"];

$clienteDAO = new ClienteDAO();

$clienteDAO->excluirAlugados($idc);

$status = $clienteDAO->excluirCliente($idc);

if(isset($status)){
    echo "<script>";
    echo "alert ('Cliente Deletado!')";
    echo "</script>";
    echo "<script>";
    echo "window.location='../view/listarClientes.php'";
    echo "</script>";
}

