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

<<<<<<< HEAD
INSERT INTO tbempreendedor VALUES
(1,"Ricardo Vasconcelos","123.456.567-99","1234-5678","jd pedro","Rua dos Pedregulhos","23","Sao Paulo","SP","62.461.140 /0008-90","www.gulaonlinecom.br","ricardo.vasconcelos@gmail.com.br","md5" ),
(2,"Rodolfo Vasconcelos","123.987.567-99","1256-5678","jd petrolina","Rua dos Pesqueiros","28","Petrolina","PE","62.461.340 /0018-90","www.gulaonlinecom.br","rodolfo.vasconcelos@gmail.com.br","md5" ),
(3,"Maria Vasconcelos","123.124.869-99","1902-5668","jd peri","Rua dos Abacateiros","89","Sao Paulo","SP","62.321.140 /0108-90","www.gulaonlinecom.br","maria.vasconcelos@gmail.com.br","md5" );
=======
create table tbalimentos(
    idali integer primary key not null auto_increment,
    idempre int(3) not null,
    nomeali varchar(30) not null,
    descricao varchar(50) not null,
    qtd int(6) not null,
    preco int(6) not null 
   -- img Varbinary(max) not null 
);

create table tbali_ped(
    idali integer(3) not null,
    idpedido integer(3) not null,
    nomecli varchar(20) not null,
    fonecli varchar(14) not null,
    enderecocli varchar(20) not null,
    numerocli integer(4) not null,
    bairrocli varchar(30) not null
);

create table tbpedidos_nota(
    idpedido integer primary key auto_increment not null,
    datahora datetime not null
);


CREATE VIEW vw_funcionario as
SELECT a.idali, a.nomeali, p.nomecli, p.fonecli, p.enderecocli, p.numerocli, p.bairrocli, 
preco * qtd AS valor_total
FROM tbalimentos a LEFT JOIN tbali_ped p on p.id_ve = e.id_es;
>>>>>>> 99d4a243514539e75f82f85019cc8d9b38ccb158
