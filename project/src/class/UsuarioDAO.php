<?php

require_once "Connection.php";

class UsuarioDAO {
  public $connection;

  public function __construct() {
    $this->connection = Connection::connect();
  }

  public function listar() {
    try {
      $query = $this->connection->prepare("select * from usuario");
      $query->execute();
      return $query->fetchAll(PDO::FETCH_CLASS, "Usuario");
    }
    catch (PDOException $e){
      echo "Erro no acesso aos dados: ". $e->getMessage();
    }
  }
  public function cadastrar(Usuario $user) {
    try {
      $query = $this->connection->prepare("insert into usuario VALUES (NULL, :n, :e, :s, 0);");
      $query->bindValue(":n", $user->getNick());
      $query->bindValue(":e", $user->getEmail());
      $query->bindValue(":s", $user->getSenha());
      return $query->execute();
    }
    catch (PDOException $e){
      echo "Erro no acesso aos dados: ". $e->getMessage();
    }
  }
} ?>
