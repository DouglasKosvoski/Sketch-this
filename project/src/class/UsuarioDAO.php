<?php

require_once "Connection.php";

class UsuarioDAO {
  public $connection;

  public function __construct() {
    $this->connection = Connection::connect();
  }

  public function list() {
    try {
      $query = $this->connection->prepare("select * from usuario");
      $query->execute();
      return $query->fetchAll(PDO::FETCH_CLASS, "Usuario");
    }
    catch (PDOException $e){
      echo "Erro no acesso aos dados: ". $e->getMessage();
    }
  }
} ?>
