CREATE DATABASE petworld;

USE petworld;

CREATE TABLE mascota(
    id int PRIMARY KEY AUTO_INCREMENT,
    id_usuario int NOT NULL,
    nombre VARCHAR(30) NOT NULL,
    tipo VARCHAR(10) NOT NULL,
    sexo VARCHAR(10) NOT NULL,
    raza VARCHAR(30) NOT NULL,
    direccion VARCHAR(100) NOT NULL,
    imagen LONGBLOB NOT NULL
);

CREATE TABLE mascota_adoptar(
    id int PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(20) NOT NULL,
    edad int NOT NULL,
    sexo VARCHAR(10) NOT NULL,
    tamaño VARCHAR(20) NOT NULL,
    descripcion VARCHAR(100) NOT NULL,
    tipo VARCHAR(10) NOT NULL
);

CREATE TABLE usuario(
    id int PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(20) NOT NULL,
    apellido VARCHAR(20) NOT NULL,
    fechaNacimiento DATE NOT NULL,
    email VARCHAR(40) NOT NULL,
    contraseña VARCHAR(20) NOT NULL,
    numeroTelefono CHAR(9) NOT NULL
);

USE petworld;
SELECT * FROM mascota_adoptar;

USE petworld;
INSERT INTO mascota_adoptar
(nombre,edad,sexo,tamaño,descripcion,tipo) VALUES
('chichico ',18,'macho','grande','soy un perro cariñoso y amable, me encanta jugar a veces y ver películas con mi amo.','perro'),
('tom',45,'macho','mediano','Soy muy tranquilo y me gusta que me acaricien, de vez en cuando necesito salir para desestresarme.','gato'),
('milo',20,'macho','mediano','Soy muy jugueton y me gusta enconder kos zapatos de mi dueño.','perro'),
('machete',3,'macho','pequeño','Soy muy alegre y me gusta jugar con una pelota, salir a pasear de vez en cuando, me asustan los truenos','perro')