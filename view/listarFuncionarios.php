<html>
<head>
 <script>
        function confirmacao(id){
            var resposta = confirm("Vai deleta o Funcionario?");
            if(resposta == true){
                window.location.href = "../controller/excluirFuncionarioController.php?idf=" + id;
            }
        }
        </script>
</head>
<body  onLoad="document.form.pesquisa.focus();">
	<form action="" method="post" align='center' name='form'>
		<input type="text" name='pesquisa' placeholder='Nome do Funcionario'> 
		<input type="submit" value='Pesquisar'>
	</form>
<?php
require_once '../controller/DAO/funcionarioDAO.php';

$funcionarioDAO = new FuncionarioDAO();

if (isset($_POST["pesquisa"])) {
    $pesquisa = $_POST["pesquisa"];
    $funcionarios = $funcionarioDAO->pesquisa($pesquisa);
} else {
    $funcionarios = $funcionarioDAO->listar();
}
// var_dump($funcionarios);
echo "<table border='' align='center'  bgcolor='#fff'>";
echo "<tr>";
echo "<td>Nome</td>";
echo "<td>Codigo</td>";
echo "<td>Perfil</td>";
echo "<td>Alterar</td>";
echo "<td>Excluir</td>";
echo "</tr>";
foreach ($funcionarios as $f) {
    echo "<tr>";
    echo "<td>{$f["nome"]}</td>";
    echo "<td>{$f["codigo"]}</td>";
    echo "<td>{$f["perfil"]}</td>";
    echo "<td><a href='alterarFuncionario.php?idf={$f["idFuncionario"]}'>Alterar</a></td>";
    echo "<td><a href='javascript:func()' onclick='confirmacao({$f["idFuncionario"]})'>Excluir</a></td>";
    echo "</tr>";
}

echo "</table>";

?>
</body>
</html>
