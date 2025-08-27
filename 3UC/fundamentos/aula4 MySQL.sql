/*Alterando a tabela:*/
ALTER TABLE produtos CHANGE COLUMN preco_unitario
preco_unitario decimal (10,2);

/*Inserindo mais dados*/
INSERT INTO produtos (nome_produto, preco_unitario) VALUES 
("Camiseta", 35.99);