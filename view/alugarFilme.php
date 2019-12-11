<html>
<head>
<?php
require_once '../controller/DAO/catalogoDAO.php';
$codigo = $_GET["cod"];

$calalogoDAO = new CatalogoDAO();
$catalogo = $calalogoDAO->getByCodigo($codigo);
// var_dump($catalogo);

date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d');
$hora = date('H:i');
?>
</head>
<body  onLoad="document.form.codigoCliente.focus();">
	<br>
	<form action="../controller/alugarFilmeController.php" method="post" name="form">
		<table  align='center'>
			<tr>
				<td  colspan='2'><input type="hidden" name='idCatalogo' value='<?php echo $catalogo["idCatalogo"]?>'></td>
			</tr>
			<tr>
				<td>Filme:</td>
				<td><input type="text" name='filme' readonly="readonly" value='<?php echo $catalogo["filme"]?>'></td>
			</tr>
			<tr>
				<td>Codigo do Catalogo:</td>
				<td><input type="text" name='codigoCatalogo' readonly="readonly" value='<?php echo $catalogo["codigo"]?>'></td>
			</tr>
			<tr>
				<td>Codigo do Cliente:</td>
				<td><input type="text" name='codigoCliente'  placeholder='Codigo do Cliente' maxlength="4"></td>
			</tr>
			<tr>
				<td  colspan='2'><input type="hidden" name='hora' value='<?php echo $hora;?>'></td>
			</tr>
			<tr>
				<td  colspan='2'><input type="hidden" name='data'  value='<?php echo $data;?>'></td>
			</tr>
			<tr>
				<td colspan='2'><input type="submit" value='Alugar'></td>
			</tr>
		</table>
	</form>

</body>
</html>