SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

#password=123

CREATE USER 'task'@'%' IDENTIFIED VIA mysql_native_password USING '***';
GRANT ALL PRIVILEGES ON *.* TO 'task'@'%' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
CREATE DATABASE IF NOT EXISTS `task`;
GRANT ALL PRIVILEGES ON `task`.* TO 'task'@'%';GRANT ALL PRIVILEGES ON `task\_%`.* TO 'task'@'%';

CREATE TABLE `task`.`user` 
( `id` INT(11) NULL AUTO_INCREMENT ,
 `name` VARCHAR(25) NULL , 
 `email` VARCHAR(25) NULL ,
  `pwd` VARCHAR(50) NULL ,
   `status` CHAR(1) NULL , 
   PRIMARY KEY (`id`))
 ENGINE = InnoDB;

CREATE TABLE `task`.`user` 
( `id` INT(11) NOT NULL AUTO_INCREMENT ,
 `name` VARCHAR(25) NOT NULL , `email` VARCHAR(25) NOT NULL ,
  `pwd` VARCHAR(50) NOT NULL , `status` CHAR(1) NOT NULL ,
   PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `task`.`category`
 ( `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(25) NOT NULL ,
   `desc` VARCHAR(100) NOT NULL ,
    `status` CHAR(1) NOT NULL , 
    `created` DATETIME NOT NULL ,
     `updated` DATETIME NOT NULL ,
      PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `task`.`article`
 ( `id` INT(11) NOT NULL AUTO_INCREMENT , 
 	`category_id` INT(11) NOT NULL ,
 	 `author_id` INT(11) NOT NULL , 
 	 `title` VARCHAR(25) NOT NULL ,
 	  `content` VARCHAR(500) NOT NULL , 
 	  `created` DATETIME NOT NULL , 
 	  `updated` DATETIME NOT NULL , 
 	  `status` CHAR(1) NOT NULL ,
 	   PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `task`.`comment`
 ( `id` INT NOT NULL AUTO_INCREMENT ,
  `commenter_id` INT NOT NULL ,
   `comment_content` VARCHAR(100) NOT NULL , 
   `created` DATETIME NOT NULL , 
   `article_id` INT(11) NOT NULL ,
    `status` CHAR(1) NOT NULL , 
    PRIMARY KEY (`id`)) ENGINE = InnoDB;
#pasword=123