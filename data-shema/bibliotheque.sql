/*****************************************************************************/
/* Project S17 ; Schema database  for the library application                */
/*                                                                           */
/*****************************************************************************/

/*****************************************************************************
*	Create new database and user
*/
DROP DATABASE IF EXISTS bibliotheque;
CREATE DATABASE bibliotheque CHARACTER SET 'utf8mb4';
USE bibliotheque;

-- DROP USER IF EXISTS 'root'@'Localhost';
-- CREATE USER 'root'@'Localhost';
-- GRANT ALL PRIVILEGES ON bibliotheque.* To 'bibliothecaire'@'Localhost' IDENTIFIED BY 'root';


CREATE TABLE User(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	civility VARCHAR (10),
	lastname VARCHAR(50) NOT NULL,
	firstname VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL UNIQUE,
	adress VARCHAR(50) NOT NULL,
	zip_code CHAR(5) NOT NULL,
	city VARCHAR(30) NOT NULL,
	PRIMARY KEY (id)
)
ENGINE=InnoDB;


CREATE TABLE Book(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	title VARCHAR(100) NOT NULL,
	author VARCHAR(100) NOT NULL,
	summary TEXT(500),
	release_date DATE NOT NULL,
	category VARCHAR(20) NOT NULL,
	status VARCHAR(20) NOT NULL,
	user_id INT UNSIGNED,
	PRIMARY KEY (id),
	FOREIGN KEY (user_id) REFERENCES User(id)
)
ENGINE=InnoDB;

/*****************************************************************************
* Fill the database with dummy datas
*/
LOCK TABLES User WRITE, Book WRITE;

	INSERT INTO User VALUES
	(null, 'Mr', 'Eco', 'Umberto', 'umberto@gmail.com', 'rue du nom de la rose', '666', 'Vatican'),
	(null, 'Dr', 'Freud', 'Sigmund', 'sigmund.f@joke.com', 'rue des névrosés', '75000', 'Paris'),
	(null, 'Mlle', 'Byron', 'Augusta Ada', 'lovelace@babage.com', '10 Downing Street', 'SW1A 2AA', 'Londre');

	INSERT INTO Book VALUES
	(null, 'Histoire de tester Volume1', 'Moi', 'histoire invraisemblable d un fichier SQL', '2020-10-27', 'Informatique', 'libre', null),
	(null, 'Histoire de tester Volume2', 'Moi', 'histoire invraisemblable d un fichier SQL', '2020-10-27', 'Informatique', 'emprunt', 2);

UNLOCK TABLES;