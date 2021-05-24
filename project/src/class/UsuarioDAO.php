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

  public function userFromId($id) {
    try {
      $query = $this->connection->prepare("select * from usuario where codigo=:c");
      $query->bindValue(":c", $id);
      $query->execute();
      return $query->fetchAll(PDO::FETCH_CLASS, "Usuario");
    }
    catch (PDOException $e){
      echo "Erro no acesso aos dados: ". $e->getMessage();
    }
  }

  public function cadastrar(Usuario $user) {
    try {
      $query = $this->connection->prepare("insert into usuario values (null, :n, :e, :s, :a, 0); insert into reputacao values ((select codigo from usuario where email=:e), 0);");
      $query->bindValue(":n", $user->getNick());
      $query->bindValue(":e", $user->getEmail());
      $query->bindValue(":s", $user->getSenha());
      $query->bindValue(":a", $user->getAvatar());
      return $query->execute();
    }
    catch (PDOException $e){
      echo "Erro no acesso aos dados: ". $e->getMessage();
    }
  }

  public function login($email, $senha) {
    try {
      $query = $this->connection->prepare("select * from usuario where email=:e");
      $query->bindValue(":e", $email);
      $query->execute();
      $registro = $query->fetchAll(PDO::FETCH_CLASS, "Usuario");

      if($query->rowCount() == 1){
        if(!password_verify($senha, $registro[0]->getSenha())){
          return false;
        }
        else {
          return true;
        }
      }
      else{
        return false;
      }
    } catch (PDOException $e) {
      echo "Erro no acesso aos dados: ". $e->getMessage();
    }
  }

  public function getIdFromEmail($email) {
    try {
      $query = $this->connection->prepare("select codigo from usuario where email=:e");
      $query->bindValue(":e", $email);
      $query->execute();
      $registro = $query->fetchAll(PDO::FETCH_CLASS, "Usuario");
      return $registro;

    } catch (PDOException $e) {
      echo "Erro no acesso aos dados: ". $e->getMessage();
    }
  }


} ?>
