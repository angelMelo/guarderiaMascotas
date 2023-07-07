CREATE DATABASE guarderiamascota;

USE guarderiamascota;

CREATE TABLE tipo_mascota(
    id_tipo int primary key auto_increment,
    tipo varchar(20),
    descripcion varchar(100)
);

CREATE TABLE cliente(
    id_cliente int primary key auto_increment,
    nombre varchar(20),
    apellido_paterno varchar(20),
    apellido_materno varchar(20),
    direccion varchar(50),
    ciudad varchar(20),
    codigo_postal int,
    estado varchar(20)
);

CREATE TABLE contacto_cliente(
    id_contacto int primary key auto_increment,
    id_cliente int,
    numero_contacto varchar(20),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
);

CREATE TABLE mascota_cliente(
    id_mascota int primary key auto_increment,
    id_cliente int,
    nombre_mascota varchar(20),
    edad int,
    tamaño varchar(10),
    peso double,
    condicion_salud varchar(20),
    comentarios varchar(100),
    id_tipo int,
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente),
    FOREIGN KEY (id_tipo) REFERENCES tipo_mascota(id_tipo)
);

CREATE TABLE servicio(
	id_servicio int primary key auto_increment,
    id_cliente int,
    id_mascota int,
    hora_recepcion datetime,
    hora_salida datetime,
    comentarios varchar(100),
    estatus int,
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente),
    FOREIGN KEY (id_mascota) REFERENCES mascota_cliente(id_mascota)
);


