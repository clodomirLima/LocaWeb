<html>
<head>
<script>
        function confirmacao(id){
            var resposta = confirm("Vai deleta do historico?");
            if(resposta == true){
                window.location.href = "../controller/excluirAlugado.php?ida=" + id;
            }
        }
        </script>
</head>

<body onLoad="document.form.pesquisa.focus();">
	<form action="" method="post" align='center' name='form'>
		<input type="text" name='pesquisa' placeholder='Nome do Filme'> 
		<input type="submit" value='Pesquisar'>
	</form>
<?php
require_once '../controller/DAO/catalogoDAO.php';

$catalogoDAO = new CatalogoDAO();

if (isset($_POST["pesquisa"])) {
    $pesquisa = $_POST["pesquisa"];
    $catalogo = $catalogoDAO->pesquisaAlugados($pesquisa);
} else {
    $catalogo = $catalogoDAO->listarAlugados();
}

echo "<table border='' align='center' bgcolor='#fff'>";
echo "<tr>";
echo "<td>Cliente</td>";
echo "<td>Codigo Cliente</td>";
echo "<td>Filme</td>";
echo "<td>Data</td>";
echo "<td>Hora</td>";
echo "<td>Excluir</td>";
echo "</tr>";
foreach ($catalogo as $c) {
    echo "<tr>";
    echo "<td>{$c["cliente"]}</td>";
    echo "<td>{$c["codigo"]}</td>";
    echo "<td>{$c["filme"]}</td>";
    echo "<td>{$c["dtAlugado"]}</td>";
    echo "<td>{$c["hrAlugado"]}</td>";
    echo "<td><a href='javascript:func()' onclick='confirmacao({$c["idAlugado"]})'>Excluir</a></td>";
    echo "</tr>";
}

echo "</table>";

?>
</body>
</html>
