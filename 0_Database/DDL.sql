CREATE DATABASE UserDatabase;
USE UserDatabase;

CREATE TABLE User (
    UserId    INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    UserName  VARCHAR(100),
    UserEmail VARCHAR(100)
);
