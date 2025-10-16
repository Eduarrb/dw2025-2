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

CREATE TABLE productos ()