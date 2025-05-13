/*Comprobar que Equipo pertenece a que alumno*/

SELECT lugar.nombreEquipo as Dispositivo, jesuitas.nombreAlumno as Alumno
	FROM ((lugar INNER JOIN visitas
    	ON lugar.ip = visitas.ip)
        INNER JOIN jesuitas
        ON visitas.idJesuita = jesuitas.idJesuita);

/*Mostrar la valoracion de cada Jesuita*/

SELECT jesuitas.nombre as Jesuita, lugar.valoracion as Valoracion
    FROM ((lugar INNER JOIN visitas
        ON lugar.ip = visitas.ip)
        INNER JOIN jesuitas
        ON visitas.idJesuita = jesuitas.idJesuita);

/*Mostrar el nombre del jesuita, el nombre del alumno y la fecha de la visita*/

SELECT jesuitas.nombre as Jesuita, jesuitas.nombreAlumno as Alumno, visitas.fecha_hora as  Fecha
    FROM jesuitas LEFT JOIN visitas
    ON jesuitas.idJesuita = visitas.idJesuita;

/**/

SELECT count(*) AS 'Total visitas'
    FROM visitas
    GROUP BY ip;

/**/

SELECT visitas.ip, lugar, COUNT(*) AS 'Total visitas'
    FROM visitas INNER JOIN lugar
        ON visita.ip = lugar.ip
    GROUP BY visitas.ip, lugar;

