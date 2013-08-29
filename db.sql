SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `sstig_contact_us_arjintas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `sstig_contact_us_arjintas` ;

-- -----------------------------------------------------
-- Table `sstig_contact_us_arjintas`.`rd_application_information`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sstig_contact_us_arjintas`.`rd_application_information` ;

CREATE  TABLE IF NOT EXISTS `sstig_contact_us_arjintas`.`rd_application_information` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `num_of_applicant` TINYINT(2) NULL ,
  `selection` VARCHAR(150) NULL ,
  `sub_selection` VARCHAR(150) NULL ,
  `address` VARCHAR(150) NULL ,
  `city` VARCHAR(50) NULL ,
  `state` VARCHAR(45) NULL ,
  `zipcode` VARCHAR(45) NULL ,
  `anticipated_date` VARCHAR(11) NULL ,
  `refered_lead` VARCHAR(30) NULL ,
  `venue` VARCHAR(50) NULL ,
  `agent_name` VARCHAR(150) NULL ,
  `agent_phone` VARCHAR(25) NULL ,
  `tenant_name` VARCHAR(150) NULL ,
  `is_existing_tenant` TINYINT(1) NULL ,
  `other_val` TEXT NULL ,
  `created_date` TIMESTAMP NULL DEFAULT now() ,
  `prime_applic_cellphone` VARCHAR(25) NULL ,
  `prime_applic_homephone` VARCHAR(25) NULL ,
  `prime_applic_email` VARCHAR(150) NULL ,
  `prime_appic_signature` TEXT NULL ,
  `save_deposit` VARCHAR(45) NULL ,
  `unit` VARCHAR(45) NULL ,
  `monthly_rent` VARCHAR(45) NULL ,
  `payment_type` VARCHAR(10) NULL ,
  `code` VARCHAR(150) NULL ,
  `pass` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sstig_contact_us_arjintas`.`rd_applicant_info`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sstig_contact_us_arjintas`.`rd_applicant_info` ;

CREATE  TABLE IF NOT EXISTS `sstig_contact_us_arjintas`.`rd_applicant_info` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `firstname` VARCHAR(50) NULL ,
  `middlename` VARCHAR(50) NULL ,
  `lastname` VARCHAR(50) NULL ,
  `birthday` VARCHAR(20) NULL ,
  `ssn` VARCHAR(45) NULL ,
  `idtype` VARCHAR(45) NULL ,
  `idnum` VARCHAR(45) NULL ,
  `has_pet` VARCHAR(10) NULL ,
  `pet_num` VARCHAR(20) NULL ,
  `rd_application_information_id` INT NOT NULL ,
  `years_live_planned` VARCHAR(45) NULL ,
  `cellphone` VARCHAR(25) NULL ,
  `homephone` VARCHAR(25) NULL ,
  `email` VARCHAR(50) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_rd_applicant_info_rd_application_information_idx` (`rd_application_information_id` ASC) ,
  CONSTRAINT `fk_rd_applicant_info_rd_application_information`
    FOREIGN KEY (`rd_application_information_id` )
    REFERENCES `sstig_contact_us_arjintas`.`rd_application_information` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sstig_contact_us_arjintas`.`rd_residental_history`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sstig_contact_us_arjintas`.`rd_residental_history` ;

CREATE  TABLE IF NOT EXISTS `sstig_contact_us_arjintas`.`rd_residental_history` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `address` VARCHAR(150) NULL ,
  `city` VARCHAR(45) NULL ,
  `state` VARCHAR(45) NULL ,
  `zip` VARCHAR(10) NULL ,
  `year_month_moved_in` VARCHAR(150) NULL ,
  `agent_landlord_type` VARCHAR(45) NULL ,
  `agent_landlord_name` VARCHAR(150) NULL ,
  `agent_landlord_phone` VARCHAR(25) NULL ,
  `unit` VARCHAR(45) NULL ,
  `rent` VARCHAR(50) NULL ,
  `leave_reason` TEXT NULL ,
  `rd_applicant_info_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_rd_residental_history_rd_applicant_info1_idx` (`rd_applicant_info_id` ASC) ,
  CONSTRAINT `fk_rd_residental_history_rd_applicant_info1`
    FOREIGN KEY (`rd_applicant_info_id` )
    REFERENCES `sstig_contact_us_arjintas`.`rd_applicant_info` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sstig_contact_us_arjintas`.`rd_employment_info`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sstig_contact_us_arjintas`.`rd_employment_info` ;

CREATE  TABLE IF NOT EXISTS `sstig_contact_us_arjintas`.`rd_employment_info` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `employment_type` VARCHAR(30) NULL ,
  `employer` VARCHAR(50) NULL ,
  `employer_address` VARCHAR(50) NULL ,
  `position` VARCHAR(45) NULL ,
  `department` VARCHAR(45) NULL ,
  `phone` VARCHAR(45) NULL ,
  `employment_length` VARCHAR(25) NULL ,
  `salary` VARCHAR(45) NULL ,
  `supervisor_name` VARCHAR(45) NULL ,
  `bussines_name` VARCHAR(45) NULL ,
  `bussiness_type` VARCHAR(45) NULL ,
  `years_in_bussiness` VARCHAR(45) NULL ,
  `stay_length` VARCHAR(45) NULL ,
  `landlord_name` VARCHAR(45) NULL ,
  `landlord_phone` VARCHAR(45) NULL ,
  `rd_applicant_info_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_rd_employment_info_rd_applicant_info1_idx` (`rd_applicant_info_id` ASC) ,
  CONSTRAINT `fk_rd_employment_info_rd_applicant_info1`
    FOREIGN KEY (`rd_applicant_info_id` )
    REFERENCES `sstig_contact_us_arjintas`.`rd_applicant_info` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sstig_contact_us_arjintas`.`rd_credit_info`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sstig_contact_us_arjintas`.`rd_credit_info` ;

CREATE  TABLE IF NOT EXISTS `sstig_contact_us_arjintas`.`rd_credit_info` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `bank_name` VARCHAR(100) NULL ,
  `branch` VARCHAR(100) NULL ,
  `phone_no` VARCHAR(45) NULL ,
  `account_type` VARCHAR(35) NULL ,
  `approx_balance` VARCHAR(45) NULL ,
  `rd_applicant_info_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_rd_credit_info_rd_applicant_info1_idx` (`rd_applicant_info_id` ASC) ,
  CONSTRAINT `fk_rd_credit_info_rd_applicant_info1`
    FOREIGN KEY (`rd_applicant_info_id` )
    REFERENCES `sstig_contact_us_arjintas`.`rd_applicant_info` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sstig_contact_us_arjintas`.`rd_monthly_income`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sstig_contact_us_arjintas`.`rd_monthly_income` ;

CREATE  TABLE IF NOT EXISTS `sstig_contact_us_arjintas`.`rd_monthly_income` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `salary_or_wage` VARCHAR(45) NULL ,
  `devidends` VARCHAR(45) NULL ,
  `rental` VARCHAR(45) NULL ,
  `bussiness_income` VARCHAR(45) NULL ,
  `other` VARCHAR(45) NULL ,
  `rd_applicant_info_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_rd_monthly_income_rd_applicant_info1_idx` (`rd_applicant_info_id` ASC) ,
  CONSTRAINT `fk_rd_monthly_income_rd_applicant_info1`
    FOREIGN KEY (`rd_applicant_info_id` )
    REFERENCES `sstig_contact_us_arjintas`.`rd_applicant_info` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sstig_contact_us_arjintas`.`rd_expenditures`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sstig_contact_us_arjintas`.`rd_expenditures` ;

CREATE  TABLE IF NOT EXISTS `sstig_contact_us_arjintas`.`rd_expenditures` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `prop_tax_asses` VARCHAR(45) NULL ,
  `fed_state_income_tax` VARCHAR(45) NULL ,
  `realestate_loan_payment` VARCHAR(45) NULL ,
  `payment_contract` VARCHAR(45) NULL ,
  `living_expenses` VARCHAR(45) NULL ,
  `other` VARCHAR(45) NULL ,
  `rd_applicant_info_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_rd_expenditures_rd_applicant_info1_idx` (`rd_applicant_info_id` ASC) ,
  CONSTRAINT `fk_rd_expenditures_rd_applicant_info1`
    FOREIGN KEY (`rd_applicant_info_id` )
    REFERENCES `sstig_contact_us_arjintas`.`rd_applicant_info` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sstig_contact_us_arjintas`.`rd_stock_bonds`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sstig_contact_us_arjintas`.`rd_stock_bonds` ;

CREATE  TABLE IF NOT EXISTS `sstig_contact_us_arjintas`.`rd_stock_bonds` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `stock_bonds` VARCHAR(45) NULL ,
  `where_quote` VARCHAR(45) NULL ,
  `market_cost` VARCHAR(45) NULL ,
  `title_name` VARCHAR(45) NULL ,
  `quantity` VARCHAR(45) NULL ,
  `value` VARCHAR(45) NULL ,
  `rd_applicant_info_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_rd_stock_bonds_rd_applicant_info1_idx` (`rd_applicant_info_id` ASC) ,
  CONSTRAINT `fk_rd_stock_bonds_rd_applicant_info1`
    FOREIGN KEY (`rd_applicant_info_id` )
    REFERENCES `sstig_contact_us_arjintas`.`rd_applicant_info` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sstig_contact_us_arjintas`.`rd_general_info`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sstig_contact_us_arjintas`.`rd_general_info` ;

CREATE  TABLE IF NOT EXISTS `sstig_contact_us_arjintas`.`rd_general_info` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `bankrupt` TINYINT(1) NOT NULL DEFAULT 0 ,
  `bankrupted_at` VARCHAR(45) NULL ,
  `is_questioned` TINYINT(1) NOT NULL DEFAULT 0 ,
  `questioned_at` VARCHAR(45) NULL ,
  `is_evicted` TINYINT(1) NULL ,
  `explanation` TEXT NULL ,
  `rd_applicant_info_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_rd_general_info_rd_applicant_info1_idx` (`rd_applicant_info_id` ASC) ,
  CONSTRAINT `fk_rd_general_info_rd_applicant_info1`
    FOREIGN KEY (`rd_applicant_info_id` )
    REFERENCES `sstig_contact_us_arjintas`.`rd_applicant_info` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sstig_contact_us_arjintas`.`rd_dependant_info`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sstig_contact_us_arjintas`.`rd_dependant_info` ;

CREATE  TABLE IF NOT EXISTS `sstig_contact_us_arjintas`.`rd_dependant_info` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(100) NULL ,
  `relation` VARCHAR(45) NULL ,
  `age` INT NULL ,
  `stay_in` TINYINT(1) NOT NULL DEFAULT 0 ,
  `rd_applicant_info_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_rd_dependant_info_rd_applicant_info1_idx` (`rd_applicant_info_id` ASC) ,
  CONSTRAINT `fk_rd_dependant_info_rd_applicant_info1`
    FOREIGN KEY (`rd_applicant_info_id` )
    REFERENCES `sstig_contact_us_arjintas`.`rd_applicant_info` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sstig_contact_us_arjintas`.`rd_vehicle_info`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sstig_contact_us_arjintas`.`rd_vehicle_info` ;

CREATE  TABLE IF NOT EXISTS `sstig_contact_us_arjintas`.`rd_vehicle_info` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `license_plate` VARCHAR(45) NULL ,
  `maker_model` VARCHAR(45) NULL ,
  `year` VARCHAR(25) NULL ,
  `color` VARCHAR(45) NULL ,
  `rd_applicant_info_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_rd_vehicle_info_rd_applicant_info1_idx` (`rd_applicant_info_id` ASC) ,
  CONSTRAINT `fk_rd_vehicle_info_rd_applicant_info1`
    FOREIGN KEY (`rd_applicant_info_id` )
    REFERENCES `sstig_contact_us_arjintas`.`rd_applicant_info` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sstig_contact_us_arjintas`.`rd_personal_refrence`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sstig_contact_us_arjintas`.`rd_personal_refrence` ;

CREATE  TABLE IF NOT EXISTS `sstig_contact_us_arjintas`.`rd_personal_refrence` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(100) NULL ,
  `relation` VARCHAR(50) NULL ,
  `phone` VARCHAR(25) NULL ,
  `rd_applicant_info_id` INT NOT NULL ,
  `address` VARCHAR(100) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_rd_personal_refrence_rd_applicant_info1_idx` (`rd_applicant_info_id` ASC) ,
  CONSTRAINT `fk_rd_personal_refrence_rd_applicant_info1`
    FOREIGN KEY (`rd_applicant_info_id` )
    REFERENCES `sstig_contact_us_arjintas`.`rd_applicant_info` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sstig_contact_us_arjintas`.`rd_credit_ref`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sstig_contact_us_arjintas`.`rd_credit_ref` ;

CREATE  TABLE IF NOT EXISTS `sstig_contact_us_arjintas`.`rd_credit_ref` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `credit_ref` VARCHAR(100) NULL ,
  `address` VARCHAR(100) NULL ,
  `phone` VARCHAR(100) NULL ,
  `account` VARCHAR(100) NULL ,
  `amount` VARCHAR(100) NULL ,
  `rd_applicant_info_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_rd_credit_ref_rd_applicant_info1_idx` (`rd_applicant_info_id` ASC) ,
  CONSTRAINT `fk_rd_credit_ref_rd_applicant_info1`
    FOREIGN KEY (`rd_applicant_info_id` )
    REFERENCES `sstig_contact_us_arjintas`.`rd_applicant_info` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

USE `sstig_contact_us_arjintas` ;
USE `sstig_contact_us_arjintas`;

DELIMITER $$

DELIMITER ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
