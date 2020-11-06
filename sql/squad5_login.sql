
CREATE TABLE `login` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(100) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `SENHA` varchar(32) NOT NULL,
  `audit` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `EMAIL` (`EMAIL`)) 
