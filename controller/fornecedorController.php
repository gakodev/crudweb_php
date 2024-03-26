<?php

    class fornecedorController {

        public static function cadastrarFornecedor ($cnpj, $nomeFantasia, $razaoSocial, $numContato, $email, $clientes, $produtos) {
            include_once "../model/Fornecedor.php";
            $model = new Fornecedor (null, $cnpj, $nomeFantasia, $razaoSocial, $numContato, $email, $clientes, $produtos);
            $model->cadastrarFornecedor($model);
        }

        public static function listarFornecedor(){
            include_once "../model/Fornecedor.php";
            $model = new Fornecedor (null, null, null, null, null, null, null, null);
            return $model->listarFornecedor();
        }
 
        public static function resgataFornecedor($id){
            include_once "../model/Fornecedor.php";
            $model = new Fornecedor (null, null, null, null, null, null, null, null);
            return $model->resgataFornecedor($id);

        }

        public static function alterarFornecedor ($id, $cnpj, $nomeFantasia, $razaoSocial, $numContato, $email, $clientes, $produtos){
            include_once '../model/Fornecedor.php';
            $model = new Fornecedor ($id, $cnpj, $nomeFantasia, $razaoSocial, $numContato, $email, $clientes, $produtos);
            $model->alterarFornecedor($model);
        }

        public static function excluirFornecedor ($id) {
            include_once '../model/Fornecedor.php';
            $model = new Fornecedor (null, null, null, null, null, null, null, null);
            $model -> excluirFornecedor($id);

        }
    }
?>