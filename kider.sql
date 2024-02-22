CREATE DATABASE kider;

CREATE TABLE conta(
login int,
senha varchar(50),
nome varchar (50),
email varchar(50),
telefone int(14)
);

CREATE TABLE newsletter(
email varchar(50)
);

CREATE TABLE pergunta(
nomePais varchar (50),
nomeCri varchar(50),
email varchar(50),
idade int(3),
mensagem varchar(1000)
);

CREATE TABLE professor(
nomeProf varchar(50),
formacao varchar(50),
tempoExp varchar(30),
escola varchar (50),
turnoDis varchar(300)
);

