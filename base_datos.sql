CREATE DATABASE petworld;

USE petworld;

CREATE TABLE mascota(
    id int PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(30),
    tipo VARCHAR(10),
    sexo VARCHAR(10),
    raza VARCHAR(30),
    direccion VARCHAR(100),
    imagen LONGBLOB
);

CREATE TABLE mascota_adoptar(
    id int PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(20),
    edad int,
    sexo VARCHAR(10),
    tamaño VARCHAR(20),
    descripcion VARCHAR(100),
    tipo VARCHAR(10)
);

CREATE TABLE usuario(
    id int PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(20),
    apellido VARCHAR(20),
    fechaNacimiento DATE,
    email VARCHAR(40),
    contraseña VARCHAR(20),
    numeroTelefono CHAR(9)
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