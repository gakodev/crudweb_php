<?php

    class clienteDao {

        public function cadastrarCliente(Cliente $cliente) {
            include_once 'conexao.php';

            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "INSERT INTO cliente (cnpj, nomeFantasia, razaoSocial, numContato, email, fornecedores, clienteDesde)
                VALUES (:cnpj, :nomeFantasia, :razaoSocial, :numContato, :email, :fornecedores, :clienteDesde)";
                $stmt = $conex->conn->prepare($sql);
            $stmt->bindValue(':cnpj', $cliente->getCpnj());
            $stmt->bindValue(':nomeFantasia', $cliente->getNomeFantasia());
            $stmt->bindValue(':razaoSocial', $cliente->getRazaoSocial() );
            $stmt->bindValue(':numContato', $cliente->getNumContato());
            $stmt->bindValue(':email', $cliente->getEmail());
            $stmt->bindValue(':fornecedores', $cliente->getFornecedores());
            $stmt->bindValue(':clienteDesde', $cliente->getClienteDesde());
                $res = $stmt->execute();

                if ($res) {
                    echo '<script>alert("Cadastro realizado!")</script>';
        } else {
            echo '<script>alert("Erro!")</script>';
        }
        echo '<script>location.href="../controller/processa.php?op=listarCliente"</script>';
    }

        public function listarClientes() { 
            include_once 'conexao.php';
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = 'SELECT * FROM cliente ORDER BY id';
            return $conex->conn->query($sql);  
         }

         public function resgataCliente($id){
            include_once 'conexao.php';
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "SELECT * FROM cliente WHERE id = '$id'";
            return $conex->conn->query($sql);
         }

         public function alterarCliente(Cliente $model){
            include_once 'conexao.php';
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "UPDATE cliente SET cnpj = :cnpj, nomeFantasia = :nomeFantasia, razaoSocial = :razaoSocial, numContato = :numContato, email = :email, fornecedores = :fornecedores, clienteDesde = :clienteDesde
                WHERE id = :id";
                $stmt = $conex->conn->prepare($sql);
            $stmt->bindValue(':id', $model->getId());
            $stmt->bindValue(':cnpj', $model->getCpnj());
            $stmt->bindValue(':nomeFantasia', $model->getNomeFantasia());
            $stmt->bindValue('razaoSocial', $model->getRazaoSocial() );
            $stmt->bindValue('numContato', $model->getNumContato());
            $stmt->bindValue('email', $model->getEmail());
            $stmt->bindValue('fornecedores', $model->getFornecedores());
            $stmt->bindValue('clienteDesde', $model->getClienteDesde());
                $res = $stmt->execute();

                if ($res) {
                    echo '<script>alert("Alteração concluída!")</script>';
        } else {
            echo '<script>alert("Erro!")</script>';
        }
        echo '<script>location.href="../controller/processa.php?op=listarCliente"</script>';
        }

         public function excluirCliente($id){
            include_once 'conexao.php';
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "DELETE FROM cliente WHERE id = '$id'";
            $res = $conex->conn->query($sql);
                if ($res) {
                    echo '<script>alert("Exclusão concluída!")</script>';
                } else {
                    echo '<script>alert("Erro!")</script>';
                }
                echo '<script>location.href="../controller/processa.php?op=listarCliente"</script>';
                }

         
    }
    




?>