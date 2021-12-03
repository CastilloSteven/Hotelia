
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
	
-- habitacion **************************************************************************

delimiter //
create procedure proInfoHab(in idHot int)
begin
select * from habitacion
where Id_Hotel = idHot;
end //
delimiter ; 