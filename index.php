<?php

require_once 'model/hotel.php';
$model = new hotel();
$hotel=$model->listarHot();
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

        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/jquery-ui.css" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="fonts/flaticon.css" />
        <link rel="stylesheet" href="assets/css/mobile.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
        	<!-- Date Time item CSS -->
	<link rel="stylesheet" href="assets/plugins/flatpicker/flatpickr.min.css">

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
    	<div class="login-popup cb-popup" id="login-block">
        	
                <div class="wrap-register">
                    
                  <h2 class="title"><img src="assets/images/logo2.png" alt=""></h2>
                  <!-- <div class="social-login clearfix">
                    <a href="#" class="btn-login facebook"></a>
                    <a href="#" id="signInButton" class="btn-login google"></a>
                  </div>
    
                  <div class="line-or"><div class="text-or"></div></div> 
                   -->
                  <div class="clear"></div>
                  <form method="POST" action="controller/clienteController.php" accept-charset="UTF-8"><input name="_token" type="hidden" value="k5dNpcDie87dqH4093X4P3Do2WFmaArP3FsGmom6">
                      <div class="form-group">
                          <input type="email" class="icon-a icon-a-user form-control" autocomplete="off" id="email" name="email" placeholder="Correo">
                      </div>
    
    
    
                      <!-- sample input id warning -->
                      <div class="form-group">
                          <input type="password" id="password" class="icon-a icon-a-lock form-control" name="password" placeholder="Contraseña">
                          <div class="forgot">Olvidaste tu <a href="http://webfographics.com/forgot-password">contraseña</a></div>
                      </div>
    
                      <div class="form-group text-title" style="display: none;">
                          <input type="checkbox" name="remember_me">Recuerdame
                      </div>
    
                      <input type="text" hidden="hidden" id="os" name="os">
                      <input type="text" hidden="hidden" id="browser" name="browser">

                      <div class="top-warning "></div>
    
                    <div class="btn-block">
                      <button type="submit" name="btn" value="login" class="btn btn-danger btn-lg">INICIAR SESION</button>
                      <span id="pass_hide" hidden="hidden">hide</span>
                      <div class="member-wrap">
                          <span>¿No estas registrado?</span> <a class="login-now" href="view/Cliente/register.php">Registrate ahora</a>
                      </div>
                    </div>
              </form>
            </div>
            
        </div>

        <div class="login-popup cb-popup" id="login-block2">
        	
            <div class="wrap-register">
                
              <h2 class="title"><img src="assets/images/logo2.png" alt=""></h2>
              <!-- <div class="social-login clearfix">
                <a href="#" class="btn-login facebook"></a>
                <a href="#" id="signInButton" class="btn-login google"></a>
              </div>

              <div class="line-or"><div class="text-or"></div></div> 
               -->
              <div class="clear"></div>
              <form method="POST" action="controller/encargadoController.php" accept-charset="UTF-8"><input name="_token" type="hidden" value="k5dNpcDie87dqH4093X4P3Do2WFmaArP3FsGmom6">
                  <div class="form-group">
                      <input type="text" class="icon-a icon-a-user form-control" autocomplete="off" id="email"name="CorEnc" placeholder="Correo">
                  </div>



                  <!-- sample input id warning -->
                  <div class="form-group">
                      <input type="password" id="password" class="icon-a icon-a-lock form-control" name="ConEnc" placeholder="Contraseña">
                      <div class="forgot">Olvidaste tu <a href="http://webfographics.com/forgot-password">contraseña</a></div>
                  </div>

                  <div class="form-group text-title" style="display: none;">
                      <input type="checkbox" name="remember_me">Recuerdame
                  </div>

                  <input type="text" hidden="hidden" id="os" name="os">
                  <input type="text" hidden="hidden" id="browser" name="browser">

                  <div class="top-warning "></div>

                <div class="btn-block">
                  <button type="submit" class="btn btn-danger btn-lg" value="IniciarSesion" name="AccionB">INICIAR SESION</button>
                  <span id="pass_hide" hidden="hidden">hide</span>
                  <div class="member-wrap">
                  <span>¿No estas registrado?</span> <a class="login-now" href="view/Cliente/signup.php">Registrate ahora</a>
                  </div>
                </div>
          </form>
        </div>
        
    </div>
    
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
                            <li><i class="glyphicon glyphicon-envelope"></i> info@hotelia.com</li>
                            <li><i class="glyphicon glyphicon-phone"></i> +62903244222</li>
                        </ul>
                            <?php
                          if($_SESSION==null){
                            echo '<ul class="pull-right">';
                            echo '<li class="user">';
                                echo '<a class="btn btn-danger" id="login_btn">Iniciar sesion</a>';
                      echo '</li>';
                                echo '<li class="separator"></li>';
                                echo '<li>';
                                echo '<a class="btn btn-danger" id="login_btn2">Gestiona tu hotel</a>';
                            echo '</li>';
                            echo '<li class="separator"></li>';
                            echo '<ul>';
                          }else{
                            echo '<ul class="pull-right"  style=" display: none;"> ';
                            echo '<li class="user">>';
                                echo '<a class="btn btn-danger" id="login_btn">Iniciar sesion</a>';
                      echo '</li>';
                                echo '<li class="separator">></li>';
                                echo '<li>';
                                echo '<a class="btn btn-danger" id="login_btn2">Gestiona tu hotel</a>';
                            echo '</li>';
                            echo '<li class="separator">></li>';
                            echo '</ul>';
                            echo "<li class='pull-right'>";
                            echo "<a id='drop' href='view/Cliente/dashboard.php'>";
                                echo "Bienvenido ".$_SESSION['Nombre']." <img src='assets/images/panda.jpg' alt=''/>";
                                echo "</li>";
                          }
                            ?>
                           
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
                        <a class="logo" href="index.php">
                            <img src="assets/images/logo.png" alt="logo" />
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
<section class="banner">
   	  <div class="slider">

          <div class='csslider1 autoplay'>
              <input name="cs_anchor1" id='cs_slide1_0' type="radio" class='cs_anchor slide' >
              <input name="cs_anchor1" id='cs_slide1_1' type="radio" class='cs_anchor slide' >
              <input name="cs_anchor1" id='cs_slide1_2' type="radio" class='cs_anchor slide' >
              <input name="cs_anchor1" id='cs_play1' type="radio" class='cs_anchor' checked>
              <input name="cs_anchor1" id='cs_pause1_0' type="radio" class='cs_anchor pause'>
              <input name="cs_anchor1" id='cs_pause1_1' type="radio" class='cs_anchor pause'>
              <input name="cs_anchor1" id='cs_pause1_2' type="radio" class='cs_anchor pause'>
              <ul>
                  <li class="cs_skeleton"><img src="cssslider_files/csss_images1/bogota1.jpg" style="width: 100%;"></li>
                  <li class='num0 img slide'> <img src='assets/images/slider/bogota1.jpg' alt='img1' title='img1' /></li>
                  <li class='num1 img slide'> <img src='assets/images/slider/bogota2.jpg' alt='img2' title='img2' /></li>
                  <li class='num2 img slide'> <img src='assets/images/slider/bogota3.jpg' alt='img3' title='img3' /></li>
              </ul>
              <div class='cs_description'>
                  <label class='num0'>
                   	  <div class="cs_title">
                       	  <div class="cs_wrapper">
                       	    <div class="caption">
                                   <h2><span>Bogotá</span> lugares turisticos</h2>
                                   <span>Hotelia</span>
                                   <h3>$120.000</h3>
                            </div>
                       	  </div>
                      </div>
                   </label>
                  <label class='num1'>
                   	  <div class="cs_title">
                       	  <div class="cs_wrapper">
                              <div class="caption">
                                  <h2><span>Bogotá</span> lugares turisticos</h2>
                                  <span>Trivago</span>
                                  <h3>$140.000</h3>
                              </div>
                       	  </div>
                      </div>
                  </label>
                  <label class='num2'>
                   	  <div class="cs_title">
                       	  <div class="cs_wrapper">
                              <div class="caption">
                                  <h2><span>Bogotá</span> lugares turisticos</h2>
                                  <span>Booking</span>
                                  <h3>$138.000</h3>
                              </div>
                       	  </div>
                      </div>
                  </label>
              </div>
              <div class='cs_play_pause'>
                  <label class='cs_play' for='cs_play1'><span><i></i><b></b></span></label>
                  <label class='cs_pause num0' for='cs_pause1_0'><span><i></i><b></b></span></label>
                  <label class='cs_pause num1' for='cs_pause1_1'><span><i></i><b></b></span></label>
                  <label class='cs_pause num2' for='cs_pause1_2'><span><i></i><b></b></span></label>
                  </div>
              <div class='cs_arrowprev'>
                  <label class='num0' for='cs_slide1_0'><span><i></i><b></b></span></label>
                  <label class='num1' for='cs_slide1_1'><span><i></i><b></b></span></label>
                  <label class='num2' for='cs_slide1_2'><span><i></i><b></b></span></label>
              </div>
              <div class='cs_arrownext'>
                  <label class='num0' for='cs_slide1_0'><span><i></i><b></b></span></label>
                  <label class='num1' for='cs_slide1_1'><span><i></i><b></b></span></label>
                  <label class='num2' for='cs_slide1_2'><span><i></i><b></b></span></label>
              </div>
          </div>
      </div>
          <form id="Reserva" action="view/Hotel/hotel.php" method="get">
        <div id="search" class="search">
            <div class="container">
                <div class="form-group row no-margin">
                    <div class="input col-sm-4">
                        <label>Destino :</label>
                        <input type="text" id="searchHot" class="icon-a icon-a-plane-down autocomplete" placeholder="Lugar destino"/>
                    </div>
                    <div class="input col-sm-2">
                        <label>Fecha :</label>
                        <div class="card-box">
								<div class="card-body ">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="daterange">
											<label class="mdl-textfield__label">Seleccione el rango</label>
										</div>
								</div>
							</div>
                    </div>
                    <div class="input col-sm-2 passenger">
                        <label>Personas :</label>
                        <div class="col-xs-4">
                            <input type="number" value="0"/>
                            Adultos
                        </div>
                        <div class="col-xs-4">
                            <input type="number" value="0"/>
                            Niños
                        </div>
                        <div class="col-xs-4">
                            <input type="number" value="0"/>
                            Habitaciones
                        </div>
                    </div>
                    <div class="col-sm-2 submit no-padding text-center">
                        <input type="button" class="btn btn-info" value="Buscar Hotel" onclick="search()">
                        <br /><br />
                        
                        <a href="#" class="text-pink" onClick="$('.overview').slideToggle('slow')"><i class="glyphicon glyphicon-search"></i> Mas opciones</a>
                    </div>
                </div>
           </div>
      </div>
    </section>
    <section class="partner">
               	  <div class="container">
                      <div class="row">
                        <div class="col-sm-3"> Compara el precio</div>
                        <div class="col-sm-3"><a href="https://www.trivago.com.co/"><img src="assets/images/trivago.png" /></a></div>
                        <div class="col-sm-3"><a href="https://www.booking.com/index.es.html"><img src="assets/images/booking.jpg" /></a></div>
                        <div class="col-sm-3"><a href="https://www.kayak.com.co/"><img src="assets/images/kayak.png" /></a></div>
                      </div>
                  </div>
              </section>
  
<div id="hide" style="display: none;">
<section class="overview" style="display:none">
<div class="tab-panel">
<ul class="clearfix">
<li><a href="javascript:void(0)" data-href="#info" class="cur"><i class="glyphicon glyphicon-check"></i> General</a></li>
<li><a href="javascript:void(0)" data-href="#time"><i class="glyphicon glyphicon-time"></i> Tiempo</a></li>
<li><a href="javascript:void(0)" data-href="#price"><i class="glyphicon glyphicon-tag"></i> Precio</a></li>
<li><a href="javascript:void(0)" data-href="#date"><i class="glyphicon glyphicon-calendar"></i> Fecha</a></li>
</ul>
</div>
<div class="panel row no-border no-bg" id="info">
<div class="col-sm-3">
<div class="item">
<i class="glyphicon glyphicon-search"></i>
<p>
    Encontrados<br />
    <strong>640</strong><em>hoteles</em>
</p>
</div>
</div>
<div class="col-sm-3">
<div class="item">
<i class="glyphicon glyphicon-tag"></i>
<p>
    Mas barato<br />
    <strong>$35.000</strong><em>/ noche</em>
</p>
</div>
</div>
<div class="col-sm-3">
<div class="item">
<i class="glyphicon glyphicon-time"></i>
<p>
    Mas buscado<br />
    <strong>$77.000</strong><em>/ noche</em>
</p>
</div>
</div>
<div class="col-sm-3">
<div class="item">
<i class="glyphicon glyphicon-thumbs-up"></i>
<p>
    Mas recomendado<br />
    <strong>$96.000</strong><em>/ noche</em>
</p>
</div>
</div>
</div>


<div class="panel row boxed" id="time" style="display:none">
<div class="col-sm-3 p-l-30">
<h3 class="no-padding">Empresarial</h3>
<label class="checkbox bordered"><input type="checkbox" /> 04:00 - 11:00</label>
</div>
<div class="col-sm-3 p-l-30">
<h3 class="no-padding">Vacacional</h3>
<label class="checkbox bordered"><input type="checkbox" /> 11:00 - 15:00</label>
</div>
<div class="col-sm-3 p-l-30">
<h3 class="no-padding">Descanso</h3>
<label class="checkbox bordered"><input type="checkbox" /> 15:00 - 18:30</label>
</div>
<div class="col-sm-3 p-l-30">
<h3 class="no-padding">Turismo</h3>
<label class="checkbox bordered"><input type="checkbox" /> 18:30 - 11:00</label>
</div>
</div>


<div class="panel row boxed" id="price" style="display:none">
<div class="col-sm-12 p-l-30 p-r-30">
<h3 class="no-padding">Rango de precio</h3>
<div class="nstSlider" data-range_min="0" data-range_max="2500" data-cur_min="100" data-cur_max="800">
<div class="bar"></div>
<div class="leftGrip"></div>
<div class="rightGrip"></div>
</div>
<div class="leftLabel"></div>
<div class="rightLabel"></div>
</div>
</div>

<div class="panel row boxed" id="date" style="display:none">
<div class="col-sm-2 p-l-30 text-center">
<h3 class="no-padding">Min, 6 Sep</h3>
<strong>-</strong>
</div>
<div class="col-sm-2 p-l-30 text-center">
<h3 class="no-padding">Sen, 7 Sep</h3>
<label class="radio bordered"><input type="radio" name="time" />
<div class="headPrice text-blue">
    <span class="priceSymbol">Rp</span>
    <span class="priceMain"> 1.189</span>
    <span class="priceTail">.600</span>
</div>
</label>
</div>
<div class="col-sm-2 p-l-30 text-center">
<h3 class="no-padding">Sel, 8 Sep</h3>
<label class="radio bordered"><input type="radio" name="time" />
<div class="headPrice text-blue">
    <span class="priceSymbol">Rp</span>
    <span class="priceMain"> 1.189</span>
    <span class="priceTail">.600</span>
</div>
</label>
</div>
<div class="col-sm-2 p-l-30 text-center">
<h3 class="no-padding">Rab, 9 Sep</h3>
<label class="radio bordered"><input type="radio" name="time" />
<div class="headPrice text-blue">
    <span class="priceSymbol">Rp</span>
    <span class="priceMain"> 1.189</span>
    <span class="priceTail">.600</span>
</div>
</label>
</div>
<div class="col-sm-2 p-l-30 text-center">
<h3 class="no-padding">Kam, 10 Sep</h3>
<label class="radio bordered"><input type="radio" name="time" />
<div class="headPrice text-blue">
    <span class="priceSymbol">Rp</span>
    <span class="priceMain"> 1.189</span>
    <span class="priceTail">.600</span>
</div>
</label>
</div>
<div class="col-sm-2 p-l-30 text-center">
<div class="no-padding text-blue">
<h4><a href="javascript:void(0)"><i class="glyphicon glyphicon-calendar"></i><br />Pilih Tanggal Lain</a></h4>
<div id="datepicker" class="shadow-date" data-date="12/03/2012"></div>
<input type="hidden" id="my_hidden_input" />
</div>
</div>
</div>

</section>
<div class="clear"></div>
<section class="search-result">
        <?php
    if ($hotel !=null) {
        foreach ($hotel as $dato){

            $nombre = $dato['Nombre_Hotel'];
            $imagen= $dato['Imagen_Hotel'];
            $direccion = $dato['Direccion_Hotel'];
            $descripcion = $dato['Descripcion_Hotel'];
            $costo = $dato['Costo_Habitacion'];
        ?>
<div class="list-result col">


<div class="head">
<div class="col-sm-11" id="nameHotel">
 <label for="" name="nameHotel"><?php echo $nombre;?></label> 
</div>
</div>
<div class="detail row">
<section class="timeline col-sm-8">
    <ul>
  <li>
<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $imagen ).'"/>'; ?>
  </li>
  <li >
  <?php echo $direccion ?>
      <hr>
      <?php echo $descripcion ?>
  </li>
    </ul>
</section>  
<aside class="price col-sm-4">
    <div class="row">
        <div class="col-xs-5">
            <span class="coret">COP $132.000</span>
            <?php echo "COP $".$costo ?>
            <a class="btn btn-info" href="view/Hotel/hotel.php?nombre=<?php echo $nombre ?>&direccion=<?php echo $direccion ?>&descripcion=<?php echo $descripcion ?>&costo=<?php echo $costo ?>&ingreso=2021-09-10&salida=2021-09-12&adultos=2&niños=3"> Ver disponibilidad</a>
            <!-- <button class="btn btn-info" >Reservar</button> -->
        </div>
     
        <div class="col-xs-7 third-party">
            <strong>Comparar:</strong>
            <a class="clearfix" href="https://www.booking.com/index.es.html">
                <img src="assets/images/booking.jpg" alt="traveloka" />
            </a>

            <a class="clearfix" href="https://www.trivago.com.co/">
                <img src="assets/images/trivago.png" alt="tiket" />
            </a>
        </div>
    </div>
    <a href="#"><i class="glyphicon glyphicon-info-sign"></i> Learn how to save</a>
</aside>
</div>
<a href="javscript:void(0)" class="icon icon-tiket-detail" data-toggle="tooltip" data-placement="top" data-title="Show Detail">&nbsp;</a>


</div><?php
        }
        }
        ?>
</section>
</div>
</form>
                
    </div></section>

    <section class="main-promo">
              
          	<span class="icon icon-point"></span>
            <span class="icon separator"></span>
            <div class="container">
                
                <div class="row">
                    
                    <div class="col-sm-6 text-right p-r-40">
                    	<h3>¿Buscas hospedaje en<span class="text-blue"> Bogotá</span>?</h3>
                        Hotelia te ayuda a buscar el hospedaje que se ajuste mejor a tus necesidades. ¿Qué esperas?
                        <div class="btn-block">
                        	<a href="#search" class="btn btn-info">Busca ahora</a>
                        </div>
                    </div>
                    <div class="col-sm-6 text-left p-l-40">
                    	<h3>¿Por qué elegir <span class="text-blue"> Hotelia</span>?</h3>
                        Con nuestro servicio serás capaz de disfrutar de tu estadía en la capital colombiana con todo lo que más te gusta.
                        <div class="btn-block">
                        	<a href="#favSites" class="btn btn-def">Sitios populares</a>
                        </div>
                    </div>
                </div>
            </div>
          </section>  
          
          <section class="showcase text-center">
            <div id="favSites" class="container">
            	<h3 class="title"><strong class="text-blue"> Sitios </strong> populares</h3>
                <p>
                    Encuentra los sitios más populares de la capital de Colombia.
                </p>
             
                <div class="row show-gallery">
                    <div class="col-md-4">
                    	<div class="col-xs-6">
                        	<div class="item small">
                            	<img src="assets/images/route1.jpg" alt="" />
                                <section class="detail">
                                	<div class="info">
                                    	<h5>Borobudur Temple <span>Jawa Tengah, Indonesia</span></h5>
                                        <div class="star-block">
                                        	<span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star-empty"></span>
                                        </div>
                                        
                                        <span class="price">
                                            from <span class="coret">Rp.400k</span><br />
                                            <strong>Rp.328k</strong>pp
                                        </span>
                                    </div>
                                </section>
                            </div>
                        </div>
                    	<div class="col-xs-6">
                        	<div class="item small">
                            	<img src="assets/images/route2.jpg" alt="" />
                                 <section class="detail">
                                	<div class="info">
                                    	<h5>Borobudur Temple <span>Jawa Tengah, Indonesia</span></h5>
                                        <div class="star-block">
                                        	<span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star-empty"></span>
                                        </div>
                                        <span class="price">
                                            from <span class="coret">Rp.400k</span><br />
                                            <strong>Rp.328k</strong>pp
                                        </span>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="col-xs-12">
                        	<div class="item big">
                            	<span class="badge"><em>Oferta</em> 30%</span>
                            	<img src="assets/images/route3.jpg" alt="" />
                                <section class="detail">
                                	<div class="info">
                                    	<h5>Borobudur Temple <span>Jawa Tengah, Indonesia</span></h5>
                                        <div class="star-block">
                                        	<span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star-empty"></span>
                                        </div>
                                        <span class="price">
                                            from <span class="coret">Rp.400k</span><br />
                                            <strong>Rp.328k</strong>pp
                                        </span>
                                    </div>
                                   <a href="#" class="btn btn-def">Check Now</a>
                                    <a href="#" class="btn btn-info">Get it Now</a>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    	<div class="item big">
                            <img src="assets/images/route4.jpg" alt="" />
                             <section class="detail">
                                <div class="info">
                                    <h5>Borobudur Temple <span>Jawa Tengah, Indonesia</span></h5>
                                    <div class="star-block">
                                        <span class="icon star"></span>
                                        <span class="icon star"></span>
                                        <span class="icon star"></span>
                                        <span class="icon star"></span>
                                        <span class="icon star-empty"></span>
                                    </div>
                                    <span class="price">
                                        from <span class="coret">Rp.400k</span><br />
                                        <strong>Rp.328k</strong>pp
                                    </span>
                                </div>
                                  <a href="#" class="btn btn-def">Check Now</a>
                            <a href="#" class="btn btn-info">Get it Now</a>
                            </section>                          
                        </div>
                        <div class="item small long">
                            <img src="assets/images/route5.jpg" alt="" />
                             <section class="detail">
                                <div class="info">
                                    <h5>Borobudur Temple <span>Jawa Tengah, Indonesia</span></h5>
                                    <div class="star-block">
                                        <span class="icon star"></span>
                                        <span class="icon star"></span>
                                        <span class="icon star"></span>
                                        <span class="icon star"></span>
                                        <span class="icon star-empty"></span>
                                    </div>
                                    <span class="price">
                                        from <span class="coret">Rp.400k</span><br />
                                        <strong>Rp.328k</strong>pp
                                    </span>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="col-md-4">
                    	<div class="col-xs-12">
                        	<div class="item big">
                            	<img src="assets/images/route6.jpg" alt="" />
                                <section class="detail">
                                	<div class="info">
                                    	<h5>Borobudur Temple <span>Jawa Tengah, Indonesia</span></h5>
                                        <div class="star-block">
                                        	<span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star-empty"></span>
                                        </div>
                                        <span class="price">
                                            from <span class="coret">Rp.400k</span><br />
                                            <strong>Rp.328k</strong>pp
                                        </span>
                                    </div>
                                    <a href="#" class="btn btn-def">Check Now</a>
                                    <a href="#" class="btn btn-info">Get it Now</a>
                                </section>
                            </div>
                        </div>
                        <div class="col-xs-6">
                        	<div class="item small">
                            	<img src="assets/images/route7.jpg" alt="" />
                                <section class="detail">
                                	<div class="info">
                                    	<h5>Borobudur Temple <span>Jawa Tengah, Indonesia</span></h5>
                                        <div class="star-block">
                                        	<span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star-empty"></span>
                                        </div>
                                        <span class="price">
                                            from <span class="coret">Rp.400k</span><br />
                                            <strong>Rp.328k</strong>pp
                                        </span>
                                    </div>
                                </section>
                            </div>
                        </div>
                    	<div class="col-xs-6">
                        	<div class="item small">
                            	<img src="assets/images/route8.jpg" alt="" />
                                 <section class="detail">
                                	<div class="info">
                                    	<h5>Borobudur Temple <span>Jawa Tengah, Indonesia</span></h5>
                                        <div class="star-block">
                                        	<span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star"></span>
                                            <span class="icon star-empty"></span>
                                        </div>
                                        <span class="price">
                                            from <span class="coret">Rp.400k</span><br />
                                            <strong>Rp.328k</strong>pp
                                        </span>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </section>
          
            <section class="feature">
           	  <span class="icon icon-point"></span>
              <div class="container">
                  <h3 class="title">Ventajas de <strong class="text-blue"> Hotelia</strong></h3>
                  <ul class="row">
                      <li class="col-sm-3">
                          <i class="icon lock-f">&nbsp;</i>
                          <h5>Seguridad</h5>
                          Hotelia te garantiza un hospedaje seguro.
                      </li>
                      <li class="col-sm-3">
                          <i class="icon world-f">&nbsp;</i>
                          <h5>Cantidad</h5>
                          Conseguiras un hotel en cualquier momento y en cualquier lugar.
                      </li>
                      <li class="col-sm-3">
                          <i class="icon tag-f">&nbsp;</i>
                          <h5>Filtros</h5>
                          Disponemos de gran cantidad de filtros que ayudan a tu busqueda.
                      </li>
                      <li class="col-sm-3">
                          <i class="icon gear-f">&nbsp;</i>
                          <h5>Configuracion</h5>
                          Personaliza tus datos de la mejor forma.
                      </li>
                  </ul>
              </div>
            </section>
            

       	  <footer>
        	<a href="#header" class="icon icon-flight"></a>
        	<div class="container">
            	<span class="icon deco"></span>
            	<div class="row">
                	<div class="col-sm-2 text-center">
                    	<img class="logo" src="assets/images/logo.png" alt="logo" />
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
    <script src="library/jquery-3.6.0.min.js"></script>
		<script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>	
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-datepicker.js"></script>	
        <script src="assets/js/jquery.slides.min.js"></script>	
        <script src="assets/js/jquery.colorbox.js"></script>	
        <script src="assets/js/enquire.min.js"></script>
        <script src="assets/js/main.js"></script>
        	<!-- date and time 	 -->
	<script src="assets/plugins/flatpicker/flatpickr.min.js"></script>
	<script src="assets/js/pages/datetime/datetime-data.js"></script>
    </body>

</html>
