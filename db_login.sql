CREATE DATABASE db_login;

USE db_login;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Tambahkan user (password sudah di-hash)
INSERT INTO users (username, password) VALUES (
    'admin', 
    -- Gunakan PHP untuk hash: password_hash('12345', PASSWORD_DEFAULT)
    '202cb962ac59075b964b07152d234b70'
);
