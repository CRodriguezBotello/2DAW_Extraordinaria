use jesuitas;

INSERT INTO lugar (ip, nombreEquipo, valoracion) VALUES 
	('10.3.43.1', '1DAW01','Roma'), 
	('10.3.43.2', '1DAW02','Loyola'),	
	('10.3.43.3', '1DAW03','Manresa'), 
	('10.3.43.4', '1DAW04','Malacca'), 		
	('10.3.43.9', '1DAW05','Jerusalen'),
	('10.3.43.10', '1DAW06','Azpeitia'), 
	('10.3.43.11', '1DAW07','Monserrat'), 
	('10.3.43.12', '1DAW08','China'), 
	('10.3.43.13', '1DAW09','Goa'),
	('10.3.43.14', '1DAW10','Shanchuan'), 
	('10.3.43.15', '1DAW11','Molucas'),
	('10.3.43.17', '1DAW12','Cuquiarachi'), 
	('10.3.43.18', '1DAW13','Ensenada'), 
	('10.3.43.19', '1DAW14','Guadalupe'),
	('10.3.43.20', '1DAW15','Papúa'),
	('10.3.43.23', '1DAW16','Rosarito'), 
	('10.3.43.24', '1DAW17','Rio Grande del Sur');

INSERT INTO jesuitas (nombre, codigo, firma, nombreAlumno) VALUES
('San Ignacio', 1, 'firma_ignacio', 'Juan Pérez'),
('Francisco Javier', 2, 'firma_francisco', 'María Gómez'),
('Pedro Claver', 3, 'firma_pedro', 'Luis Fernández'),
('Alonso Rodríguez', 4, 'firma_alonso', 'Carlos Ramírez'),
('José de Anchieta', 5, 'firma_jose', 'Ana López'),
('Diego Laínez', 6, 'firma_diego', 'Marta Díaz'),
('Luis Gonzaga', 7, 'firma_luis', 'Pablo Torres'),
('Roberto Belarmino', 8, 'firma_roberto', 'Carmen Herrera'),
('Pedro Arrupe', 9, 'firma_pedro_arrupe', 'Javier Mendoza'),
('Mateo Ricci', 10, 'firma_mateo', 'Elena Suárez');

INSERT INTO visitas (idJesuita, ip, fecha_hora) VALUES
(1, '192.168.1.10', '2025-04-01 10:15:00'),
(2, '192.168.1.11', '2025-04-01 11:30:00'),
(3, '192.168.1.12', '2025-04-01 12:45:00'),
(4, '192.168.1.13', '2025-04-01 14:00:00'),
(5, '192.168.1.14', '2025-04-01 15:15:00'),
(6, '192.168.1.15', '2025-04-01 16:30:00'),
(7, '192.168.1.16', '2025-04-01 17:45:00'),
(8, '192.168.1.17', '2025-04-01 19:00:00'),
(9, '192.168.1.18', '2025-04-01 20:15:00'),
(10, '192.168.1.19', '2025-04-01 21:30:00');