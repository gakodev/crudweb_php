<?php
require "Usuario.php";
    class Cliente extends Usuario {
        private $fornecedores;
        private $clienteDesde;

        public function __construct($id, $cnpj, $nomeFantasia, $razaoSocial, $numContato, $email,$fornecedores, $clienteDesde){
            parent::__construct($id, $cnpj, $nomeFantasia, $razaoSocial, $numContato, $email);
            $this->fornecedores = $fornecedores;
            $this->clienteDesde = $clienteDesde;
        }
	
        public function getFornecedores() {
            return $this->fornecedores;
        }

	    public function getClienteDesde() {
            return $this->clienteDesde;
        }

	    public function setFornecedores($fornecedores){
            $this->fornecedores = $fornecedores;
            return $this;
        }

	    public function setClienteDesde($clienteDesde){
            $this->clienteDesde = $clienteDesde;
            return $this;
        }
        public function cadastrarCliente(Cliente $model){
            include_once '../dao/clienteDao.php';
            $model = new clienteDao();
            $model->cadastrarCliente($this);    
        }

        public function listarClientes() {
            include_once '../dao/clienteDao.php';
            $dao = new clienteDao();
            $dao->listarClientes();
            return $dao->listarClientes();  
        }

        public function resgataCliente($id) {
            include_once '../dao/clienteDao.php';
            $model = new clienteDao();
            return $model->resgataCliente($id);  
        }

        public function alterarCliente(Cliente $cliente){
            include_once '../dao/clienteDao.php';
            $cliente = new clienteDao();
            $cliente->alterarCliente($this);  
        }

        public function excluirCliente($id){
            include_once '../dao/clienteDao.php';
            $model = new clienteDao();
            $model->excluirCliente($id);  
        }
    }



?>