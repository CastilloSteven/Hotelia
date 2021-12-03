<?php
require_once '../../model/cliente.php';
$model = new Cliente();
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
            <?php
                            $nameHotel = $_GET['nameHotel'];
                            $direHotel = $_GET['direccion'];
                            $descHotel = $_GET['descripcion'];
                            $descHab = $_GET['descHab'];
                            $numCamas = $_GET['numCamas'];
                            $costo = $_GET['costo'];
                            $fechaI = $_GET['ingreso'];
                            $fechaS = $_GET['salida'];
                            $name = $_GET['name'];
                            $lastname = $_GET['lastname'];
                            $tel = $_GET['phone'];
                            $fechaNac = $_GET['birth'];
                            $tipoDoc = $_GET['tipoDoc'];
                            $numDoc = $_GET['numDoc'];
                            $email = $_GET['email'];
                            $pass = $_GET['clave'];
                            $adultos = $_GET['adultos'];
                            $niños = $_GET['niños'];
                            $id = $_GET['id'];
                            ?>
        	<!-- InstanceBeginEditable name="yieldyu" -->
            <div class="container">
            	<ul class="breadcrumb">
                    <li><a href="../../index.php">Inicio</a></li>
                    <li><a href="javascript:history.go(-2)"><?php echo $nameHotel ?></a></li>
                    <li><a href="#">Reservar</a></li>
                </ul>
                
                <div class="row">
                	<div class="step col-md-12">
                        <ul class="clearfix">
                            <li class="done">
                                <span class="tooltip-s">Datos</span>
                                <span class="number">1</span>
                            </li>
                            <li class="cur">
                                <span class="tooltip-s">Pago</span>
                                <span class="number">2</span>
                            </li>
                            <li>
                                <span class="tooltip-s">Ticket</span>
                                <span class="number">3</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <section class="row step-content">
                	<div class="col-md-8">
                    	<div class="tiles-white row">
                            <h3 class="tiles-title">
                            	Seleccione el metodo de <strong class="text-blue">pago</strong>
                            </h3>
                            <form action="" class="form-group clearfix">
                                <div class="nav-pay">
                                    <div class="col-sm-4 text-center">
                                        <img src="../../assets/images/credito.jpg" alt="" />
                                        <a href="#atm" class="btn btn-info"><i class="glyph-icon flaticon-buy11"></i> Tarjeta de credito</a>
                                    </div>
                                <div class="col-sm-4 text-center">
                                    <img src="../../assets/images/debito.jpg" alt="" />
                                    <a href="#cc" class="btn btn-def"><i class="glyph-icon flaticon-credit2"></i> Tarjeta debito</a>
                                </div>
                                <div class="col-sm-4 text-center" style="margin-bottom: 20px;">
                                <img src="../../assets/images/nequi.jpg" alt="" />
                                <a href="#klik" class="btn btn-def"><i class="glyph-icon flaticon-write49"></i> Nequi</a>
                                </div>
                            </div>
                                <section class="pay-content">
                                	<div id="klik" style="display:none">
                                    	<h5 class="title-line">Nequi</h5>
                                        <p>Ingrese los datos de su cuenta nequi</p>
                                    	<div class="alert alert-info m-t-30 m-b-40">
                                         El pago se realizara cuando usted ya se encuentre en el hotel
                                        </div>
                                        <div class="input col-sm-8">
                                            <label>Nombre del titular de la cuenta :</label>
                                            <input type="text" class="icon-a icon-a-user" placeholder="Nombre del usuario" />
                                            <span class="help-block">El usuario que va a realizar el pago </span>
                                        </div>
                                         <div class="img-method col-sm-4 text-center">
                                           <img src="../../assets/images/nequi.jpg" alt="" />
                                        </div>
                                        <div class="input col-sm-6">
                                            <label>Numero de la cuenta:</label>
                                            <input type="text" class="icon-a icon-a-lock" placeholder="Numero de la cuenta" />
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="input col-sm-6">
                                            <label>Confirmar numero :</label>
                                            <input type="text" class="icon-a icon-a-lock" placeholder="Confirmar numero de la cuenta">
                                            <span class="help-block">El numero debe coincidir </span>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="list">
                                            <h5 class="title-line">Informacion</h5>
                                            <ul>
                                                <li>El pago se realizara una vez el usuario se encuentre en el hotel.</li>
                                                <li>Recuerde tener el valor total de la reserva.</li>
                                                <li>Hotelia no se hace responsable si sus datos son erroneos. </li>
                                                <li>Recuerde que el pago se realizara por el metodo que usted ha elegido.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="cc" style="display:none">
                                    	<h5 class="title-line">Tarjeta debito</h5>
                                        <p>Ingrese los datos que se piden en su totalidad</p>
                                        <div class="alert alert-info m-t-30 m-b-40">
                                            El hotel no puede solicitar mas datos de los otorgados. No brinde informacion adicional.
                                        </div>
                                        <div class="input col-sm-8">
                                            <label>Numero de la tarjeta:</label>
                                            <input type="text" class="icon-a icon-a-lock" placeholder="Numero sin espacios" />
                                            <span class="help-block">Verifique que esten correctos</span>
                                        </div>
                                         <div class="img-method col-sm-4 text-center">
                                           <img src="../../assets/images/debito.jpg" alt="" />
                                        </div>
                                        <div class="input col-sm-6">
                                            <label>Fecha de caducidad</label>
                                            <div class="row">
                                            	<div class="col-xs-6">
                                                    <select class="input-sm">
                                                        <option>Eliga el mes</option>
                                                        <option>01-Ene</option>
                                                        <option>02-Feb</option>
                                                        <option>03-Mar</option>
                                                        <option>04-Abr</option>
                                                        <option>05-May</option>
                                                        <option>06-Jun</option>
                                                        <option>07-Jul</option>
                                                        <option>08-Ago</option>
                                                        <option>09-Sep</option>
                                                        <option>10-Oct</option>
                                                        <option>11-Nov</option>
                                                        <option>12-Dic</option>
                                                    </select>
                                                </div>
                                                 <div class="col-xs-6">
                                                    <select class="input-sm">
                                                        <option>Eliga el año</option>
                                                        <option>2021</option>
                                                        <option>2022</option>
                                                        <option>2023</option>
                                                        <option>2024</option>
                                                        <option>2025</option>
                                                        <option>2026</option>
                                                        <option>2027</option>
                                                    </select>
                                                 </div>
                                            </div>
                                            <span class="help-block">La fecha no puede ser posterior a la actual</span>
                                        </div>
                                        <div class="input col-sm-6">
                                            <label>CVV 4 digitos :</label>
                                            <div class="col-xs-5 no-margin no-padding">
                                            	<input type="text" class="icon-a icon-a-lock" placeholder="CCV">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="input col-sm-6">
                                            <label>Nombre del titular :</label>
                                            <input type="text" class="icon-a icon-a-user" placeholder="Nombre del titular de la tarjeta" />
                                            <span class="help-block">Recuerde que es el nombre del titular de la tarjeta</span>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="list">
                                            <h5 class="title-line">Informacion</h5>
                                            <ul>
                                                <li>El pago se realizara una vez el usuario se encuentre en el hotel.</li>
                                                <li>Recuerde tener el valor total de la reserva.</li>
                                                <li>Hotelia no se hace responsable si sus datos son erroneos. </li>
                                                <li>Recuerde que el pago se realizara por el metodo que usted ha elegido.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div id="atm">
                                    	<h5 class="title-line">Tarjeta de credito</h5>
                                        <p>Ingrese los datos que se piden en su totalidad</p>
                                        <div class="alert alert-warning m-t-30 m-b-40">
                                            <strong>El hotel no puede solicitar mas datos de los otorgados.</strong> No brinde informacion adicional.
                                        </div>
                                        <div class="bold col-sm-12 text-danger">
                                        	<h4>Fuera de servicio</h4>
                                            <p>El hotel no dispone de esta opcion. <a href="#">Mas informacion</a>.</p>
                                        </div>
                                        
                                    </div>
                                </section>
                            </form>
                       </div>
                       
                       <div class="tiles-blue-sky">
                       		<div class="row">
                            	<section class="col-sm-6 form-group clearfix">
                                	<h5><strong>¿Dispone de un cupon?</strong></h5>
                                    <div class="input m-t-20 m-b-20">
                                        <label>Codigo del cupon:</label>
                                        <input type="text" class="icon-a icon-a-kupon" placeholder="Codigo" />
                                        <span class="help-block">El codigo debe ser valido y no haber expirado</span>
                                        <a href="#" class="btn btn-danger">Mas informacion</a>
                                    </div>
                                </section>
                                <section class="col-sm-6">
                                	<h5><strong>Detalle del descuento</strong></h5>
                                    <ul class="price-list">
                                        <li class="clearfix">Lorem Airlines (Adult) x1	<span class="price">Rp <strong>623.500</strong></span></li>
                                        <li class="clearfix">Bagasi (Adult) CGK-DPS	<span class="price">Rp <strong>0</strong></span></li>
                                        <li class="clearfix">Bagasi (Adult) CGK-DPS	<span class="price">Rp <strong>0</strong></span></li>
                                        <li class="clearfix">Bagasi (Adult) CGK-DPS	<span class="price">Rp <strong>0</strong></span></li>
                                        <li class="clearfix">Bagasi (Adult) CGK-DPS	<span class="price">Rp <strong>20.000</strong></span></li>
                                        <li class="separator"></li>
                                        <li class="total clearfix">Total <span class="price">Rp <strong>643.012</strong></span></li>
                                    </ul>
                                    <p>
                                    	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh 
                                    </p>
                                </section>
                            </div>
                       </div>
                    </div>
                    <aside class="col-md-4">
                    	                    
                    <div class="tiles-blue-dark">
                        	<h4><i class="icon info-icon"></i> Importante</h4>
                            Al realizar la reserva sus datos quedaran registrados para en proximas ocasiones reservar de manera rapida. 
                        </div>
                    <form action="../../controller/reservaController.php" method="get">
                    	<div class="tiles-white collapsed titled">
                  
                        	<div class="head"><span><i class="icon arrow-down"></i> <?php echo $nameHotel; ?></span></div>
                            <ul class="price-list">
                            	<li class="clearfix"><?php echo $descHab ?><span class="price">$ <strong><?php echo $costo; ?></strong></span></li>
                                <li class="clearfix"><?php echo $direHotel; ?></span></li>
                                <li class="clearfix"><?php echo $descHotel; ?>	</span></li>
                                <li class="clearfix"><?php echo $numCamas?> <i class="fas fa-bed"></i> Camas</span></li>
                                <li class="clearfix"><?php echo $adultos?> <i class="fas fa-male"></i> Adultos | <?php echo $niños?> <i class="fas fa-child"></i> Niños</span></li>
                                <li class="clearfix"><?php echo $fechaI." | ".$fechaS?></span></li>
                                <li class="separator"></li>
                                <li class="total clearfix">Total <span class="price">$ <strong><?php echo $costo; ?></strong></span></li>
                            </ul>
                            <p class="alert alert-warning">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh </p>
                        </div>
                        
                       
                        
                        <div class="tiles-white titled">
                        	<div class="head"><span><i class="icon arrow-down"></i> <?php echo $name." ".$lastname ?></span></div>
                            <div class="head2 clearfix">
                                <h4 class="col-xs-9">
                                    <strong><?php echo $tipoDoc ?></strong>
                                </h4>
                                <div class="col-xs-3 text-center m-t-10">
                                    <span class="text-small"><?php echo $numDoc ?></span>
                                </div>
                            </div>
                            <ul class="p-b-20">
                                <br>
                                <li><label class="col-sm-8">Telefono :</label><?php echo $tel ?></li><br>
                                <li><label class="col-sm-7">Correo :</label><?php echo $email ?></li><br>
                                <li><label class="col-sm-9">Fecha de nacimiento :</label><?php echo $fechaNac ?></li>
                                <li><label class="col-sm-9 hidden">Contraseña :<?php echo $pass ?></label></li>
                            </ul>
                            <br />
                            
                        </div>
                        
                    </aside>
                </section>
                <section class="col-md-8 no-padding">
                	<div class="tiles-white no-margin titled clearfix row">
                        <p class="col-sm-9 p-t-10">
                            Haciendo click en el boton usted acepta la<a href="#"> Política de Privacidad y Condiciones de Uso</a> de <a href="#"> Hotelia </a>
                        </p>
                        <div class="col-sm-3 text-center">
                            <br />
                            <?php
                            if($_SESSION!=null){ 
                            ?>
                                <a href="../../controller/reservaController.php?a=Res2&idHab=<?php echo $id ?>&nameHotel=<?php echo $nameHotel ?>&direccion=<?php echo $direHotel ?>&descripcion=<?php echo $descHotel ?>&descHab=<?php echo $descHab ?>&numCamas=<?php echo $numCamas ?>&costo=<?php echo $costo ?>&ingreso=<?php echo $fechaI ?>&salida=<?php echo $fechaS ?>&adultos=<?php echo $adultos ?>&niños=<?php echo $niños ?>&name=<?php echo $name ?>&lastname=<?php echo $lastname ?>&phone=<?php echo $tel ?>&birth=<?php echo $fechaNac ?>&tipoDoc=<?php echo $tipoDoc ?>&numDoc=<?php echo $numDoc ?>&email=<?php echo $email ?>&clave=<?php echo $pass ?>&id=<?php $_SESSION['Id'] ?>" class="btn btn-info btn-lg">Enviar</a>
                                <?php
                            }else{
                                ?>
                            <a href="../../controller/reservaController.php?a=Res&idHab=<?php echo $id ?>&nameHotel=<?php echo $nameHotel ?>&direccion=<?php echo $direHotel ?>&descripcion=<?php echo $descHotel ?>&descHab=<?php echo $descHab ?>&numCamas=<?php echo $numCamas ?>&costo=<?php echo $costo ?>&ingreso=<?php echo $fechaI ?>&salida=<?php echo $fechaS ?>&adultos=<?php echo $adultos ?>&niños=<?php echo $niños ?>&name=<?php echo $name ?>&lastname=<?php echo $lastname ?>&phone=<?php echo $tel ?>&birth=<?php echo $fechaNac ?>&tipoDoc=<?php echo $tipoDoc ?>&numDoc=<?php echo $numDoc ?>&email=<?php echo $email ?>&clave=<?php echo $pass ?>" class="btn btn-info btn-lg">Seguir</a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </section>
            </form>
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
        
    </div> <!-- /container -->        
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
			$('.nav-pay a').click(function(){
				$('.nav-pay a').removeClass('btn-info').addClass('btn-def');	
				$(this).removeClass('btn-def').addClass('btn-info');
				var target = $(this).attr('href');
				$('.pay-content > div').hide();
				$(target).show();
			});
        </script>
		<!-- InstanceEndEditable -->
    </body>
<!-- InstanceEnd --></html>
