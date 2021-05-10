<?php

require_once "Connection.php";

class MensagemDAO {
  public $connection;

  public function __construct() {
    $this->connection = Connection::connect();
  }

  public function listar() {
    try {
      $query = $this->connection->prepare("select * from mensagem;");
      $query->execute();
      return $query->fetchAll(PDO::FETCH_CLASS, "Mensagem");
    }
    catch (PDOException $e){
      echo "<p>Erro no acesso aos dados: ". $e->getMessage()."</p>";
    }
  }
} ?>
