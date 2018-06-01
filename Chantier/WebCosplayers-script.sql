-- MySQL Script generated by MySQL Workbench
-- 05/30/18 11:10:06
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- User Webcosplay_db
-- -----------------------------------------------------
DROP USER 'admin'@'localhost'
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'imadmin';
GRANT INSERT, SELECT, UPDATE ON * . * TO 'admin'@'localhost';
FLUSH PRIVILEGES;


-- -----------------------------------------------------
-- Schema webcosplay_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `webcosplay_db` DEFAULT CHARACTER SET utf8 ;
USE `webcosplay_db` ;

-- -----------------------------------------------------
-- Table `webcosplay_db`.`countries`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webcosplay_db`.`countries` ;

CREATE TABLE IF NOT EXISTS `webcosplay_db`.`countries` (
  `id_country` INT NOT NULL AUTO_INCREMENT,
  `country_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_country`))
ENGINE = InnoDB;

INSERT INTO `countries`(`country_name`) VALUES ('Suisse'), ('France'), ('Belgium'), ('USA'), ('Germany'), ('Poland'), ('Sweden'), ('Danemark'), ('Italy'), ('Spain'), ('Russia');



-- -----------------------------------------------------
-- Table `webcosplay_db`.`cosplayers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webcosplay_db`.`cosplayers` ;

CREATE TABLE IF NOT EXISTS `webcosplay_db`.`cosplayers` (
  `id_cosplayer` INT NOT NULL,
  `pseudo` VARCHAR(45) NOT NULL,
  `statut` VARCHAR(100) NULL,
  `sn1` VARCHAR(200) NULL,
  `sn2` VARCHAR(200) NULL,
  `sn3` VARCHAR(200) NULL,
  `c_description` VARCHAR(250) NULL,
  `cosplayer_image` VARCHAR(45) NULL,
  `fk_country` INT NOT NULL,
  PRIMARY KEY (`id_cosplayer`),
  INDEX `fk_cosplayer_countries1_idx` (`fk_country` ASC),
  CONSTRAINT `fk_cosplayer_countries1`
    FOREIGN KEY (`fk_country`)
    REFERENCES `webcosplay_db`.`countries` (`id_country`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- INSERT INTO `cosplayers`(`pseudo`, `statut`, `sn1`, `sn2`, `sn3`, `c_description`, `fk_country`) VALUES ('Torra', 'Rawr', 'https://www.facebook.com/TorraCosplay/', 'http://twitter.com/aliceolw', 'http://instagram.com/torracosplay', 'Tiny Tiger', 1);

-- -----------------------------------------------------
-- Table `webcosplay_db`.`wips`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webcosplay_db`.`wips` ;

CREATE TABLE IF NOT EXISTS `webcosplay_db`.`wips` (
  `id_wip` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `media` VARCHAR(45) NOT NULL,
  `wip_description` VARCHAR(200) NOT NULL,
  `fk_cosplayer` INT NOT NULL,
  PRIMARY KEY (`id_wip`),
  INDEX `fk_wips_cosplayer1_idx` (`fk_cosplayer` ASC),
  CONSTRAINT `fk_wips_cosplayer1`
    FOREIGN KEY (`fk_cosplayer`)
    REFERENCES `webcosplay_db`.`cosplayers` (`id_cosplayer`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webcosplay_db`.`categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webcosplay_db`.`categories` ;

CREATE TABLE IF NOT EXISTS `webcosplay_db`.`categories` (
  `id_category` INT NOT NULL AUTO_INCREMENT,
  `category_name` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id_category`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webcosplay_db`.`cosplays`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webcosplay_db`.`cosplays` ;

CREATE TABLE IF NOT EXISTS `webcosplay_db`.`cosplays` (
  `id_cosplay` INT NOT NULL AUTO_INCREMENT,
  `cosplay_name` VARCHAR(45) NOT NULL,
  `from` VARCHAR(45) NOT NULL,
  `rc18` INT NOT NULL,
  `cosplay_image` VARCHAR(45) NOT NULL,
  `fk_category` INT NOT NULL,
  `fk_cosplayer` INT NOT NULL,
  PRIMARY KEY (`id_cosplay`),
  INDEX `fk_cosplays_cosplayer_idx` (`fk_cosplayer` ASC),
  INDEX `fk_cosplays_categories1_idx` (`fk_category` ASC),
  CONSTRAINT `fk_cosplays_cosplayer`
    FOREIGN KEY (`fk_cosplayer`)
    REFERENCES `webcosplay_db`.`cosplayers` (`id_cosplayer`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cosplays_categories1`
    FOREIGN KEY (`fk_category`)
    REFERENCES `webcosplay_db`.`categories` (`id_category`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webcosplay_db`.`galleries`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webcosplay_db`.`galleries` ;

CREATE TABLE IF NOT EXISTS `webcosplay_db`.`galleries` (
  `id_gallery` INT NOT NULL AUTO_INCREMENT,
  `g_image` VARCHAR(45) NOT NULL,
  `fk_cosplay` INT NOT NULL,
  PRIMARY KEY (`id_gallery`),
  INDEX `fk_galleries_cosplays1_idx` (`fk_cosplay` ASC),
  CONSTRAINT `fk_galleries_cosplays1`
    FOREIGN KEY (`fk_cosplay`)
    REFERENCES `webcosplay_db`.`cosplays` (`id_cosplay`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webcosplay_db`.`events`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webcosplay_db`.`events` ;

CREATE TABLE IF NOT EXISTS `webcosplay_db`.`events` (
  `id_event` INT NOT NULL AUTO_INCREMENT,
  `event_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_event`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webcosplay_db`.`cosplayers_events`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webcosplay_db`.`cosplayers_events` ;

CREATE TABLE IF NOT EXISTS `webcosplay_db`.`cosplayers_events` (
  `id_cosplayer_event` INT NOT NULL AUTO_INCREMENT,
  `fk_event` INT NOT NULL,
  `fk_cosplayer` INT NOT NULL,
  PRIMARY KEY (`id_cosplayer_event`),
  INDEX `fk_events_has_cosplayer_cosplayer1_idx` (`fk_cosplayer` ASC),
  INDEX `fk_events_has_cosplayer_events1_idx` (`fk_event` ASC),
  CONSTRAINT `fk_events_has_cosplayer_events1`
    FOREIGN KEY (`fk_event`)
    REFERENCES `webcosplay_db`.`events` (`id_event`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_events_has_cosplayer_cosplayer1`
    FOREIGN KEY (`fk_cosplayer`)
    REFERENCES `webcosplay_db`.`cosplayers` (`id_cosplayer`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
