CREATE TABLE `frisabor_estagio`.contatos ( 
    `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `nome` VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL ,
    `email` VARCHAR(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL , 
    `telefone` INT(16) NOT NULL , 
    `profissao` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL , 
    `capital_de_investimento` VARCHAR(10) NOT NULL , 
    `cidade` VARCHAR(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL , 
    `bairro` VARCHAR(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL , 
    `mensagem` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL);