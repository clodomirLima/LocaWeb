<?php

// verifica se foi enviado um arquivo
if (isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0) {
    
    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
    $nome = $_FILES['arquivo']['name'];
    // Pega a extensao
    $extensao = strrchr($nome, '.');
    // Converte a extensao para mimusculo
    $extensao = strtolower($extensao);
    // Somente imagens, .jpg;.jpeg;.gif;.png
    if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        $novoNome = md5(microtime()) . $extensao;
        // Concatena a pasta com o nome
        $destino = '../imagensCatalogo/' . $novoNome;
        // tenta mover o arquivo para o destino
        if (@move_uploaded_file($arquivo_tmp, $destino)) {
            //echo "Arquivo salvo com sucesso em : <strong>" . $destino . "</strong><br />";
            //echo "<img src=\"" . $destino . "\" />";
        } else
            echo "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />";
    } else
        echo "Você poderá enviar apenas arquivos \"*.jpg;*.jpeg;*.gif;*.png\"<br />";
}

require_once './DAO/catalogoDAO.php';
require_once './DTO/catalogoDTO.php';

$catalogoDAO = new CatalogoDAO();
$codigo = $_POST["codigo"];
$x = $catalogoDAO->resultado($codigo);

if($x == FALSE){
    $codigo = $_POST["codigo"];
    $filme = $_POST["filme"];
    $imagen = $destino;
    
    $catalogoDTO = new CatalogoDTO();
    $catalogoDTO->setCodigo($codigo);
    $catalogoDTO->setFilme($filme);
    $catalogoDTO->setImagen($imagen);
    
    $catalogoDAO = new CatalogoDAO();
    $status = $catalogoDAO->salvar($catalogoDTO);
    
    if (isset($status)){
        echo "<script>";
        echo "alert('Filme Cadastrado com Sucesso!')";
        echo "</script>";
        echo "<script>";
        echo "window.location='../view/catalogo.php'";
        echo "</script>";
    }
}else {
    echo "<script>";
    echo "alert('Codigo ja esta em Uso!')";
    echo "</script>";
    echo "<script>";
    echo "window.location='../view/cadastrarFilme.php'";
    echo "</script>";
}
