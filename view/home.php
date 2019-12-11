<html>
<head>
<?php include '../controller/validarLogin.php'; ?>
</head>
<body bgcolor='#000'>
	<table border='' width='800' height='600' align='center' bgcolor='#98edff'>
		<tr height='20%'>
			<td colspan='2'>
				<center>LogSystem &copy;</center>
			<?php
            echo "Nome: ", $_SESSION["nome"], "<br>";
            echo "Perfil: ", $_SESSION["perfil"], "<br>";
            echo "<a href='../controller/sair.php'>Sair</a>"?> 
			</td>
		</tr>
		<tr height='80%'>
			<td width='25%' valign='top'><?php include 'paginas.php';?></td>
			<td width='75%'>
			<?php 
		    //include 'cadastrarCliente.php'; 
			?>
			
			<iframe name='centro' width='100%' src="pgi.php" height='100%' frameborder='0'></iframe>
			</td>
		</tr>
	</table>
	<p style="color: #fff;" align='center'>Todos os Direitos
		Reservados.&reg;</p>

</body>
</html>