-- Active: 1688066869507@@127.0.0.1@3306@projetofantastico
DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS usertype;
DROP TABLE IF EXISTS message;

CREATE TABLE message (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    date_time DATETIME NOT NULL
);

CREATE TABLE usertype(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(45) NOT NULL
);

INSERT INTO usertype(name) VALUES('Administrator'),('Teacher'),('Student');

CREATE TABLE user(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(45) NOT NULL,
    username VARCHAR(45),
    last_login DATETIME,
    banned DATETIME,
    image VARCHAR(10),
    usertype_id INT,

    FOREIGN KEY (usertype_id) REFERENCES usertype(id)
);

INSERT INTO user(email,password,usertype_id) VALUES
('admin@gmail.com',md5('password'),1),
('teacher@gmail.com',md5('password'),2),
('student@gmail.com',md5('password'),3);

