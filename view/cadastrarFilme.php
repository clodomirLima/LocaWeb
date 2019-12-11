<html>
<head>

</head>
<body>
<br><br><br><br><br>
	<form action='../controller/cadastrarFilmesController.php' method='post' enctype="multipart/form-data" name='form'>
		<table align="center">
		
			<tr>
				<td><input type='text' readonly="readonly" name='codigo' value='<?php echo rand(100000,999999)?>'></td>
			</tr>
			<tr>
				<td><input type='text' name='filme' placeholder='Nome do Filme'></td>
			</tr>
			<tr>
				<td>
					<input type="file" name="arquivo" multiple="multiple">
				</td>
			</tr>
			<tr>
				<td><input type="submit" value='Cadastrar'></td>
			</tr>
		</table>
	</form>
	
</body>
</html>