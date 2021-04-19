DROP DATABASE IF EXISTS bdgulaonline;
CREATE DATABASE bdgulaonline;
USE bdgulaonline;

CREATE TABLE tbcadastro (
  id_ca INTEGER(4) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(128) NOT NULL,
  cpf VARCHAR(14) NULL UNIQUE,
  fone VARCHAR(14) NOT NULL,
  bairro VARCHAR(40) NULL,
  rua VARCHAR(40) NULL,
  numero VARCHAR(8) NULL,
  cidade VARCHAR(30) NULL,
  uf VARCHAR(2) NULL,
  cnpj VARCHAR(18) NULL,
  linksite VARCHAR(30) NULL,
  email VARCHAR(40) NOT NULL,
  PRIMARY KEY(id_ca)
);

CREATE TABLE tbtipos_logins (
  idti_lo INTEGER(1) NOT NULL AUTO_INCREMENT,
  tipo VARCHAR(5) NOT NULL,
  PRIMARY KEY(idti_lo)
);

CREATE TABLE tbstatus (
  idstatus INTEGER(1) NOT NULL AUTO_INCREMENT,
  nomestatus VARCHAR(20) NOT NULL,
  PRIMARY KEY(idstatus)
);

CREATE TABLE tbpedido (
  idpedido INTEGER(4) NOT NULL AUTO_INCREMENT,
  id_ca INTEGER(4) NOT NULL,
  nomecli VARCHAR(128) NOT NULL,
  fonecli VARCHAR(14) NOT NULL,
  ruacli VARCHAR(40) NOT NULL,
  numerocli VARCHAR(8) NOT NULL,
  bairrocli VARCHAR(30) NOT NULL,
  datahora DATETIME NOT NULL,
  idstatus INTEGER(1) NOT NULL,
  PRIMARY KEY(idpedido),
  constraint fk_tbpedido foreign key (id_ca) references tbcadastro(id_ca)ON DELETE CASCADE ON UPDATE CASCADE,
  constraint fk_tbstatus foreign key (idstatus) references tbstatus(idstatus) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE tbalimentos (
  idali INTEGER(4) NOT NULL AUTO_INCREMENT,
  id_ca INTEGER(4) NOT NULL,
  nomeali VARCHAR(40) NOT NULL,
  descricao VARCHAR(50) NOT NULL,
  qtd INTEGER(8) NOT NULL,
  preco DECIMAL(8,2) NOT NULL,
  img LONGBLOB NULL,
  PRIMARY KEY(idali),
  constraint fk_tbalimentos foreign key (id_ca) references tbcadastro(id_ca) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE tbali_has_tbped (
  idali INTEGER(4) NOT NULL,
  idpedido INTEGER(4) NOT NULL,
  qtdcli INTEGER(4) NOT NULL,
  PRIMARY KEY(idali, idpedido),
  constraint fk_tbinter foreign key (idali) references tbalimentos(idali)ON DELETE CASCADE ON UPDATE CASCADE,
  constraint fk_tblig foreign key (idpedido) references tbpedido(idpedido)ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE tblogins (
  id_ca INTEGER(4) NOT NULL,
  idti_lo INTEGER(1) NOT NULL,
  senha VARCHAR(40) NOT NULL,
  PRIMARY KEY(id_ca),
  constraint fk_tblogins foreign key (id_ca) references tbcadastro(id_ca) ON DELETE CASCADE ON UPDATE CASCADE,
  constraint fk_tblog foreign key (idti_lo) references tbtipos_logins(idti_lo) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO tbcadastro VALUES
(1,"Ricardo Vasconcelos","99059848012","1234-5678","jd pedro","Rua dos Pedregulhos","23",
"Sao Paulo","SP","66356352000192","docesalgado.com","ricardo@gmail.com.br"),
(2,"Rodolfo Vasconcelos","56324164020","1256-5678","jd petrolina","Rua dos Pesqueiros","28",
"Petrolina","PE","76386701000172","salgadobom.com","rodolfo@gmail.com.br"),
(3,"Maria Vasconcelos","51954853050","1902-5668","jd peri","Rua dos Abacateiros","89",
"Sao Paulo","SP","14357367000171","docedoce.com","maria@gmail.com.br");

INSERT INTO tbtipos_logins VALUES(1,"Admin"),(2,"Comum");

INSERT INTO tbstatus VALUES(1,"Realizado"),(2,"Enviado"),(3,"Entregue");

INSERT INTO tbpedido VALUES
(1,1,"Robésio","98989-8989","Rua Nova","234 B","Jardim Bom",CURRENT_TIMESTAMP(),1),
(2,1,"Robésio","98989-8989","Rua Nova","234 B","Jardim Bom",CURRENT_TIMESTAMP(),1),
(3,1,"Ian","97887-0000","Rua Amanco","333","Jardim do Café",CURRENT_TIMESTAMP(),1),
(4,2,"Ian","97887-0000","Rua Amanco","333","Jardim do Café",CURRENT_TIMESTAMP(),1),
(5,2,"Maisa","91212-1212","Rua Pedreira","444","Jardim Pedreira",CURRENT_TIMESTAMP(),2),
(6,2,"Maisa","91212-1212","Rua Pedreira","444","Jardim Pedreira",CURRENT_TIMESTAMP(),2),
(7,3,"Janderson","93333-5555","Rua Piaui","111","Jardim Novo",CURRENT_TIMESTAMP(),3),
(8,3,"Janderson","93333-5555","Rua Piaui","111","Jardim Novo",CURRENT_TIMESTAMP(),3),
(9,3,"Janderson","93333-5555","Rua Piaui","111","Jardim Novo",CURRENT_TIMESTAMP(),3);

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

INSERT INTO tbali_has_tbped VALUES(1,1,2.2),(2,1,10),(3,1,20),(4,2,15),(5,2,9),(6,3,4);

INSERT INTO tblogins VALUES(1,1,md5("11")),(2,2,md5("22")),(3,2,md5("33"));



--CREATE VIEW vw_nota_pedido as
--SELECT  a.idali, a.nomeali, c.nome, c.fone, c.bairro, c.rua, c.numero, a.qtd, preco * qtd AS valor_total, p.datahora
--FROM tbalimentos a LEFT JOIN tbcadastro c on (a.idali = p.idali) LEFT JOIN tbpedido p on (p.idpedido = p.idpedido);

--CREATE VIEW vw_nota_pedido as
--SELECT n.idpedido, a.idali, a.nomeali, p.nomecli, p.fonecli, p.enderecocli, p.numerocli, p.bairrocli,  preco * qtd AS valor_total, n.datahora
--FROM tbalimentos a LEFT JOIN tbali_ped p on (a.idali = p.idali) LEFT JOIN tbpedidos_nota n on (p.idpedido = n.idpedido);