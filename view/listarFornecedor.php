<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../view/estilo.css">
    <title>Listagem de clientes</title>
</head>

<body>

    <header id="header">
        <div id="div_header">
                <h1 id="titulo">Contabilidade</h1>
                <ul id="ul_header">
                    <li><a href="../view/pageCliente.php?op=cadastrarCliente">Cadastrar cliente</a></li>
                    <li><a href="../view/pageFornecedor.php?op=cadastrarFornecedor">Cadastrar fornecedor</a></li>
                </ul>
        </div>
    </header>

    <?php
    include_once ("../controller/fornecedorController.php");
    $res = fornecedorController::listarFornecedor();
    $qtd = $res->rowCount();
    if ($qtd > 0) {
        print "<div id='div_tabela'>";
        print "<table id='tabela' class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th> ID &nbsp </th>";
        print "<th> CNPJ &nbsp </th>";
        print "<th> Nome fantasia &nbsp </th>";
        print "<th> Razão social &nbsp</th>";
        print "<th> Numéro de contato &nbsp</th>";
        print "<th> E-mail &nbsp </th>";
        print "<th> Clientes &nbsp </th>";
        print "<th> Produtos &nbsp</th>";
        print "</tr>";
        while ($row = $res->fetch(PDO::FETCH_OBJ)) {
            print "<tr>";
            print "<td>" . $row->id . "</td>";
            print "<td>" . $row->cnpj . "</td>";
            print "<td>" . $row->nomeFantasia . "</td>";
            print "<td>" . $row->razaoSocial . "</td>";
            print "<td>" . $row->numContato . "</td>";
            print "<td>" . $row->email . "</td>";
            print "<td>" . $row->clientes . "</td>";
            print "<td>" . $row->produtos . "</td>";
            print "<td>
                <button onclick=\"location.href ='../view/pageFornecedor.php?op=alterarFornecedor&id=" . $row->id . "';\">Alterar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                    location.href = '../controller/processa.php?op=excluirFornecedor&id=" . $row->id . "'; }
                    else { false; }\">Excluir</button>
                    </td>";
            echo "</form>";
            print "</tr>";
            
        }
        print "</table>";
    } else {
        echo "<p>Nenhum registro encontrado!</p>";
    }
    print "</div>";
    ?>

<footer>
    <ul id="opcoes">
            <li><a href="../controller/processa.php?op=listarCliente">Listar clientes</a></li>
            <li><a href="../controller/processa.php?op=listarFornecedor">Listar fornecedores</a></li>
    </ul>
</footer>




</body>
</html>