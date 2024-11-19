CREATE DATABASE testdb;

USE testdb;
CREATE TABLE submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

GRANT ALL PRIVILEGES ON testdb.* TO 'gabriel'@'%' IDENTIFIED BY 'namespaxe@123';
FLUSH PRIVILEGES;
