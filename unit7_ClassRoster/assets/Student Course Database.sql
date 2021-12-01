DROP SCHEMA IF EXISTS `StudentCourse` ;
CREATE SCHEMA IF NOT EXISTS `StudentCourse` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `StudentCourse` ;

-- -----------------------------------------------------
-- Table `StudentCourse`.`Student`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `StudentCourse`.`Student` (
  `Student_OID` INT UNSIGNED NOT NULL ,
  `First_Name` VARCHAR(20) NULL ,
  `Last_Name` VARCHAR(45) NULL ,
  `Email` VARCHAR(45) NULL ,
  Grade_Level CHAR(2) NULL,
  
  PRIMARY KEY (`Student_OID`) ,
  UNIQUE INDEX `Student_OID_UNIQUE` (`Student_OID` ASC) )
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `StudentCourse`.`Teacher`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `StudentCourse`.`Teacher` (
  `Teacher_OID` INT UNSIGNED NOT NULL  ,
  `First_Name` VARCHAR(20) NULL ,
  `Last_Name` VARCHAR(45) NULL ,
  PRIMARY KEY (`Teacher_OID`) ,
  UNIQUE INDEX `Teacher_OID_UNIQUE` (`Teacher_OID` ASC) )
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `StudentCourse`.`Course`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `StudentCourse`.`Course` (
  `Course_OID` INT UNSIGNED NOT NULL ,
  `Course_Name` VARCHAR(45) NULL ,
  `Teacher_FK` INT UNSIGNED NULL ,
  PRIMARY KEY (`Course_OID`) ,
  UNIQUE INDEX `Course_OID_UNIQUE` (`Course_OID` ASC) ,
  INDEX `Course_Teacher` (`Teacher_FK` ASC) ,
  CONSTRAINT `Course_Teacher`
    FOREIGN KEY (`Teacher_FK` )
    REFERENCES `StudentCourse`.`Teacher` (`Teacher_OID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `StudentCourse`.`Grade`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `StudentCourse`.`Grade` (
  `Student_FK` INT UNSIGNED NOT NULL ,
  `Course_FK` INT UNSIGNED NOT NULL ,
  `Grade` CHAR(2) NULL ,
  PRIMARY KEY (`Student_FK`, `Course_FK`) ,
  INDEX `Student_Grade_FK` (`Student_FK` ASC) ,
  INDEX `Course_Grade_FK` (`Course_FK` ASC) ,
  CONSTRAINT `Student_Grade_FK`
    FOREIGN KEY (`Student_FK` )
    REFERENCES `StudentCourse`.`Student` (`Student_OID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Course_Grade_FK`
    FOREIGN KEY (`Course_FK` )
    REFERENCES `StudentCourse`.`Course` (`Course_OID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Insert Data
-- -----------------------------------------------------
/* Insert Students For Web Class */
INSERT INTO Student Values (004578, "John", "Doe", "jdoe@gmail.com", "FR");
INSERT INTO Student Values (001234, "Jane", "Dumfries", "jdumfries@aol.com", "SR");
INSERT INTO Student Values (008754, "Adam", "Flower", "aflower@fields.org", "SO");
INSERT INTO Student Values (001953, "Sarah", "Smith", "ssmith@aol.com", "JR");
INSERT INTO Student Values (100, "Sammy", "Jones", "sjones@comcast.net", "GR");
INSERT INTO Student Values (150, "Jim", "Parks", "jparks@gmail.com", "SO");
INSERT INTO Student Values (200, "Jason", "Baker", "jbaker@aol.com", "GR");
INSERT INTO Student Values (250, "Frosty", "Glass", "fglass@comcast.net", "SR");
INSERT INTO Student Values (300, "Vanessa", "Baker", "vbaker@comcast.net", "SR");
INSERT INTO Student Values (350, "Ryan", "Russell", "rrussel@gmail.com", "JR");
INSERT INTO Student Values (400, "Toby", "Rye", "trye@gmail.com", "FR");
INSERT INTO Student Values (450, "Melody", "Jones", "mjones@gmail.com", "SR");
#    */

/* Insert Teachers for Web Class */
INSERT INTO Teacher VALUES (15, "Don", "Johnson");
INSERT INTO Teacher VALUES (18, "Michelle", "Pieffer");
INSERT INTO Teacher VALUES (22, "Janet", "Stint");
INSERT INTO Teacher VALUES (31, "Rick", "Sheere");
INSERT INTO Teacher VALUES (12, "Roger", "Moore");
#  */

/*Insert Courses for Web Class */
INSERT INTO Course VALUES (1001, "Web - 1", 15);
INSERT INTO Course VALUES (1002, "Web - 2", 18);
INSERT INTO Course VALUES (2001, "Calculus - 1", 31);
INSERT INTO Course VALUES (2002, "Calculus - 2", 22);
INSERT INTO Course VALUES (3001, "Spanish 1", 22);
INSERT INTO Course VALUES (445, "Business Law", 15);
INSERT INTO Course VALUES (200, "Accounting", 18);
INSERT INTO Course VALUES (250, "Programming 2",31);
INSERT INTO Course VALUES (150, "Programming 1", 12);
INSERT INTO Course VALUES (410, "Business Finance",12);
#   */

/* Insert Grades for Web Class */
INSERT INTO Grade VALUES (004578, 1001, "A");
INSERT INTO Grade VALUES (001234, 1001, "C+");
INSERT INTO Grade VALUES (008754, 1002, "D");
INSERT INTO Grade VALUES (001953, 1001, "B");
INSERT INTO Grade VALUES (004578, 2001, "B");
INSERT INTO Grade VALUES (008754, 3001, "A");
INSERT INTO Grade VALUES (100, 445, "C");
INSERT INTO Grade VALUES (150, 200, "B+");
INSERT INTO Grade VALUES (200, 445, "A-");
INSERT INTO Grade VALUES (200, 250, "A");
INSERT INTO Grade VALUES (300, 150, "D");
INSERT INTO Grade VALUES (400, 200, "C+");
INSERT INTO Grade VALUES (400, 410, "C");
INSERT INTO Grade VALUES (400, 250, "B");
INSERT INTO Grade VALUES (450, 200, "A");
#  */