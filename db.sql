/*
project: cakephp-demo
database: cakephp-demo
*/

CREATE TABLE `posts`(
	id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	title CHAR(255) NOT NULL DEFAULT '',
	contents TEXT,
	PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	category CHAR(100) NOT NULL DEFAULT '',
	PRIMARY KEY (id)
);

INSERT INTO `categories` (`category`)
VALUES ('PHP'),('Ruby'),('Java'),('Objective-C'),('Shell'),('Unknown');

CREATE TABLE `snippets`(
	id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	title CHAR(255) NOT NULL DEFAULT '',
	content TEXT,
	category_id INT UNSIGNED,
	created DATETIME,
	modified DATETIME,
	PRIMARY KEY (id)
);

CREATE TABLE `users`(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	username CHAR(50) NOT NULL,
	password CHAR(50) NOT NULL,
	PRIMARY KEY (id)
);

