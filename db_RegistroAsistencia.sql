create database if not EXISTS db_RegistroAsistencia;
use db_RegistroAsistencia;
CREATE TABLE `tb_Alumno` (
`idcodigo` int(6) ZEROFILL NOT NULL,
`foto` varchar(200) NULL,
`dni` varchar(14) NULL,
`appaterno` varchar(20) NOT NULL,
`apmaterno` varchar(20) NULL,
`nombre` varchar(30) NOT NULL,
`telefono` int(11) NULL,
`email` varchar(50) NULL,
`direccion` varchar(400) NULL,
PRIMARY KEY (`idcodigo`) 
);
CREATE TABLE `tb_Docente` (
`idcodigo` varchar(5) NOT NULL,
`foto` varchar(200) NULL,
`dni` varchar(14) NULL,
`appaterno` varchar(20) NOT NULL,
`apmaterno` varchar(20) NOT NULL,
`nombre` varchar(30) NULL,
`telefono` int(11) NOT NULL,
`email` varchar(50) NULL,
`direccion` varchar(400) NULL,
PRIMARY KEY (`idcodigo`) 
);
CREATE TABLE `tb_Cursos` (
`idcodigo` varchar(8) NOT NULL,
`nombre` varchar(30) NOT NULL,
`tiene_lab` tinyint(1) NOT NULL,
`categoria` char(3) NOT NULL,
`creditos` tinyint(2) NOT NULL,
`requisitos` varchar(24) NULL,
`creditonecesario` int(4) NULL,
PRIMARY KEY (`idcodigo`) 
);
CREATE TABLE `tb_CargaAcademica` (
`id` int(8) ZEROFILL NOT NULL AUTO_INCREMENT,
`idcodigocurso` varchar(8) NOT NULL,
`semestre` varchar(8) NOT NULL,
PRIMARY KEY (`id`) 
);
CREATE TABLE `tb_CargaDetalle` (
`id` int(11) ZEROFILL NOT NULL AUTO_INCREMENT,
`idacademica` int(8) ZEROFILL NOT NULL,
`iddocente` varchar(5) NOT NULL,
`grupo` char(2) NOT NULL,
`horas` varchar(50) NOT NULL,
`dias` varchar(50) NOT NULL,
`salon` varchar(7) NOT NULL,
PRIMARY KEY (`id`) 
);
CREATE TABLE `tb_Matricula` (
`id` int(11) ZEROFILL NOT NULL AUTO_INCREMENT,
`idalumno` int(6) ZEROFILL NOT NULL,
`idacademica` int(8) ZEROFILL NOT NULL,
`nota1` tinyint(4) NULL,
`nota2` tinyint(4) NULL,
`nota3` tinyint(4) NULL,
`notafinal` tinyint(4) NULL,
`asistencia` tinyint(4) NULL,
`semestre` varchar(8) NOT NULL,
PRIMARY KEY (`id`) 
);
CREATE TABLE `tb_RegistroAsistencia` (
`id` int(11) ZEROFILL NOT NULL AUTO_INCREMENT,
`iddetalle` int(11) ZEROFILL NOT NULL,
`tema` varchar(300) NOT NULL,
`fecha` DATE NOT NULL,
`hora`  TIME NOT NULL,
PRIMARY KEY (`id`) 
);
CREATE TABLE `tb_RegistroDetalle` (
`id` int(11) ZEROFILL NOT NULL AUTO_INCREMENT,
`idregistro` int(11) ZEROFILL NOT NULL,
`idalumno` int(6) ZEROFILL NOT NULL,
`horallega` TIME NULL,
PRIMARY KEY (`id`) 
);

ALTER TABLE `tb_CargaAcademica` ADD CONSTRAINT `keycodigocurso` FOREIGN KEY (`idcodigocurso`) REFERENCES `tb_Cursos` (`idcodigo`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `tb_CargaDetalle` ADD CONSTRAINT `keydocente` FOREIGN KEY (`iddocente`) REFERENCES `tb_Docente` (`idcodigo`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `tb_CargaDetalle` ADD CONSTRAINT `keyacademica` FOREIGN KEY (`idacademica`) REFERENCES `tb_CargaAcademica` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `tb_Matricula` ADD CONSTRAINT `keyalumno` FOREIGN KEY (`idalumno`) REFERENCES `tb_Alumno` (`idcodigo`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `tb_Matricula` ADD CONSTRAINT `keyacademico` FOREIGN KEY (`idacademica`) REFERENCES `tb_CargaAcademica` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `tb_RegistroAsistencia` ADD CONSTRAINT `keycargadetalle` FOREIGN KEY (`iddetalle`) REFERENCES `tb_CargaDetalle` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `tb_RegistroDetalle` ADD CONSTRAINT `keyalumn` FOREIGN KEY (`idalumno`) REFERENCES `tb_Alumno` (`idcodigo`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `tb_RegistroDetalle` ADD CONSTRAINT `keyregdetalle` FOREIGN KEY (`idregistro`) REFERENCES `tb_RegistroAsistencia` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

