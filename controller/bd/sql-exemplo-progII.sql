
DROP DATABASE IF EXISTS projetointegrado;

CREATE DATABASE projetointegrado DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE projetointegrado;

DROP USER IF EXISTS 'admcooptar'@'localhost';

CREATE USER 'admcooptar'@'localhost' IDENTIFIED BY '12345'; 

GRANT SELECT, INSERT, UPDATE, DELETE ON projetointegrado.* TO 'admcooptar'@'localhost';

CREATE TABLE usuario(
  codUsuario INTEGER AUTO_INCREMENT PRIMARY KEY,/* nao sei se precisa disso aqui*/
  nomeLogin VARCHAR(40) NOT NULL, 
  senha VARCHAR(30) NOT NULL
);

create table ficha(
  codAnimal INTEGER,
  dtNascimento DATETIME NOT NULL,
  codMae INTEGER NOT NULL,
  nomePai VARCHAR(30) NOT NULL,
  estadoVida INTEGER NOT NULL,/*tinyint*/
  nomeImagem VARCHAR(30) NOT NULL,
  PRIMARY KEY (codAnimal)
);

create table inseminacao(
  codInseminacao INTEGER AUTO_INCREMENT PRIMARY KEY,
  codAnimal INTEGER,
  dtInseminacao DATETIME NOT NULL,
  touroInseminador VARCHAR(20) NOT NULL,
  inseminadorResponsavel VARCHAR(40) NOT NULL,
  retorno INTEGER, /*booleano, por padrao é false. if(true) cria novaDataInseminacao*/
  obs TEXT,
  previsaoSecagem DATETIME,/*automatico =dataInseminacao + 7 meses    date_format   select date_format(...)*/ 
  previsaoParto DATETIME,/*automatico =dataInseminacao + 9 meses*/
  novaDtInseminacao DATETIME,/*if (retorno==true){crio uma novaDataInseminacao} */
  novaPrevisaoSecagem DATETIME,/*automatico =novaDataInseminacao + 7 meses*/
  novaPrevisaoParto DATETIME,/*automatico =novaDataInseminacao + 9 meses*/
  FOREIGN KEY (codAnimal) REFERENCES ficha(codAnimal)
);

create table producao(
  codProducao INTEGER AUTO_INCREMENT PRIMARY KEY,
  codAnimal INTEGER,
  dtColeta DATETIME NOT NULL,
  litros FLOAT NOT NULL,
  periodoDia VARCHAR(8) NOT NULL,/*booleano = manha ou tarde*/
  FOREIGN KEY (codAnimal) REFERENCES ficha(codAnimal)
);

create table tratamento(
  codTratamento INTEGER AUTO_INCREMENT PRIMARY KEY,
  codAnimal INTEGER,
  dtTratamento DATETIMENOT NULL,
  motivoTratamento VARCHAR(100) NOT NULL,
  nomeMedicamento VARCHAR(80) NOT NULL,
  quantidadeMedicamento INTEGER NOT NULL,
  responsavel VARCHAR(30) NOT NULL,
  obs TEXT,
  FOREIGN KEY (codAnimal) REFERENCES ficha(codAnimal)
);

insert into ficha (codAnimal, dtNascimento, codMae, nomePai, nomeImagem, estadoVida) values
  (101,'2021-05-04 13:57:42', 400,'Kian', "101.jpg", '1'),
  (102,'2021-05-04 13:57:42', 401,'Kian', "102.jpg", '1'),
  (104,'2021-05-04 13:57:42', 402,'Kian', "104.jpg", '1'),
  (106,'2021-05-04 13:57:42', 403,'Kian', "106.jpg", '1'),
  (109,'2021-05-04 13:57:42', 404,'Kian', "109.jpg", '1'),
  (144,'2021-05-04 13:57:42', 407,'Kian', "144.jpg", '1');
--
insert into inseminacao (codInseminacao, codAnimal, dtInseminacao, touroInseminador, inseminadorResponsavel, retorno, obs, previsaoSecagem, previsaoParto, novadtInseminacao, novaprevisaoSecagem, novaprevisaoParto) values
  (NULL, 101,'2021-05-04 13:57:42','benz','Gilmar', 0, 'ok', '2021-05-15 13:57:42', '2021-07-04 13:57:42', '2021-05-03 13:57:42', '2021-05-04 13:57:42', '2021-05-04 13:57:42'),
  (NULL, 102,'2021-25-04 14:57:42','polita','Felipe', 0, 'ok', '2021-05-15 13:57:42', '2021-07-09 13:57:42', '2021-05-03 13:57:42', '2021-06-04 13:57:42', '2021-12-04 13:57:42'),
  (NULL, 104,'2021-15-04 15:57:42','polita','Felipe', 0, 'ok', '2021-05-18 13:57:42', '2021-01-08 13:57:42', '2021-09-01 13:57:42', '2021-06-04 13:57:42', '2021-12-04 17:57:42'),
  (NULL, 144,'2021-05-04 16:57:42','benz','Gilmar', 0, 'ok', '2021-05-18 13:57:42', '2021-01-09 13:57:42', '2021-09-01 13:57:42', '2021-05-04 13:57:42', '2021-05-04 17:57:42');

--
insert into producao(codProducao, codAnimal, dtColeta, litros, periodoDia)values
  (NULL, 101,'2021-05-04 13:57:42',20.6, 'manha'),
  (NULL, 101,'2021-05-04 13:57:42',18.6, 'tarde'),
  (NULL, 102,'2021-05-04 13:57:42',23.6, 'manha'),
  (NULL, 102,'2021-05-04 13:57:42',20.6, 'tarde'),
  (NULL, 104,'2021-05-04 13:57:42',18.6, 'manha'),
  (NULL, 104,'2021-05-04 13:57:42',15.6, 'tarde');
  --
insert into tratamento(codTratamento, codAnimal, dtTratamento, motivoTratamento, nomeMedicamento, quantidadeMedicamento, responsavel, obs)values
  (NULL, '101,2021-05-04 13:57:42','mastite', 'promastite', 40, 'gilmar', 'ok'),
  (NULL, '102,2021-05-04 13:57:42','mastite', 'promastite', 40, 'gilmar', 'ok'),
  (NULL, '104,2021-05-04 13:57:42','mastite', 'promastite', 40, 'gilmar', 'ok'),
  (NULL, '109,2021-05-04 13:57:42','mastite', 'promastite', 40, 'gilmar', 'ok');