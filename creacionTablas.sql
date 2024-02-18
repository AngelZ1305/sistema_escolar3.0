CREATE TABLE carreras (IDCarrera int UNIQUE NOT NULL AUTO_INCREMENT, Nombre varchar (200) UNIQUE NOT NULL);

CREATE TABLE materias (IDMateria int UNIQUE NOT NULL AUTO_INCREMENT, IDCarrera int NOT NULL,
Nombre varchar(200) UNIQUE NOT NULL, Semestre tinyint NOT NULL, Hora tinyint NOT NULL);