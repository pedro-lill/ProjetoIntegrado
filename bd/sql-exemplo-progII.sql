
DROP DATABASE IF EXISTS proetointegrado;

CREATE DATABASE proetointegrado DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE proetointegrado;

DROP USER IF EXISTS 'admcooptar'@'localhost';

CREATE USER 'admcooptar'@'localhost' IDENTIFIED BY '12345'; 

GRANT SELECT, INSERT, UPDATE, DELETE ON proetointegrado.* TO 'admcooptar'@'localhost';

CREATE TABLE usuarios (
  codUsuario INTEGER AUTO_INCREMENT PRIMARY KEY,    
  nomeLogin VARCHAR(40) NOT NULL, 
  senha VARCHAR(30) NOT NULL,
);

create table cadastro(
  codAnimal INTEGER,
  dtNascimento DATETIME NOT NULL,
  codMae INTEGER NOT NULL,
  nomePai VARCHAR(30) NOT NULL,
  estadoVida BOOLEAN NOT NULL,
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
  obs TEXT(200),
  previsaoSecagem DATETIME,/*automatico =dataInseminacao + 7 meses*/
  previsaoParto DATETIME,/*automatico =dataInseminacao + 9 meses*/
  novaDtInseminacao DATETIME,/*if (retorno==true){crio uma novaDataInseminacao} */
  novaPrevisaoSecagem DATETIME,/*automatico =novaDataInseminacao + 7 meses*/
  novaPrevisaoParto DATETIME,/*automatico =novaDataInseminacao + 9 meses*/
  FOREIGN KEY (codAnimal) REFERENCES cadastro(codAnimal)
);

create table if not exists producao(
  codProducao INTEGER AUTO_INCREMENT PRIMARY KEY,
  codAnimal INTEGER FOREIGN KEY(cadastro),
  dtColeta DATETIME NOT NULL,
  litros FLOAT NOT NULL,
  periodoDia VARCHAR(8) NOT NULL,/*booleano = manha ou tarde*/
  FOREIGN KEY (codAnimal) REFERENCES cadastro(codAnimal)
);

create table if not exists tratamento(
  codTratamento INTEGER AUTO_INCREMENT PRIMARY KEY,
  codAnimal INTEGER FOREIGN KEY(cadastro),
  motivoTratamento VARCHAR(100) NOT NULL,
  nomeMedicamento VARCHAR(80) NOT NULL,
  quantidadeMedicamento INTEGER NOT NULL,
  responsavel VARCHAR(30) NOT NULL,
  obs TEXT(300),
  FOREIGN KEY (codAnimal) REFERENCES cadastro(codAnimal)
);


insert into cadastro (codAnimal, dtNascimento, codMae, nomePai, estadoVida) values
  (101,'13/08/2019', 400,'Kian', "101.jpg", TRUE),
  (102,'13/08/2019', 401,'Kian', "102.jpg", TRUE),
  (104,'13/08/2019', 402,'Kian', "104.jpg", TRUE),
  (106,'13/08/2019', 403,'Kian', "106.jpg", TRUE),
  (109,'13/08/2019', 404,'Kian', "109.jpg", TRUE),
  (144,'13/08/2019', 407,'Kian', "144.jpg", TRUE);
--
insert into inseminacao (codAnimal, dtInseminacao, touroInseminador, inseminadorResponsavel, retorno, observacao, previsaoSecagem,	previsaoParto,	novadtInseminacao,	novaprevisaoSecagem,	novaprevisaoParto) values
  (101,'17/04/2021','benz','Gilmar', 0, 'ok', '25/12/2020', '23/02/2021', '11/07/2020', '20/02/2021', '21/04/2021'),
  (102,'17/04/2021','benz','Gilmar', 0, 'ok', '25/12/2020', '23/02/2021', '11/07/2020', '20/02/2021', '21/04/2021'),
  (104,'24/04/2021','benz','Gilmar', 0, 'ok', '29/12/2020', '28/02/2021', '18/07/2020', '27/02/2021', '28/04/2021'),
  (144,'24/04/2021','benz','Gilmar', 0, 'ok', '29/12/2020', '28/02/2021', '18/07/2020', '27/02/2021', '28/04/2021');

--
insert into producao(codAnimal, dtColeta, litros, periodoDia)values
  (101,'13/08/2019',20.6, 'manha'),
  (101,'13/08/2019',18.6, 'tarde'),
  (102,'13/08/2019',23.6, 'manha'),
  (102,'13/08/2019',20.6, 'tarde'),
  (104,'13/08/2019',18.6, 'manha'),
  (104,'13/08/2019',15.6, 'tarde');
  --
insert into tratamento(codAnimal, motivoTratamento, nomeMedicamento, quantidadeMedicamento, responsavel, observacao)values
  (101,'mastite', 'promastite', 40, 'gilmar', 'ok'),
  (102,'mastite', 'promastite', 40, 'gilmar', 'ok'),
  (104,'mastite', 'promastite', 40, 'gilmar', 'ok'),
  (109,'mastite', 'promastite', 40, 'gilmar', 'ok');

