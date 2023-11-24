<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");

class Contato
{
    private $pdo;
    public function __construct() // conecção com banco de dados
    {
        $this->pdo = new PDO("mysql:dbname=cadastrados;host=localhost", "root", "");
    }

    public function adicionar($email, $nome = '') // = ''  recebe valor emn branco ou seja, opcional
    {
        //  1 passo = verificar se tem o email no sistema
        // 2 passo = adicionar caso não tenha
        // 3 prepare e utilizado para evitar conflusuaitos com o sqlInjection 
        //  4 query -> utilizado para busca simples
        if ($this->existeEmail($email) == false) { // inserindo dados no bancod
            $sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->execute();
            return true;
        } else {
            return false;
        }
    }

    public function getInfo($id)
    {
        $sql = "SELECT *FROM contatos WHERE id =:id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return $sql->fetch();
        } else {
            return array();
        }
    }
    public function getAll()
    {
        $sql = "SELECT *FROM contatos";
        $sql = $this->pdo->query($sql);
        if ($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }
    }
    public function editar($nome, $email, $id)
    {
        if ($this->existeEmail($email) == false) {
            $sql = "UPDATE contatos SET nome = :nome, email = :email WHERE id = :id";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':id', $id);
            $sql->execute();
            return true;
        } else {
            return false;
        }
    }
    public function excluirPeloId($id)
    {
        $sql = "DELETE FROM contatos WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
    public function excluir($email)
    {

        $sql = "DELETE FROM contatos WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();
    }
    private function existeEmail($email)
    {
        $sql = "SELECT *FROM contatos WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();
        if ($sql->RowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
