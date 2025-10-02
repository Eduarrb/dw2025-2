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


