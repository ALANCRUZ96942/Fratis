CREATE DATABASE discorruption;





CREATE TABLE Persona(
	idDatosDenunciante INT PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(100),
		pApellido VARCHAR(100),
			sApellido VARCHAR(100),
	edad INT

);

CREATE TABLE Incidente(
	idIncidente INT PRIMARY KEY AUTO_INCREMENT,
	incidente VARCHAR(1000)
);

CREATE TABLE Lugar(
	idlugar INT PRIMARY KEY AUTO_INCREMENT,
		municipio VARCHAR(100),
	localidad VARCHAR(100),
	colonia VARCHAR(100)

);
