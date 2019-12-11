
-- cmd
-- cd arquivos de programas/mysql/mysql server 5.7/bin
-- mysql.exe -h localhost -u root -p

CREATE DATABASE locaweb;

USE locaweb;

-- cria as tabelas
CREATE TABLE funcionarios(
idFuncionario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(20) NOT NULL,
codigo INT(4) NOT NULL,
perfil CHAR(13) NOT NULL);

CREATE TABLE clientes(
idCliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(20) NOT NULL,
cpf VARCHAR(14) NOT NULL,
codigo int(4) NOT NULL,
funcionarios_idFuncionario INT NOT NULL,
foreign key(funcionarios_idFuncionario) references funcionarios(idFuncionario));

CREATE TABLE catalogo(
idCatalogo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
codigo INT(6) NOT NULL,
filme VARCHAR(60) NOT NULL,
imagen varchar(60) NOT NULL);

CREATE TABLE alugados(
idAlugado INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
cliente VARCHAR(20) NOT NULL,
codigo INT(4) NOT NULL,
filme VARCHAR(60) NOT NULL,
dtAlugado DATE NOT NULL,
hrAlugado char(5) NOT NULL,
clientes_idCliente INT NOT NULL,
catalogo_idCatalogo INT NOT NULL,
foreign key(clientes_idCliente) references clientes(idCliente),
foreign key(catalogo_idCatalogo) references catalogo(idCatalogo));

insert into funcionarios(idFuncionario,nome,codigo,perfil) 
values 
(null,'popo',1212,'Administrador'),
(null,'didi',1111,'Funcionario');
