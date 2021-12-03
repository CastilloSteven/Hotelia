<?php

require_once '../model/reserva.php';

$action=$_GET["a"];


if($action=="Res"){
    $model = new Reserva();
    $nameHotel = $_GET['nameHotel'];
    $direHotel = $_GET['direccion'];
    $descHotel = $_GET['descripcion'];
    $descHab = $_GET['descHab'];
    $numCamas = $_GET['numCamas'];
    $costo = $_GET['costo'];
    $fechaI = $_GET['ingreso'];
    $fechaS = $_GET['salida'];
    $name= $_GET['name'];
    $apellido = $_GET['lastname'];
    $nacimiento = $_GET['birth'];
    $documento = $_GET['numDoc'];
    $tipoDocumento = $_GET['tipoDoc'];
    if($tipoDocumento == "Cedula de Ciudadania"){
        $tipoDocumento=1;
    } else if($tipoDocumento == "Cedula de Extranjeria"){
        $tipoDocumento=2;
    }else if($tipoDocumento == "Pasaporte"){
        $tipoDocumento=3;
    }
    $correo = $_GET['email'];
    $clave = $_GET['clave'];
    $telefono = $_GET['phone'];   
    $fechaActual = date('Y-m-d H:i:s');
    $estadoReserva = 'Activa';
    $adultos = $_GET['adultos'];
    $niños = $_GET['niños'];
    $estadoHab = "Activa";
    $idHab = $_GET['idHab'];
    $personas = $adultos+$niños;

    $model->agregar($idHab,$costo,$fechaI,$fechaS,$name,$apellido,$nacimiento,$telefono,$documento,$correo,$clave, $tipoDocumento,$fechaActual,$estadoReserva,$adultos,$niños,$personas,$nameHotel,$direHotel,$descHotel,$estadoHab,$numCamas,$descHab);

}

if($action=="Res2"){
    $model = new Reserva();
    $nameHotel = $_GET['nameHotel'];
    $direHotel = $_GET['direccion'];
    $descHotel = $_GET['descripcion'];
    $descHab = $_GET['descHab'];
    $numCamas = $_GET['numCamas'];
    $costo = $_GET['costo'];
    $fechaI = $_GET['ingreso'];
    $fechaS = $_GET['salida'];   
    $fechaActual = date('Y-m-d H:i:s');
    $estadoReserva = 'Activa';
    $adultos = $_GET['adultos'];
    $niños = $_GET['niños'];
    $estadoHab = "Activa";
    $id = $_SESSION['Id'];
    $idHab = $_GET['idHab'];
    $personas = $adultos+$niños;

    $model->agregar2($idHab,$costo,$fechaI,$fechaS,$fechaActual,$estadoReserva,$adultos,$niños,$personas,$nameHotel,$direHotel,$descHotel,$estadoHab,$numCamas,$descHab,$id);

}

if($action=="Delete"){
    $model = new Reserva();
    $id = isset($_POST["id"]);
    $model->inactivar($id);
}

// function crudAjax(){
//     $model = new Reserva();
//     $nombre = isset($_POST['name']);
//     $apellido = isset($_POST['lastname']);
//     $nacimiento = isset($_POST['birth']);



// }


?>