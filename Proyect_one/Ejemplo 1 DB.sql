CREATE DATABASE Ejemplo1;

CREATE TABLE Ejemplo1.User
(
id_user int auto_increment not null, 
Nombre varchar(55) not null, 
Contraseña varchar(55) not null, 
Email varchar(55) not null, 
id_tuser in not null,
Primary Key(id_user)  
) engine=innoDB;

CREATE TABLE Ejemplo1.Tuser
(
id_tuser int auto_increment not null, 
NombreTuser varchar(55) not null, 
Descripcion varchar(55) not null, 
Primary Key(id_tuser)  
) engine=innoDB;

INSERT INTO Ejemplo1.Tuser (id_tuser, NombreTuser, Descripcion) VALUES (NULL, 'Profesor', 'En Aula');
INSERT INTO Ejemplo1.User (id_user, Nombre, Contraseña, Email, id_tuser) VALUES (NULL, 'Juan Lobo', 'WP*89', 'lobov@gmail.com', '1');

ALTER TABLE Ejemplo1. User ADD Foreign Key (id_tuser) REFERENCE Tuser (id_tuser);

 




