
CREATE DATABASE cadastro;
USE cadastro;
CREATE TABLE `cadastro`.`usuarios` ( 
`id_cliente` INT NOT NULL AUTO_INCREMENT , 
`nome_cliente` VARCHAR(255) NOT NULL , 
`email_cliente` VARCHAR(255) NOT NULL , 
`telefone_cliente` INT(14) NOT NULL , 
`data_nasc_cliente` DATE NOT NULL , 
`senha_cliente` VARCHAR(255) NOT NULL , 
PRIMARY KEY (`id_cliente`)) ENGINE = InnoDB;