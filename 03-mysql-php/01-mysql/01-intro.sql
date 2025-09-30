mysql -u root -p

SHOW DATABASES

CREATE DATABASE stream

USE stream

SHOW TABLES

-- primary key
-- foreign key
CREATE TABLE personas (
    per_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    per_nombres VARCHAR(100) NOT NULL,
    per_apellidos VARCHAR(100) NOT NULL,
    per_dni CHAR(8) UNIQUE NOT NULL, 
    per_fecha_nac DATE NOT NULL
)

DROP TABLE personas

DESC personas

INSERT INTO personas (per_nombres, per_apellidos, per_dni, per_fecha_nac) VALUES 
    ("Juan", 'Pérez', '12345678', '1990-01-01')

SELECT * FROM personas

INSERT INTO personas (per_nombres, per_apellidos, per_dni, per_fecha_nac) VALUES 
    ("María", 'Gómez', '87654321', '1992-02-02'),
    ("Carlos", 'López', '11223344', '1988-03-03'),
    ("Ana", 'Martínez', '44332211', '1995-04-04'), 
    ("Luis", 'Rodríguez', '55667788', '1991-05-05'),
    ("Sofía", 'Hernández', '99887766', '1993-06-06')

-- CRUD
-- CREATE, READ, UPDATE, DELETE

UPDATE personas SET per_apellidos = 'Ramírez' WHERE per_id = 1

-- MUCHO CUIDADO 💥💥💥💥💥
DELETE FROM personas WHERE per_id = 4

-- metada 
-- insert => id = 1
-- 1 jose lopez 12345678 1990-01-01
-- insert => 2, 3, 4, 5 => error 💥💥
-- insert => 6