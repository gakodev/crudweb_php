<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../view/estiloCadastro.css">
    <title>Cliente dados</title>
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
    $operacao = $_REQUEST["op"];
    if($operacao=="alterarCliente") {
        include "../controller/clienteController.php";
        $res = clienteController::resgataCliente($_REQUEST["id"]);
        $qtd = $res->rowCount();
        $row = $res->fetch(PDO::FETCH_OBJ);
        $id = $row->id;
        $cnpj = $row->cnpj;
        $nomeFantasia = $row->nomeFantasia;
        $razaoSocial = $row->razaoSocial;
        $numContato = $row->numContato;
        $email = $row->email;
        $fornecedores = $row->fornecedores;
        $clienteDesde = $row->clienteDesde; 
        $operacao = "alterarCliente";
    }   else {
        $id = "";
        $cnpj = "";
        $nomeFantasia = "";
        $razaoSocial = "";
        $numContato = "";
        $email = "";
        $fornecedores = "";
        $clienteDesde = "";
        $operacao = "cadastrarCliente";
    }

    print "<div id='div_formulario'>";
    print "<form id='formulario' method='post' action='../controller/processa.php'>";
    print "<label for='cnpj'>CNPJ:</label>";
    print "<input type='text' name='cnpj' value=".$cnpj."><br>";
    print "<label for='nomeFantasia'>NOME FANTASIA:</label>";
    print "<input type='text' name='nomeFantasia' value =".$nomeFantasia."><br>";
    print "<label for='razaoSocial'>RAZAO SOCIAL:</label>";
    print "<input type='text' name='razaoSocial' value=".$razaoSocial."><br>";
    print "<label for='numContato'>NÚMERO DE CONTATO:</label>";
    print "<input type='number' name='numContato' value=".$numContato."><br>";
    print "<label for='email'>E-MAIL:</label>";
    print "<input type='text' name='email' value=".$email."><br>";
    print "<label for='fornecedores'>FORNECEDORES:</label>";
    print "<input type='text' name='fornecedores' value=".$fornecedores."><br>";
    print "<label for='clienteDesde'>CLIENTE DESDE:</label>";
    print "<input type='date' name='clienteDesde' value=".$clienteDesde."><br>";
    print "<input type='hidden' name='id' value='$id'><br>";
    print "<input type='hidden' name='op' value='$operacao'><br>";
    print "<input class='butao' type='submit' value = '$operacao'>";
    print "</form>";
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