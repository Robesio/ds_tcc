drop database if exists bdgulaonline;
create database bdgulaonline;
use bdgulaonline;

create table tbempreendedor(
    idempre integer(5) primary key not null auto_increment,
    nomeempre varchar(70) not null,
    cpf varchar(14) not null unique,
    fone varchar(14) not null,
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

create table tbalimentos(
    idali integer primary key not null auto_increment,
    idempre int(3) not null,
    nomeali varchar(30) not null,
    descricao varchar(50) not null,
    qtd int(6) not null,
    preco DECIMAL(6,2) not null, 
    img longblob 
);

create table tbpedidos_nota(
    idpedido integer primary key auto_increment not null,
    datahora datetime not null
);

create table tbali_ped(
    idali integer(3) not null,
    idpedido integer(3) not null,
    nomecli varchar(20) not null,
    fonecli varchar(14) not null,
    enderecocli varchar(20) not null,
    numerocli integer(4) not null,
    bairrocli varchar(30) not null,
    constraint fk_ali foreign key (idali) references tbalimentos(idali),
    constraint fk_nota foreign key (idpedido) references tbpedidos_nota(idpedido)
);

INSERT INTO tbempreendedor VALUES
(1,"Ricardo Vasconcelos","99059848012","1234-5678","jd pedro","Rua dos Pedregulhos","23",
"Sao Paulo","SP","66356352000192","docesalgado.com","ricardo@gmail.com.br",md5("1")),
(2,"Rodolfo Vasconcelos","56324164020","1256-5678","jd petrolina","Rua dos Pesqueiros","28",
"Petrolina","PE","76386701000172","salgadobom.com","rodolfo@gmail.com.br",md5("12")),
(3,"Maria Vasconcelos","51954853050","1902-5668","jd peri","Rua dos Abacateiros","89",
"Sao Paulo","SP","14357367000171","docedoce.com","maria@gmail.com.br",md5("123"));

INSERT INTO tbalimentos VALUES
(1,1,"Coxinha","Frango",1,5,""),
(2,1,"Pastel","Carne",1,10,""),
(3,1,"Quibe","Salsicha",1,5,""),
(4,2,"Brigadeiro","Chocolate branco",50,25,""),
(5,2,"Bolo de Pote","Balmilha",1,10,""),
(6,2,"Pudim","Pudim",1,15,""),
(7,3,"Marmita","Com Frango",1,25,""),
(8,3,"Marmita","Com Carne Bovina",1,30,""),
(9,3,"Marmita","Com Ovo",1,15,"");


INSERT INTO tbpedidos_nota VALUES
(1,CURRENT_TIMESTAMP()),
(2,CURRENT_TIMESTAMP()),
(3,CURRENT_TIMESTAMP());

INSERT INTO tbali_ped VALUES
(1,1,"Robésio","98989-8989","Rua Nova","234 B","Jardim Bom"),
(2,1,"Robésio","98989-8989","Rua Nova","234 B","Jardim Bom"),
(3,1,"Ian","97887-0000","Rua Amanco","333","Jardim do Café"),
(4,2,"Ian","97887-0000","Rua Amanco","333","Jardim do Café"),
(5,2,"Maisa","91212-1212","Rua Pedreira","444","Jardim Pedreira"),
(6,2,"Maisa","91212-1212","Rua Pedreira","444","Jardim Pedreira"),
(7,3,"Janderson","93333-5555","Rua Piaui","111","Jardim Novo"),
(8,3,"Janderson","93333-5555","Rua Piaui","111","Jardim Novo"),
(9,3,"Janderson","93333-5555","Rua Piaui","111","Jardim Novo");

CREATE VIEW vw_nota_pedido as
SELECT  a.idali, a.nomeali, p.nomecli, p.fonecli, p.enderecocli, p.numerocli, p.bairrocli,  preco * qtd AS valor_total, n.datahora
FROM tbalimentos a LEFT JOIN tbali_ped p on (a.idali = p.idali) LEFT JOIN tbpedidos_nota n on (p.idpedido = n.idpedido);