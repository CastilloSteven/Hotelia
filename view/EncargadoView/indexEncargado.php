<?php
require_once('../../model/encargadoModel.php');
$ModeloEncargado= new Encargado();
$ModeloEncargado->validateSession();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Hotelia</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/jquery-ui.css">
        <link rel="stylesheet" href="../../assets/css/main.css">
        <link rel="stylesheet" href="../../assets/fonts/flaticon.css">
        <link rel="stylesheet" href="../../assets/css/mobile.css" />

        <script src="../../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
</head>
<body>
    <h1>index encargado</h1>
    <?php echo "$_SESSION[NOMBRES]"." ". $_SESSION['APELLIDOS']; ?> - <?php echo "$_SESSION[CORREO]";?><br>

    <a href="perfilEncargado.php"><button>MI PERFIL</button></a>
    <a href="../HotelView/apartadoHotel.php"><button>MI HOTEL</button></a><br><br>

    <form action="../../controller/encargadoController.php" method="POST">
        <input type="submit" name="AccionB" value="CerrarSesion">
    </form>

    
		<script src="../../assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="../../assets/js/jquery-ui.min.js"></script>	
        <script src="../../assets/js/vendor/bootstrap.min.js"></script>
        <script src="../../assets/js/bootstrap-datepicker.js"></script>	
        <script src="../../assets/js/jquery.slides.min.js"></script>	
        <script src="../../assets/js/jquery.colorbox.js"></script>	
        <script src="../../assets/js/enquire.min.js"></script>
        <script src="../../assets/js/main.js"></script>
</body>
</html>