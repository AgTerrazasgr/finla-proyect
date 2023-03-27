create database practica1;
create table practica1.usuario(id_usuario int auto_increment not null,nombre text not null,apellidos text not null,direccion text not null,telefono text not null,f_nac date not null, primary key(id_usuario))engine=innodb;
create table practica1.Plantel(id_nplantel int auto_increment not null,c_plantel text not null,direccion text not null,telefono TEXT not null,responsable text not null,primary key(id_nplantel))engine=innodb;
create table practica1.lugares(id_nlugar int auto_increment not null,direccion text not null,telefono text not null,email text not null,facebook text not null,horario text not null,primary key(id_nlugar))engine=innodb;


create database practica;
create table practica.Usuario(id_usuario int auto_increment not null,Nombre text not null, Apellidos text not null, Direccion text not null,Telefono text not null, Fecha date not null, Email text not null, primary key(id_usuario))engine=innodb;
create table practica.Plantel(id_plantel int auto_increment not null,NombreP text not null, Clave text not null, DireccionP text not null, TelefonoP text not null, Responsable text not null, primary key(id_plantel))engine=innodb;
create table practica.Lugares(id_lugares int auto_increment not null, NombreL text not null, Descripcion text not null, TelefonoL text not null, Facebook text not null, EmailL text not null, Horario text not null,primary key(id_lugares))engine=innodb;
