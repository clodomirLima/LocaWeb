<html>
<?php
require_once '../controller/DAO/clienteDAO.php';
$idc = $_GET["idc"];

$clienteDAO = new ClienteDAO();
$cliente = $clienteDAO->getById($idc);
 //var_dump($cliente);
?>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<form action="../controller/alterarClienteController.php"
		method="post">
		<table align='center'>
			<tr>
				<td colspan="2"><input type="hidden" name="idCliente"
					value="<?php echo $cliente["idCliente"]?>"></td>
			</tr>
			<tr>
				<td>Nome:</td>
				<td><input type="text" name="nome"
					value="<?php echo $cliente["nome"]?>"></td>
			</tr>
			<tr>
				<td>Codigo:</td>
				<td><input type="text" readonly="readonly" name="codigo"
					value="<?php echo $cliente["codigo"]?>"></td>
			</tr>
			<tr>
				<td>CPF:</td>
				<td><input type="text" readonly="readonly" name="cpf"
					value="<?php echo $cliente["cpf"]?>"></td>
			</tr>
			<tr>
				<td  colspan="2"><input type="hidden" name="idFuncionario"
					value="<?php echo $cliente["funcionarios_idFuncionario"]?>"></td>
			</tr>
			<tr>
				<td colspan='2'><input type="submit" value="Alterar"></td>
			</tr>
		</table>
	</form>
</body>
</html>