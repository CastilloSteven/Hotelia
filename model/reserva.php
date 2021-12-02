<?php
require_once 'conexion.php';
session_start();

class Reserva extends Conexion{

    public function __construct(){
        $this->db=parent::__construct();
    }

    public function listarRes($id){
            $smt=$this->db->prepare("SELECT * FROM cliente INNER JOIN reserva ON cliente.Id_Cliente = reserva.Id_Cliente 
            INNER JOIN reserva_habitacion ON reserva.Id_Reserva = reserva_habitacion.Id_Reserva
            INNER JOIN habitacion ON reserva_habitacion.Id_Habitacion = habitacion.Id_Habitacion
            INNER JOIN hotel ON habitacion.Id_Hotel = hotel.Id_Hotel WHERE cliente.Id_Cliente=$id");
            $id = $_SESSION['Id'];
            $smt->execute();
            $data=$smt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
    }

    public function ticket($id){
        $smt=$this->db->prepare("SELECT DISTINCT (SELECT MAX(Id_Reserva) FROM reserva) as 'Id_Reserva', Nombre_Hotel, Direccion_Hotel, Descripcion_Habitacion, TotalApagar_Reserva,Cantidad_Personas_Reserva_Habitacion,Cantidad_Adultos_Reserva_Habitacion,Cantidad_Niños_Reserva_Habitacion,FechaEntrada_Reserva,FechaSalida_Reserva,CantidadCamas_Habitacion FROM cliente INNER JOIN reserva ON cliente.Id_Cliente = reserva.Id_Cliente 
        INNER JOIN reserva_habitacion ON reserva.Id_Reserva = reserva_habitacion.Id_Reserva
        INNER JOIN habitacion ON reserva_habitacion.Id_Habitacion = habitacion.Id_Habitacion
        INNER JOIN hotel ON habitacion.Id_Hotel = hotel.Id_Hotel");
        $id = $_SESSION['Id'];
        $smt->execute();
        $data=$smt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
}

public function getId($id){
    $rows=null;
    $statement=$this->db->prepare('SELECT * FROM cliente INNER JOIN tipodocumento on cliente.Id_TipoDocumento = tipodocumento.Id_TipoDocumento WHERE Id_Cliente = :id;');
    $statement->bindparam(':id',$id);
    $statement->execute();
    while ($result=$statement->fetch()) {
        $rows[]=$result;
    }
    return $rows;
    
}


    public function agregar($costo,$fechaI,$fechaS,$name,$apellido,$nacimiento,$telefono,$documento,$correo,$clave, $tipoDocumento,$fechaActual,$estadoReserva,$adultos,$niños,$personas,$nameHotel,$direHotel,$descHotel,$estadoHab,$numCamas,$descHab){
        $smt=$this->db->prepare("INSERT INTO cliente (Nombres_Cliente, Apellidos_Cliente, FechaNac_Cliente, Telefono_Cliente, Numero_Documento_Cliente, Correo_cliente, Contraseña_Cliente,Id_TipoDocumento) VALUES (:nombre, :apellido, :nacimiento, :telefono, :documento, :correo, :clave, :tipoDoc);");

        $smt->bindparam(':nombre',$name);
        $smt->bindparam(':apellido',$apellido);
        $smt->bindparam(':nacimiento',$nacimiento);
        $smt->bindparam(':telefono',$telefono);
        $smt->bindparam(':documento',$documento);
        $smt->bindparam(':correo',$correo);
        $smt->bindparam(':clave',$clave);
        $smt->bindparam(':tipoDoc',$tipoDocumento);

        if($smt->execute()){
            $smt2=$this->db->prepare("INSERT INTO reserva (Fecha_Reserva, FechaEntrada_Reserva, FechaSalida_Reserva, TotalApagar_Reserva, Estado_Reserva) VALUES (:fechaRes, :fechaIng, :fechaSal, :tpago, :estado);");
            $smt2->bindparam(':fechaRes',$fechaActual);
            $smt2->bindparam(':fechaIng',$fechaI);
            $smt2->bindparam(':fechaSal',$fechaS);
            $smt2->bindparam(':tpago',$costo);
            $smt2->bindparam(':estado',$estadoReserva);

            if($smt2->execute()){
                $smt3=("INSERT INTO reserva_habitacion (Cantidad_Personas_Reserva_Habitacion, Cantidad_Adultos_Reserva_Habitacion, Cantidad_Niños_Reserva_Habitacion, Costo_Reserva_Reserva_Habitacion, Id_Reserva) VALUES ($personas, $adultos, $niños, $costo, (SELECT MAX(Id_Reserva) FROM reserva))");

                $resultado=$this->db->query($smt3); 

                if($resultado){
                    $smt4=$this->db->prepare("INSERT INTO hotel (Nombre_Hotel, Direccion_Hotel, Descripcion_Hotel) VALUES (:nameHotel, :direHotel, :descHotel);");
                    $smt4->bindparam(':nameHotel',$nameHotel);
                    $smt4->bindparam(':direHotel',$direHotel);
                    $smt4->bindparam(':descHotel',$descHotel);
                
                if($smt4->execute()){
                    $smt5=$this->db->prepare("INSERT INTO habitacion (CantidadCamas_Habitacion, Estado_Habitacion, Descripcion_Habitacion, Costo_Habitacion, Id_Hotel, Id_Reserva_Habitacion) VALUES (:numCam, :estHab, :descHab, :costo, (SELECT MAX(Id_Hotel) FROM hotel), (SELECT MAX(Id_Reserva_Habitacion) FROM reserva_habitacion))");

                    $smt5->bindparam(':numCam',$numCamas);
                    $smt5->bindparam(':estHab',$estadoHab);
                    $smt5->bindparam(':descHab',$descHab);
                    $smt5->bindparam(':costo',$costo);

                    if($smt5->execute()){
                        echo '
                        <script>
                            alert("Reserva exitosa");
                            window.location = "../view/Reserva/reserva2Proceso.php";
                        </script>        
                        ';
                    }else{
                        echo '
                        <script>
                            alert("Reserva fallida, no se inserto la habitacion");
                            window.location = "../index.php";
                        </script>        
                        ';
                    }
                    
                }else{
                    echo '
                        <script>
                            alert("Reserva fallida, no se inserto el hotel");
                            window.location = "../index.php";
                        </script>        
                        ';

                }
                }else{
                    echo '
                    <script>
                        alert("Reserva fallida, no se inserto la reserva de la habitacion");
                        window.location = "../index.php";
                    </script>        
                    ';
                }
            }else{
                echo '
                <script>
                    alert("Reserva fallida, no se inserto la reserva");
                    window.location = "../index.php";
                </script>        
                ';
            }

        }else{
            echo '
            <script>
                alert("Reserva fallida, no se inserto el cliente");
                window.location = "../index.php";
            </script>        
            ';
        }

    }
    public function agregar2($idHab,$costo,$fechaI,$fechaS,$fechaActual,$estadoReserva,$adultos,$niños,$personas,$nameHotel,$direHotel,$descHotel,$estadoHab,$numCamas,$descHab,$id){
            $smt2=$this->db->prepare("INSERT INTO reserva (Fecha_Reserva, FechaEntrada_Reserva, FechaSalida_Reserva, TotalApagar_Reserva, Estado_Reserva, Id_Cliente) VALUES (:fechaRes, :fechaIng, :fechaSal, :tpago, :estado, :id);");
            $smt2->bindparam(':fechaRes',$fechaActual);
            $smt2->bindparam(':fechaIng',$fechaI);
            $smt2->bindparam(':fechaSal',$fechaS);
            $smt2->bindparam(':tpago',$costo);
            $smt2->bindparam(':estado',$estadoReserva);
            $smt2->bindparam(':id',$id);

            if($smt2->execute()){
                $smt3=("INSERT INTO reserva_habitacion (Cantidad_Personas_Reserva_Habitacion, Cantidad_Adultos_Reserva_Habitacion, Cantidad_Niños_Reserva_Habitacion, Costo_Reserva_Reserva_Habitacion, Id_Reserva, Id_Habitacion) VALUES ($personas, $adultos, $niños, $costo, (SELECT MAX(Id_Reserva) FROM reserva), $idHab)");

                $resultado=$this->db->query($smt3); 

                    if($resultado){
                        echo '
                        <script>
                            alert("Reserva exitosa");
                            window.location = "../view/Reserva/reserva3.php";
                        </script>        
                        ';
                }else{
                    echo '
                    <script>
                        alert("Reserva fallida, no se inserto la reserva de la habitacion");
                        window.location = "../index.php";
                    </script>        
                    ';
                }
            }else{
                echo '
                <script>
                    alert("Reserva fallida, no se inserto la reserva");
                    window.location = "../index.php";
                </script>        
                ';
            }

    }

    public function inactivar($id){ 
        $smt=("UPDATE viewreservas SET Estado_Reserva = '0' WHERE Id_Reserva = '$id' ");		
       
        $resultado=$this->db->query($smt); 
                if($resultado){
                    header('Location: ../view/Reserva/consultarReservas.php');
                }else{
                    echo '
                    <script>
                        alert("No se puedo eliminiar");
                        window.location = "../view/Reserva/consultarReservas.php";
                    </script>        
                    ';
                }
    }

    // public function Eliminar($id){
    //             $smt=$this->db->prepare("UPDATE viewreserva SET Estado_Reserva = '0' WHERE Nombre_Hotel = ':id' ");
    //             $smt->bindparam(':id',$id);

    //             if($smt->execute()){
    //                 header('Location: ../view/consultarReservas.php');
    //             }
    //     }
    
}
?>