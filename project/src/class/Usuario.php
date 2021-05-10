<?php

class Usuario {
  private $id;
  private $nick;
  private $email;
  private $senha;
  private $musica;

  public function getId(){
    return $this->id;
  }
  public function setId($id){
    $this->id = $id;
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

  public function getSenha(){
    return $this->senha;
  }
  public function setSenha($senha){
    $this->senha = $senha;
  }

  public function getMusica(){
    return $this->$musica;
  }
  public function setMusica($musica){
    $this->$musica = $$musica;
  }
} ?>
