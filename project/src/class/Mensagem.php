
<?php
class Mensagem {
  private $codigo;
  private $nick;
  private $id_usuario;
  private $id_sala;
  private $data_envio;
  private $texto;

  public function getId(){
    return $this->codigo;
  }
  public function setId($id){
    $this->codigo = $id;
  }

  public function getIdUsuario(){
    return $this->id_usuario;
  }
  public function setIdUsuario($id_usuario){
    $this->id_usuario = $id_usuario;
  }

  public function getNickUsuario(){
    return $this->nick;
  }

  public function getIdSala(){
    return $this->id_sala;
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
