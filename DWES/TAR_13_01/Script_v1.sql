CREATE DATABASE minijuegos;

CREATE TABLE ambitos(
    idAmbito tinyint unsigned AUTO_INCREMENT,
    nombreA varchar(100) NOT NULL,
    CONSTRAINT pk_Ambito PRIMARY KEY (idAmbito)
);

CREATE TABLE minijuego(
    idMinijuego tinyint unsigned AUTO_INCREMENT,
    nombreM varchar(100) NOT NULL,
    idAmbito tinyint unsigned NOT NULL,
    url_juego varchar(200) NOT NULL,
    CONSTRAINT pk_Minijuego PRIMARY KEY (idMinijuego),
    CONSTRAINT fk_Ambitos FOREIGN KEY (idAmbito) REFERENCES ambitos(idAmbito)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);