CREATE DATABASE `frisabor_estagio`; /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

CREATE TABLE `frisabor_estagio`.contatos (
    `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(300) NOT NULL,
    `email` VARCHAR(250) NULL,
    `telefone` VARCHAR(14) NOT NULL,
    `profissao` VARCHAR(50) NULL,
    `capital_de_investimento` FLOAT NOT NULL,
    `cidade` VARCHAR(30) NOT NULL,
    `bairro` VARCHAR(30) NOT NULL,
    `mensagem` TEXT NOT NULL
);
