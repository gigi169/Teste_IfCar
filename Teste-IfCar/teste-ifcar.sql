//SQL do formusuario
CREATE TABLE `cadastro` (
  `ID` int NOT NULL,
  `Nomeusuario` varchar(50) NOT NULL,
  `Emailusuario` char(39) NOT NULL,
  `Telefoneusuario` char(11) NOT NULL,
  `Senhausuario` varchar(20) NOT NULL,
  `Confirmarsenhausuario` varchar(20) NOT NULL
) 

ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `cadastro`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;
COMMIT;

