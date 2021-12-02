<?php
require_once('../../model/habitacionModel.php');
require_once('../../model/encargadoModel.php');
require_once('../../model/hotelModel.php');
$ModeloEncargado= new Encargado();
$ModeloEncargado->validateSession();
$ModeloHabitacion=new Habitacion();
$ModeloHotel=new Hotel();
$ModeloHotel->getIdHotel($_SESSION['IDHOTEL']);

?>

<!DOCTYPE html>
<html>
<head>
  <title>listado registro habitacion</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet"  href="css/style.css">

</head>

<body>


  <div class="container">

  <div class="box">

   <h5 class="display-4 text-center">Listado de habitacion</h5>

    <div class="link-right">
      <a href="formhabitacion.php" class="link-primary">Agregar</a>
      
      <a href="../HotelView/apartadoHotel.php" class="link-primary">volver</a>
               
  </div>


  <div class="col-md-8md-offset-2">
 <table id="habitacion" class="table table-striped table-bordered" cellpacing="0" width="100%">
  <!--<table class="table table-striped">-->
  <thead>
    <tr>
                                       
                                       
      <th scope="col">Id</th>
      <th scope="col">Imagen</th>
      <th scope="col">cantidad de camas </th>
      <th scope="col">Estado Habitacion</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Costo</th>
      <th scope="col"></th>
      


    </tr>
  </thead>
  <tbody>
          <tr>
    <?php
        $Habitacion=$ModeloHabitacion->listar($_SESSION['IDHOTEL']);

        if ($Habitacion !=null) {
            foreach ($Habitacion as $Hab) {
    ?>
     
            <td><?php echo $Hab['Id_Habitacion']?></td>

            <td><center><?php echo '<img  width="100px" height="100px"  src="data:image/jpg;base64,'.base64_encode( $Hab['Imagen_Habitacion'] ). '"/>';?></center></td>

            <td><?php echo $Hab['CantidadCamas_Habitacion']?></td>
            <td><?php echo $Hab['Estado_Habitacion']?></td>
            <td><?php echo $Hab['Descripcion_Habitacion']?></td>
            <td><?php echo $Hab['Costo_Habitacion']?></td>
           

             <th><a href="Actualizar.php?id=<?php echo $Hab['Id_Habitacion'] ?>" class="btn btn-info">Editar</th> 
             <th><a href="Actualizar.php?id=<?php echo $Hab['Id_Habitacion'] ?>" class="btn btn-info">Inactivar</th>                                         
            </tr>
               


      <?php
          }}

      ?>
        </tbody>
  

     </div>
   </div>
 </div>
 </body>
 </html>