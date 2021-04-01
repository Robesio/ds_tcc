drop database if exists dbgulaonline;
create database dbgulaonline;
use dbgulaonline;
create table tbempreendedor(
    idempre integer primary key auto_increment not null,
    nomeempre varchar(50) not null,
    cpf varchar(100) not null,
    fone varchar(60) not null,
    bairro varchar(200) not null,
    rua varchar(200) not null,
    numero varchar(40) not null,
    cidade varchar(200) not null,
    uf varchar(40) not null,
    cnpj varchar(200) not null,
    linksite varchar(200) not null,
    email varchar(200) not null,
    senha varchar(40) not null
);