<html>
<head>
<script>
        function confirmacao(id){
            var resposta = confirm("Vai deleta o Cliente?");
            if(resposta == true){
                window.location.href = "../controller/excluirClienteController.php?idc=" + id;
            }
        }
        </script>
</head>
<body onLoad="document.form.pesquisa.focus();">
	<form action="" method="post" align='center' name='form'>
		<input type="text" name='pesquisa' placeholder='Nome do Cliente'> 
		<input type="submit" value='Pesquisar'>
	</form>
<?php
require_once '../controller/DAO/clienteDAO.php';

$clienteDAO = new ClienteDAO();

if (isset($_POST["pesquisa"])) {
    $pesquisa = $_POST["pesquisa"];
    $clientes = $clienteDAO->pesquisa($pesquisa);
} else {
    $clientes = $clienteDAO->listar();
}

echo "<table border='' align='center' bgcolor='#fff'>";
echo "<tr>";
echo "<td>Nome</td>";
echo "<td>Codigo</td>";
echo "<td>CPF</td>";
echo "<td>Alterar</td>";
echo "<td>Excluir</td>";
echo "</tr>";
foreach ($clientes as $c){
    echo "<tr>";
    echo "<td>{$c["nome"]}</td>";
    echo "<td>{$c["codigo"]}</td>";
    echo "<td>{$c["cpf"]}</td>";
    echo "<td><a href='alterarCliente.php?idc={$c["idCliente"]}'>Alterar</a></td>";
    echo "<td><a href='javascript:func()' onclick='confirmacao({$c["idCliente"]})'>Excluir</a></td>";
                   
    echo "</tr>";
}

echo "</table>";

?>
</body>
</html>
