CREATE DATABASE php_login_database;

USE php_login_database;

CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50),
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (email, password) VALUES ("jj@gmail.com", 'test1234');

