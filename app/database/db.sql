CREATE SCHEMA IF NOT EXISTS `library` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci ;
USE `library` ;

CREATE TABLE IF NOT EXISTS `library`.`book` (
  `id` VARCHAR(36) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `category` VARCHAR(45) NOT NULL,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `library`.`borrow` (
  `id` VARCHAR(36) NOT NULL,
  `user_name` VARCHAR(45) NOT NULL,
  `user_cpf` VARCHAR(11) NOT NULL,
  `book_id` VARCHAR(36) NOT NULL,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  INDEX `fk_borrow_book_idx` (`book_id` ASC) VISIBLE,
  CONSTRAINT `fk_borrow_book`
    FOREIGN KEY (`book_id`)
    REFERENCES `library`.`book` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;