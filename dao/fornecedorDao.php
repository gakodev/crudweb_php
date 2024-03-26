<?php

    class fornecedorDao {

        public function cadastrarFornecedor(Fornecedor $fornecedor) {
            include_once 'conexao.php';

            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "INSERT INTO fornecedor (cnpj, nomeFantasia, razaoSocial, numContato, email, clientes, produtos)
                VALUES (:cnpj, :nomeFantasia, :razaoSocial, :numContato, :email, :clientes, :produtos)";
                $stmt = $conex->conn->prepare($sql);
            $stmt->bindValue(':cnpj', $fornecedor->getCpnj());
            $stmt->bindValue(':nomeFantasia', $fornecedor->getNomeFantasia());
            $stmt->bindValue(':razaoSocial', $fornecedor->getRazaoSocial() );
            $stmt->bindValue(':numContato', $fornecedor->getNumContato());
            $stmt->bindValue(':email', $fornecedor->getEmail());
            $stmt->bindValue(':clientes', $fornecedor->getClientes());
            $stmt->bindValue(':produtos', $fornecedor->getProdutos());
                $res = $stmt->execute();

                if ($res) {
                    echo '<script>alert("Cadastro realizado!")</script>';
        } else {
            echo '<script>alert("Erro!")</script>';
        }
        echo '<script>location.href="../controller/processa.php?op=listarFornecedor"</script>';
    }

        public function listarFornecedor() { 
            include_once 'conexao.php';
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = 'SELECT * FROM fornecedor ORDER BY id';
            return $conex->conn->query($sql);  
         }

         public function resgataFornecedor($id){
            include_once 'conexao.php';
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "SELECT * FROM fornecedor WHERE id = '$id'";
            return $conex->conn->query($sql);
         }

         public function alterarFornecedor(Fornecedor $dao){
            include_once 'conexao.php';

            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "UPDATE fornecedor SET cnpj = :cnpj, nomeFantasia = :nomeFantasia, razaoSocial = :razaoSocial, numContato = :numContato, email = :email, clientes = :clientes, produtos = :produtos
                WHERE id = :id";
                $stmt = $conex->conn->prepare($sql);
                $stmt->bindValue(':id', $dao->getId());
                $stmt->bindValue(':cnpj', $dao->getCpnj());
                $stmt->bindValue(':nomeFantasia', $dao->getNomeFantasia());
                $stmt->bindValue(':razaoSocial', $dao->getRazaoSocial() );
                $stmt->bindValue(':numContato', $dao->getNumContato());
                $stmt->bindValue(':email', $dao->getEmail());
                $stmt->bindValue(':clientes', $dao->getClientes());
                $stmt->bindValue(':produtos', $dao->getProdutos());
                    $res = $stmt->execute();

                if ($res) {
                    echo '<script>alert("Alteração concluída!")</script>';
        } else {
            echo '<script>alert("Erro!")</script>';
        }
        echo '<script>location.href="../controller/processa.php?op=listarFornecedor"</script>';
        }

         public function excluirFornecedor($id){
            include_once 'conexao.php';
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "DELETE FROM fornecedor WHERE id = '$id'";
            $stmt = $conex->conn->query($sql);
                if ($res) {
                    echo '<script>alert("Exclusão concluída!")</script>';
        } else {
            echo '<script>alert("Erro!")</script>';
        }
        echo '<script>location.href="../controller/processa.php?op=listarFornecedor"</script>';
        }

         
    }
    




?>