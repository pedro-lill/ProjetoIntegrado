
DROP DATABASE IF EXISTS projetointegrado;

CREATE DATABASE projetointegrado DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE projetointegrado;

DROP USER IF EXISTS 'admcooptar'@'localhost';

CREATE USER 'admcooptar'@'localhost' IDENTIFIED BY '12345'; 

GRANT SELECT, INSERT, UPDATE, DELETE ON projetointegrado.* TO 'admcooptar'@'localhost';

CREATE TABLE usuario(
  nomeLogin VARCHAR(40) NOT NULL, 
  senha VARCHAR(30) NOT NULL,
  PRIMARY KEY (nomeLogin),
);

create table animal(
  codAnimal INTEGER NOT NULL,
  dtNascimento DATE NOT NULL,
  codMae INTEGER NOT NULL,
  nomePai VARCHAR(30) NOT NULL,
  estadoVida VARCHAR(10) NOT NULL,
  nomeImagem VARCHAR(30) NOT NULL,
  PRIMARY KEY (codAnimal)
);

create table inseminacao(
  codInseminacao INTEGER AUTO_INCREMENT PRIMARY KEY,
  codAnimal INTEGER NOT NULL,
  dtInseminacao DATE NOT NULL,
  touroInseminador VARCHAR(20) NOT NULL,
  inseminadorResponsavel VARCHAR(40) NOT NULL,
  retorno VARCHAR(10) NOT NULL,
  obs TEXT,
  novaDtInseminacao DATE,/*if (retorno==true){crio uma novaDataInseminacao} 
  previsaoSecagem DATE, automatico =dataInseminacao + 7 meses    DATE_format   select DATE_format(...) 
  previsaoParto DATE,automatico =dataInseminacao + 9 meses
  novaPrevisaoSecagem DATE,automatico =novaDataInseminacao + 7 meses
  novaPrevisaoParto DATE,automatico =novaDataInseminacao + 9 meses*/
  FOREIGN KEY (codAnimal) REFERENCES animal(codAnimal)
);

create table producao(
  codProducao INTEGER AUTO_INCREMENT PRIMARY KEY,
  codAnimal INTEGER NOT NULL,
  dtColeta DATE NOT NULL,
  litros FLOAT NOT NULL,
  periodoDia VARCHAR(8) NOT NULL,
  FOREIGN KEY (codAnimal) REFERENCES animal(codAnimal)
);

create table tratamento(
  codTratamento INTEGER AUTO_INCREMENT PRIMARY KEY,
  codAnimal INTEGER NOT NULL,
  dtTratamento DATE NOT NULL,
  motivoTratamento VARCHAR(100) NOT NULL,
  nomeMedicamento VARCHAR(50) NOT NULL,
  quantidadeMedicamento FLOAT NOT NULL,
  responsavel VARCHAR(30) NOT NULL,
  obs TEXT,
  FOREIGN KEY (codAnimal) REFERENCES animal(codAnimal)
);

insert into animal (codAnimal, dtNascimento, codMae, nomePai, nomeImagem, estadoVida) values
  (101,'2021-05-04', 400,'Kian', "101.jpg", 'Viva'),
  (102,'2021-05-04', 401,'Kian', "102.jpg", 'Viva'),
  (104,'2021-05-04', 402,'Kian', "104.jpg", 'Viva'),
  (106,'2021-05-04', 403,'Kian', "106.jpg", 'Viva'),
  (109,'2021-05-04', 404,'Kian', "109.jpg", 'Viva'),
  (144,'2021-05-04', 407,'Kian', "144.jpg", 'Viva');

insert into inseminacao (codInseminacao, codAnimal, dtInseminacao, touroInseminador, inseminadorResponsavel, retorno, obs, novadtInseminacao) values
  (NULL, 101,'2021-05-04','benz','Gilmar', 'Não', 'ok', '2021-05-15'),
  (NULL, 102,'2021-10-04','polita','Felipe', 'Não', 'ok', '2021-05-15'),
  (NULL, 104,'2021-12-04','polita','Felipe', 'Não', 'ok', '2021-05-18'),
  (NULL, 144,'2021-05-04','benz','Gilmar', 'Não', 'ok', '2021-05-18');

insert into producao(codProducao, codAnimal, dtColeta, litros, periodoDia)values
  (NULL, 101,'2021-05-04', 20.6, 'manha'),
  (NULL, 101,'2021-05-04', 18.6, 'tarde'),
  (NULL, 102,'2021-05-04', 23.6, 'manha'),
  (NULL, 102,'2021-05-04', 20.6, 'tarde'),
  (NULL, 104,'2021-05-04', 18.6, 'manha'),
  (NULL, 104,'2021-05-04', 15.6, 'tarde');

insert into tratamento(codTratamento, codAnimal, dtTratamento, motivoTratamento, nomeMedicamento, quantidadeMedicamento, responsavel, obs)values
  (NULL, 101, '2021-05-04','mastite', 'promastite', 0.40, 'gilmar', 'ok'),
  (NULL, 102, '2021-05-04','mastite', 'promastite', 0.40, 'gilmar', 'ok'),
  (NULL, 104, '2021-05-04','mastite', 'promastite', 0.40, 'gilmar', 'ok'),
  (NULL, 109, '2021-05-04','mastite', 'promastite', 0.40, 'gilmar', 'ok');