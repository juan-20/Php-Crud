CREATE DATABASE LOGIN;
USE LOGIN;

CREATE TABLE usuario (
  id_cliente int(10) unsigned NOT NULL AUTO_INCREMENT,
  nome_cliente varchar(255) NOT NULL,
  email_cliente varchar(255) NOT NULL,
  telefone_cliente char(20) NOT NULL,
  senha_cliente char(255) NOT NULL,
  data_nasc date NOT NULL,
  PRIMARY KEY (id_cliente)
)

-- essa é a estrutura da tabela se não funcionar dentro da pasta "pages/src/bd" vou colocar em txt o codigo
--  do phpmyadimin que foi oque eu usei para testar e rodar o site


