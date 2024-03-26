<?php
require "Usuario.php";

    class Fornecedor extends Usuario {
        private $clientes;
        private $produtos;

        public function __construct($id,$cnpj,$nomeFantasia,$razaoSocial,$numContato,$email,$clientes, $produtos){
            parent::__construct($id, $cnpj, $nomeFantasia, $razaoSocial, $numContato, $email);
            $this->clientes = $clientes;
            $this->produtos = $produtos;
        }
        public function getClientes() {
            return $this->clientes;
        }

	    public function getProdutos() {
            return $this->produtos;
        }

        public function setClientes($clientes){
            $this->clientes = $clientes;
            return $this;
        }

	    public function setProdutos($produtos){
            $this->produtos = $produtos;
            return $this;
        }

        public function cadastrarFornecedor(Fornecedor $dao){
            include_once '../dao/fornecedorDao.php';
            $dao = new fornecedorDao();
            $dao->cadastrarFornecedor($this);    
        }

        public function listarFornecedor() {
            include_once '../dao/fornecedorDao.php';
            $dao = new fornecedorDao();
            $dao->listarFornecedor();
            return $dao->listarFornecedor();  
        }

        public function resgataFornecedor($id) {
            include_once '../dao/fornecedorDao.php';
            $dao = new fornecedorDao();
            return  $dao->resgataFornecedor($id); 
        }

        public function alterarFornecedor(Fornecedor $dao){
            include_once '../dao/fornecedorDao.php';
            $dao = new fornecedorDao();
            $dao->alterarFornecedor($this);  
        }

        public function excluirFornecedor($id){
            include_once '../dao/fornecedorDao.php';
            $dao = new fornecedorDao();
            $dao->excluirFornecedor($id);  
        }
	

	

    }


?>