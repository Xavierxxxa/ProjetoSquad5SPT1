
/*CREATE TABLE `login` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(100) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `SENHA` varchar(32) NOT NULL,
  `audit` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `EMAIL` (`EMAIL`))*/
  
CREATE SCHEMA `squad5`;
USE `squad5`;
  
CREATE TABLE `squad5`.`comentario` (
  `idcoment` int AUTO_INCREMENT,
  `nome` varchar(100),
  `mensagem` varchar(300),
  `data` datetime default now(),  
  PRIMARY KEY (`idcoment`)
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

CREATE TABLE `squad5`.`audit` (
  `idaudit` int NOT NULL AUTO_INCREMENT,
  `questão1` char(30) NOT NULL,
  `questão2` char(30) NOT NULL,
  `questão3` char(30) NOT NULL,
  `questão4` char(30) NOT NULL,
  `questão5` char(30) NOT NULL,
  `questão6` char(30) NOT NULL,
  `questão7` char(30) NOT NULL,
  `questão8` char(30) NOT NULL,
  `questão9` char(30) NOT NULL,
  `questão10` char(30) NOT NULL,
  `resultado` varchar(150) NOT NULL,
  PRIMARY KEY (`idaudit`))
  ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `squad5`.`auditquest` (
  `idquest` int NOT NULL AUTO_INCREMENT,
  `Questões` VARCHAR(1000) NOT NULL,
  `Alternativa 1` VARCHAR(500) NOT NULL,
  `Alternativa 2` VARCHAR(500) NOT NULL,
  `Alternativa 3` VARCHAR(500) NOT NULL,
  `Alternativa 4` VARCHAR(500) NOT NULL,
  `Alternativa 5` VARCHAR(500) NOT NULL,
  PRIMARY KEY (`idquest`));

SELECT * FROM squad5.auditquest;
INSERT INTO `squad5`.`auditquest` (`Questões`, `Alternativa 1`, `Alternativa 2`, `Alternativa 3`, `Alternativa 4`, `Alternativa 5`) 
VALUES ('1 – Com que frequência você consome bebidas alcoólicas (cerveja, vinho, cachaça, etc.)?', 'Nunca', 'Uma vez por mês pelo menos','Duas a quatro vez por mês','Duas a três vezes por semana','Quatro ou mais vezes por semana');

INSERT INTO `squad5`.`auditquest` (`Questões`, `Alternativa 1`, `Alternativa 2`, `Alternativa 3`, `Alternativa 4`, `Alternativa 5`) 
VALUES ('2 – Quantas doses, contendo álcool, você consome num dia em que normalmente bebe ?', '1 a 2 doses','3 a 4 doses','5 a 6 doses','7 a 9 doses', '10 ou mais doses');

INSERT INTO `squad5`.`auditquest` (`Questões`, `Alternativa 1`, `Alternativa 2`, `Alternativa 3`, `Alternativa 4`, `Alternativa 5`) 
VALUES ('3 – Com que freqüência que você consome 6 ou mais doses de bebida alcoólica em uma única ocasião?','Nunca', 'Uma vez por mês pelo menos','Duas a quatro vez por mês','Duas a três vezes por semana','Quatro ou mais vezes por semana');

INSERT INTO `squad5`.`auditquest` (`Questões`, `Alternativa 1`, `Alternativa 2`, `Alternativa 3`, `Alternativa 4`, `Alternativa 5`) 
VALUES ('4 – Com que freqüência, durante os últimos doze meses, você percebeu que não conseguia parar de beber uma vez que havia começado?', 'Nunca', 'Menos que semanalmente', 'Mensalmente', 'Semanalment', 'Diariamente ou quase diariamente');

INSERT INTO `squad5`.`auditquest` (`Questões`, `Alternativa 1`, `Alternativa 2`, `Alternativa 3`, `Alternativa 4`, `Alternativa 5`) 
VALUES ('5 – Com que freqüência, durante os últimos doze meses, você deixou de fazer algo ou atender a um compromisso devido ao uso de bebidas alcoólicas ?', 'Nunca', 'Menos que semanalmente', 'Mensalmente', 'Semanalment', 'Diariamente ou quase diariamente');

INSERT INTO `squad5`.`auditquest` (`Questões`, `Alternativa 1`, `Alternativa 2`, `Alternativa 3`, `Alternativa 4`, `Alternativa 5`) 
VALUES ('6 – Com que freqüência, durante os últimos doze meses, você precisou de uma primeira dose pela manhã para sentir-se melhor depois de uma bebedeira?', 'Nunca', 'Menos que semanalmente', 'Mensalmente', 'Semanalment', 'Diariamente ou quase diariamente');

INSERT INTO `squad5`.`auditquest` (`Questões`, `Alternativa 1`, `Alternativa 2`, `Alternativa 3`, `Alternativa 4`, `Alternativa 5`) 
VALUES ('7 – Com que freqüência você sentiu-se culpado ou com remorso depois de beber?', 'Nunca', 'Menos que semanalmente', 'Mensalmente', 'Semanalment', 'Diariamente ou quase diariamente');

INSERT INTO `squad5`.`auditquest` (`Questões`, `Alternativa 1`, `Alternativa 2`, `Alternativa 3`, `Alternativa 4`, `Alternativa 5`) 
VALUES ('8 – Com que freqüência, durante os últimos doze meses, você não conseguiu lembrar-se do que aconteceu na noite anterior porque havia bebido?', 'Nunca', 'Menos que semanalmente', 'Mensalmente', 'Semanalment', 'Diariamente ou quase diariamente');

INSERT INTO `squad5`.`auditquest` (`Questões`, `Alternativa 1`, `Alternativa 2`, `Alternativa 3`, `Alternativa 4`, `Alternativa 5`) 
VALUES ('9 – Você ou outra pessoa já se machucou devido a alguma bebedeira sua?', 'Nunca', 'Sim, mas não nos últimos 12 meses', 'Sim, nos últimos 12 meses', '------', '------');

INSERT INTO `squad5`.`auditquest` (`Questões`, `Alternativa 1`, `Alternativa 2`, `Alternativa 3`, `Alternativa 4`, `Alternativa 5`) 
VALUES ('10 – Algum parente, amigo, médico ou outro profissional de saúde mostrou-se preocupado com seu modo de beber ou sugeriu que você diminuísse a quantidade?', 'Nunca', 'Sim, mas não nos últimos 12 meses', 'Sim, nos últimos 12 meses', '------', '------');


CREATE TABLE `squad5`.`auditresult` (
    `idresult` INT NOT NULL AUTO_INCREMENT,
    `Níveis` VARCHAR(3000) NOT NULL,
    PRIMARY KEY (`idresult`)
);

SELECT * FROM squad5.auditquest;
INSERT INTO `squad5`.`auditresult` (`Níveis`) 
VALUES ('Nível 1 (resultado menor ou igual a 7) – ZONA I: Pessoas que se localizam na ZONA I geralmente fazem uso de baixo risco de álcool ou são abstêmias. De uma forma geral, são
                        pessoas que bebem menos de duas doses-padrão por dia ou que não ultrapassam a quantidade de cinco doses-padrão em uma única
                        ocasião. A intervenção adequada nesse nível é a educação em saúde, para que haja a manutenção do padrão de uso atual.');

INSERT INTO `squad5`.`auditresult` (`Níveis`) 
VALUES ('Nível 2 (resultado entre 8 e 15) – ZONA II: Pessoas que pontuam nessa zona são consideradas usuários de risco; são pessoas que fazem uso acima de duas doses-padrão
                        todos os dias ou mais de cinco doses-padrão numa única ocasião, porém não apresentam nenhum problema decorrente disso. A
                        intervenção adequada nesse nível é a Orientação Básica sobre o uso de baixo risco e sobre os possíveis riscos orgânicos, psicológicos ou
                        sociais que o usuário pode apresentar se mantiver esse padrão de uso.');

INSERT INTO `squad5`.`auditresult` (`Níveis`) 
VALUES ('Nível 3 (resultado entre 16 e 19) – ZONA III: Nessa zona de risco estão os usuários com padrão de uso nocivo; ou seja, pessoas que consomem álcool em quantidade e
                        frequência acima dos padrões de baixo risco e já apresentam problemas decorrentes do uso de álcool. Por outro lado, essas pessoas não
                        apresentam a quantidade de sintomas necessários para o diagnóstico de dependência. A intervenção adequada nesse nível é a utilização.');

INSERT INTO `squad5`.`auditresult` (`Níveis`) 
VALUES ('Nível 4 (resultado entre 20 e 40) – ZONA IV: Pessoas que se encontram nesse nível apresentam grande chance de ter um diagnóstico de dependência. Nesse caso, é preciso
                        fazer uma avaliação mais cuidadosa e, se confirmado o diagnóstico, deve-se motivar o usuário a procurar atendimento especializado para
                        acompanhamento e encaminhá-lo ao serviço adequado.');


                      
                      
