<html>
<body>
<br><br><br><br><br>
	<form action='../controller/cadastrarFuncionarioController.php' method='post'>
		<table align="center">
			<tr>
				<td><input type='text' name='nome' placeholder='Nome'></td>
			</tr>
			<tr>
				<td><input type='text' readonly="readonly" name='codigo' maxlength="4" value='<?php echo rand(1000,9999)?>'></td>
			</tr>
			<tr>
				<td><select name='perfil'>
						<option value='Funcionario'>Funcionario</option>
						<option value='Administrador'>Administrador</option>
				</select></td>
			</tr>
			<tr>
				<td><input type="submit" value='Cadastrar'></td>
			</tr>
		</table>
	</form>
</body>
</html>