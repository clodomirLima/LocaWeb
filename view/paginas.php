<table border='' width='100%'   bgcolor='#fff'>
<?php
switch ($_SESSION["perfil"]) {
    case "Administrador":
        echo "<tr>";
        echo "<td><a href='cadastrarFuncionario.php' target='centro'>Cadastrar Funcionarios</a></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><a href='listarFuncionarios.php' target='centro'>Listar Funcionarios</a></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><a href='cadastrarCliente.php' target='centro'>Cadastrar Cliente</a></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><a href='listarClientes.php' target='centro'>Listar Clientes</a></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><a href='cadastrarFilme.php' target='centro'>Cadastrar Filme</a></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><a href='catalogo.php' target='centro'>Catalogo</a></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><a href='alugados.php' target='centro'>Alugados</a></td>";
        echo "</tr>";
        break;
    case "Funcionario":
        echo "<tr>";
        echo "<td><a href='cadastrarCliente.php' target='centro'>Cadastrar Cliente</a></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><a href='listarClientes.php' target='centro'>Listar Clientes</a></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><a href='cadastrarFilme.php' target='centro'>Cadastrar Filme</a></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><a href='catalogo.php' target='centro'>Catalogo</a></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><a href='alugados.php' target='centro'>Alugados</a></td>";
        echo "</tr>";
        break;
}
?>
</table>