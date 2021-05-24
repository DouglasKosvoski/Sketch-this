<?php

class Usuario {
  private $codigo;
  private $nick;
  private $email;
  private $senha;
  private $avatar;
  private $musica;

  public function getId(){
    return $this->codigo;
  }
  public function setId($codigo){
    $this->codigo = $codigo;
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
    $this->musica = $musica;
  }

  public function getAvatar(){
    return $this->avatar;
  }
  public function setAvatar($avatar){
    $this->avatar = $avatar;
  }
} ?>
