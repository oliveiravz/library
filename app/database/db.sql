CREATE SCHEMA IF NOT EXISTS `library` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;

USE `library`;

CREATE TABLE IF NOT EXISTS `library`.`book` (
  `id` VARCHAR(36) NOT NULL,
  `name` VARCHAR(125) NOT NULL,
  `created_at` DATE DEFAULT (CURRENT_DATE),
  `category` VARCHAR(45) NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `library`.`user` (
  `id` VARCHAR(36) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `created_at` DATE DEFAULT (CURRENT_DATE),
  `cpf` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC) VISIBLE
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `library`.`user_has_book` (
  `user_id` VARCHAR(36) NOT NULL,
  `book_id` VARCHAR(36) NOT NULL,
  `borrow_date` DATE DEFAULT (CURRENT_DATE),
  `return_date` DATE NULL,
  PRIMARY KEY (`user_id`, `book_id`),
  INDEX `fk_user_has_book_book1_idx` (`book_id` ASC) VISIBLE,
  INDEX `fk_user_has_book_user_idx` (`user_id` ASC) VISIBLE,
  CONSTRAINT `fk_user_has_book_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `library`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_book_book1`
    FOREIGN KEY (`book_id`)
    REFERENCES `library`.`book` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB;
