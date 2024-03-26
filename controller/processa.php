<?php

switch ($_REQUEST["op"]){
    case "cadastrarCliente":
        cadastrarCliente();break;
    case "alterarCliente":
        alterarCliente();break;
    case "excluirCliente":
        excluirCliente();break;
    case "listarCliente":
        listarCliente();break;
    case "cadastrarFornecedor":
        cadastrarFornecedor();break;
    case "alterarFornecedor":
        alterarFornecedor();break;
    case "excluirFornecedor":
        excluirFornecedor();break;
    case "listarFornecedor":
        listarFornecedor();break;
    default:
        echo "Não encontrou a chave";
}

// funções do cliente;

function cadastrarCliente (){
    $cnpj = $_POST["cnpj"];
    $nomeFantasia = $_POST["nomeFantasia"];
    $razaoSocial = $_POST["razaoSocial"];
    $numContato = $_POST["numContato"];
    $email = $_POST["email"];
    $fornecedores = $_POST["fornecedores"]; 
    $clienteDesde = $_POST["clienteDesde"];
    include_once 'clienteController.php';
    $cntrl = new clienteController();
    $cntrl->cadastrarCliente($cnpj, $nomeFantasia, $razaoSocial, $numContato, $email, $fornecedores, $clienteDesde);
}
function alterarCliente () {
    $id = $_POST ["id"];
    $cnpj = $_POST["cnpj"];
    $nomeFantasia = $_POST["nomeFantasia"];
    $razaoSocial = $_POST["razaoSocial"];
    $numContato = $_POST["numContato"];
    $email = $_POST["email"];
    $fornecedores = $_POST["fornecedores"]; 
    $clienteDesde = $_POST["clienteDesde"];
    include_once 'clienteController.php';
    $cntrl = new clienteController();
    $cntrl->alterarCliente($id, $cnpj, $nomeFantasia, $razaoSocial, $numContato, $email,$fornecedores, $clienteDesde);
}
function excluirCliente (){
    $id = $_REQUEST["id"];
    include_once 'clienteController.php';
    $cntrl = new clienteController();
    $cntrl->excluirCliente($id);
}
function listarCliente () {
    include '../view/listarClientes.php';
}

// funções do fornecedor ;

function cadastrarFornecedor (){
    $cnpj = $_POST["cnpj"];
    $nomeFantasia = $_POST["nomeFantasia"];
    $razaoSocial = $_POST["razaoSocial"];
    $numContato = $_POST["numContato"];
    $email = $_POST["email"];
    $clientes = $_POST["clientes"]; 
    $produtos = $_POST["produtos"];
    include_once 'fornecedorController.php';
    $cntrl = new fornecedorController();
    $cntrl->cadastrarFornecedor($cnpj, $nomeFantasia, $razaoSocial, $numContato, $email, $clientes, $produtos);
}
function alterarFornecedor () {
    $id = $_POST["id"];
    $cnpj = $_POST["cnpj"];
    $nomeFantasia = $_POST["nomeFantasia"];
    $razaoSocial = $_POST["razaoSocial"];
    $numContato = $_POST["numContato"];
    $email = $_POST["email"];
    $clientes = $_POST["clientes"]; 
    $produtos = $_POST["produtos"];
    include_once 'fornecedorController.php';
    $cntrl = new fornecedorController();
    $cntrl->alterarFornecedor($id, $cnpj, $nomeFantasia, $razaoSocial, $numContato, $email,$clientes, $produtos);
}
function excluirFornecedor (){
    $id = $_REQUEST["id"];
    include_once 'fornecedorController.php';
    $cntrl = new fornecedorController();
    $cntrl->excluirFornecedor($id);
}
function listarFornecedor () {
    include_once '../view/listarFornecedor.php';
}

?>