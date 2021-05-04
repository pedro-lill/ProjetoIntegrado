
DROP DATABASE IF EXISTS projetointegrado;

CREATE DATABASE projetointegrado DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE projetointegrado;

DROP USER IF EXISTS 'admcooptar'@'localhost';

CREATE USER 'admcooptar'@'localhost' IDENTIFIED BY '12345'; 

GRANT SELECT, INSERT, UPDATE, DELETE ON projetointegrado.* TO 'admcooptar'@'localhost';

CREATE TABLE usuarios(
  codUsuario INTEGER AUTO_INCREMENT PRIMARY KEY,/* nao sei se precisa disso aqui*/
  nomeLogin VARCHAR(40) NOT NULL, 
  senha VARCHAR(30) NOT NULL
);

create table ficha(
  codAnimal INTEGER,
  dtNascimento DATETIME NOT NULL,
  codMae INTEGER NOT NULL,
  nomePai VARCHAR(30) NOT NULL,
  estadoVida BOOLEAN NOT NULL,/*tinyint*/
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
  motivoTratamento VARCHAR(100) NOT NULL,
  nomeMedicamento VARCHAR(80) NOT NULL,
  quantidadeMedicamento INTEGER NOT NULL,
  responsavel VARCHAR(30) NOT NULL,
  obs TEXT,
  FOREIGN KEY (codAnimal) REFERENCES ficha(codAnimal)
);

insert into ficha (codAnimal, dtNascimento, codMae, nomePai, nomeImagem, estadoVida) values
  (101,'13/08/2019', 400,'Kian', "101.jpg", TRUE),
  (102,'13/08/2019', 401,'Kian', "102.jpg", TRUE),
  (104,'13/08/2019', 402,'Kian', "104.jpg", TRUE),
  (106,'13/08/2019', 403,'Kian', "106.jpg", TRUE),
  (109,'13/08/2019', 404,'Kian', "109.jpg", TRUE),
  (144,'13/08/2019', 407,'Kian', "144.jpg", TRUE);
--
insert into inseminacao (codInseminacao, codAnimal, dtInseminacao, touroInseminador, inseminadorResponsavel, retorno, obs, previsaoSecagem, previsaoParto, novadtInseminacao, novaprevisaoSecagem, novaprevisaoParto) values
  (NULL, 101,'17/04/2021','benz','Gilmar', 0, 'ok', '25/12/2020', '23/02/2021', '11/07/2020', '20/02/2021', '21/04/2021'),
  (NULL, 102,'17/04/2021','benz','Gilmar', 0, 'ok', '25/12/2020', '23/02/2021', '11/07/2020', '20/02/2021', '21/04/2021'),
  (NULL, 104,'24/04/2021','benz','Gilmar', 0, 'ok', '29/12/2020', '28/02/2021', '18/07/2020', '27/02/2021', '28/04/2021'),
  (NULL, 144,'24/04/2021','benz','Gilmar', 0, 'ok', '29/12/2020', '28/02/2021', '18/07/2020', '27/02/2021', '28/04/2021');

--
insert into producao(codProducao, codAnimal, dtColeta, litros, periodoDia)values
  (NULL, 101,'13/08/2019',20.6, 'manha'),
  (NULL, 101,'13/08/2019',18.6, 'tarde'),
  (NULL, 102,'13/08/2019',23.6, 'manha'),
  (NULL, 102,'13/08/2019',20.6, 'tarde'),
  (NULL, 104,'13/08/2019',18.6, 'manha'),
  (NULL, 104,'13/08/2019',15.6, 'tarde');
  --
insert into tratamento(codTratamento, codAnimal, motivoTratamento, nomeMedicamento, quantidadeMedicamento, responsavel, obs)values
  (NULL, 101,'mastite', 'promastite', 40, 'gilmar', 'ok'),
  (NULL, 102,'mastite', 'promastite', 40, 'gilmar', 'ok'),
  (NULL, 104,'mastite', 'promastite', 40, 'gilmar', 'ok'),
  (NULL, 109,'mastite', 'promastite', 40, 'gilmar', 'ok');

