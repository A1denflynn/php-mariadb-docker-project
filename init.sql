CREATE DATABASE IF NOT EXISTS courses_db;

USE courses_db;

CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100)
);

INSERT INTO courses (name)
VALUES
('PHP'),
('Java'),
('Python');