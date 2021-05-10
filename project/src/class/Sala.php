
<?php
class Sala {
  private $id;
  private $tema;
  private $capacidade;
  private $usuarios_online;
  private $descricao;

  public function getUsuariosOnline(){
    if ($this->usuarios_online != 0) {
      return $this->usuarios_online;
    }
    return "0";
  }

  public function getId(){
    return $this->id;
  }
  public function setId($id){
    $this->id = $id;
  }

  public function getTema(){
    return $this->tema;
  }
  public function setTema($tema){
    $this->tema = $tema;
  }

  public function getCapacidade(){
    if ($this->capacidade != 0) {
      return $this->capacidade;
    }
    return "0";
  }
  public function setCapacidade($capacidade){
    $this->capacidade = $capacidade;
  }

  public function getDescricao(){
    return $this->descricao;
  }
  public function setDescricao($descricao){
    $this->descricao = $descricao;
  }

} ?>
