-- Tipo documento

insert into TipoDocumento (Tipo_Documento) values ('Cedula de Ciudadania');
insert into TipoDocumento (Tipo_Documento) values ('Cedula de Extranjeria');
insert into TipoDocumento (Tipo_Documento) values ('Pasaporte');

-- 
insert into Encargado (Nombres_Encargado,Apellidos_Encargado,FechaNac_Encargado,Telefono_Encargado,Numero_Documento_Encargado,Correo_Encargado,Contraseña_Encargado,Id_TipoDocumento)
	values ('steven', 'castillo', '2000-08-18', '3107853605', '1000161988', 'sacastillo889@misena.edu.co','clavesecreta',1);
    
insert into Encargado (Nombres_Encargado,Apellidos_Encargado,FechaNac_Encargado,Telefono_Encargado,Numero_Documento_Encargado,Correo_Encargado,Contraseña_Encargado,Id_TipoDocumento)
	values ('pruebas', 'Encargado', '2000-08-18', '3104853605', '1000162988', 'prueba@gmail.com','clavesecreta',1);
	
delete from encargado where Id_Encargado = 4;
--
use siproyectohoteles;
select * from cliente;
select * from encargado;
select * from	hotel;
select * from habitacion;
select Imagen_Hotel from hotel where Id_Hotel = 1;

select * from cliente;
select * from hotel where Id_Hotel = 2;
select * from tipoDocumento;
select * from Encargado where Correo_Encargado= 'sacastillo889@misena.edu.co' and Id_Encargado = 3;
-- delete from Encargado where Id_Encargado=2;
-- delete from Hotel where Id_Hotel=4;

SELECT * FROM cliente INNER join tipodocumento on cliente.Id_TipoDocumento= tipodocumento.Id_TipoDocumento;

select Id_Hotel from Hotel
where Id_Encargado = 1;

    insert into Hotel (Nombre_Hotel,Direccion_Hotel,Descripcion_Hotel,Imagen_Hotel,Estado,Id_Encargado) 
    values ("los parques","cr98 cll 3 b norte","Hotel comodo para la familia","",0,3);


/* vista de la informacion del hotel y los datos principales del encargado*/

create view infoHotelEnc
(`Nombre del Hotel`,`Direccion`,`Descripción`,`imagen`,`Nombre del Encargado`,`Telefono`,`Correo`)
as
select hot.Nombre_Hotel, hot.Direccion_Hotel, hot.Descripcion_Hotel, hot.Imagen_Hotel,
concat(enc.Nombres_Encargado," " , enc.Apellidos_Encargado), enc.Telefono_Encargado, enc.Correo_Encargado
from hotel as hot
inner join encargado as enc
on hot.Id_Encargado = enc.Id_Encargado;

select * from infoHotelEnc;

-- 1
create view InfoEncargado
as
select
    enc.Nombres_Encargado,enc.Apellidos_Encargado,enc.FechaNac_Encargado,enc.Telefono_Encargado,
    enc.Numero_Documento_Encargado,enc.Correo_Encargado,enc.Contraseña_Encargado,tipD.Tipo_Documento 
	from Encargado as enc
	inner join TipoDocumento as tipD
	on enc.Id_TipoDocumento= tipD.Id_TipoDocumento
	where enc.id_Encargado = idEnc;


-- 
select * from hotel;
select * from reserva;

update hotel
set Nombre_Hotel ="hotel mio", Direccion_Hotel="",Descripcion_Hotel=""
where Id_Hotel = 2;

SELECT * FROM hotel where Id_Hotel = 2 and Id_Encargado = 1;

delete from cliente where Id_Cliente = 10;
SELECT * FROM cliente WHERE Correo_Cliente = "sacastillo889@misena.edu.co" and Contraseña_Cliente = "clavesecreta";

insert into reserva (Fecha_Reserva,FechaEntrada_Reserva,FechaSalida_Reserva,TotalApagar_Reserva,Id_Cliente)

