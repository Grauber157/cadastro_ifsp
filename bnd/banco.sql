-- Deleta o banco de dados caso exista
DROP DATABASE IF EXISTS IFSP;

-- Cria banco de dados caso não exista
CREATE DATABASE IF NOT EXISTS IFSP;

-- Seleciona o banco de dados 
USE IFSP;

-- Cria tabela de cidades 
CREATE TABLE cidade (
    id INT AUTO_INCREMENT,
    nome VARCHAR(200),
    estado VARCHAR(002),
    PRIMARY KEY(id)
);

CREATE TABLE cliente (
    id INT AUTO_INCREMENT,
    nome VARCHAR(100),
    email VARCHAR(100),
    senha VARCHAR(050),
    ativo BOOL,
    id_cidade INT,
    PRIMARY KEY(id),
    CONSTRAINT FK_ClienteCidade FOREIGN KEY (id_cidade) REFERENCES cidade(id)
)