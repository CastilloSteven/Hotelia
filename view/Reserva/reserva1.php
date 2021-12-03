<?php
require_once '../../model/cliente.php';
$model = new Cliente();
$cliente=$model->tipoDoc();

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
                            $nameHotel = $_GET['nombre'];
                            $direHotel = $_GET['direccion'];
                            $descHotel = $_GET['descripcion'];
                            $descHab = $_GET['descHab'];
                            $numCamas = $_GET['numCamas'];
                            $costo = $_GET['costo'];
                            $fechaI = $_GET['ingreso'];
                            $fechaS = $_GET['salida'];
                            $adultos = $_GET['adultos'];
                            $niños = $_GET['niños'];
                            $id = $_GET['id'];
                            ?>
        	<!-- InstanceBeginEditable name="yieldyu" -->
            <div class="container">
            	<ul class="breadcrumb">
                    <li><a href="../../index.php">Inicio</a></li>
                    <li><a href="javascript:history.back()"><?php echo $nameHotel ?></a></li>
                    <li><a href="#">Reservar</a></li>
                </ul>
                
                <div class="row">
                	<div class="step col-md-12">
                        <ul class="clearfix">
                            <li class="cur">
                                <span class="tooltip-s">Datos</span>
                                <span class="number">1</span>
                            </li>
                            <li>
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
                <?php
                if($_SESSION!=null){
                    $cliente=$model->getId($_SESSION['Id']);
                    if ($model !=null) {
                        foreach ($cliente as $cli) {
                ?>
                <section class="row step-content">
                	<div class="col-md-8">
                    	<div class="tiles-white row">
                            <h3 class="tiles-title"><strong class="text-blue">Datos</strong> de contacto</h3>
                            <form action="../../controller/reservaController.php" method="get" class="form-group">
                                <div class="input col-sm-8">
                                    <label>Nombres :</label>
                                    <input type="text" class="icon-a icon-a-user" placeholder="Nombre de contacto" value=<?php echo $cli['Nombres_Cliente']?> name="name" readonly />
                                    <span class="help-block">Ej: Ivan Felipe</span>
                                </div>
                                <div class="input col-sm-8">
                                    <label>Apellidos :</label>
                                    <input type="text" class="icon-a icon-a-user" placeholder="Apellidos de contacto" value=<?php echo $cli['Apellidos_Cliente']?> name="lastname" readonly />
                                    <span class="help-block">Ej: Alvarado Rojas</span>
                                </div>
                                <div class="input col-sm-6">
                                    <label>Numero de contacto :</label>
                                    <input type="tel"  placeholder="Numero de telefono" value=<?php echo $cli['Telefono_Cliente']?> maxlength="10" name="phone" readonly/>
                                    <span class="help-block">Ej: 3125694227</span>
                                </div> 
                                  <div class="input col-sm-6">
                                       <label>Fecha de nacimiento :</label>
                                       <input type="date" name="birth" value=<?php echo $cli['FechaNac_Cliente']?> readonly />
                                       <span class="help-block">Debe ser mayor de edad</span>
                                    </div> 
                                 
                                <div class="input col-sm-6">
                                    <label>Tipo de documento :</label>
                                <select name="tipoDoc"  readonly>
                                    <option value=""><?php echo $cli['Tipo_Documento']?></option>
                                </select>
                               </div>  
                               <div class="input col-sm-6">
                                <label>Documento :</label>
                                <input type="number" class="icon-a icon-a-user" placeholder="Numero de documento" value=<?php echo $cli['Numero_Documento_Cliente']?> maxlength="10" name="numDoc" readonly >
                            </div>
                                <div class="input col-sm-8">
                                    <label>Correo :</label>
                                    <input type="email" class="icon-a icon-a-mail" placeholder="Correo de contacto" value=<?php echo $cli['Correo_Cliente']?> name="email" readonly >
                                    <span class="help-block" >Ej: ejemplo@gmail.com</span>
                                </div>
                                <div class="input col-sm-4">
                                    <label>Contraseña :</label>
                                    <input type="password" class="icon-a icon-a-lock" value=<?php echo $cli['Contraseña_Cliente']?> placeholder="Contraseña" name="clave" readonly>
                                </div>   
                            </div>
                                <div class="btn-block bold clearfix">
                            <div class="pull-right m-t-20">
                                <a class="btn btn-info" href="reserva2.php?id=<?php echo $id ?>&nameHotel=<?php echo $nameHotel ?>&direccion=<?php echo $direHotel ?>&descripcion=<?php echo $descHotel ?>&descHab=<?php echo $descHab ?>&numCamas=<?php echo $numCamas ?>&costo=<?php echo $costo ?>&ingreso=<?php echo $fechaI ?>&salida=<?php echo $fechaS ?>&adultos=<?php echo $adultos ?>&niños=<?php echo $niños ?>&name=<?php echo $cli['Nombres_Cliente']?>&lastname=<?php echo $cli['Apellidos_Cliente']?>&phone=<?php echo $cli['Telefono_Cliente']?>&birth=<?php echo $cli['FechaNac_Cliente']?>&tipoDoc=<?php echo $cli['Tipo_Documento']?>&numDoc=<?php echo $cli['Numero_Documento_Cliente']?>&email=<?php echo $cli['Correo_Cliente']?>&clave=<?php echo $cli['Contraseña_Cliente']?>">Seguir <i class="glyphicon glyphicon-circle-arrow-right"></i></a>                           
                            </div>                      
                    </div>
                        </div>
                    <aside class="col-md-4">
                    	<div class="tiles-white titled">
                       
                        	<div class="head"><span><i class="icon arrow-down"></i> <?php echo $nameHotel; ?></span></div>
                            <ul class="price-list">
                            	<li class="clearfix"><?php echo $descHab ?><span class="price">$ <strong><?php echo $costo; ?></strong></span></li>
                                <li class="clearfix"><?php echo $direHotel; ?></span></li>
                                <li class="clearfix"><?php echo $descHotel; ?>	</span></li>
                                <li class="clearfix"><?php echo $numCamas; ?> <i class="fas fa-bed"></i> Camas</span></li>
                                <li class="clearfix"><?php echo $adultos?> <i class="fas fa-male"></i> Adultos | <?php echo $niños?> <i class="fas fa-child"></i> Niños</span></li>
                                <li class="clearfix"><?php echo $fechaI." | ".$fechaS?></span></li>
                                <li class="separator"></li>
                                <li class="total clearfix">Total <span class="price">$ <strong><?php echo $costo; ?></strong></span></li>
                            </ul>
                            <p class="alert alert-warning">El costo puede variar dependiendo de los servicios adicionales </p>
                        </div>
                        </form> 
                            </div>
                        </div>
                    </aside>
                        
                       <?php
                        }
                        }
                }else{
                       ?>
                       <section class="row step-content">
                	<div class="col-md-8">
                    	<div class="tiles-white row">
                            <h3 class="tiles-title"><strong class="text-blue">Datos</strong> de contacto</h3>
                            <form action="../../controller/reservaController.php" method="get" class="form-group">
                                <div class="input col-sm-8">
                                    <label>Nombres :</label>
                                    <input type="text" class="icon-a icon-a-user" placeholder="Nombre de contacto" name="name" />
                                    <span class="help-block">Ej: Ivan Felipe</span>
                                </div>
                                <div class="input col-sm-8">
                                    <label>Apellidos :</label>
                                    <input type="text" class="icon-a icon-a-user" placeholder="Apellidos de contacto" name="lastname" />
                                    <span class="help-block">Ej: Alvarado Rojas</span>
                                </div>
                                <div class="input col-sm-6">
                                    <label>Numero de contacto :</label>
                                    <input type="tel"  placeholder="Numero de telefono" maxlength="10" name="phone" />
                                    <span class="help-block">Ej: 3125694227</span>
                                </div> 
                                  <div class="input col-sm-6">
                                       <label>Fecha de nacimiento :</label>
                                       <input type="date" name="birth" />
                                       <span class="help-block">Debe ser mayor de edad</span>
                                    </div> 
                                 
                                <div class="input col-sm-6">
                                    <label>Tipo de documento :</label>
                                <select name="tipoDoc" >
                                    <option value="">Seleccione su tipo de documento</option>
                                    <?php
        foreach ($cliente as $dato):
          echo '<option value"'.$dato["Id_TipoDocumento"].'">'.$dato["Tipo_Documento"].'</option>';
        endforeach;
        ?>
                                </select>
                               </div>  
                               <div class="input col-sm-6">
                                <label>Documento :</label>
                                <input type="number" class="icon-a icon-a-user" placeholder="Numero de documento" maxlength="10" name="numDoc" >
                            </div>
                                <div class="input col-sm-8">
                                    <label>Correo :</label>
                                    <input type="email" class="icon-a icon-a-mail" placeholder="Correo de contacto" name="email" >
                                    <span class="help-block">Ej: ejemplo@gmail.com</span>
                                </div>
                                <div class="input col-sm-8">
                                    <label>Confirmar correo :</label>
                                    <input type="email" class="icon-a icon-a-mail" placeholder="Confirmar correo de contacto" >
                                    <span class="help-block">Ej: ejemplo@gmail.com</span>
                                </div>
                                <div class="input col-sm-4">
                                    <label>Contraseña :</label>
                                    <input type="password" class="icon-a icon-a-lock" placeholder="Contraseña" name="clave" >
                                </div>
      
                       </div>
                           <?php
                            $nameHotel = $_GET['nombre'];
                            $direHotel = $_GET['direccion'];
                            $descHotel = $_GET['descripcion'];
                            $descHab = $_GET['descHab'];
                            $numCamas = $_GET['numCamas'];
                            $costo = $_GET['costo'];
                            $fechaI = $_GET['ingreso'];
                            $fechaS = $_GET['salida'];
                            $adultos = $_GET['adultos'];
                            $niños = $_GET['niños'];
                            ?>
                       
                       <div class="btn-block bold clearfix">
                            <div class="pull-right m-t-20">
                                <a class="btn btn-info" href="reserva2.php?id=<?php echo $id ?>&nameHotel=<?php echo $nameHotel ?>&direccion=<?php echo $direHotel ?>&descripcion=<?php echo $descHotel ?>&descHab=<?php echo $descHab ?>&numCamas=<?php echo $numCamas ?>&costo=<?php echo $costo ?>&ingreso=<?php echo $fechaI ?>&salida=<?php echo $fechaS ?>&adultos=<?php echo $adultos ?>&niños=<?php echo $niños ?>&name=Daniel&lastname=Carrascal&phone=3224589623&birth=1991-08-16&tipoDoc=Cedula de Ciudadania&numDoc=458569632&email=danielc@gmail.com&clave=456852">Siguiente <i class="glyphicon glyphicon-circle-arrow-right"></i></a>                           
                            </div>
                        
                        </div>
                    
                       
                    </div>
                    <aside class="col-md-4">
                    	<div class="tiles-white titled">
                       
                        	<div class="head"><span><i class="icon arrow-down"></i> <?php echo $nameHotel; ?></span></div>
                            <ul class="price-list">
                            	<li class="clearfix"><?php echo $descHab ?><span class="price">$ <strong><?php echo $costo; ?></strong></span></li>
                                <li class="clearfix"><?php echo $direHotel; ?></span></li>
                                <li class="clearfix"><?php echo $descHotel; ?>	</span></li>
                                <li class="clearfix"><?php echo $numCamas?> camas</span></li>
                                <li class="clearfix"><?php echo $adultos?> adultos</span></li>
                                <li class="clearfix"><?php echo $niños?> niños</span></li>
                                <li class="clearfix"><?php echo $fechaI." | ".$fechaS?></span></li>
                                <li class="separator"></li>
                                <li class="total clearfix">Total <span class="price">$ <strong><?php echo $costo; ?></strong></span></li>
                            </ul>
                            <p class="alert alert-warning">El costo puede variar dependiendo de los servicios adicionales </p>
                        </div>
                        </form> 
                            </div>
                        </div>
                    </aside>
                       <?php
                }
                       ?>

                 
                </section>
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
        <!-- InstanceBeginEditable name="js_custom" --><!-- InstanceEndEditable -->
    </body>
<!-- InstanceEnd --></html>
