<html>
<body onLoad="document.form.pesquisa.focus();">
	<form action="" method="post" align='center' name='form'>
		<input type="text" name='pesquisa' placeholder='Nome do Filme'> <input
			type="submit" value='Pesquisar'>
	</form>
	
	<?php
require_once '../controller/DAO/catalogoDAO.php';
$catalogoDAO = new CatalogoDAO();

if(isset($_POST["pesquisa"])){
    $pesquisa = $_POST["pesquisa"];
    $catalogo = $catalogoDAO->pesquisa($pesquisa);
}else {
$catalogo = $catalogoDAO->listar();
}
foreach ($catalogo as $c) {
    echo "<table border='' style='float:left;' cellspacing='10'  style='TABLE-LAYOUT: fixed;' width='130' height='250'  bgcolor='#fff'>";
    echo "  <tr align='center'>";
    echo "      <td>{$c["filme"]}</td>";
    echo "  </tr>";
    echo "  <tr>";
    echo "      <td><img src='{$c["imagen"]}' width='103' height='103'></td>";
    echo "  </tr>";
    echo "  <tr align='center'>";
    echo "      <td>{$c["codigo"]}</td>";
    echo "  </tr>";
    echo "  <tr align='center'>";
    echo "      <td><a href='alugarFilme.php?cod={$c["codigo"]}'>Alugar</a></td>";
    echo "  </tr>";
    echo "</table>";
    //$i = 0;$i ++;
    
    //if ($i % 3 == 0) {
        //echo "<br><br><br>";
   // }
}
?>
</body>
</html>
