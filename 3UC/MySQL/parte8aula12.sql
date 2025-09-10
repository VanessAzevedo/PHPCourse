USE projetoloja;

CREATE TABLE login(
id_login int not null auto_increment primary key,
usuario varchar(50) not null,
senha varchar(50) not null
);

INSERT INTO login VALUES
(DEFAULT, 'marciofux', 'senha@123'),
(DEFAULT, 'carol', 'senha@456');