<?php
    require_once('../model/hotelModel.php');

    $accion=$_POST['AccionB'];

    if ($accion == "Registrar") {
        $ModeloHotel=new Hotel();
        $NomHot=$_POST['NomHot'];
        $DirHot=$_POST['DirHot'];
        $DesHot=$_POST['DesHot'];
        $ImaHot=$_POST['ImaHot'];
        $EstHot=$_POST['EstHot'];
        $IdEnc=$_POST['IdEnc'];

        $ModeloHotel->add($NomHot,$DirHot,$DesHot,$ImaHot,$EstHot, $IdEnc);
    }

    if ($accion == "Actualizar") {
        $ModeloHotel=new Hotel();
        $IdHot=$_POST['IdHot'];
        $NomHot=$_POST['NomHot'];
        $DirHot=$_POST['DirHot'];
        $DesHot=$_POST['DesHot'];
        $ImaHot=$_POST['ImaHot'];
        $EstHot=$_POST['EstHot'];
        $IdEnc=$_POST['IdEnc'];

        $ModeloHotel->update($IdHot,$NomHot,$DirHot,$DesHot,$EstHot,$IdEnc);
    }

    if(isset($_POST['consulta'])){
        $consulta->buscarHotel();
    }





?>