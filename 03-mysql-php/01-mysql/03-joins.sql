SELECT peli_nombre, peli_genero, peli_anio FROM peliculas;

SELECT * FROM peliculas 
    INNER JOIN personajes ON peli_id = per_peli_id


SELECT peli_nombre, per_nombre FROM peliculas 
    INNER JOIN personajes ON peli_id = per_peli_id

INSERT INTO peliculas (peli_nombre, peli_genero, peli_anio, peli_restricciones) VALUES
    ("Avengers: Endgame", "Acción", "2019-04-26", "PG-13"),
    ("The Dark Knight Rises", "Acción", "2012-07-20", "PG-13"),
    ("The Matrix Reloaded", "Ciencia Ficción", "2003-05-15", "R")


SELECT * FROM personajes 
    INNER JOIN actores ON per_act_id = act_id

-- Alias de tablas

SELECT per.per_nombre, act.act_nombres, act.act_apellidos 
    FROM personajes per
    INNER JOIN actores act ON per.per_act_id = act.act_id

-- SELECT personajes.per_nombre FROM personajes

-- LEFT JOIN
SELECT *
    FROM peliculas a
    LEFT JOIN personajes b ON a.peli_id = b.per_peli_id

-- RIGHT JOIN
SELECT *
    FROM peliculas a
    RIGHT JOIN personajes b ON a.peli_id = b.per_peli_id


-- 3 tablas
-- Alias de campos
SELECT 
    a.peli_id, 
    a.peli_nombre, 
    b.per_peli_id, 
    b.per_nombre,
    b.per_act_id, 
    c.act_id,
    CONCAT(c.act_nombres, ' ', c.act_apellidos) AS actor
    FROM peliculas a
        INNER JOIN personajes b ON a.peli_id = b.per_peli_id
        INNER JOIN actores c ON b.per_act_id = c.act_id

SELECT 
    a.peli_id, 
    a.peli_nombre, 
    b.per_peli_id, 
    b.per_nombre,
    b.per_act_id, 
    c.act_id,
    CONCAT(c.act_nombres, ' ', c.act_apellidos) AS actor
    FROM peliculas a
        LEFT JOIN personajes b ON a.peli_id = b.per_peli_id
        LEFT JOIN actores c ON b.per_act_id = c.act_id 

-- SELECT peli_id, peli_nombre FROM peliculas

-- SELECT 
--     a.peli_id, 
--     a.peli_nombre, 
--     b.per_peli_id, 
--     b.per_nombre,
--     b.per_act_id
--     FROM peliculas a
--         LEFT JOIN personajes b ON a.peli_id = b.per_peli_id ORDER BY b.per_act_id

CREATE TABLE directores (
    dire_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    dire_nombres VARCHAR(100) NOT NULL,
    dire_apellidos VARCHAR(100) NOT NULL
)

INSERT INTO directores (dire_nombres, dire_apellidos) VALUES
    ("Anthony", "Russo"),
    ("Joe", "Russo"),
    ("Christopher", "Nolan"),
    ("Lana", "Wachowski"),
    ("Steven", "Spielberg"),    
    ("James", "Cameron"),
    ("Peter", "Jackson"),
    ("Quentin", "Tarantino"),
    ("Martin", "Scorsese")

-- 👁️‍🗨️👁️‍🗨️👁️‍🗨️
ALTER TABLE peliculas ADD column peli_dire_id INT UNSIGNED AFTER peli_id

UPDATE peliculas SET peli_dire_id = 1 WHERE peli_id = 12
UPDATE peliculas SET peli_dire_id = 3 WHERE peli_id = 1
UPDATE peliculas SET peli_dire_id = 3 WHERE peli_id = 2
UPDATE peliculas SET peli_dire_id = 3 WHERE peli_id = 3
UPDATE peliculas SET peli_dire_id = 3 WHERE peli_id = 13
UPDATE peliculas SET peli_dire_id = 4 WHERE peli_id = 4
UPDATE peliculas SET peli_dire_id = 4 WHERE peli_id = 14

SELECT * FROM peliculas a INNER JOIN directores b ON a.peli_dire_id = b.dire_id
