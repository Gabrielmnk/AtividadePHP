
DROP DATABASE IF EXISTS coluna_da_ponta;

CREATE DATABASE coluna_da_ponta CHARACTER SET utf8 COLLATE utf8_general_ci;

USE coluna_da_ponta;

CREATE TABLE funcionarios (
    func_id INTEGER PRIMARY KEY AUTO_INCREMENT,
    func_name VARCHAR(255) NOT NULL,
    func_email VARCHAR(255) NOT NULL,
    func_password VARCHAR(255) NOT NULL,
    func_status ENUM('ON','DELETE') DEFAULT 'ON'
);


INSERT INTO funcionarios(func_name,func_email,func_password) 
VALUES
    ( 
'Romulo Albuquerque',
'romulo@netww.com',
SHA1('Abc12345#')
    ), 
(
'Rose Cerqueira',
'rosecerq@netww.com',
SHA1('Abc12345#')
    ),
(
'Antonio Ferraz',
'antonioferraz@netww.com',
SHA1('Abc12345#')
    ),
(
'Vitor Silva',
'vitao@netww.com',
SHA1('Abc12345#')
    ),
(
'Felipe Souza',
'felipesouza@netww.com',
SHA1('Abc12345#')
    );

