CREATE DATABASE jesuitas;

CREATE TABLE lugar(
    ip char(15),
    nombreEquipo varchar(100) NOT NULL,
    valoracion varchar(100) NOT NULL,
    CONSTRAINT pk_Lugar PRIMARY KEY (ip)
);

CREATE TABLE jesuitas(
    idJesuita tinyint unsigned AUTO_INCREMENT,
    nombre varchar(100) NOT NULL,
    codigo tinyint unsigned NOT NULL,
    firma varchar(255) NOT NULL,
    nombreAlumno varchar (50) NOT NULL,
    CONSTRAINT pk_Jesuita PRIMARY KEY (idJesuita)
);

CREATE TABLE visitas(
    idVisita tinyint unsigned AUTO_INCREMENT,
    idJesuita tinyint unsigned NOT NULL,
    ip char(15) NOT NULL,
    fecha_hora datetime NOT NULL,
    CONSTRAINT pk_Visitas PRIMARY KEY (idVisita),
    CONSTRAINT fk_Lugar_Visitas FOREIGN KEY (ip) REFERENCES lugar(ip)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT fk_Jesuitas_Visitas FOREIGN KEY (idJesuita) REFERENCES jesuitas(idJesuita)
        ON UPDATE CASCADE
        ON DELETE CASCADE

);