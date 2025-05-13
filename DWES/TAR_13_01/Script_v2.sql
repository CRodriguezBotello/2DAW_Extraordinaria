CREATE DATABASE minijuegos;

CREATE TABLE ambitos(
    idAmbito tinyint unsigned AUTO_INCREMENT,
    nombreA varchar(100) NOT NULL,
    CONSTRAINT pk_Ambitos PRIMARY KEY (idAmbito)
);

CREATE TABLE minijuego(
    idMinijuego tinyint unsigned AUTO_INCREMENT,
    nombreM varchar(100) NOT NULL,
    idAmbito tinyint unsigned DEFAULT 0 NOT NULL,
    url_juego varchar(200) NOT NULL,
    tipo char (2) NOT NULL,
    CONSTRAINT Chk_Tipo CHECK (tipo in ('ed', 'en')),
    CONSTRAINT pk_Minijuegos PRIMARY KEY (idMinijuego),
    CONSTRAINT fk_Ambitos_Minijuegos FOREIGN KEY (idAmbito) REFERENCES ambitos(idAmbito)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);