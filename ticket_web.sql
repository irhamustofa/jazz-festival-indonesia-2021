DROP DATABASE IF EXISTS ticket_web;
CREATE DATABASE ticket_web;

USE ticket_web;

CREATE TABLE ticket_registrations (
	id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	address VARCHAR(100) NOT NULL,
	category ENUM('full-pass', 'daily-pass') NOT NULL,
	ticket_total TINYINT NOT NULL,
	price_total INT NOT NULL
);