

-- -----------------------------------------------------
-- Table `Client`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Client` ;

CREATE TABLE IF NOT EXISTS `Client` (
  `id` INT NOT NULL,
  `firstName` VARCHAR(45) NULL,
  `lastName` VARCHAR(45) NULL,
  `address` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `phone` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
;


-- -----------------------------------------------------
-- Table `Service`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Service` ;

CREATE TABLE IF NOT EXISTS `Service` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `catalogRef` INT NULL,
  `EANCode` INT NULL,
  `constructorRef` VARCHAR(45) NULL,
  `supplierName` VARCHAR(45) NULL,
  `quantity` INT NULL,
  `totalCostPriceExcludingVAT` DECIMAL(25) NULL,
  `coef` DECIMAL(25) NULL,
  `totalSellingPriceExcludingVAT` DECIMAL(25) NULL,
  PRIMARY KEY (`id`))
;


-- -----------------------------------------------------
-- Table `Interlocuteur`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Interlocuteur` ;

CREATE TABLE IF NOT EXISTS `Interlocuteur` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `civility` VARCHAR(45) NULL,
  `lastName` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `phone` VARCHAR(45) NULL,
  `firstName` VARCHAR(45) NULL,
  `cellPhone` VARCHAR(45) NULL,
  `type` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
;


-- -----------------------------------------------------
-- Table `ITC`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ITC` ;

CREATE TABLE IF NOT EXISTS `ITC` (
  `id` INT NOT NULL,
  `lastName` VARCHAR(45) NULL,
  `firstName` VARCHAR(45) NULL,
  `quoteNumber` VARCHAR(45) NULL,
  `Interlocuteur_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_ITC_Interlocuteur1_idx` (`Interlocuteur_id` ASC) VISIBLE,
  CONSTRAINT `fk_ITC_Interlocuteur1`
    FOREIGN KEY (`Interlocuteur_id`)
    REFERENCES `Interlocuteur` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table `Quote`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Quote` ;

CREATE TABLE IF NOT EXISTS `Quote` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `date` VARCHAR(45) NULL,
  `type` VARCHAR(45) NULL,
  `num_devis` INT NULL,
  `num_affaire` VARCHAR(45) NULL,
  `status` VARCHAR(45) NULL,
  `offre` VARCHAR(45) NULL,
  `Client_id` INT NOT NULL,
  `Interlocuteur_id` INT NOT NULL,
  `ITC_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Quote_Client_idx` (`Client_id` ASC) VISIBLE,
  INDEX `fk_Quote_Interlocuteur1_idx` (`Interlocuteur_id` ASC) VISIBLE,
  INDEX `fk_Quote_ITC1_idx` (`ITC_id` ASC) VISIBLE,
  CONSTRAINT `fk_Quote_Client`
    FOREIGN KEY (`Client_id`)
    REFERENCES `Client` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Quote_Interlocuteur1`
    FOREIGN KEY (`Interlocuteur_id`)
    REFERENCES `Interlocuteur` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Quote_ITC1`
    FOREIGN KEY (`ITC_id`)
    REFERENCES `ITC` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table `Interlocuteur_has_Client`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Interlocuteur_has_Client` ;

CREATE TABLE IF NOT EXISTS `Interlocuteur_has_Client` (
  `Interlocuteur_id` INT NOT NULL,
  `Client_id` INT NOT NULL,
  PRIMARY KEY (`Interlocuteur_id`, `Client_id`),
  INDEX `fk_Interlocuteur_has_Client_Client1_idx` (`Client_id` ASC) VISIBLE,
  INDEX `fk_Interlocuteur_has_Client_Interlocuteur1_idx` (`Interlocuteur_id` ASC) VISIBLE,
  CONSTRAINT `fk_Interlocuteur_has_Client_Interlocuteur1`
    FOREIGN KEY (`Interlocuteur_id`)
    REFERENCES `Interlocuteur` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Interlocuteur_has_Client_Client1`
    FOREIGN KEY (`Client_id`)
    REFERENCES `Client` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table `Quote_has_Service`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Quote_has_Service` ;

CREATE TABLE IF NOT EXISTS `Quote_has_Service` (
  `Quote_id` INT NOT NULL,
  `Service_id` INT NOT NULL,
  PRIMARY KEY (`Quote_id`, `Service_id`),
  INDEX `fk_Quote_has_Service_Service1_idx` (`Service_id` ASC) VISIBLE,
  INDEX `fk_Quote_has_Service_Quote1_idx` (`Quote_id` ASC) VISIBLE,
  CONSTRAINT `fk_Quote_has_Service_Quote1`
    FOREIGN KEY (`Quote_id`)
    REFERENCES `Quote` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Quote_has_Service_Service1`
    FOREIGN KEY (`Service_id`)
    REFERENCES `Service` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;
