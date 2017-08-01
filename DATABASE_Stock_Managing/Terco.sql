SET FOREIGN_KEY_CHECKS=0

DROP TABLE IF EXISTS `Requisicao` CASCADE
;

DROP TABLE IF EXISTS `Nutrição e Alimentação` CASCADE
;

DROP TABLE IF EXISTS `Fornecedor` CASCADE
;

DROP TABLE IF EXISTS `Limpeza` CASCADE
;

DROP TABLE IF EXISTS `Higiene` CASCADE
;

DROP TABLE IF EXISTS `Frescos` CASCADE
;

DROP TABLE IF EXISTS `Cuidador` CASCADE
;

DROP TABLE IF EXISTS `Cozinha` CASCADE
;

DROP TABLE IF EXISTS `Produto` CASCADE
;

CREATE TABLE `Requisicao`
(
	`dataEntrega` DATE,
	`assinatura` BOOL NOT NULL,
	`dataPedido` DATE,
	`id` INT NOT NULL AUTO_INCREMENT ,
	`Setores` MULTILINESTRING,
	`via` VARCHAR(50),
	`nome` VARCHAR(50),
	`observações` LONGTEXT,
	CONSTRAINT `PK_Requisicao` PRIMARY KEY (`id`)
)
;

CREATE TABLE `Nutrição e Alimentação`
(
	`responsável` VARCHAR(50),
	`lote` VARCHAR(50),
	`quantidade` INTEGER,
	`dataR` DATE,
	`idProd` INT AUTO_INCREMENT ,
	`rubrica` BOOL NOT NULL
)
;

CREATE TABLE `Fornecedor`
(
	`nome` VARCHAR(50),
	`id` INT NOT NULL AUTO_INCREMENT ,
	CONSTRAINT `PK_Fornecedor` PRIMARY KEY (`id`)
)
;

CREATE TABLE `Limpeza`
(
	`uso` VARCHAR(50)
)
;

CREATE TABLE `Higiene`
(
	`uso` TEXT
)
;

CREATE TABLE `Frescos`
(
	`Tipo` VARCHAR(30)
)
;

CREATE TABLE `Cuidador`
(
	`id` INT NOT NULL AUTO_INCREMENT ,
	`cargo` VARCHAR(20),
	`nome` VARCHAR(50) NOT NULL,
	CONSTRAINT `PK_Cuidadore` PRIMARY KEY (`id`)
)
;

CREATE TABLE `Cozinha`
(
	`Validadeate` DATE
)
;

CREATE TABLE `Produto`
(
	`código` INT NOT NULL AUTO_INCREMENT ,
	`descrição` TEXT NOT NULL,
	`preçoUnitário` REAL NOT NULL,
	`dataRecepção` DATE NOT NULL,
	`temperatura` INT,
	`dataValidade` DATE NOT NULL,
	`codificação` NVARCHAR(50),
	`fornecedor` VARCHAR(50),
	`rubricaValidado` BOOL,
	CONSTRAINT `PK_Produto` PRIMARY KEY (`código`)
)
;

SET FOREIGN_KEY_CHECKS=1
#qdo tem chaves estrageiras, poem a 0. evita conflitos com as chaves e ñ verifica chaves estageiradsbparava havendo conflito assim já não para 
#desliga-se a verificação de chaves, qdo crio a chave estrangeira supostamente já crio a chave primária .. senãoo que daria era conflito de chaves!
