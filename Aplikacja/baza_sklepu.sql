-- MySQL Script generated by MySQL Workbench
-- 05/14/14 16:08:50
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Adresy`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Adresy` (
  `idAdresy` INT NOT NULL AUTO_INCREMENT,
  `Miejscowość` VARCHAR(45) NULL,
  `Ulica` VARCHAR(45) NULL,
  `Kod_pocztowy` INT NULL,
  `Nr_domu` INT NULL,
  `Nr_mieszkania` INT NULL,
  PRIMARY KEY (`idAdresy`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Klienci`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Klienci` (
  `idKlienci` INT NOT NULL AUTO_INCREMENT,
  `Imię` VARCHAR(45) NULL,
  `Nazwisko` VARCHAR(45) NULL,
  `Login` VARCHAR(45) NULL,
  `Hasło` VARCHAR(45) NULL,
  `Adresy_idAdresy` INT NOT NULL,
  PRIMARY KEY (`idKlienci`, `Adresy_idAdresy`),
  INDEX `fk_Klienci_Adresy1_idx` (`Adresy_idAdresy` ASC),
  CONSTRAINT `fk_Klienci_Adresy1`
    FOREIGN KEY (`Adresy_idAdresy`)
    REFERENCES `mydb`.`Adresy` (`idAdresy`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Raporty`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Raporty` (
  `idRaporty` INT NOT NULL AUTO_INCREMENT,
  `Data_pocz` DATE NULL,
  `Data_konc` DATE NULL,
  `Ilość_sprzedaży` INT NULL,
  PRIMARY KEY (`idRaporty`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Sprzedawcy`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Sprzedawcy` (
  `idSprzedawcy` INT NOT NULL AUTO_INCREMENT,
  `Login` VARCHAR(45) NULL,
  `Hasło` VARCHAR(45) NULL,
  `Raporty_idRaporty` INT NOT NULL,
  PRIMARY KEY (`idSprzedawcy`, `Raporty_idRaporty`),
  INDEX `fk_Sprzedawcy_Raporty1_idx` (`Raporty_idRaporty` ASC),
  CONSTRAINT `fk_Sprzedawcy_Raporty1`
    FOREIGN KEY (`Raporty_idRaporty`)
    REFERENCES `mydb`.`Raporty` (`idRaporty`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Produkty`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Produkty` (
  `idProdukty` INT NOT NULL AUTO_INCREMENT,
  `Nazwa` VARCHAR(45) NULL,
  `Producent` VARCHAR(45) NULL,
  `Cena` INT NULL,
  PRIMARY KEY (`idProdukty`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Opinie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Opinie` (
  `idOpinie` INT NOT NULL AUTO_INCREMENT,
  `Treść` VARCHAR(45) NULL,
  PRIMARY KEY (`idOpinie`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Reklamacja`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Reklamacja` (
  `idReklamacja` INT NOT NULL AUTO_INCREMENT,
  `Status` VARCHAR(45) NULL,
  PRIMARY KEY (`idReklamacja`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Zamówienia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Zamówienia` (
  `idZamówienia` INT NOT NULL AUTO_INCREMENT,
  `Adres` VARCHAR(45) NULL,
  `Produkty_idProdukty` INT NOT NULL,
  `Klienci_idKlienci` INT NOT NULL,
  `Opinie_idOpinie` INT NOT NULL,
  `Reklamacja_idReklamacja` INT NOT NULL,
  PRIMARY KEY (`idZamówienia`, `Produkty_idProdukty`, `Klienci_idKlienci`, `Opinie_idOpinie`, `Reklamacja_idReklamacja`),
  INDEX `fk_Zamówienia_Produkty_idx` (`Produkty_idProdukty` ASC),
  INDEX `fk_Zamówienia_Klienci1_idx` (`Klienci_idKlienci` ASC),
  INDEX `fk_Zamówienia_Opinie1_idx` (`Opinie_idOpinie` ASC),
  INDEX `fk_Zamówienia_Reklamacja1_idx` (`Reklamacja_idReklamacja` ASC),
  CONSTRAINT `fk_Zamówienia_Produkty`
    FOREIGN KEY (`Produkty_idProdukty`)
    REFERENCES `mydb`.`Produkty` (`idProdukty`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Zamówienia_Klienci1`
    FOREIGN KEY (`Klienci_idKlienci`)
    REFERENCES `mydb`.`Klienci` (`idKlienci`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Zamówienia_Opinie1`
    FOREIGN KEY (`Opinie_idOpinie`)
    REFERENCES `mydb`.`Opinie` (`idOpinie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Zamówienia_Reklamacja1`
    FOREIGN KEY (`Reklamacja_idReklamacja`)
    REFERENCES `mydb`.`Reklamacja` (`idReklamacja`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Faktury`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Faktury` (
  `idFaktury` INT NOT NULL AUTO_INCREMENT,
  `Data_wystawienia` DATE NULL,
  `Suma` INT NULL,
  `Sprzedawcy_idSprzedawcy` INT NOT NULL,
  `Zamówienia_idZamówienia` INT NOT NULL,
  `Zamówienia_Produkty_idProdukty` INT NOT NULL,
  `Zamówienia_Klienci_idKlienci` INT NOT NULL,
  `Zamówienia_Opinie_idOpinie` INT NOT NULL,
  `Zamówienia_Reklamacja_idReklamacja` INT NOT NULL,
  PRIMARY KEY (`idFaktury`, `Sprzedawcy_idSprzedawcy`, `Zamówienia_idZamówienia`, `Zamówienia_Produkty_idProdukty`, `Zamówienia_Klienci_idKlienci`, `Zamówienia_Opinie_idOpinie`, `Zamówienia_Reklamacja_idReklamacja`),
  INDEX `fk_Faktury_Sprzedawcy1_idx` (`Sprzedawcy_idSprzedawcy` ASC),
  INDEX `fk_Faktury_Zamówienia1_idx` (`Zamówienia_idZamówienia` ASC, `Zamówienia_Produkty_idProdukty` ASC, `Zamówienia_Klienci_idKlienci` ASC, `Zamówienia_Opinie_idOpinie` ASC, `Zamówienia_Reklamacja_idReklamacja` ASC),
  CONSTRAINT `fk_Faktury_Sprzedawcy1`
    FOREIGN KEY (`Sprzedawcy_idSprzedawcy`)
    REFERENCES `mydb`.`Sprzedawcy` (`idSprzedawcy`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Faktury_Zamówienia1`
    FOREIGN KEY (`Zamówienia_idZamówienia` , `Zamówienia_Produkty_idProdukty` , `Zamówienia_Klienci_idKlienci` , `Zamówienia_Opinie_idOpinie` , `Zamówienia_Reklamacja_idReklamacja`)
    REFERENCES `mydb`.`Zamówienia` (`idZamówienia` , `Produkty_idProdukty` , `Klienci_idKlienci` , `Opinie_idOpinie` , `Reklamacja_idReklamacja`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Magazyn`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Magazyn` (
  `idMagazyn` INT NOT NULL AUTO_INCREMENT,
  `Ilość` INT NULL,
  `Produkty_idProdukty` INT NOT NULL,
  PRIMARY KEY (`idMagazyn`, `Produkty_idProdukty`),
  INDEX `fk_Magazyn_Produkty1_idx` (`Produkty_idProdukty` ASC),
  CONSTRAINT `fk_Magazyn_Produkty1`
    FOREIGN KEY (`Produkty_idProdukty`)
    REFERENCES `mydb`.`Produkty` (`idProdukty`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;