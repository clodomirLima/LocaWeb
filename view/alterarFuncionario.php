<html>
<head>
<?php
require_once '../controller/DAO/funcionarioDAO.php';
$idf = $_GET["idf"];

$funcionarioDAO = new FuncionarioDAO();
$funcionario = $funcionarioDAO->getById($idf);
// var_dump($funcionario);
?>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<form action="../controller/alterarFuncionarioController.php"
		method="post">
		<table align='center'>
			<tr>
				<td colspan='2'><input type="hidden" name="idFuncionario"
					value="<?php echo $funcionario["idFuncionario"]?>"></td>
			</tr>
			<tr>
				<td>Nome:</td>
				<td><input type="text" name="nome"
					value="<?php echo $funcionario["nome"]?>"></td>
			</tr>
			<tr>
				<td>Codigo:</td>
				<td><input type="text" readonly="readonly" name="codigo"
					value="<?php echo $funcionario["codigo"]?>"></td>
			</tr>
			<tr>
				<td>Perfil:</td>
				<td><input type="text" readonly="readonly" name="perfil"
					value="<?php echo $funcionario["perfil"]?>"></td>
			</tr>
			<tr>
				<td colspan='2'><input type="submit" value="Alterar"></td>
			</tr>
		</table>
	</form>
</body>
</html>