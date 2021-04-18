create table if not exists cadastro(
  codigo integer not null,
  dataNascimento date not null,
  codigoMae integer not null,
  nomePai varchar(30) not null,
  estadoVida integer not null, /*booleano*/
  constraint pk_cadastro primary key (codigo)
);
--  
create table if not exists inseminacao (
  codigo integer not null,
  dataInseminacao date not null,
  touroInseminador varchar(20) not null,
  inseminadorResponsavel varchar(20) not null,
  retorno integer, /*booleano, por padrao é false. if(true) cria novaDataInseminacao*/
  observacao varchar(20),
  previsaoSecagem date not null,/*automatico =dataInseminacao + 7 meses*/
  previsaParto date not null,/*automatico =dataInseminacao + 9 meses*/
  novaDataInseminacao date,/*if (retorno==true){crio uma novaDataInseminacao} */
  novaPrevisaoSecagem date,/*automatico =novaDataInseminacao + 7 meses*/
  novaPrevisaoParto date,/*automatico =novaDataInseminacao + 9 meses*/
  constraint fk_inseminacao_cadastro foreign key (codigo) references cadastro(codigo)
);
--
create table if not exists producao(
  codigo integer not null,
  dataColeta date not null,
  litros integer not null,
  periodoDia integer not null,/*booleano = manha ou tarde*/
  constraint fk_inseminacao_cadastro foreign key (codigo) references cadastro(codigo)
  
);
--
create table if not exists tratamento(
  codigo  integer not null,
  motivoTratamento varchar(300) not null,
  nomeMedicamento varchar(35) not null,
  quantidadeMedicamento integer not null,
  responsavel varchar(30) not null,
  observacao varchar(30) not null,
  constraint fk_inseminacao_cadastro foreign key (codigo) references cadastro(codigo)
);
--
insert into cadastro (codigo, dataNascimento, codigoMae, nomePai, estadoVida) values
   (101,'13/08/2019','400','Kian','0'),
   (102,'13/08/2019','401','Kian','0'),
   (104,'13/08/2019','402','Kian','0'),
   (106,'13/08/2019','403','Kian','0'),
   (109,'13/08/2019','404','Kian','0'),
   (134,'13/08/2019','405','Kian','0'),
   (136,'13/08/2019','406','Kian','0'),
   (144,'13/08/2019','407','Kian','0');
--
insert into inseminacao (codigo, dataInseminacao, touroInseminador, inseminadorResponsavel, retorno, observacao, previsaoSecagem,	previsaoParto,	novaDataInseminacao,	novaDataSecagem,	novaDataParto) values
  (101,'17/04/2021','benz','Gilmar', 0, 'ok', '25/12/2020', '23/02/2021', '11/07/2020', '20/02/2021', '21/04/2021'),
  (102,'17/04/2021','benz','Gilmar', 0, 'ok', '25/12/2020', '23/02/2021', '11/07/2020', '20/02/2021', '21/04/2021'),
  (104,'24/04/2021','benz','Gilmar', 0, 'ok', '29/12/2020', '28/02/2021', '18/07/2020', '27/02/2021', '28/04/2021'),
  (144,'24/04/2021','benz','Gilmar', 0, 'ok', '29/12/2020', '28/02/2021', '18/07/2020', '27/02/2021', '28/04/2021'),

--

  