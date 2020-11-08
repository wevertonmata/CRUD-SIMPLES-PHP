CREATE DATABASE mvc;

USE mvc;

CREATE table livro(
	id serial  primary key,
	nome varchar(50) not null,
	descricao varchar(50) not null	 
);

CREATE table vestuario(
	id serial  primary key,
	nome varchar(50) not null,
	unidade int not null
);


CREATE table cliente(
	id serial  primary key,
	nome varchar(200) not null,
	cpf varchar(20) not null
);