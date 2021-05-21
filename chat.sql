DROP DATABASE IF EXISTS 3838844_chat;

CREATE DATABASE chat DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE chat;

DROP USER IF EXISTS 'admchat'@'localhost';

CREATE USER 'admchat'@'localhost' IDENTIFIED BY '12345';

GRANT SELECT, INSERT, UPDATE, DELETE ON chat.* TO 'admchat'@'localhost';

CREATE TABLE usuario (
  codigo INTEGER AUTO_INCREMENT PRIMARY KEY,
  nick VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  senha VARCHAR(72) NOT NULL,
  musica BOOLEAN NOT NULL);

CREATE TABLE reputacao (
  id_usuario INTEGER NOT NULL,
  pontuacao INTEGER NOT NULL,
  FOREIGN KEY (id_usuario) REFERENCES usuario(codigo));

CREATE TABLE sala (
  codigo INTEGER AUTO_INCREMENT PRIMARY KEY,
  capacidade INTEGER NOT NULL,
  usuarios_online INTEGER NOT NULL,
  tema VARCHAR(50) NOT NULL,
  descricao VARCHAR(200) NOT NULL);

CREATE TABLE mensagem (
  codigo INTEGER AUTO_INCREMENT PRIMARY KEY,
  id_usuario INTEGER NOT NULL,
  id_sala INTEGER NOT NULL,
  data_envio DATETIME NOT NULL,
  texto VARCHAR(200) NOT NULL,
  FOREIGN KEY (id_usuario) REFERENCES usuario(codigo),
  FOREIGN KEY (id_sala) REFERENCES sala(codigo));

-- cria salas default
INSERT INTO sala values (NULL, 5, 0, "Aleatorio", "Sala para jogar coversa fora.");
INSERT INTO sala values (NULL, 5, 0, "Segredos", "Quer desabafar e não tem ninguém para quem falar? agora tem.");
INSERT INTO sala values (NULL, 5, 0, "Conselhos", "Precisando de um conselho? as vezes um olhar estrangeiro para a situação pode ser bom.");
INSERT INTO sala values (NULL, 5, 0, "Pergunte algo", "Perguntas sem objetivo aparente.");
INSERT INTO sala values (NULL, 5, 0, "Ajuda", "Precisando de ajuda? talvez alguém aqui possa te ajudar.");
