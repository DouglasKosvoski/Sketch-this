
<?php
class Mensagem {
  private $id;
  private $id_usuario;
  private $id_sala;
  private $data_envio;
  private $texto;

  public function getId(){
    return $this->id;
  }
  public function setId($id){
    $this->id = $id;
  }

  public function getIdUsuario(){
    return $this->$id_usuario;
  }
  public function setIdUsuario($id_usuario){
    $this->id_usuario = $id_usuario;
  }

  public function getIdSala(){
    return $this->$id_sala;
  }
  public function setIdSala($id_sala){
    $this->id_sala = $id_sala;
  }

  public function getDataEnvio(){
    return $this->data_envio;
  }
  public function setDataEnvio($data){
    $this->data_envio = $data;
  }

  public function getTexto(){
    return $this->texto;
  }
  public function setTexto($texto){
    $this->texto = $texto;
  }
} ?>
