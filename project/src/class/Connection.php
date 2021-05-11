<?php
class Connection {

  public static $connection;

  public static function connect(){
    if(!isset(self::$connection)){
      try{
        // Development Env
        self::$connection = new PDO("mysql:host=localhost; dbname=chat", "admchat", "12345");

        // Production Env
        // self::$connection = new PDO("mysql:host=fdb18.awardspace.net:3306; dbname=3838844_chat", "3838844_chat", "7a_122fg1U2RiDww");
      }
      catch(PDOException $e){
        echo "Erro de conexão: ". $e->getMessage();
        die();
      }
    }
    return self::$connection;
  }
} ?>
