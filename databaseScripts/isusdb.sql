CREATE DATABASE susdb;
USE susdb;

CREATE TABLE USUARIOS(
    cpf VARCHAR(11) NOT NULL PRIMARY KEY,
    senha VARCHAR(255) NOT NULL,
    nome VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    tipo CHAR(3) NOT NULL,
    codEsp INT NOT NULL
);


ALTER TABLE USUARIOS ADD 
FOREIGN KEY(codEsp) REFERENCES especialidades(codEsp);

CREATE TABLE CONSULTAS(
    codConsultas INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    dataAtdm DATETIME,
    descricao TEXT,
    cpfUsuario VARCHAR(11) NOT NULL
);

ALTER TABLE CONSULTAS ADD 
FOREIGN KEY(cpfUsuario) REFERENCES USUARIOS(cpf);


create table especialidades(
	codEsp INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL
);

alter table especialidades add column descricao text;


INSERT INTO ESPECIALIDADES VALUES(
	null,
    'Neurologista'
);

select * from especialidades;
