-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema muflobase
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema muflobase
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `muflobase` DEFAULT CHARACTER SET latin1 ;
USE `muflobase` ;

-- -----------------------------------------------------
-- Table `muflobase`.`contactar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `muflobase`.`contactar` (
  `idcontactar` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL,
  `email` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL,
  `asunto` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL,
  `mensaje` VARCHAR(200) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL,
  PRIMARY KEY (`idcontactar`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


-- -----------------------------------------------------
-- Table `muflobase`.`cotizacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `muflobase`.`cotizacion` (
  `idcoti` INT(11) NOT NULL AUTO_INCREMENT,
  `fchcoti` DATETIME NOT NULL,
  `emprecoti` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL,
  `contactocoti` VARCHAR(80) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL,
  `telcoti` INT(11) NULL DEFAULT NULL,
  `celcoti` INT(11) NULL DEFAULT NULL,
  `correocoti` VARCHAR(60) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL,
  `producto` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL,
  `canticoti` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL,
  `especificacionescoti` VARCHAR(250) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL,
  PRIMARY KEY (`idcoti`))
ENGINE = InnoDB
AUTO_INCREMENT = 31
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


-- -----------------------------------------------------
-- Table `muflobase`.`productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `muflobase`.`productos` (
  `idproduc` INT(11) NOT NULL AUTO_INCREMENT,
  `nom_produc` VARCHAR(30) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL,
  `categoria_produc` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL,
  `tipo_produc` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL,
  `estado_produc` BIT(1) NULL DEFAULT NULL,
  `imagen_produc` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL,
  `detalle_produc` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL,
  PRIMARY KEY (`idproduc`))
ENGINE = InnoDB
AUTO_INCREMENT = 20
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


-- -----------------------------------------------------
-- Table `muflobase`.`registro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `muflobase`.`registro` (
  `id_registro` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(60) NULL DEFAULT NULL,
  `correo` VARCHAR(45) NULL DEFAULT NULL,
  `contrasenia` VARCHAR(250) NULL DEFAULT NULL,
  `usuariofching` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id_registro`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
