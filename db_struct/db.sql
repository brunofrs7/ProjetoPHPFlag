-- Active: 1688066869507@@127.0.0.1@3306@projetofantastico
DROP TABLE IF EXISTS course;
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

INSERT INTO user(email,password,username,image,usertype_id) VALUES
('admin@gmail.com',md5('password'),'admin','u1.png',1),
('teacher@gmail.com',md5('password'),'teacher',null,2),
('student@gmail.com',md5('password'),'student',null,3);

CREATE TABLE course (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    length DOUBLE,
    image VARCHAR(10),
    keywords VARCHAR(100),
    cathegory VARCHAR(100),
    price DOUBLE,
    visibility INT
);

INSERT INTO course (name,length,image,cathegory,price,visibility) VALUES
('Web Developer',2,'c1.png','Web',100,1),
('Mobile Developer',3,'c2.png','Mobile',0,1),
('FrontEnd Developer',2,null,'Web',100,1),
('BackEnd Developer',2,null,'Web',0,1),
('Android Developer',2,null,'Mobile',100,1),
('iOS Developer',2,null,'Mobile',100,1);
