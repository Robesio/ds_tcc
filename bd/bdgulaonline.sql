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
    senha password(8) not null
);