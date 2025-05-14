USE Netflix;

SET IDENTITY_INSERT series ON;
INSERT INTO series VALUES (27, "Los hombres de Paco", "Paco, hombres");
SET IDENTITY_INSERT series OFF;

INSERT INTO episodios VALUES (27, 1, "Piloto");
INSERT INTO episodios VALUES (27, 2, "Paco conoce a Lola");
INSERT INTO episodios VALUES (27, 3, "Paco se desvive por Lola");
INSERT INTO episodios VALUES (27, 4, "El secreto de ambos");
INSERT INTO episodios VALUES (27, 5, "La declaración");
INSERT INTO episodios VALUES (27, 6, "Infiel");
INSERT INTO episodios VALUES (27, 7, "Síndrome de Abstinencia");
INSERT INTO episodios VALUES (27, 8, "Reencuentro");
INSERT INTO episodios VALUES (27, 9, "Propuesta");
INSERT INTO episodios VALUES (27, 10, "Matrimonio");

INSERT INTO usuarios (nombre, correo, pw)VALUES ("CarlosR", "carlos@gmail.com", "1234");