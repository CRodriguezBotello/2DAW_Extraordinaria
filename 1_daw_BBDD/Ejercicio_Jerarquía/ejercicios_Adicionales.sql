/*1. Añade 1 Serie*/

INSERT INTO EvgFlix (nombre, tipo) VALUES ('Schedule1', 'S');
INSERT INTO EvgFlix (nombre, tipo) VALUES ('Dragon Ball', 'S');

INSERT INTO Serie VALUES (1);
INSERT INTO Serie VALUES (2);

/*2. Borra 1 Serie*/

Delete FROM EvgFlix
    WHERE nombre = 'Dragon Ball';

/*3. Consultar 1 Serie*/

SELECT serie.id, nombre, tipo
    FROM Serie INNER JOIN EvgFlix
    ON Serie.id = evgflix.id;

/*4. Añadir 1 película*/

INSERT INTO EvgFlix (nombre, tipo) VALUES ('Spider-Man', 'P');

INSERT INTO Pelicula VALUES (3, 121);

/*5. Recomendar a esta película la serie*/

INSERT INTO Recomendaciones VALUES (1, 3);

/*6. Mostrar 1 peli y su recomendación*/

SELECT Pelicula.id, nombre as Pelicula, tipo, Recomendaciones.idEvg1
    FROM Pelicula INNER JOIN EvgFlix
    ON Pelicula.id = EvgFlix.id INNER JOIN Recomendaciones
    ON EvgFlix.id = Recomendaciones.idEvg2;

/*Extra, muestra tambien el nombre de la recomendacion*/
SELECT Pelicula.id, Peli.nombre as Pelicula, Peli.tipo as Tipo_Pelicula, Recomendaciones.idEvg1, Recomendacion.nombre as Recomendación, Recomendacion.tipo as Tipo_Recomendacion
    FROM Pelicula INNER JOIN EvgFlix as Peli
    ON Pelicula.id = Peli.id INNER JOIN Recomendaciones
    ON Peli.id = Recomendaciones.idEvg2 INNER JOIN EvgFlix as Recomendacion
    ON Recomendacion.id = Recomendaciones.idEvg1;

/*7. Añadir 1 episodio*/

INSERT INTO EvgFlix (nombre, tipo) VALUES ('Dragon Ball', 'S');

INSERT INTO Serie VALUES (4);

INSERT INTO Temporada VALUES (4, 1);
INSERT INTO Temporada VALUES (4, 2);
INSERT INTO Temporada VALUES (4, 3);
INSERT INTO Temporada VALUES (4, 4);

INSERT INTO Episodios VALUES (4, 1, 1);
INSERT INTO Episodios VALUES (4, 1, 2);
INSERT INTO Episodios VALUES (4, 2, 1);
INSERT INTO Episodios VALUES (4, 2, 2);
INSERT INTO Episodios VALUES (4, 3, 1);
INSERT INTO Episodios VALUES (4, 3, 2);
INSERT INTO Episodios VALUES (4, 4, 1);
INSERT INTO Episodios VALUES (4, 4, 2);