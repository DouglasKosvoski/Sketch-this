<?php

class Usuario {
  private $codigo;
  private $nick;
  private $email;

  public function getId(){
    return $this->codigo;
  }

  public function setId($cod){
    $this->codigo = $cod;
  }

  public function getNick(){
    return $this->nick;
  }

  public function setNick($nick){
    $this->nick = $nick;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($email){
    $this->email = $email;
  }
} ?>
