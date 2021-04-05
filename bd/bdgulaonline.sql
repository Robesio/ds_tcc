drop database if exists bdgulaonline;
create database bdgulaonline;
use bdgulaonline;

create table tbempreendedor(
    idempre integer(5) primary key not null auto_increment,
    nomeempre varchar(70) not null,
    cpf varchar(11) not null unique,
    fone varchar(11) not null,
    bairro varchar(40) not null,
    rua varchar(40) not null,
    numero varchar(8) not null,
    cidade varchar(30) not null,
    uf varchar(2) not null,
    cnpj varchar(18),
    linksite varchar(40) not null,
    email varchar(30) not null,
    senha varchar(8) not null
);

INSERT INTO tbempreendedor VALUES
(1,"Ricardo Vasconcelos","123.456.567-99","1234-5678","jd pedro","Rua dos Pedregulhos","23","Sao Paulo","SP","62.461.140 /0008-90","www.gulaonlinecom.br","ricardo.vasconcelos@gmail.com.br","md5" ),
(2,"Rodolfo Vasconcelos","123.987.567-99","1256-5678","jd petrolina","Rua dos Pesqueiros","28","Petrolina","PE","62.461.340 /0018-90","www.gulaonlinecom.br","rodolfo.vasconcelos@gmail.com.br","md5" ),
(3,"Maria Vasconcelos","123.124.869-99","1902-5668","jd peri","Rua dos Abacateiros","89","Sao Paulo","SP","62.321.140 /0108-90","www.gulaonlinecom.br","maria.vasconcelos@gmail.com.br","md5" );