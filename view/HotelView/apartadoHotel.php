<?php
require_once('../../model/encargadoModel.php');
require_once('../../model/hotelModel.php');
$ModeloEncargado= new Encargado();
$ModeloEncargado->validateSession();

$ModeloHotel=new Hotel();

?>

<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- InstanceBeginEditable name="doctitle" -->
        <title>Hotelia</title>
        <!-- InstanceEndEditable -->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/jquery-ui.css">
        <link rel="stylesheet" href="../../assets/css/main.css">
        <link rel="stylesheet" href="../../assets/fonts/flaticon.css">
        <link rel="stylesheet" href="../../assets/css/mobile.css" />

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    
    </head>
    <body>
		<div class="main-wrap">
          <header class="mini-header">
          		<a class="menu glyphicon glyphicon-align-justify" href="#">&nbsp;</a>
                <a class="logo" href="#">
                    <img src="img/logo.png" alt="logo" />
                </a>
          </header>
          
       	  <header class="main-header" id="header">
            	<div class="top clearfix">
                	<div class="container">
                    	<ul class="pull-left contact-info">
                            <li>                        <li><?php echo "$_SESSION[NOMBRES]"." ". $_SESSION['APELLIDOS']; ?> - <?php echo "$_SESSION[CORREO]";?></li>
</li>
                        </ul>
                        
                    </div>
                </div>
                
                <div class="main-menu">
                	<div class="container">
                    	<a href="#" class="cur pull-left">
                            <span class="text-blue text-big">Flight Ticket</span>
                            More than <strong class="text-blue">1020</strong> Destination
                        </a>
                        <a href="#" class="pull-left">
                            <span class="text-blue text-big">Traveling Promo</span>
                            More than <strong class="text-blue">1020</strong> Promo's
                        </a>
                        <a class="logo" href="../../index.php">
                            <img src="../../assets/images/logo.png" alt="logo" />
                        </a>
                        <a href="#" class="pull-right">
                            <span class="text-blue text-big">Help And Support</span>
                            Duis autem vel eum iriue
                        </a>
                        <a href="#" class="pull-right">
                            <span class="text-blue text-big">News And Article</span>
                            Lorem Ipsum dolor sit amet
                        </a>
                    </div>
                </div>
                <span class="glyphicon glyphicon-align-justify">&nbsp;</span>
            </header>
        	<!-- InstanceBeginEditable name="yieldyu" -->
            <div class="container">
            	<ul class="breadcrumb">
                </ul>
                
               
                <section class="row step-content">
                    <aside class="col-md-3">
                        <div class="tiles-white titled no-margin">
                        	<div class="head"><span><i class="icon arrow-down"></i> User Option</span></div>
                           	<ul class="menu">
                               <li><a href="../EncargadoView/perfilEncargado.php" id="pro" class="cur"><i class="glyphicon glyphicon-user"></i> Perfil</a></li>
                               <li><a href="../HotelView/apartadoHotel.php" id="his"><i class="glyphicon glyphicon-compressed"></i> Mi Hotel</a></li>
                               <li><a href="Actualizar.php" id="his"><i class="glyphicon glyphicon-compressed"></i> Actualizar Hotel</a></li>
                                <li><a href="../Habitacion/habitacion.php" id="cre"><i class="glyphicon glyphicon-credit-card"></i> Mis Habitaciones</a></li>
                            </ul>
                        </div>
                    </aside>
                    
                    <div class="col-md-9">
                    	<div class="tiles-white row no-margin">
                            <h3 class="tiles-title">Datos del <strong class="text-blue">Hotel</strong></h3>
                            <h4 class="text-blue"><strong><i class="glyphicon glyphicon-star"></i><a href="signupHotel.php"> Registrar Hotel</a></strong></h4>
                            <section class="t-body">
                               <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Id Hotel</th>
                                            <th>Nombre del Hotel</th>
                                            <th>Direccion del Hotel</th>
                                            <th>Descripción del Hotel</th>
                                            <th>Imagen del Hotel</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php
        $Hotel=$ModeloHotel->getIdHot($_SESSION['ID']);
        if ($Hotel !=null) {
            foreach ($Hotel as $Hot) {
        ?>
            <td><?php echo $Hot['Id_Hotel']?></td>
            <td><?php echo $Hot['Nombre_Hotel']?></td>
            <td><?php echo $Hot['Direccion_Hotel']?></td>
            <td><?php echo $Hot['Descripcion_Hotel']?></td>
            <td><?php echo '<img src="data:image/jpg;base64,'.base64_encode( $Hot['Imagen_Hotel'] ).'"/>'; ?></td>
            <td>
                <?php if ($Hot['Estado'] == 0) { 
                    echo 'Hotel Cerrado';
                  }elseif ($Hot['Estado'] == 1) {
                    echo 'Hotel Abierto';
                  }
                ?>
            </td>
        </tr>
        <?php
            }}
        ?>
                                    </tbody>
                                </table>
                            </section>
                            <hr />
                                                  </div>
                    </div>
                </section>
            </div>
            
        	<!-- InstanceEndEditable -->
        	<footer>
        	<a href="#header" class="icon icon-flight"></a>
        	<div class="container">
            	<span class="icon deco"></span>
            	<div class="row">
                	<div class="col-sm-2 text-center">
                    <img src="../../assets/images/logo.png" alt="logo" />
                    </div>
                    <div class="col-sm-2">
                    	<ul>
                        	<li><strong>Our Menu</strong></li>
                            <li><a href="#">Press Center</a></li>
                            <li><a href="#">Travel News</a></li>
                            <li><a href="#">Best Price Guarantee</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                    	<ul>
                        	<li><strong>Usefull Link</strong></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Travel News</a></li>
                            <li><a href="#">Support Center</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                    	<ul>
                        	<li><strong>Account</strong></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Personal Information</a></li>
                            <li><a href="#">My Credit Slip</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 subscribe">
                    	<strong>Subscribe</strong>
                        <input type="email" placeholder="Your Email Address">
                        <input type="submit" class="btn btn-info" value="Send">
                        <div class="socmed">
                        	Find Us : 
                            <a href="#"><i class="icon fb"></i></a>
                            <a href="#"><i class="icon tw"></i></a>
                            <a href="#"><i class="icon yt"></i></a>
                            <a href="#"><i class="icon gp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
    </div> <!-- /container -->        
		<script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>	
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>	
        <script src="js/jquery.slides.min.js"></script>	
        <script src="js/jquery.colorbox.js"></script>	
        <script src="js/enquire.min.js"></script>
        <script src="js/main.js"></script>
        <!-- InstanceBeginEditable name="js_custom" --><!-- InstanceEndEditable -->
    </body>
<!-- InstanceEnd --></html>
