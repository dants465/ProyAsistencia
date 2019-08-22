/*
 Navicat Premium Data Transfer
 Source Server         : laragon_usuario
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : db_registroasistencia
 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001
 Date: 19/08/2019 10:51:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_alumno
-- ----------------------------
DROP TABLE IF EXISTS `tb_alumno`;
CREATE TABLE `tb_alumno`  (
  `idcodigo` int(6) UNSIGNED ZEROFILL NOT NULL,
  `foto` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dni` varchar(14) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `appaterno` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `apmaterno` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nombre` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telefono` int(11) NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `direccion` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idcodigo`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_cargaacademica
-- ----------------------------
DROP TABLE IF EXISTS `tb_cargaacademica`;
CREATE TABLE `tb_cargaacademica`  (
  `id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `idcodigocurso` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `semestre` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `keycodigocurso`(`idcodigocurso`) USING BTREE,
  CONSTRAINT `keycodigocurso` FOREIGN KEY (`idcodigocurso`) REFERENCES `tb_cursos` (`idcodigo`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_cargadetalle
-- ----------------------------
DROP TABLE IF EXISTS `tb_cargadetalle`;
CREATE TABLE `tb_cargadetalle`  (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `idacademica` int(8) UNSIGNED ZEROFILL NOT NULL,
  `iddocente` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `grupo` char(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `horas` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dias` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `salon` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `keydocente`(`iddocente`) USING BTREE,
  INDEX `keyacademica`(`idacademica`) USING BTREE,
  CONSTRAINT `keyacademica` FOREIGN KEY (`idacademica`) REFERENCES `tb_cargaacademica` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `keydocente` FOREIGN KEY (`iddocente`) REFERENCES `tb_docente` (`idcodigo`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_cursos
-- ----------------------------
DROP TABLE IF EXISTS `tb_cursos`;
CREATE TABLE `tb_cursos`  (
  `idcodigo` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nombre` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tiene_lab` tinyint(1) NOT NULL,
  `categoria` char(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `creditos` tinyint(2) NOT NULL,
  `requisitos` varchar(24) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `creditonecesario` int(4) NULL DEFAULT NULL,
  PRIMARY KEY (`idcodigo`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_docente
-- ----------------------------
DROP TABLE IF EXISTS `tb_docente`;
CREATE TABLE `tb_docente`  (
  `idcodigo` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dni` varchar(14) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `appaterno` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `apmaterno` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nombre` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `direccion` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idcodigo`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_matricula
-- ----------------------------
DROP TABLE IF EXISTS `tb_matricula`;
CREATE TABLE `tb_matricula`  (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `idalumno` int(6) UNSIGNED ZEROFILL NOT NULL,
  `idacademica` int(8) UNSIGNED ZEROFILL NOT NULL,
  `nota1` tinyint(4) NULL DEFAULT NULL,
  `nota2` tinyint(4) NULL DEFAULT NULL,
  `nota3` tinyint(4) NULL DEFAULT NULL,
  `notafinal` tinyint(4) NULL DEFAULT NULL,
  `asistencia` tinyint(4) NULL DEFAULT NULL,
  `semestre` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `keyalumno`(`idalumno`) USING BTREE,
  INDEX `keyacademico`(`idacademica`) USING BTREE,
  CONSTRAINT `keyacademico` FOREIGN KEY (`idacademica`) REFERENCES `tb_cargaacademica` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `keyalumno` FOREIGN KEY (`idalumno`) REFERENCES `tb_alumno` (`idcodigo`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_registroasistencia
-- ----------------------------
DROP TABLE IF EXISTS `tb_registroasistencia`;
CREATE TABLE `tb_registroasistencia`  (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `iddetalle` int(11) UNSIGNED ZEROFILL NOT NULL,
  `tema` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `keycargadetalle`(`iddetalle`) USING BTREE,
  CONSTRAINT `keycargadetalle` FOREIGN KEY (`iddetalle`) REFERENCES `tb_cargadetalle` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_registrodetalle
-- ----------------------------
DROP TABLE IF EXISTS `tb_registrodetalle`;
CREATE TABLE `tb_registrodetalle`  (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `idregistro` int(11) UNSIGNED ZEROFILL NOT NULL,
  `idalumno` int(6) UNSIGNED ZEROFILL NOT NULL,
  `horallega` time(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `keyalumn`(`idalumno`) USING BTREE,
  INDEX `keyregdetalle`(`idregistro`) USING BTREE,
  CONSTRAINT `keyalumn` FOREIGN KEY (`idalumno`) REFERENCES `tb_alumno` (`idcodigo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `keyregdetalle` FOREIGN KEY (`idregistro`) REFERENCES `tb_registroasistencia` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(85) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(175) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `permisos` varchar(800) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `direccion` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telefono` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;