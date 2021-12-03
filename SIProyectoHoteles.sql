create database SIProyectoHoteles;
use SIProyectoHoteles;
drop database SIProyectoHoteles;

create table TipoDocumento(
Id_TipoDocumento int auto_increment primary key,
Tipo_Documento varchar (30)
);

create table Cliente(
Id_Cliente int auto_increment primary key,
Nombres_Cliente varchar (80),
Apellidos_Cliente varchar (80),
FechaNac_Cliente date,
Telefono_Cliente varchar (10),
Numero_Documento_Cliente varchar (10),
Correo_Cliente varchar (50),
Contraseña_Cliente varchar (30),
Id_TipoDocumento int
);

create table Encargado(
Id_Encargado int auto_increment primary key,
Nombres_Encargado varchar (80),
Apellidos_Encargado varchar (80),
FechaNac_Encargado date,
Telefono_Encargado varchar (10),
Numero_Documento_Encargado varchar (10),
Correo_Encargado varchar (50),
Contraseña_Encargado varchar (30),
Id_TipoDocumento int
);

create table Medio_Pago(
Id_MedioPago int auto_increment primary key,
MedioPago varchar (30)
);

create table Reserva(
Id_Reserva int auto_increment primary key,
Fecha_Reserva date,
FechaEntrada_Reserva datetime,
FechaSalida_Reserva datetime,
TotalApagar_Reserva float,
Id_Cliente int,
Id_MedioPago int
);

create table Reserva_Servicio(
Id_ReservaServicio int auto_increment primary key,
Id_Hotel int,
Id_Servicio int
);

create table Reserva_ReservaServicio(
Id_Reserva_ReservaServicio int auto_increment primary key,
Costo_Servicio float,
Id_Reserva int,
Id_ReservaServicio int
);

create table Hotel(
Id_Hotel int auto_increment primary key,
Nombre_Hotel varchar (80),
Direccion_Hotel varchar(50),
Descripcion_Hotel varchar(2500),
Imagen_Hotel blob,
Estado boolean,
Id_Encargado int
);

create table Opinion(
Id_Opinion int auto_increment primary key,
Comentario_Opinion varchar(2500),
Calificacion_Opinion int,
Fecha_Opinion date,
Id_Hotel int
);

create table Hotel_Servicio(
Id_Hotel_Servicio int auto_increment primary key,
Id_Hotel int,
Id_Servicio int,
Costo_Servicio float
);

create table Servicio (
Id_Servicio int auto_increment primary key,
Nombre_Servicio varchar(80)
);

create table Reserva_Habitacion(
Id_Reserva_Habitacion int auto_increment primary key,
Cantidad_Personas_Reserva_Habitacion int,
Cantidad_Adultos_Reserva_Habitacion int,
Cantidad_Niños_Reserva_Habitacion int,
Costo_Reserva_Reserva_Habitacion int,
Id_Reserva int
);

create table Habitacion(
Id_Habitacion int auto_increment primary key,
CantidadCamas_Habitacion int,
Estado_Habitacion int,
Descripcion_Habitacion varchar(2500),
Costo_Habitacion float,
Id_Hotel int,
Imagen_Habitacion blob,
Id_Reserva_Habitacion int
);

create table Habitacion_Caracteristicas(
Id_Habitacion_Caracteristicas int auto_increment primary key,
Id_Caracteristicas int,
Id_Habitacion int
);

create table Caracteristicas(
Id_Caracteristicas int auto_increment primary key,
Tamaño_Caracteristicas float,
Aire_Acondicionado_Caracteristicas int,
Television_Caracteristicas int,
Tipo_Cama_Caracteristicas varchar(80)
);



/*Llaves Foraneas*/


alter table Cliente
add foreign key (Id_TipoDocumento) references TipoDocumento(Id_TipoDocumento);


alter table Encargado
add foreign key (Id_tipoDocumento) references TipoDocumento(Id_TipoDocumento);


alter table Reserva
add foreign key (Id_Cliente) references Cliente(Id_Cliente),
add foreign key (Id_MedioPago) references Medio_Pago(Id_MedioPago);


alter table Reserva_Servicio
add foreign key (Id_hotel) references Hotel(Id_Hotel),
add foreign key (Id_Servicio) references Servicio(Id_Servicio);


alter table Reserva_ReservaServicio
add foreign key (Id_Reserva) references Reserva(Id_Reserva),
add foreign key (Id_ReservaServicio) references Reserva_Servicio(Id_ReservaServicio);


alter table hotel
add foreign key (Id_Encargado) references Encargado(Id_Encargado);


alter table Opinion
add foreign key (Id_Hotel) references Hotel(Id_Hotel);


alter table Hotel_Servicio
add foreign key (Id_Hotel) references Hotel(Id_Hotel),
add foreign key (Id_Servicio) references Servicio(Id_Servicio);


alter table Reserva_Habitacion
add foreign key (Id_Reserva) references Reserva(Id_Reserva);


alter table Habitacion
add foreign key (Id_Hotel) references Hotel(Id_Hotel),
add foreign key (Id_Reserva_Habitacion) references Reserva_Habitacion(Id_Reserva_Habitacion);


alter table Habitacion_Caracteristicas
add foreign key (Id_Caracteristicas) references Caracteristicas(Id_Caracteristicas),
add foreign key (Id_Habitacion) references Habitacion(Id_Habitacion);

-- ******************************************** --
use siproyectohoteles;

alter table encargado
add Foto_Encargado longblob not null;