<?php

require_once "Connection.php";

class SalaDAO {
  public $connection;

  public function __construct() {
    $this->connection = Connection::connect();
  }

  public function listar() {
    try {
      $query = $this->connection->prepare("select * from sala");
      $query->execute();
      return $query->fetchAll(PDO::FETCH_CLASS, "Sala");
    }
    catch (PDOException $e){
      echo "<p>Erro no acesso aos dados: ". $e->getMessage()."</p>";
    }
  }
} ?>
