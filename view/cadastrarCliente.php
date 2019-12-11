<html>
<head>
<?php session_start(); 
$idf =  $_SESSION["idFuncionario"]?>
</head>
<body>
<br><br><br><br><br>
	<form action='../controller/cadastrarClienteController.php' method='post'>
		<table align="center">
		
			<tr>
				<td><input type="hidden" name='idFuncionario' value='<?php echo $idf?>'></td>
			</tr>
			<tr>
				<td><input type='text' name='nome' placeholder='Nome'></td>
			</tr>
			<tr>
				<td><input type='text' readonly="readonly" name='codigo' value='<?php echo rand(1000,9999)?>'></td>
			</tr>
			<tr>
				<td><input type='text' name='cpf' placeholder='CPF' maxlength="14"></td>
			</tr>
			<tr>
				<td><input type="submit" value='Cadastrar'></td>
			</tr>
		</table>
	</form>
	
</body>
</html>