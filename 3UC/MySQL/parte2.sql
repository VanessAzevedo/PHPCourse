INSERT INTO funcionarios VALUES 
(DEFAULT, "Rayane Nascimento", 21988000000),
(DEFAULT, "Aline Silva", 21980000000);

INSERT INTO funcionarios VALUES 
(DEFAULT, "Eliane Rodrigues", 21000000000);

UPDATE funcionarios SET telefone = 21985880000 WHERE id_funcionario = 3;

DELETE FROM funcionarios WHERE id_funcionario >= 4;

ALTER TABLE funcionarios ADD COLUMN cidade VARCHAR (30);

SELECT * FROM funcionarios