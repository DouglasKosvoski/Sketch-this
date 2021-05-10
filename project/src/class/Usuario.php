<?php

class Usuario {
  private $id;
  private $nick;
  private $email;

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
} ?>
