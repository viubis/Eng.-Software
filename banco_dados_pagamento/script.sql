-- DROP SCHEMA IF EXISTS `moduloPagamento`;

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `moduloPagamento` DEFAULT CHARACTER SET utf8 ;
USE `moduloPagamento`;

CREATE TABLE IF NOT EXISTS Cartoes(
	idCartao INT,
	NumCartao VARCHAR(20),
    Titular VARCHAR(50),
    dataVencimento DATE,
    codSeguranca VARCHAR(4),
    statusCartao ENUM('bloqueado', 'vencido', 'ativo'),
    limiteCredito DOUBLE,
    limiteUsado DOUBLE,
    limiteDisponivel DOUBLE,
    CONSTRAINT PK_Avaria PRIMARY KEY (idCartao)
);

INSERT INTO Cartoes VALUES
-- Cartões de crédito visa
	("1", "4532133181052174", "Giovana Josefa Ana Novaes", "2019-10-06", "596", "ativo", "23450", "0", "23450"),
    ("2", "4556271791560706", "Cláudia Cristiane Joana Barros", "2019-02-06", "495", "bloqueado", "4730", "4500", "230"),
    
-- Cartões de crédito mastercard
    ("3", "5446328842585453", "Malu Antonella Rocha", "2020-03-06", "259", "vencido", "4730", "4500", "230");


