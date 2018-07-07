-- DROP SCHEMA IF EXISTS `moduloPagamento`;

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `moduloPagamento` DEFAULT CHARACTER SET utf8 ;
USE `moduloPagamento`;

CREATE TABLE IF NOT EXISTS Cartoes(
	idCartao INT,
	NumCartao VARCHAR(32),
    Titular VARCHAR(32),
    dataVencimento VARCHAR(32),
    codSeguranca VARCHAR(32),
    statusCartao ENUM('bloqueado', 'vencido', 'ativo'),
    limiteCredito VARCHAR(32),
    limiteUsado VARCHAR(32),
    limiteDisponivel VARCHAR(32),
    CONSTRAINT PK_Avaria PRIMARY KEY (idCartao)
);

INSERT INTO Cartoes VALUES
-- Cartões de crédito visa
	('1', MD5('4532133181052174'), MD5('Giovana Josefa Ana Novaes'), '2019-10-06', MD5('596'), 'ativo', '23450', '0', '23450'),
    ('2', MD5('4556271791560706'), MD5('Cláudia Cristiane Joana Barros'), '2019-02-06', MD5('495'), 'bloqueado', '4730', '4500', '230'),
    
-- Cartões de crédito mastercard
    ('3', MD5('5446328842585453'), MD5('Malu Antonella Rocha'), '2020-03-06', MD5('259'), 'vencido', '4730', '4500', '230'),
    ('4', MD5('5388098949556034'), MD5('Arthur Edson Bernardo Gomes'), '2020-02-07', MD5('793'), 'ativo','2900','500','2400'),


-- Cartões de crédito elo
	('5', MD5('4576644777404014'), MD5('Amanda Vitória Eliane Cardoso'), '2019-09-07', MD5('103'), 'ativo','2000', '500', '1500'),
    ('6', MD5('6363686303975555'), MD5('Marcelo Diogo Pedro Corte Real'), '2019-03-07', MD5('166'), 'bloqueado', '8000', '7000', '1000');