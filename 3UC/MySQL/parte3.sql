SELECT * FROM funcionarios WHERE id_funcionarios <= 3;
SELECT * FROM funcionarios WHERE id_funcionarios = 2;
SELECT * FROM funcionarios WHERE id_funcionarios BETWEEN 3 AND 13;
SELECT nome_funcionario FROM funcionarios;
SELECT nome_funcionario FROM funcionarios ORDER BY nome_funcionario ASC;
SELECT nome_funcionario AS `Nome do Funcionario` FROM funcionarios ORDER BY nome_funcionario DESC;
SELECT nome_funcionario, cidade FROM funcionarios WHERE cidade = Rio de Janeiro;
