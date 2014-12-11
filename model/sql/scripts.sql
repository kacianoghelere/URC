CREATE DATABASE `dbmvc`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;
 
INSERT INTO `dbmvc`.`usuarios` (`nome`,`login`,`senha`) VALUES
('Eduardo', 'eduardo', 'senha'),
('Marcos', 'marcos', 'senha'),
('Renata', 'renata', 'senha'),
('Fabiana', 'fabiana', 'senha');