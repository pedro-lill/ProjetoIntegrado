create table if not exists usuarios(
  codigoUsuario integer not null,
  nomeLogin date not null,
  senha integer not null,
  constraint pk_usuario primary key (codigoUsuario)
);

create table if not exists cadastro(
  codigoAnimal integer not null,
  dataNascimento date not null,
  codigoMae integer not null,
  nomePai varchar(30) not null,
  nomeImagem varchar(30) not null,
  estadoVida integer not null, /*booleano*/
  constraint pk_cadastro primary key (codigoAnimal)
);
--  
create table if not exists inseminacao(
  codigoAnimal integer not null,
  codigoInseminacao serial not null,
  dataInseminacao date not null,
  touroInseminador varchar(20) not null,
  inseminadorResponsavel varchar(40) not null,
  retorno integer, /*booleano, por padrao é false. if(true) cria novaDataInseminacao*/
  observacao varchar(200),
  previsaoSecagem date not null,/*automatico =dataInseminacao + 7 meses*/
  previsaoParto date not null,/*automatico =dataInseminacao + 9 meses*/
  novaDataInseminacao date,/*if (retorno==true){crio uma novaDataInseminacao} */
  novaPrevisaoSecagem date,/*automatico =novaDataInseminacao + 7 meses*/
  novaPrevisaoParto date,/*automatico =novaDataInseminacao + 9 meses*/
  constraint pk_inseminacao primary key (codigoInseminacao),
  constraint fk_inseminacao_cadastro foreign key (codigoAnimal) references cadastro(codigoAnimal)
);
--
create table if not exists producao(
  codigoAnimal integer not null,
  codigoProducao serial not null,
  dataColeta date not null,
  litros float not null,
  periodoDia varchar(8) not null,/*booleano = manha ou tarde*/
  constraint pk_producao primary key (codigoProducao),
  constraint fk_producao_cadastro foreign key (codigoAnimal) references cadastro(codigoAnimal)
);
--
create table if not exists tratamento(
  codigoAnimal  integer not null,
  codigoTratamento serial not null,
  motivoTratamento varchar(100) not null,
  nomeMedicamento varchar(80) not null,
  quantidadeMedicamento integer not null,
  responsavel varchar(30) not null,
  observacao varchar(300) not null,
  constraint pk_tratamento primary key (codigoTratamento),
  constraint fk_tratamento_cadastro foreign key (codigoAnimal) references cadastro(codigoAnimal)
);
--
insert into cadastro (codigoAnimal, dataNascimento, codigoMae, nomePai, estadoVida) values
  (101,'13/08/2019', 400,'Kian', 0),
  (102,'13/08/2019', 401,'Kian', 0),
  (104,'13/08/2019', 402,'Kian', 0),
  (106,'13/08/2019', 403,'Kian', 0),
  (109,'13/08/2019', 404,'Kian', 0),
  (144,'13/08/2019', 407,'Kian', 0);
--
insert into inseminacao (codigoAnimal, dataInseminacao, touroInseminador, inseminadorResponsavel, retorno, observacao, previsaoSecagem,	previsaoParto,	novaDataInseminacao,	novaprevisaoSecagem,	novaprevisaoParto) values
  (101,'17/04/2021','benz','Gilmar', 0, 'ok', '25/12/2020', '23/02/2021', '11/07/2020', '20/02/2021', '21/04/2021'),
  (102,'17/04/2021','benz','Gilmar', 0, 'ok', '25/12/2020', '23/02/2021', '11/07/2020', '20/02/2021', '21/04/2021'),
  (104,'24/04/2021','benz','Gilmar', 0, 'ok', '29/12/2020', '28/02/2021', '18/07/2020', '27/02/2021', '28/04/2021'),
  (144,'24/04/2021','benz','Gilmar', 0, 'ok', '29/12/2020', '28/02/2021', '18/07/2020', '27/02/2021', '28/04/2021');

--
insert into producao(codigoAnimal, dataColeta, litros, periodoDia)values
  (101,'13/08/2019',20.6, 'manha'),
  (101,'13/08/2019',18.6, 'tarde'),
  (102,'13/08/2019',23.6, 'manha'),
  (102,'13/08/2019',20.6, 'tarde'),
  (104,'13/08/2019',18.6, 'manha'),
  (104,'13/08/2019',15.6, 'tarde');
  --
insert into tratamento(codigoAnimal, motivoTratamento, nomeMedicamento, quantidadeMedicamento, responsavel, observacao)values
  (101,'mastite', 'promastite', 40, 'gilmar', 'ok'),
  (102,'mastite', 'promastite', 40, 'gilmar', 'ok'),
  (104,'mastite', 'promastite', 40, 'gilmar', 'ok'),
  (109,'mastite', 'promastite', 40, 'gilmar', 'ok');