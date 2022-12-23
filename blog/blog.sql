CREATE SCHEMA `blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE TABLE `blog`.`user` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `firstName` VARCHAR(50) NULL DEFAULT NULL,
  `middleName` VARCHAR(50) NULL DEFAULT NULL,
  `lastName` VARCHAR(50) NULL DEFAULT NULL,
  `mobile` VARCHAR(15) NULL,
  `email` VARCHAR(50) NULL,
  `passwordHash` VARCHAR(32) NOT NULL,
  `registeredAt` DATETIME NOT NULL,
  `lastLogin` DATETIME NULL DEFAULT NULL,
  `intro` TINYTEXT NULL DEFAULT NULL,
  `profile` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `uq_mobile` (`mobile` ASC),
  UNIQUE INDEX `uq_email` (`email` ASC)
);
CREATE TABLE `blog`.`post` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `authorId` BIGINT NOT NULL,
  `parentId` BIGINT NULL DEFAULT NULL,
  `title` VARCHAR(75) NOT NULL,
  `metaTitle` VARCHAR(100) NULL,
  `slug` VARCHAR(100) NOT NULL,
  `summary` TINYTEXT NULL,
  `published` TINYINT(1) NOT NULL DEFAULT 0,
  `createdAt` DATETIME NOT NULL,
  `updatedAt` DATETIME NULL DEFAULT NULL,
  `publishedAt` DATETIME NULL DEFAULT NULL,
  `content` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `uq_slug` (`slug` ASC),
  INDEX `idx_post_user` (`authorId` ASC),
  CONSTRAINT `fk_post_user` FOREIGN KEY (`authorId`) REFERENCES `blog`.`user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
);
ALTER TABLE
  `blog`.`post`
ADD
  INDEX `idx_post_parent` (`parentId` ASC);
ALTER TABLE
  `blog`.`post`
ADD
  CONSTRAINT `fk_post_parent` FOREIGN KEY (`parentId`) REFERENCES `blog`.`post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
CREATE TABLE `blog`.`post_meta` (
    `id` BIGINT NOT NULL AUTO_INCREMENT,
    `postId` BIGINT NOT NULL,
    `key` VARCHAR(50) NOT NULL,
    `content` TEXT NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    INDEX `idx_meta_post` (`postId` ASC),
    UNIQUE INDEX `uq_post_meta` (`postId` ASC, `key` ASC),
    CONSTRAINT `fk_meta_post` FOREIGN KEY (`postId`) REFERENCES `blog`.`post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
  ) ENGINE = InnoDB;
CREATE TABLE `blog`.`post_comment` (
    `id` BIGINT NOT NULL AUTO_INCREMENT,
    `postId` BIGINT NOT NULL,
    `parentId` BIGINT NULL DEFAULT NULL,
    `title` VARCHAR(100) NOT NULL,
    `published` TINYINT(1) NOT NULL DEFAULT 0,
    `createdAt` DATETIME NOT NULL,
    `publishedAt` DATETIME NULL DEFAULT NULL,
    `content` TEXT NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    INDEX `idx_comment_post` (`postId` ASC),
    CONSTRAINT `fk_comment_post` FOREIGN KEY (`postId`) REFERENCES `blog`.`post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
  );
ALTER TABLE
  `blog`.`post_comment`
ADD
  INDEX `idx_comment_parent` (`parentId` ASC);
ALTER TABLE
  `blog`.`post_comment`
ADD
  CONSTRAINT `fk_comment_parent` FOREIGN KEY (`parentId`) REFERENCES `blog`.`post_comment` (`id`) ON DELETE NO ACTION CREATE TABLE `blog`.`category` (
    `id` BIGINT NOT NULL AUTO_INCREMENT,
    `parentId` BIGINT NULL DEFAULT NULL,
    `title` VARCHAR(75) NOT NULL,
    `metaTitle` VARCHAR(100) NULL DEFAULT NULL,
    `slug` VARCHAR(100) NOT NULL,
    `content` TEXT NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
  );
ALTER TABLE
  `blog`.`category`
ADD
  INDEX `idx_category_parent` (`parentId` ASC);
ALTER TABLE
  `blog`.`category`
ADD
  CONSTRAINT `fk_category_parent` FOREIGN KEY (`parentId`) REFERENCES `blog`.`category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
CREATE TABLE `blog`.`post_category` (
    `postId` BIGINT NOT NULL,
    `categoryId` BIGINT NOT NULL,
    PRIMARY KEY (`postId`, `categoryId`),
    INDEX `idx_pc_category` (`categoryId` ASC),
    INDEX `idx_pc_post` (`postId` ASC),
    CONSTRAINT `fk_pc_post` FOREIGN KEY (`postId`) REFERENCES `blog`.`post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    CONSTRAINT `fk_pc_category` FOREIGN KEY (`categoryId`) REFERENCES `blog`.`category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION