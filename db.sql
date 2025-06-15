CREATE DATABASE hw1;
USE hw1;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(16) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE
) ENGINE = InnoDB;

CREATE TABLE anime (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    anime_id VARCHAR(255),
    content JSON,
    FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE = InnoDB;

CREATE TABLE games (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    game_id VARCHAR(255),
    content JSON,
    FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE = InnoDB;