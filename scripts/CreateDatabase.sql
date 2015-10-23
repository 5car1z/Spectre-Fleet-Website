-- MySQL Script generated by MySQL Workbench
-- 10/21/15 13:48:39
-- Model: Spectre Fleet    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema spectrefleet
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema spectrefleet
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `spectrefleet` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `spectrefleet` ;

-- -----------------------------------------------------
-- Table `spectrefleet`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spectrefleet`.`Users` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Username` VARCHAR(255) NOT NULL COMMENT '',
  `DisplayName` VARCHAR(255) NOT NULL COMMENT '',
  `Password` VARCHAR(45) NOT NULL COMMENT '',
  `EmailAddress` VARCHAR(255) NULL COMMENT '',
  `TSUID` VARCHAR(255) NOT NULL COMMENT '',
  `GroupMembership` TEXT NOT NULL COMMENT '',
  `StatusID` INT NOT NULL COMMENT '',
  `Notes` TEXT NULL COMMENT '',
  PRIMARY KEY (`ID`, `Username`)  COMMENT '',
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC)  COMMENT '',
  UNIQUE INDEX `Username_UNIQUE` (`Username` ASC)  COMMENT '',
  UNIQUE INDEX `EmailAddress_UNIQUE` (`EmailAddress` ASC)  COMMENT '',
  INDEX `FKstatus_idx` (`StatusID` ASC)  COMMENT '',
  CONSTRAINT `FKstatus`
    FOREIGN KEY (`StatusID`)
    REFERENCES `spectrefleet`.`Statuses` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB


-- -----------------------------------------------------
-- Table `spectrefleet`.`UserGroups`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spectrefleet`.`UserGroups` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Name` VARCHAR(100) NOT NULL COMMENT '',
  `Description` VARCHAR(255) NOT NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '',
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `spectrefleet`.`EventTypes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spectrefleet`.`EventTypes` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Name` VARCHAR(100) NOT NULL COMMENT '',
  `Description` VARCHAR(255) NOT NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '',
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC)  COMMENT '',
  UNIQUE INDEX `Name_UNIQUE` (`Name` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `spectrefleet`.`Events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spectrefleet`.`Events` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `EventTypeID` INT NOT NULL COMMENT '',
  `DateCreated` DATETIME NOT NULL COMMENT '',
  `CreatedByUserID` INT NOT NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '',
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC)  COMMENT '',
  INDEX `fk-eventtype_idx` (`EventTypeID` ASC)  COMMENT '',
  INDEX `fk-userid_idx` (`CreatedByUserID` ASC)  COMMENT '',
  CONSTRAINT `fk-eventtype`
    FOREIGN KEY (`EventTypeID`)
    REFERENCES `spectrefleet`.`EventTypes` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk-userid`
    FOREIGN KEY (`CreatedByUserID`)
    REFERENCES `spectrefleet`.`Users` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `spectrefleet`.`CalendarEventTypes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spectrefleet`.`CalendarEventTypes` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Name` VARCHAR(100) NOT NULL COMMENT '',
  `Description` VARCHAR(255) NOT NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '',
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC)  COMMENT '',
  UNIQUE INDEX `Name_UNIQUE` (`Name` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `spectrefleet`.`CalendarEvent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spectrefleet`.`CalendarEvent` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Name` VARCHAR(100) NOT NULL COMMENT '',
  `Description` VARCHAR(255) NOT NULL COMMENT '',
  `CalendarEventType` INT NOT NULL COMMENT '',
  `EventTime` DATETIME NOT NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '',
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC)  COMMENT '',
  INDEX `fk-eventtype_idx` (`CalendarEventType` ASC)  COMMENT '',
  CONSTRAINT `fk-eventtype`
    FOREIGN KEY (`CalendarEventType`)
    REFERENCES `spectrefleet`.`CalendarEventTypes` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `spectrefleet`.`FleetComposition`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spectrefleet`.`FleetComposition` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Name` VARCHAR(45) NOT NULL COMMENT '',
  `Description` TEXT NOT NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '',
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC)  COMMENT '',
  UNIQUE INDEX `Name_UNIQUE` (`Name` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `spectrefleet`.`Fleets`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spectrefleet`.`Fleets` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `GUID` VARCHAR(36) NOT NULL COMMENT '',
  `FCID` INT NOT NULL COMMENT '',
  `Date` INT NOT NULL COMMENT '',
  `AverageFeedback` DECIMAL(2,2) NULL COMMENT '',
  `FleetSize` INT NULL COMMENT '',
  `FleetCompID` INT NOT NULL COMMENT '',
  `Note` TEXT NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '',
  UNIQUE INDEX `GUID_UNIQUE` (`GUID` ASC)  COMMENT '',
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC)  COMMENT '',
  INDEX `fKeyFCID_idx` (`FCID` ASC)  COMMENT '',
  INDEX `fKeyCompID_idx` (`FleetCompID` ASC)  COMMENT '',
  CONSTRAINT `fKeyFCID`
    FOREIGN KEY (`FCID`)
    REFERENCES `spectrefleet`.`Users` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fKeyCompID`
    FOREIGN KEY (`FleetCompID`)
    REFERENCES `spectrefleet`.`FleetComposition` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `spectrefleet`.`FleetFeedback`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spectrefleet`.`FleetFeedback` (
  `ID` INT NOT NULL COMMENT '',
  `FleetID` INT NOT NULL COMMENT '',
  `UserID` INT NULL COMMENT '',
  `Name` VARCHAR(100) NULL COMMENT '',
  `Score` INT NOT NULL COMMENT '',
  `Feedback` TEXT NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '',
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC)  COMMENT '',
  INDEX `fKeyFleetID_idx` (`FleetID` ASC)  COMMENT '',
  INDEX `fKetUserID_idx` (`UserID` ASC)  COMMENT '',
  CONSTRAINT `fKeyUserID`
    FOREIGN KEY (`UserID`)
    REFERENCES `spectrefleet`.`Users` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fKeyFleetID`
    FOREIGN KEY (`FleetID`)
    REFERENCES `spectrefleet`.`Fleets` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `spectrefleet`.`FleetAfterActionReports`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spectrefleet`.`FleetAfterActionReports` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `FormUpLocation` INT NOT NULL COMMENT '',
  `DestinationLocation` INT NULL COMMENT '',
  `FleetType` INT NOT NULL COMMENT '',
  `FCScore` INT NOT NULL COMMENT '',
  `FleetScore` INT NOT NULL COMMENT '',
  `Description` TEXT NULL COMMENT '',
  `DoneWell` TEXT NULL COMMENT '',
  `NeedsImprovment` TEXT NULL COMMENT '',
  `FleetID` INT NOT NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '',
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC)  COMMENT '',
  INDEX `FKeyFleetID_idx` (`FleetID` ASC)  COMMENT '',
  CONSTRAINT `FKeyFleetID`
    FOREIGN KEY (`FleetID`)
    REFERENCES `spectrefleet`.`Fleets` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
