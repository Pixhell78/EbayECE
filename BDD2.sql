-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema ebayece
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ebayece
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ebayece` DEFAULT CHARACTER SET utf8 ;
USE `ebayece` ;

-- -----------------------------------------------------
-- Table `ebayece`.`acheteur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ebayece`.`acheteur` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `NOM` VARCHAR(255) NOT NULL,
  `PRENOM` VARCHAR(255) NOT NULL,
  `MAIL` VARCHAR(255) NOT NULL,
  `PSEUDO` TEXT NOT NULL,
  `ADRESSE` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `MAIL` (`MAIL` ASC) VISIBLE)
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ebayece`.`banque`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ebayece`.`banque` (
  `CARTE` VARCHAR(255) NOT NULL,
  `NUMERO` VARCHAR(255) NOT NULL,
  `DATE` VARCHAR(255) NOT NULL,
  `CODE` INT(11) NOT NULL,
  PRIMARY KEY (`NUMERO`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ebayece`.`vendeur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ebayece`.`vendeur` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `NOM` VARCHAR(255) NOT NULL,
  `PRENOM` VARCHAR(255) NOT NULL,
  `MAIL` VARCHAR(255) NOT NULL,
  `PSEUDO` TEXT NOT NULL,
  `ADRESSE` VARCHAR(255) NOT NULL,
  `ADMIN` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `MAIL` (`MAIL` ASC) VISIBLE)
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ebayece`.`objet`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ebayece`.`objet` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `NOM` VARCHAR(255) NOT NULL,
  `VENDEUR` INT(11) NOT NULL,
  `CATEGORIE` INT(11) UNSIGNED NOT NULL,
  `DESCRIPTION` TEXT NOT NULL,
  `PRIX` FLOAT UNSIGNED NOT NULL,
  `PHOTO` TEXT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `vendeur_id` (`VENDEUR` ASC) VISIBLE,
  CONSTRAINT `vendeur_id`
    FOREIGN KEY (`VENDEUR`)
    REFERENCES `ebayece`.`vendeur` (`ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 15
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ebayece`.`Adresse`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ebayece`.`Adresse` (
  `num` INT NOT NULL,
  `rue` VARCHAR(255) NOT NULL,
  `ville` VARCHAR(255) NOT NULL,
  `codepostal` INT(5) NOT NULL,
  `acheteur_ID` INT(11) NOT NULL,
  INDEX `fk_Adresse_acheteur1_idx` (`acheteur_ID` ASC) VISIBLE,
  PRIMARY KEY (`acheteur_ID`),
  UNIQUE INDEX `acheteur_ID_UNIQUE` (`acheteur_ID` ASC) VISIBLE,
  CONSTRAINT `fk_Adresse_acheteur1`
    FOREIGN KEY (`acheteur_ID`)
    REFERENCES `ebayece`.`acheteur` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
