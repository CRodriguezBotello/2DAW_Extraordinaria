CREATE TABLE Etapas (
    IdEtapas SMALLINT AUTO_INCREMENT,
    NombreEtapas VARCHAR(50) NOT NULL,
    CONSTRAINT pk_Etapas PRIMARY KEY (IdEtapas)
);

CREATE TABLE Actividades (
    IdActividades SMALLINT AUTO_INCREMENT,
    NombreActividades VARCHAR(50) NOT NULL,
    IdEtapas SMALLINT,
    CONSTRAINT pk_Actividades PRIMARY KEY (IdActividades),
    CONSTRAINT fk_Etapas FOREIGN KEY (IdEtapas) REFERENCES Etapas(IdEtapas)
);
