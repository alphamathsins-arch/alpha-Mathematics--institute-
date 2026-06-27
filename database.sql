CREATE DATABASE alpha_maths;

USE alpha_maths;

CREATE TABLE students(

id INT AUTO_INCREMENT PRIMARY KEY,

fullname VARCHAR(100) NOT NULL,

email VARCHAR(120) UNIQUE NOT NULL,

username VARCHAR(50) UNIQUE NOT NULL,

password VARCHAR(255) NOT NULL,

grade VARCHAR(20),

session_type VARCHAR(30),

maths INT,

science INT,

application_status VARCHAR(30) DEFAULT 'Pending',

message TEXT,

announcement TEXT,

results VARCHAR(255),

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

CREATE TABLE admin(

id INT AUTO_INCREMENT PRIMARY KEY,

username VARCHAR(50),

password VARCHAR(255)

);
