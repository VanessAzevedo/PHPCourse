CREATE DATABASE senac;
USE senac;

CREATE TABLE alunos(
	id_aluno int not null auto_increment primary key,
    nome varchar(50),
    curso varchar(20)
);

CREATE TABLE login(
	id_login int not null auto_increment primary key,
    usuario varchar(50),
    senha varchar(50)
    );

