-- Deleta o banco de dados caso exista
DROP DATABASE IF EXISTS IFSP;

-- Cria banco de dados caso não exista
CREATE DATABASE IF NOT EXISTS IFSP;

-- Seleciona o banco de dados 
USE IFSP;

-- Cria tabela de cidades 
CREATE TABLE cidades (
    id INT AUTO_AUTOINCREMENT,
    nome VARCHAR(200),
    estado VARCHAR(002),
    PRIMARY KEY(id)
);

CREATE TABLE cliente (
    id INT AUTO_AUTOINCREMENT,
    nome VARCHAR(100),
    email VARCHAR(100),
    senha VARCHAR(050),
    ativo BOOL,
    id_cidade INT,
    PRIMARY KEY(id),
    CONSTRAINT FK_ClienteCidade FOREIGN KEY
)