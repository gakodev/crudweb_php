<?php
//require "../model/Cliente.php";
    class clienteController {

        public static function cadastrarCliente ($cnpj, $nomeFantasia, $razaoSocial, $numContato, $email,$fornecedores, $clienteDesde) {
            include_once "../model/Cliente.php";
            $model = new Cliente (null, $cnpj, $nomeFantasia, $razaoSocial, $numContato, $email,$fornecedores, $clienteDesde);
            $model->cadastrarCliente($model);
        }

        public static function listarClientes(){
            include_once "../model/Cliente.php";
            $model = new Cliente(null, null, null, null, null, null, null,null);
            return $model->listarClientes();
        }

        public static function resgataCliente($id){
            include_once "../model/Cliente.php";
            $model = new Cliente (null, null, null, null, null, null, null,null);
            return $model->resgataCliente($id);

        }

        public static function alterarCliente ($id, $cnpj, $nomeFantasia, $razaoSocial, $numContato, $email,$fornecedores, $clienteDesde){
            include_once '../model/Cliente.php';
            $model = new Cliente ($id, $cnpj, $nomeFantasia, $razaoSocial, $numContato, $email,$fornecedores, $clienteDesde);
            $model->alterarCliente($model);
        }

        public static function excluirCliente ($id) {
            include_once '../model/Cliente.php';
            $model = new Cliente (null, null, null, null, null, null, null,null);
            $model -> excluirCliente($id);

        }
    }
?>