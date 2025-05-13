USE etapas;

CREATE TABLE Etapas (
    IdEtapas SMALLINT AUTO_INCREMENT,
    NombreEtapas VARCHAR(50) NOT NULL,
    CONSTRAINT pk_Etapas PRIMARY KEY (IdEtapas)
);

CREATE TABLE Actividades (
    IdActividades SMALLINT AUTO_INCREMENT,
    NombreActividades VARCHAR(50) NOT NULL,
    CONSTRAINT pk_Actividades PRIMARY KEY (IdActividades)
);

CREATE TABLE Etapas_Actividades (
    IdEtapas SMALLINT NOT NULL,
    IdActividades SMALLINT NOT NULL,
    CONSTRAINT pk_Etapas_Actividades PRIMARY KEY (IdEtapas, IdActividades),
    CONSTRAINT fk_Etapas FOREIGN KEY (IdEtapas) REFERENCES Etapas(IdEtapas),
    CONSTRAINT fk_Actividades FOREIGN KEY (IdActividades) REFERENCES Actividades(IdActividades)
);
