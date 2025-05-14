CREATE DATABASE  IF NOT EXISTS evgFlix;

USE evgFlix;

CREATE TABLE IF NOT EXISTS EvgFlix(
    id tinyint AUTO_INCREMENT /*IDENTITY*/ NOT NULL,
    nombre varchar(100) NOT NULL,
    tipo char(1) NOT NULL,
    CONSTRAINT pk_EvgFlix PRIMARY KEY (id),
    CONSTRAINT chk_tipo CHECK (tipo IN ('P', 'S'));
);

CREATE TABLE IF NOT EXISTS Recomendaciones(
    idEvg1 tinyint NOT NULL,
    idEvg2 tinyint NOT NULL,
    CONSTRAINT pk_EvgFlix PRIMARY KEY (idEvg1, idEvg2),
    CONSTRAINT fk_Recomendaciones1 FOREIGN KEY (idEvg1) REFERENCES EvgFlix(id),
    CONSTRAINT fk_Recomendaciones2 FOREIGN KEY (idEvg2) REFERENCES EvgFlix(id)
);

CREATE TABLE IF NOT EXISTS Pelicula(
    id tinyint NOT NULL,
    minutos_Adicionales smallint NOT NULL,
    CONSTRAINT pk_Pelicula PRIMARY KEY (id),
    CONSTRAINT fk_Pelicula_EvgFlix FOREIGN KEY (id) REFERENCES EvgFlix(id),
);

CREATE TABLE IF NOT EXISTS Serie(
    id tinyint NOT NULL,
    CONSTRAINT pk_Serie PRIMARY KEY (id),
    CONSTRAINT fk_Serie_EvgFlix FOREIGN KEY (id) REFERENCES EvgFlix(id),
);

CREATE TABLE IF NOT EXISTS Temporada(
    id tinyint NOT NULL,
    numT smallint NOT NULL,
    CONSTRAINT pk_Temporada PRIMARY KEY (id, numT),
    CONSTRAINT fk_Temporada_Serie FOREIGN KEY (id) REFERENCES Serie(id),
);

CREATE TABLE IF NOT EXISTS Episodios(
    id tinyint NOT NULL,
    numT smallint NOT NULL,
    numEp smallint NOT NULL,
    CONSTRAINT pk_Episodios PRIMARY KEY (id, numT, numEp),
    CONSTRAINT fk_Episodios_Temporada1 FOREIGN KEY (id) REFERENCES Temporada(id),
    CONSTRAINT fk_Episodios_Temporada2 FOREIGN KEY (numT) REFERENCES Temporada(numT),
);