/*Criando o banco*/
CREATE DATABASE projetoloja;
/*Usar o banco*/
USE projetoloja;

CREATE TABLE funcionarios (id_funcionario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome_funcionario VARCHAR (50) NOT NULL, telefone BIGINT /*BIGINT aceita + quant. de numeros que o INT.*/
);

INSERT INTO funcionarios VALUE (1, "Vanessa Azevedo", 21989000000);

SELECT * FROM funcionarios;