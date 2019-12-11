<?php
require_once './DAO/catalogoDAO.php';
require_once './DAO/clienteDAO.php';
require_once './DTO/catalogoDTO.php';

$codigoCliente = $_POST["codigoCliente"];

$clienteDAO = new ClienteDAO();
$cdg = $clienteDAO->getCodigo($codigoCliente);

if($cdg == FALSE){
    echo "<script>";
    echo "alert('Codigo do Cliente Nao Encontrado!')";
    echo "</script>";
    echo "<script>";
    echo "javascript:window.history.back(1);";
    echo "</script>";
    
}else{
$cliente = $cdg["nome"];
$codigo = $cdg["codigo"];
$filme = $_POST["filme"];
$hora = $_POST["hora"];
$data = $_POST["data"];
$idCliente=$cdg["idCliente"];
$idCatalogo=$_POST["idCatalogo"];

$catalogoDTO = new CatalogoDTO();
$catalogoDTO->setCliente($cliente);
$catalogoDTO->setCodigo($codigo);
$catalogoDTO->setFilme($filme);
$catalogoDTO->setHora($hora);
$catalogoDTO->setData($data);
$catalogoDTO->setIdCliente($idCliente);
$catalogoDTO->setIdCatalogo($idCatalogo);

$catalogoDAO = new CatalogoDAO();
$status = $catalogoDAO->alugarFilme($catalogoDTO);

if (isset($status)){
    echo "<script>";
    echo "alert('Filme Alugado com Sucesso!')";
    echo "</script>";
    echo "<script>";
    echo "window.location='../view/alugados.php'";
    echo "</script>";
}

}


