
-- Encargado
-- insertar
	delimiter //
	create procedure proInsertEnc(in nomEnc varchar (80), in apeEnc varchar (80), in fecEnc date, in telEnc varchar (10), NumDocEnc varchar(10),CorEnc varchar(50),ConEnc varchar (30),TipoDoc int)
	begin
	insert into Encargado (Nombres_Encargado,Apellidos_Encargado,FechaNac_Encargado,Telefono_Encargado,Numero_Documento_Encargado,Correo_Encargado,Contraseña_Encargado,Id_TipoDocumento)
	values (nomEnc, apeEnc, fecEnc, telEnc, NumDocEnc, CorEnc,ConEnc,TipoDoc);
	End //
	delimiter ;
    
-- login
	delimiter //
    create procedure proLoginEnc(in CorEnc varchar (80), in ConEnc varchar (30))
    begin
    select * from Encargado where Correo_Encargado= CorEnc and Contraseña_Encargado = ConEnc;
    end //
    delimiter ;

-- info encargado
	delimiter //
    create procedure proInfoEnc(in idEnc int)
    begin
	select
    enc.Nombres_Encargado,enc.Apellidos_Encargado,enc.FechaNac_Encargado,enc.Telefono_Encargado,
    enc.Numero_Documento_Encargado,enc.Correo_Encargado,enc.Contraseña_Encargado,tipD.Tipo_Documento 
	from Encargado as enc
	inner join TipoDocumento as tipD
	on enc.Id_TipoDocumento= tipD.Id_TipoDocumento
	where enc.id_Encargado = idEnc;
    end //
    delimiter ;
    
-- actualizar
	delimiter //
    create procedure proUpdateEnc(in IdEnc int,in NomEnc varchar (80), in ApeEnc varchar (80), in TelEnc varchar (10),CorEnc varchar(50),ConEnc varchar (30))
    begin
    update Encargado 
	set Nombres_Encargado=NomEnc, Apellidos_Encargado=ApeEnc, Telefono_Encargado=TelEnc, Correo_Encargado=CorEnc, Contraseña_Encargado=ConEnc
	where Id_Encargado=IdEnc;
    end //
    delimiter ;
    
--    call proUpdateEnc("1","steven andres","Castillo Barrera","3107853605","sacastillo889@misena.edu.co","clavesecreta");
    
	delimiter //
    create procedure proReporte(in IdEnc int,in Rango int)
    begin

		select
		res_hab.Id_Reserva,res_hab.Id_Habitacion,res_hab.Cantidad_Personas_Reserva_Habitacion,
		res_hab.Cantidad_Adultos_Reserva_Habitacion ,res_hab.Cantidad_Niños_Reserva_Habitacion,

		res.FechaEntrada_Reserva,res.FechaSalida_Reserva,res.TotalApagar_Reserva,

		hot.Nombre_Hotel,

		cli.Nombres_Cliente, cli.Apellidos_Cliente,cli.Telefono_Cliente,cli.Correo_Cliente

		from reserva_habitacion as res_hab
		inner join reserva as res on res_hab.Id_Reserva = res.Id_Reserva
		inner join habitacion as hab on res_hab.Id_Habitacion = hab.Id_Habitacion
        inner join cliente as cli on res.Id_Cliente = cli.Id_Cliente
		inner join hotel as hot on hab.Id_Hotel = hot.Id_Hotel
		inner join Encargado as enc on hot.Id_Encargado = enc.Id_Encargado
		where enc.Id_Encargado = IdEnc and res.FechaEntrada_Reserva between DATE_SUB(NOW(),INTERVAL Rango day) and Date(now());

    end //
    delimiter ;
    
    

-- hotel **************************************************************************

-- informacion de todos los hoteles del encargado
	delimiter //
    create procedure proInfoHot(in IdEnc int)
    begin
    select * from Hotel as hot
    inner join Encargado as enc
    on enc.Id_Encargado = hot.Id_Encargado
    where enc.Id_Encargado = IdEnc;
    end //
    delimiter ;
    
-- insertar
	delimiter //
    create procedure proInsertHot(in NomHot varchar (80),in DirHot varchar (80), in DesHot varchar (2500),in ImaHot blob, in EstHot boolean, in IdEnc int)
    begin
    insert into Hotel (Nombre_Hotel,Direccion_Hotel,Descripcion_Hotel,Imagen_Hotel,Estado,Id_Encargado) 
    values (NomHot,DirHot,DesHot,ImaHot,EstHot,IdEnc);
    End //
    delimiter ;

-- actualizar
	delimiter //
    create procedure proUpdateHot(in IdHot int, in NomHot varchar (80),in DirHot varchar (80), in DesHot varchar (2500), in IdEnc int)
	begin
    update Hotel
    set Nombre_Hotel=NomHot, Direccion_Hotel=DirHot, Descripcion_Hotel=DesHot
    where Id_Hotel=IdHot and Id_Encargado=IdEnc;
    end //
    delimiter ;

-- informacion de hotel especifico
	delimiter //
    create procedure proInfoHotEsp (in IdHot int, in IdEnc int)
    begin
    select * from Hotel
    where Id_Hotel = IdHot and Id_Encargado = IdEnc;
    end //
    delimiter ;
 --  call proInfoHotEsp (2,1);
   
-- estado inactivo
	delimiter //
    create procedure proCambioInactivoHot(in IdHot int, in IdEnc int)
    begin
    update Hotel
	set Estado = 0
    where Id_Hotel = IdHot and Id_Encargado = IdEnc;
    end //
    delimiter ;
    
   -- call proCambioInactivoHot (2,1);
   -- call proCambioActivoHot (2,1);
    
    select * from hotel;
    
-- estado activo
    delimiter //
    create procedure proCambioActivoHot(in IdHot int, in IdEnc int)
    begin
    update Hotel
	set Estado = 1
    where Id_Hotel = IdHot and Id_Encargado = IdEnc;
    end //
    delimiter ;
    
    
-- Cambio de foto Encargado 
	delimiter //
    create procedure proCambioFotoEnc(in IdEnc int, in FotoEnc longblob)
    begin
    update Encargado
    set Foto_Encargado = FotoEnc
    where Id_Encargado = IdEnc;
    end //
    delimiter ;
    
    delimiter //
    create procedure proReservasHotel (in IdEnc int)
    begin
select res.Id_Reserva, cli.Nombres_Cliente, cli.Apellidos_Cliente, res.FechaEntrada_Reserva, res.FechaSalida_Reserva, res.Estado_Reserva, cli.Telefono_Cliente,ResHab.Id_Habitacion
from reserva as res
inner join reserva_habitacion as ResHab on res.Id_Reserva = ResHab.Id_Reserva
inner join cliente as cli on res.Id_Cliente = cli.Id_Cliente
inner join habitacion as hab on ResHab.Id_Habitacion = hab.Id_Habitacion
inner join hotel as hot on hab.Id_Hotel = hot.Id_Hotel
inner join Encargado as enc on hot.Id_Encargado = enc.Id_Encargado
		where enc.Id_Encargado = 1 and res.FechaEntrada_Reserva between DATE_SUB(NOW(),INTERVAL 30 day) and Date(now());
    end //
    delimiter ;
	drop procedure proReservasHotel;
-- habitacion **************************************************************************

delimiter //
create procedure proInfoHab(in idHot int)
begin
select * from habitacion
where Id_Hotel = idHot;
end //
delimiter ; 