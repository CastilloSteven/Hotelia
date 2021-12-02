<?php
require_once '../../model/habitacion.php';
$model = new Habitacion();
$habitacion=$model->listarHab();

?>
<!doctype html>
 <html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Hotelia</title>
    <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../../assets/css/jquery-ui.css" />
        <link rel="stylesheet" href="../../assets/css/main.css" />
        <link rel="stylesheet" href="../../fonts/flaticon.css" />
        <link rel="stylesheet" href="../../assets/css/mobile.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        
		<div class="main-wrap">
          <header class="mini-header">
          		<a class="menu glyphicon glyphicon-align-justify" href="#"></a>
                <a class="logo" href="#">
                    <img src="assets/images/logo.png" alt="logo" />
                </a>
                 <a class="search glyphicon glyphicon-search" href="#"></a>
          </header>
          
       	  <header class="main-header" id="header">
            	<div class="top clearfix">
                	<div class="container">
                    	<ul class="pull-left contact-info">
                            <li><i class="glyphicon glyphicon-envelope"></i> info@stravel.com</li>
                            <li><i class="glyphicon glyphicon-phone"></i> +62903244222</li>
                        </ul>
                </div>
            </div>
                
            <div class="main-menu">
                	<div class="container">
                    	<a href="#" class="cur pull-left">
                            <span class="text-blue text-big">Hotelia</span>
                            Nuestros <strong class="text-blue">servicios</strong>
                        </a>
                        <a href="#" class="pull-left">
                            <span class="text-blue text-big">Popular</span>
                            Sitios recomendados para tu viaje
                        </a>
                        <a class="logo" href="../../index.php">
                            <img src="../../assets/images/logo.png" alt="logo" />
                        </a>
                        <a href="#" class="pull-right">
                            <span class="text-blue text-big">¿Por qué Hotelia?</span>
                            Las ventajas que te ofrecemos
                        </a>
                        <a href="#" class="pull-right">
                            <span class="text-blue text-big">Soporte</span>
                            Todo sobre nosotros
                        </a>
                    </div>
                </div>
                <span class="glyphicon glyphicon-align-justify">&nbsp;</span>
            </header>
        	<!-- InstanceBeginEditable name="yieldyu" -->
            <?php
                            $nameHotel = $_GET['nombre'];
                            $direHotel = $_GET['direccion'];
                            $descHotel = $_GET['descripcion'];
                            $fechaI = $_GET['ingreso'];
                            $fechaS = $_GET['salida'];
                            $adultos = $_GET['adultos'];
                            $niños = $_GET['niños'];
                            $costo = $_GET['costo'];
                            ?>
            <div class="container">
            	<ul class="breadcrumb pull-left">
                    <li><a href="../../index.php">Inicio</a></li>
                    <li><a href="#"><?php echo $nameHotel ?></a></li>
                </ul>
            </div>
            <form action="" method="get">
            <section class="promo-head">
                	<div class="container">
           
                            
                    	<div class="row">
                        	<div class="col-md-4 info p-t-5 p-b-10">
                                <h5><?php echo $nameHotel ?></h5>
                                <div class="star-block no-margin">
                                    <span class="periode"><?php echo $fechaI." | ".$fechaS ?></span>
                                    <span class="icon star"></span>
                                    <span class="icon star"></span>
                                    <span class="icon star"></span>
                                    <span class="icon star"></span>
                                    <span class="icon star-empty"></span>
                                </div>
                            </div>
                            <aside class="col-sm-4 provider">
                   
                            </aside>
                            <div class="col-sm-2 p-t-20">
                            	<span class="price full-width">
                                COP<strong> $<?php echo $costo ?></strong>
                                </span>
                            </div>
                            <div class="col-sm-2 p-t-30">
                            	<a href="#habitacion" class="btn btn-info">Reserva ahora</a>
                            </div>
                        </div>
                    </div>
                </section>
                
            <div class="container">
            	<article class="main-arc row">
                	<div class="col-md-6">
                    	<div class="slider">
                        	<div id="slides">
                              <img src="../../assets/images/slider/bogota1.jpg">
                              <img src="../../assets/images/slider/bogota2.jpg">
                              <img src="../../assets/images/slider/bogota3.jpg">
                              <img src="../../assets/images/slider/bogota4.jpeg">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text">
                    	<h4 class="text-blue">Direccion</h4>
                        <p><?php echo $direHotel ?> </p>
                        <br />
                        <h4 class="text-blue">Descripcion</h4>
                        <p><?php echo $descHotel ?></p>
                        <br />
                        <ol>
                            <li class="hidden"><?php echo $adultos ?></li>
                            <li class="hidden"><?php echo $niños ?></li>
                        </ol>
                    </div>
                </article>
                            </div>
                            <div class="row">
                                <div class="col-md-2">

                                </div>
                	<div class="col-md-6 text-center">
                    	<section class="filter-list form-group row text-center">
                            <strong class="col-sm-2 text-right">Ordenar por</strong>
                            <div class="input col-sm-4">
                                <label></label>
                                <select>
                                    <option>Calificación</option>
                                    <option>Precio: Menor a Mayor</option>
                                    <option>Precio: Mayor a Menor</option>
                                </select>
                            </div>
                        </section>
                        
                        <section class="show-gallery promo text-center">
                        <?php
        foreach ($habitacion as $dato){
        ?>
                        	<div class="item" id="habitacion">
                           <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $dato['Imagen_Habitacion'] ).'"/>'; ?>
                                 <section class="detail">
                                    <div class="info">
                                    	<div class="col-xs-8">
                                        
                                        	<h5><?php echo $dato['Descripcion_Habitacion'] ?></h5>
                                            <div class="star-block no-margin">
                                                <span class="periode"><?php echo $dato['CantidadCamas_Habitacion']." camas" ?></span>
                                                <span class="icon star"></span>
                                                <span class="icon star"></span>
                                                <span class="icon star"></span>
                                                <span class="icon star"></span>
                                                <span class="icon star-empty"></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-3 p-t-20">
                                        	<span class="price full-width">
                                                Antes <span class="coret">$305.000</span><br>
                                              Ahora <strong><?php echo "$".$dato['Costo_Habitacion'] ?></strong>
                                            </span>
                                        </div>
                                    </div>
                                      <a href="#" class="btn btn-lg btn-def">Caracteristicas</a>
                                	  <a href="../Reserva/reserva1.php?id=<?php echo $dato['Id_Habitacion'] ?>&nombre=<?php echo $nameHotel ?>&direccion=<?php echo $direHotel ?>&descripcion=<?php echo $descHotel ?>&descHab=<?php echo $dato['Descripcion_Habitacion'] ?>&numCamas=<?php echo $dato['CantidadCamas_Habitacion'] ?>&costo=<?php echo $dato['Costo_Habitacion'] ?>&ingreso=<?php echo $fechaI ?>&salida=<?php echo $fechaS ?>&adultos=<?php echo $adultos ?>&niños=<?php echo $niños ?>" class="btn btn-lg btn-info">Reservar</a>
                                </section>                          
                            </div>
                                  <?php
        }
                    ?>
                        </section>
                    </div>
                </form>
      
                    
                    <aside class="related-tour col-md-3">
                    	<h3 class="title full-width">Otros <strong class="text-blue"> Hoteles </strong></h3>
                        <ul>
                        	<li>
                            	<section class="row">
                                	<div class="col-xs-7">
                                    	<h4>
	                                        Borobudur Temple
                                            <span>Jawa Tengah, Indonesia</span>
                                        </h4>
                                        <figure>
                                        	<img src="../../assets/images/hotel1.jpg" alt="" />
                                        </figure>
                                    </div>
                                    <div class="col-xs-5">
                                    	<span class="price">
                                            from <span class="coret">Rp.400k</span><br>
                                            <strong>Rp.328k</strong>pp
                                        </span>
                                        <div class="star-block">
                                        	<span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star-empty"></span>
                                        </div>
                                        <a href="#" class="btn btn-def">Check Now</a>
                                        <a href="#" class="btn btn-info">Get it Now</a>
                                    </div>
                                </section>
                            </li>
                            
                            <li>
                            	<section class="row">
                                	<div class="col-xs-7">
                                    	<h4>
	                                        Borobudur Temple
                                            <span>Jawa Tengah, Indonesia</span>
                                        </h4>
                                        <figure>
                                        	<img src="../../assets/images/hotel2.jpg" alt="" />
                                        </figure>
                                    </div>
                                    <div class="col-xs-5">
                                    	<span class="price">
                                            from <span class="coret">Rp.400k</span><br>
                                            <strong>Rp.328k</strong>pp
                                        </span>
                                        <div class="star-block">
                                        	<span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star-empty"></span>
                                        </div>
                                        <a href="#" class="btn btn-def">Check Now</a>
                                        <a href="#" class="btn btn-info">Get it Now</a>
                                    </div>
                                </section>
                            </li>
                            
                            <li>
                            	<section class="row">
                                	<div class="col-xs-7">
                                    	<h4>
	                                        Borobudur Temple
                                            <span>Jawa Tengah, Indonesia</span>
                                        </h4>
                                        <figure>
                                        	<img src="../../assets/images/hotel3.jpg" alt="" />
                                        </figure>
                                    </div>
                                    <div class="col-xs-5">
                                    	<span class="price">
                                            from <span class="coret">Rp.400k</span><br>
                                            <strong>Rp.328k</strong>pp
                                        </span>
                                        <div class="star-block">
                                        	<span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star-empty"></span>
                                        </div>
                                        <a href="#" class="btn btn-def">Check Now</a>
                                        <a href="#" class="btn btn-info">Get it Now</a>
                                    </div>
                                </section>
                            </li>
                            
                            <li>
                            	<section class="row">
                                	<div class="col-xs-7">
                                    	<h4>
	                                        Borobudur Temple
                                            <span>Jawa Tengah, Indonesia</span>
                                        </h4>
                                        <figure>
                                        	<img src="../../assets/images/hotel4.jpg" alt="" />
                                        </figure>
                                    </div>
                                    <div class="col-xs-5">
                                    	<span class="price">
                                            from <span class="coret">Rp.400k</span><br>
                                            <strong>Rp.328k</strong>pp
                                        </span>
                                        <div class="star-block">
                                        	<span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star-empty"></span>
                                        </div>
                                        <a href="#" class="btn btn-def">Check Now</a>
                                        <a href="#" class="btn btn-info">Get it Now</a>
                                    </div>
                                </section>
                            </li>
                            
                            
                        </ul>
                    </aside>
                    
                </div>
            </div>
    
        	<!-- InstanceEndEditable -->
            <footer>
        	<a href="#header" class="icon icon-flight"></a>
        	<div class="container">
            	<span class="icon deco"></span>
            	<div class="row">
                	<div class="col-sm-2 text-center">
                    	<img class="logo" src="../../assets/images/logo.png" alt="logo" />
                    </div>
                    <div class="col-sm-3">
                    	<ul>
                        	<li><strong>Nosotros</strong></li>
                            <li><a href="#">Quiénes somos</a></li>
                            <li><a href="#">Cómo funcionan nuestros servicios</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                    	<ul>
                        	<li><strong>Contactar</strong></li>
                            <li><a href="#">Preguntas frecuentes</a></li>
                            <li><a href="#">Atención al cliente</a></li>
                            <li><a href="#">Ayuda</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 subscribe">
                    	<strong>Subscribete</strong>
                        <input type="email" placeholder="Tu correo electronico" />
                        <input type="submit" class="btn btn-info" value="Enviar" />
                        <div class="socmed">
                        	Encuentranos : 
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-youtube"></i>
                            <i class="fab fa-github"></i>
                        </div>
                    </div>
                </div>
            </div>
            <span class="copyright">Copyright&copy;2021 │ Todos los derechos reservados</span>
        </footer>
    </div>
        
     <!-- /container -->        
    <script src="../../assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="../../assets/js/jquery-ui.min.js"></script>	
        <script src="../../assets/js/vendor/bootstrap.min.js"></script>
        <script src="../../assets/js/bootstrap-datepicker.js"></script>	
        <script src="../../assets/js/jquery.slides.min.js"></script>	
        <script src="../../assets/js/jquery.colorbox.js"></script>	
        <script src="../../assets/js/enquire.min.js"></script>
        <script src="../../assets/js/main.js"></script>
        <!-- InstanceBeginEditable name="js_custom" -->
        	<script>
				$(function() {
				  $('#slides').slidesjs({
					width: 555,
					height: 340,
					navigation: {
					  effect: "fade"
					},
					pagination: false,
					effect: {
					  fade: {
						speed: 400
					  }
					}
				  });
				});
            </script>
		<!-- InstanceEndEditable -->
    </body>
<!-- InstanceEnd --></html>
