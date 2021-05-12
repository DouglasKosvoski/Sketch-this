<?php

require_once "Connection.php";

class MensagemDAO {
  public $connection;

  public function __construct() {
    $this->connection = Connection::connect();
  }

  public function listar() {
    try {
      $query = $this->connection->prepare("SELECT u.nick, m.codigo, m.id_usuario, m.id_sala, m.data_envio, m.texto FROM mensagem as m join usuario as u on u.codigo=m.id_usuario");
      $query->execute();
      return $query->fetchAll(PDO::FETCH_CLASS, "Mensagem");
    }
    catch (PDOException $e){
      echo "<p>Erro no acesso aos dados: ". $e->getMessage()."</p>";
    }
  }
} ?>
