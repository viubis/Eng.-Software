SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mine_apple` DEFAULT CHARACTER SET utf8 ;
USE `mine_apple` ;

CREATE TABLE IF NOT EXISTS `mine_apple`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`log` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario_id` INT NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `operacao` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_log_usuario_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_log_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `mine_apple`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`administrador` (
  `usuario_id` INT NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`usuario_id`),
  CONSTRAINT `fk_administrador_usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `mine_apple`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`estado` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `sigla` CHAR(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC),
  UNIQUE INDEX `sigla_UNIQUE` (`sigla` ASC))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`cidade` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `estado_id` INT NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC),
  INDEX `fk_cidade_estado_idx` (`estado_id` ASC),
  CONSTRAINT `fk_cidade_estado`
    FOREIGN KEY (`estado_id`)
    REFERENCES `mine_apple`.`estado` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`cep` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cidade_id` INT NOT NULL,
  `numero` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cep_cidade_idx` (`cidade_id` ASC),
  UNIQUE INDEX `numero_UNIQUE` (`numero` ASC),
  CONSTRAINT `fk_cep_cidade`
    FOREIGN KEY (`cidade_id`)
    REFERENCES `mine_apple`.`cidade` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`endereco` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cep_id` INT NOT NULL,
  `rua` VARCHAR(255) NOT NULL,
  `numero` INT NOT NULL,
  `complemento` VARCHAR(255) NULL,
  `bairro` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_endereco_cep_idx` (`cep_id` ASC),
  CONSTRAINT `fk_endereco_cep`
    FOREIGN KEY (`cep_id`)
    REFERENCES `mine_apple`.`cep` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`produtor` (
  `usuario_id` INT NOT NULL,
  `endereco_id` INT NOT NULL,
  `cnpj` INT NOT NULL,
  `nomeFantasia` VARCHAR(255) NOT NULL,
  `razaoSocial` VARCHAR(255) NOT NULL,
  `telefone` INT NOT NULL,
  `raioEntrega` DOUBLE NOT NULL,
  `avaliacao` DOUBLE NOT NULL,
  `acesso` TINYINT(1) NOT NULL,
  UNIQUE INDEX `cnpj_UNIQUE` (`cnpj` ASC),
  PRIMARY KEY (`usuario_id`),
  INDEX `fk_produtor_endereco_idx` (`endereco_id` ASC),
  CONSTRAINT `fk_produtor_usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `mine_apple`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produtor_endereco`
    FOREIGN KEY (`endereco_id`)
    REFERENCES `mine_apple`.`endereco` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`banco` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`conta` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `banco_id` INT NOT NULL,
  `produtor_id` INT NOT NULL,
  `numero` VARCHAR(255) NOT NULL,
  `agencia` INT NOT NULL,
  `digito` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_conta_produtor_idx` (`produtor_id` ASC),
  INDEX `fk_conta_banco_idx` (`banco_id` ASC),
  CONSTRAINT `fk_conta_produtor`
    FOREIGN KEY (`produtor_id`)
    REFERENCES `mine_apple`.`produtor` (`usuario_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_conta_banco`
    FOREIGN KEY (`banco_id`)
    REFERENCES `mine_apple`.`banco` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`categoria` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`embalagem` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `tipo_UNIQUE` (`tipo` ASC))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`produto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `categoria_id` INT NOT NULL,
  `embalagem_id` INT NOT NULL,
  `produtor_id` INT NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `descricao` VARCHAR(255) NULL,
  `valor` DOUBLE NOT NULL,
  `minPorAssinatura` INT NOT NULL,
  `maxPorDia` INT NOT NULL,
  `freteMax` DOUBLE NOT NULL,
  `seg` TINYINT(1) NOT NULL,
  `ter` TINYINT(1) NOT NULL,
  `qua` TINYINT(1) NOT NULL,
  `qui` TINYINT(1) NOT NULL,
  `sex` TINYINT(1) NOT NULL,
  `sab` TINYINT(1) NOT NULL,
  `dom` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_produto_produtor_idx` (`produtor_id` ASC),
  INDEX `fk_produto_categoria_idx` (`categoria_id` ASC),
  INDEX `fk_produto_embalagem_idx` (`embalagem_id` ASC),
  CONSTRAINT `fk_produto_produtor`
    FOREIGN KEY (`produtor_id`)
    REFERENCES `mine_apple`.`produtor` (`usuario_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_categoria`
    FOREIGN KEY (`categoria_id`)
    REFERENCES `mine_apple`.`categoria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_embalagem`
    FOREIGN KEY (`embalagem_id`)
    REFERENCES `mine_apple`.`embalagem` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`consumidor` (
  `usuario_id` INT NOT NULL,
  `cpf` INT NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `sobrenome` VARCHAR(255) NOT NULL,
  `sexo` ENUM('m', 'f') NULL,
  `telefone` INT NULL,
  `acesso` TINYINT(1) NOT NULL,
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC),
  PRIMARY KEY (`usuario_id`),
  CONSTRAINT `fk_consumidor_usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `mine_apple`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
PACK_KEYS = DEFAULT;

CREATE TABLE IF NOT EXISTS `mine_apple`.`cartao` (
  `id` INT NOT NULL,
  `consumidor_id` INT NOT NULL,
  `numero` VARCHAR(255) NOT NULL,
  `titular` VARCHAR(255) NOT NULL,
  `validade` DATE NOT NULL,
  `codigo` VARCHAR(255) NOT NULL,
  `tipo` ENUM('c', 'd') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `numero_UNIQUE` (`numero` ASC),
  INDEX `fk_cartao_consumidor_idx` (`consumidor_id` ASC),
  CONSTRAINT `fk_cartao_consumidor`
    FOREIGN KEY (`consumidor_id`)
    REFERENCES `mine_apple`.`consumidor` (`usuario_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`consumidor_endereco` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `consumidor_id` INT NOT NULL,
  `endereco_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_consumidor_endereco_consumidor_idx` (`consumidor_id` ASC),
  INDEX `fk_consumidor_endereco_endereco_idx` (`endereco_id` ASC),
  UNIQUE INDEX `endereco_id_UNIQUE` (`endereco_id` ASC),
  CONSTRAINT `fk_consumidor_endereco_consumidor`
    FOREIGN KEY (`consumidor_id`)
    REFERENCES `mine_apple`.`consumidor` (`usuario_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_consumidor_endereco_endereco`
    FOREIGN KEY (`endereco_id`)
    REFERENCES `mine_apple`.`endereco` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`compra` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `consumidor_endereco_id` INT NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `valor` DOUBLE NOT NULL,
  `frete` DOUBLE NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_compra_consumidor_endereco_idx` (`consumidor_endereco_id` ASC),
  CONSTRAINT `fk_compra_consumidor_endereco`
    FOREIGN KEY (`consumidor_endereco_id`)
    REFERENCES `mine_apple`.`consumidor_endereco` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`assinatura` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `compra_id` INT NOT NULL,
  `produtor_id` INT NOT NULL,
  `valor` DOUBLE NOT NULL,
  `frete` DOUBLE NOT NULL,
  `notaFiscal` VARCHAR(255) NOT NULL,
  `status` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_assinatura_compra_idx` (`compra_id` ASC),
  INDEX `fk_assinatura_produtor_idx` (`produtor_id` ASC),
  CONSTRAINT `fk_assinatura_compra`
    FOREIGN KEY (`compra_id`)
    REFERENCES `mine_apple`.`compra` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_assinatura_produtor`
    FOREIGN KEY (`produtor_id`)
    REFERENCES `mine_apple`.`produtor` (`usuario_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`pagamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `assinatura_id` INT NOT NULL,
  `cartao_id` INT NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `valor` DOUBLE NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pagamento_cartao_idx` (`cartao_id` ASC),
  INDEX `fk_pagamento_assinatura_idx` (`assinatura_id` ASC),
  CONSTRAINT `fk_pagamento_cartao`
    FOREIGN KEY (`cartao_id`)
    REFERENCES `mine_apple`.`cartao` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pagamento_assinatura`
    FOREIGN KEY (`assinatura_id`)
    REFERENCES `mine_apple`.`assinatura` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`avaliacao` (
  `assinatura_id` INT NOT NULL,
  `nota` DOUBLE NOT NULL,
  `comentario` VARCHAR(255) NULL,
  PRIMARY KEY (`assinatura_id`),
  CONSTRAINT `fk_avaliacao_assinatura`
    FOREIGN KEY (`assinatura_id`)
    REFERENCES `mine_apple`.`assinatura` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`foto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `produto_id` INT NOT NULL,
  `path` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_foto_produto_idx` (`produto_id` ASC),
  CONSTRAINT `fk_foto_produto`
    FOREIGN KEY (`produto_id`)
    REFERENCES `mine_apple`.`produto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mine_apple`.`assinatura_produto` (
  `assinatura_id` INT NOT NULL,
  `produto_id` INT NOT NULL,
  `quantidade` INT NOT NULL,
  `frequencia` INT NOT NULL,
  `seg` TINYINT(1) NOT NULL,
  `ter` TINYINT(1) NOT NULL,
  `qua` TINYINT(1) NOT NULL,
  `qui` TINYINT(1) NOT NULL,
  `sex` TINYINT(1) NOT NULL,
  `sab` TINYINT(1) NOT NULL,
  `dom` TINYINT(1) NOT NULL,
  PRIMARY KEY (`assinatura_id`, `produto_id`),
  INDEX `fk_assinatura_produto_produto_idx` (`produto_id` ASC),
  INDEX `fk_assinatura_produto_assinatura_idx` (`assinatura_id` ASC),
  CONSTRAINT `fk_assinatura_produto_produto`
    FOREIGN KEY (`produto_id`)
    REFERENCES `mine_apple`.`produto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_assinatura_produto_assinatura`
    FOREIGN KEY (`assinatura_id`)
    REFERENCES `mine_apple`.`assinatura` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
