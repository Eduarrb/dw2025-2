CREATE DATABASE pcmaster

USE pcmaster

CREATE TABLE categorias (
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(30) NOT NULL,
    estado TINYINT(1) NOT NULL
)

INSERT INTO categorias (nombre, estado) VALUES
    ("cpu", 1),
    ("gpu", 1),
    ("motherboard", 1),
    ("ram", 1),
    ("storage", 1),
    ("psu", 1),
    ("cooling", 1),
    ("case", 1)

DROP TABLE productos

CREATE TABLE productos (
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    marca VARCHAR(30) NOT NULL,
    descripcion TEXT NOT NULL,
    categoria_id INT UNSIGNED NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    stock INT UNSIGNED NOT NULL,
    imagen VARCHAR(50) NOT NULL,
    destacado TINYINT(1) NOT NULL,
    estado TINYINT(1) NOT NULL,
    FOREIGN KEY (categoria_id) REFERENCES categorias(id) ON DELETE CASCADE ON UPDATE CASCADE
)

INSERT INTO productos (nombre, marca, descripcion, categoria_id, precio, stock, imagen, destacado, estado) VALUES
    ("Ryzen 5 5600X", "AMD", "Procesador de 6 núcleos y 12 hilos con una frecuencia base de 3.7 GHz y un boost de hasta 4.6 GHz.", 1, 199.99, 5, "01.webp", 1, 1),
    ("GeForce RTX 3060", "NVIDIA", "Tarjeta gráfica con arquitectura Ampere, 12GB de memoria GDDR6 y soporte para Ray Tracing.", 2, 329.99, 3, "02.webp", 1, 1)
    
CREATE TABLE usuarios (
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombres VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    rol VARCHAR(20) NOT NULL,
    estado TINYINT(1) NOT NULL,
    token VARCHAR(50) NOT NULL
)

INSERT INTO usuarios (nombres, apellidos, email, password, rol, estado) VALUES
    ("John", "Doe", "admin@gmail.com", "123456", "admin", 1)