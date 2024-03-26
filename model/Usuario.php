<?php

    class Usuario {
        private $id;
        private $cpnj;
        private $nomeFantasia;
        private $razaoSocial;
        private $numContato;
        private $email;

        public function __construct($id, $cpnj, $nomeFantasia, $razaoSocial, $numContato, $email){
            $this->id = $id;
            $this->cpnj = $cpnj;
            $this->nomeFantasia = $nomeFantasia;
            $this->razaoSocial = $razaoSocial;
            $this->numContato = $numContato;
            $this->email = $email;
        }

        public function getId() {
            return $this->id;
        }

	    public function getCpnj() {
            return $this->cpnj;
        }

	    public function getNomeFantasia() {
            return $this->nomeFantasia;
        }

	    public function getRazaoSocial() {
            return $this->razaoSocial;
        }

	    public function getNumContato() {
            return $this->numContato;
        }

	    public function getEmail() {
            return $this->email;
        }

	    public function setId($id){
            $this->id = $id;
            return $this;
        }

	    public function setCpnj($cpnj){
            $this->cpnj = $cpnj;
            return $this;
        }

	    public function setNomeFantasia($nomeFantasia){
            $this->nomeFantasia = $nomeFantasia;
            return $this;
        }

	    public function setRazaoSocial($razaoSocial){
            $this->razaoSocial = $razaoSocial;
            return $this;
        }

	    public function setNumContato($numContato){
            $this->numContato = $numContato;
            return $this;
        }

	    public function setEmail($email){
            $this->email = $email;
            return $this;
        }

	
	
       

    }
?>