CREATE DATABASE susdb;
USE susdb;

CREATE TABLE PACIENTES(
	cpfPaciente VARCHAR(11) NOT NULL PRIMARY KEY,
    senha VARCHAR(24) NOT NULL,
    nomePaciente VARCHAR(200) NOT NULL,
    genero ENUM('M', 'F') NOT NULL,
    nascimento DATE NOT NULL,
    rg VARCHAR(10) NOT NULL,
    telefone VARCHAR(11) NOT NULL,
    email VARCHAR(200) NOT NULL
);

CREATE TABLE MEDICOS(
	cpfMedico VARCHAR(11) NOT NULL PRIMARY KEY,
    senha VARCHAR(24) NOT NULL,
    nomeMedico VARCHAR(200) NOT NULL,
    genero ENUM('M', 'F') NOT NULL,
    nascimento DATE NOT NULL,
    rg VARCHAR(10) NOT NULL,
    crm VARCHAR(11) NOT NULL,
    telefone VARCHAR(11) NOT NULL,
    email VARCHAR(200) NOT NULL,
    codEspecialidade INT NOT NULL
);

CREATE TABLE ESPECIALIDADE(
	codEspecialidade INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200) NOT NULL
);

CREATE TABLE CONSULTAS(
	codConsultas int not null AUTO_INCREMENT PRIMARY KEY, 
	dataAtdm DATETIME,
    descricao TEXT,
    cpfPaciente VARCHAR(11) NOT NULL,
    cpfMedico VARCHAR(11) NOT NULL
);

ALTER TABLE MEDICOS ADD 
FOREIGN KEY(codEspecialidade) REFERENCES ESPECIALIDADE(codEspecialidade);

ALTER TABLE CONSULTAS ADD 
FOREIGN KEY(cpfPaciente) REFERENCES PACIENTES(cpfPaciente);

ALTER TABLE CONSULTAS ADD 
FOREIGN KEY(cpfMedico) REFERENCES MEDICOS(cpfMedico);



-- QUANDO TUDO DER ERRADO É SÓ APAGAR 
-- DROP DATABASE SUS;

INSERT INTO ESPECIALIDADE VALUES(
    3,
    'Destroi Rabos'
);

INSERT INTO MEDICOS VALUES(
    '1234567890',
    'b123',
    'Bruno Barril Dobrado',
    'M',
    '1996-06-15',
    '123456789',
     'ca/12345',
    '71993572056',
    'bruno@bruno.com.br',
    2
);

INSERT INTO MEDICOS VALUES(
    '12345678590',
    'b123',
    'Negao do zap',
    'Destroi anûs',
    '1996-06-15',
    '123456789',
     'ca/12345',
    '71993572056',
    'bruno@bruno.com.br',
    3
);
