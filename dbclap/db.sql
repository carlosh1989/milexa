SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `claps` DEFAULT CHARACTER SET utf8 ;
USE `claps` ;

-- -----------------------------------------------------
-- Table `claps`.`personas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `claps`.`personas` (
  `Cedula` INT(11) NOT NULL,
  `Nombre` VARCHAR(45) NULL DEFAULT NULL,
  `Apellido` VARCHAR(45) NULL DEFAULT NULL,
  `Telefono` VARCHAR(45) NULL DEFAULT NULL,
  `Correo` VARCHAR(45) NULL DEFAULT NULL,
  `TlfFijo` VARCHAR(45) NULL DEFAULT NULL,
  `Direccion` TEXT NULL DEFAULT NULL,
  `Foto` TEXT NULL DEFAULT NULL,
  `Password` VARCHAR(45) NULL DEFAULT NULL,
  `Admin` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`Cedula`),
  UNIQUE INDEX `Cedula_UNIQUE` (`Cedula` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `claps`.`despachadores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `claps`.`despachadores` (
  `Cedula` INT(11) NOT NULL,
  `Status` INT(11) NOT NULL,
  PRIMARY KEY (`Cedula`),
  INDEX `fk_despachadores_personas1_idx` (`Cedula` ASC),
  CONSTRAINT `fk_despachadores_personas1`
    FOREIGN KEY (`Cedula`)
    REFERENCES `claps`.`personas` (`Cedula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `claps`.`jornadas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `claps`.`jornadas` (
  `IdJornada` INT(11) NOT NULL AUTO_INCREMENT,
  `Fecha` DATE NULL DEFAULT NULL,
  `Status` INT(11) NULL DEFAULT NULL,
  `FechaCierre` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`IdJornada`))
ENGINE = InnoDB
AUTO_INCREMENT = 24
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `claps`.`despacho`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `claps`.`despacho` (
  `IdDespacho` INT(11) NOT NULL AUTO_INCREMENT,
  `IdJornada` INT(11) NOT NULL,
  `desp_Cedula` INT(11) NOT NULL,
  `per_Cedula` INT(11) NOT NULL,
  `Status` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`IdDespacho`),
  INDEX `fk_despacho_jornadas_idx` (`IdJornada` ASC),
  INDEX `fk_despacho_despachadores1_idx` (`desp_Cedula` ASC),
  INDEX `fk_despacho_personas1_idx` (`per_Cedula` ASC),
  CONSTRAINT `fk_despacho_despachadores1`
    FOREIGN KEY (`desp_Cedula`)
    REFERENCES `claps`.`despachadores` (`Cedula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_despacho_jornadas`
    FOREIGN KEY (`IdJornada`)
    REFERENCES `claps`.`jornadas` (`IdJornada`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_despacho_personas1`
    FOREIGN KEY (`per_Cedula`)
    REFERENCES `claps`.`personas` (`Cedula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
