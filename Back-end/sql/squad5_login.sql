CREATE SCHEMA `squad5`;
USE `squad5`;
  
CREATE TABLE `squad5`.`comentario` (
  `id` int AUTO_INCREMENT,
  `nome` varchar(100),
  `mensagem` varchar(300),
  `data` datetime default now(),
  `audit` int,
  PRIMARY KEY (`id`)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `squad5`.`quiz` (
  `numquest` int NOT NULL AUTO_INCREMENT,
  `respq` varchar(45) NOT NULL,
  `total` varchar(150) NOT NULL,
  PRIMARY KEY (`numquest`))
  ENGINE=InnoDB DEFAULT CHARSET=utf8;
SELECT * FROM squad5.quiz;
INSERT INTO `squad5`.`quiz` (`respq`, `total`)
VALUES ('Total dos pontos = ', '0');
create view tot_quiz as SELECT * FROM squad5.quiz order by numquest desc limit 3;
  /*SELECT sum(respq) from tot_quiz;*/
UPDATE quiz SET total =(SELECT sum(respq) from tot_quiz) where numquest=1;

CREATE TABLE `squad5`.`cadastro` (
  `idnome` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` char(32) NOT NULL,
  PRIMARY KEY (`idnome`))
  ENGINE=InnoDB DEFAULT CHARSET=utf8;



                      
                      
