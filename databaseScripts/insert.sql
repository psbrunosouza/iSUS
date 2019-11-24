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

CREATE TABLE CONSULTAS(
    codConsultas INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    dataAtdm DATETIME,
    descricao TEXT,
    cpfUsuario VARCHAR(11) NOT NULL
);

create table ESPECIALIDADES(
    codEsp INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao text NOT NULL
);

ALTER TABLE CONSULTAS ADD 
FOREIGN KEY(cpfUsuario) REFERENCES USUARIOS(cpf);

ALTER TABLE USUARIOS ADD 
FOREIGN KEY(codEsp) REFERENCES especialidades(codEsp);

INSERT INTO ESPECIALIDADES VALUES
(null,
'Ginecologista',
'Undefined'),

(null,
'Neurologista',
'Undefined'),

(null,
'Pediatra',
'Undefined'),

(null,
'Cardiologista',
'Undefined')
;


INSERT INTO USUARIOS VALUES(

);

CREATE TABLE USUARIOS(
    cpf VARCHAR(11) NOT NULL PRIMARY KEY,
    senha VARCHAR(255) NOT NULL,
    nome VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    tipo CHAR(3) NOT NULL,
    codEsp INT NOT NULL
);

