<?php
    require_once('../model/encargadoModel.php');

    $accion=$_POST["AccionB"];

    if ($accion=="Registrarse") {
        $ModeloEncargado= new Encargado();
        $NomEnc=$_POST['NomEnc'];
        $ApeEnc=$_POST['ApeEnc'];
        $FecNacEnc=$_POST['FecNacEnc'];
        $TelEnc=$_POST['TelEnc'];
        $NumDocEnc=$_POST['NumDocEnc'];
        $CorEnc=$_POST['CorEnc'];
        $ConEnc=$_POST['ConEnc'];
        $TipoDoc=$_POST['TipoDoc'];

        $ModeloEncargado->add($NomEnc,$ApeEnc,$FecNacEnc,$TelEnc,$NumDocEnc,$CorEnc,$ConEnc,$TipoDoc);
    }

    if ($accion=="IniciarSesion") {

        $CorEnc=$_POST['CorEnc'];
        $ConEnc=$_POST['ConEnc'];

        $ModeloEncargado=new Encargado();
        $ModeloEncargado->login($CorEnc,$ConEnc);
        if ($ModeloEncargado->login($CorEnc,$ConEnc)) {
            header('Location:../view/EncargadoView/indexEncargado.php');
        }
        else{
            header('Location:../view/login.php?error=1');
        }
    }

    if ($accion=="Actualizar") {
        $ModeloEncargado= new Encargado();
        $IdEnc=$_POST['IdEnc'];
        $NomEnc=$_POST['NomEnc'];
        $ApeEnc=$_POST['ApeEnc'];
        $TelEnc=$_POST['TelEnc'];
        $CorEnc=$_POST['CorEnc'];
        $ConEnc=$_POST['ConEnc'];

        $ModeloEncargado->update($IdEnc,$NomEnc,$ApeEnc,$TelEnc,$CorEnc,$ConEnc);
    }


    if ($accion=="CerrarSesion") {
        $salir= new Encargado();
        $salir->signOut();
    }


    if ($accion=="Reporte") {
        $Rango=$_POST['Rango'];
        if ($Rango=="1") {
            header('Location:../view/EncargadoView/ReporteHotelia.php?Rango=7');
        }else if ($Rango=="2") {
            header('Location:../view/EncargadoView/ReporteHotelia.php?Rango=30');
        }else if ($Rango=="3") {
            header('Location:../view/EncargadoView/ReporteHotelia.php?Rango=365');
        }
    }

?>