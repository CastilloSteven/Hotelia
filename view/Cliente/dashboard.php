<?php
require_once '../../model/reserva.php';
$model = new Reserva();
?>
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jan 2020 12:35:49 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>Hotelia</title>
	<!-- icons -->
	<link href="../../assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/plugins/summernote/summernote.css" rel="stylesheet">
		<!-- full calendar -->
		<link href="../../assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
	<!-- morris chart -->
	<link href="../../assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../../assets/css/material_style.css">
	<!-- animation -->
	<link href="../../assets/css/pages/animate_page.css" rel="stylesheet">
	<!-- Template Styles -->
	<link href="../../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/css/style2.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white cyan-sidebar-color logo-cyan">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="../../index.php">
						<img alt="" src="../../assets/images/logo2.png">
						 </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<form class="search-form-opened" action="#" method="GET">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Buscar..." name="query">
						<span class="input-group-btn search-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
					</div>
				</form>
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<!-- start notification dropdown -->
						<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i class="fa fa-bell-o"></i>
								<span class="badge headerBadgeColor1"> 6 </span>
							</a>
							<ul class="dropdown-menu animated swing">
								<li class="external">
									<h3><span class="bold">Notificaciones</span></h3>
									<span class="notification-label purple-bgcolor">6 Nuevas</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="javascript:;">
												<span class="time">just now</span>
												<span class="details">
													<span class="notification-icon circle deepPink-bgcolor"><i
															class="fa fa-check"></i></span> Congratulations!. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">3 mins</span>
												<span class="details">
													<span class="notification-icon circle purple-bgcolor"><i
															class="fa fa-user o"></i></span>
													<b>John Micle </b>is now following you. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">7 mins</span>
												<span class="details">
													<span class="notification-icon circle blue-bgcolor"><i
															class="fa fa-comments-o"></i></span>
													<b>Sneha Jogi </b>sent you a message. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">12 mins</span>
												<span class="details">
													<span class="notification-icon circle pink"><i
															class="fa fa-heart"></i></span>
													<b>Ravi Patel </b>like your photo. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">15 mins</span>
												<span class="details">
													<span class="notification-icon circle yellow"><i
															class="fa fa-warning"></i></span> Warning! </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">10 hrs</span>
												<span class="details">
													<span class="notification-icon circle red"><i
															class="fa fa-times"></i></span> Application error. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="javascript:void(0)"> All notifications </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end notification dropdown -->
						<!-- start message dropdown -->
						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i class="fa fa-envelope-o"></i>
								<span class="badge headerBadgeColor2"> 2 </span>
							</a>
							<ul class="dropdown-menu animated slideInDown">
								<li class="external">
									<h3><span class="bold">Messages</span></h3>
									<span class="notification-label cyan-bgcolor">New 2</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="#">
												<span class="photo">
													<img src="assets/img/user/user2.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Sarah Smith </span>
													<span class="time">Just Now </span>
												</span>
												<span class="message"> Jatin I found you on LinkedIn... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="assets/img/user/user3.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> John Deo </span>
													<span class="time">16 mins </span>
												</span>
												<span class="message"> Fwd: Important Notice Regarding Your Domain
													Name... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="assets/img/user/user1.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Rajesh </span>
													<span class="time">2 hrs </span>
												</span>
												<span class="message"> pls take a print of attachments. </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="assets/img/user/user8.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Lina Smith </span>
													<span class="time">40 mins </span>
												</span>
												<span class="message"> Apply for Ortho Surgeon </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="assets/img/user/user5.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Jacob Ryan </span>
													<span class="time">46 mins </span>
												</span>
												<span class="message"> Request for leave application. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="#"> All Messages </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end message dropdown -->
						<!-- start manage user dropdown -->
						<?php
						if($_SESSION!=null){
													$reserva=$model->getId($_SESSION['Id']);
													if ($model !=null) {
        											foreach ($reserva as $dato){
														?>
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<img alt="" class="img-circle " src="../../assets/images/panda.jpg" />
								<span class="username username-hide-on-mobile"> <?php echo $dato['Nombres_Cliente']?></span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default animated jello">
								<form action="../../controller/clienteController.php" method="post">
								<li>
									<a href="user_profile.html">
										<i class="icon-user"></i> Perfil </a>
								</li>
								<li>
									<a href="#">
										<i class="icon-settings"></i> Configuración
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-directions"></i> Ayuda
									</a>
								</li>
								<li class="divider"> </li>
								<li>
									<a href="lock_screen.html">
										<i class="icon-lock"></i> Bloquear
									</a>
								</li>
								<li>
									<button name="btn" value="logout">
										<i class="icon-logout"></i> Cerrar sesión</button>
								</li>
													</form>
							</ul>
						</li>
						<!-- end manage user dropdown -->
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll">
						<ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
							data-slide-speed="200">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="row">
										<div class="sidebar-userpic">
											<img src="../../assets/images/panda.jpg" class="img-responsive" alt=""> </div>
									</div>
									<div class="profile-usertitle">
										<div class="sidebar-userpic-name"><?php echo $dato['Nombres_Cliente']." ".$dato['Apellidos_Cliente']?></div>
									</div>
									<div class="sidebar-userpic-btn">
										<a class="tooltips" href="user_profile.html" data-placement="top"
											data-original-title="Profile">
											<i class="material-icons">person_outline</i>
										</a>
										<a class="tooltips" href="email_inbox.html" data-placement="top"
											data-original-title="Mail">
											<i class="material-icons">mail_outline</i>
										</a>
										<a class="tooltips" href="chat.html" data-placement="top"
											data-original-title="Chat">
											<i class="material-icons">chat</i>
										</a>
										<a class="tooltips" href="login.html" data-placement="top"
											data-original-title="Logout">
											<i class="material-icons">input</i>
										</a>
									</div>
								</div>
							</li>
							<?php
							}
						}
					}
							?>
							<li class="nav-item start active">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Inicio</span>
									<span class="selected"></span>
								</a>
							</li>
							<li class="nav-item">
								<a href="../Reserva/verReservas.php" class="nav-link nav-toggle">
									<i class="material-icons">business_center</i>
									<span class="title">Reservas</span>

								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">slideshow</i>
									<span class="title">Herramientas</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="calendario.php" class="nav-link "> <span class="title">Calendario</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="maps.php" class="nav-link ">
											<span class="title">Mapa</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="../Reserva/factura.php" class="nav-link nav-toggle"> <i
										class="material-icons">description</i>
									<span class="title">Facturas</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Inicio</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="../../index.php">Página principal</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Inicio</li>
							</ol>
						</div>
					</div>
					<!-- start widget -->
					<div class="state-overview">
						<div class="row">
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-blue">
									<span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Reservas</span>
										<span class="info-box-number">15</span>
										<div class="progress">
											<div class="progress-bar width-60"></div>
										</div>
										<span class="progress-description">
											60% son de este mes
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-md-3 col-12 col-sm-6">
							<div class="analysis-box m-b-0 bg-orange">
								<h3 class="text-white box-title">Sitios visitados <span class="pull-right"><i
											class="fa fa-caret-up"></i>46</span></h3>
								<div id="sparkline9"><canvas width="267" height="70"></canvas></div>
							</div>
						</div>
							<!-- /.col -->
							<div class="col-md-3 col-12 col-sm-6">
							<div class="analysis-box m-b-0 bg-purple">
								<h3 class="text-white box-title">Localidades <span class="pull-right"><i
											class="fa fa-caret-up"></i> 6</span></h3>
								<div id="sparkline7"><canvas width="267" height="70"></canvas></div>
							</div>
						</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-success">
									<span class="info-box-icon push-bottom"><i
											class="material-icons">monetization_on</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Dinero gastado</span>
										<span>$</span><span class="info-box-number">1'365.000</span>
										<div class="progress">
											<div class="progress-bar width-60"></div>
										</div>
										<span class="progress-description">
											70% fue gastado este mes
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
						</div>
					</div>
					<!-- end widget -->
					<!-- chart start -->
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>Detalles de reservas</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="example">
												<thead>
													<tr>
														<th>No</th>
														<th>Hotel</th>
														<th>Fecha Ingreso</th>
														<th>Fecha Salida</th>
														<th>Estado</th>
														<th>Tipo Habitacion</th>
														<th>Precio</th>
														<th>Acción</th>
													</tr>
												</thead>
												<tbody>
												<?php
												if($_SESSION!=null){
													$reserva=$model->listarRes($_SESSION['Id']);
													if ($model !=null) {
        											foreach ($reserva as $dato){
        ?>
													<tr>
														<td><?php echo $dato['Id_Reserva'] ?></td>
														<td><?php echo $dato['Nombre_Hotel'] ?></td>
														<td><?php echo $dato['FechaEntrada_Reserva'] ?></td>
														<td><?php echo $dato['FechaSalida_Reserva'] ?></td>
														<td><?php $estado = $dato['Estado_Reserva'];
															if($estado == "Activa"){
															echo '<span class="label label-sm label-primary">Activa</span>';
															} if ($estado == "Cumplida"){
																echo '<span class="label label-sm label-success">Cumplida</span>';
															} if ($estado == "Inactiva"){
																echo '<span class="label label-sm label-danger">Cancelada</span>';
															}
														?>
															
														</td>
														<td><?php echo $dato['Descripcion_Habitacion'] ?></td>
														<td><?php echo "$".$dato['TotalApagar_Reserva'] ?></td>
														<td>
															<button class="btn btn-tbl-edit btn-xs btnConsultar">
																<i class="fa fa-pencil"></i>
														</button>
														</td>
													</tr>
													<?php
        }
	}
}
        ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formReservas">    
            <div class="modal-body">
                <div class="form-group">
                <label for="nameHotel" class="col-form-label">Nombre Hotel:</label>
                <input type="text" class="form-control" id="nameHotel">
                </div>
                <div class="form-group">
                <label for="direHotel" class="col-form-label">Direccion:</label>
                <input type="text" class="form-control" id="direHotel">
                </div>
                <div class="form-group">
                <label for="descHab" class="col-form-label">Habitacion:</label>
                <input type="text" class="form-control" id="descHab">
                </div>
                <div class="form-group">
                <label for="fechaRes" class="col-form-label">Fecha reserva:</label>
                <input type="datetime" class="form-control" id="fechaRes"?>
                </div>  
                <div class="form-group">
                <label for="fechaIngreso" class="col-form-label">Fecha Ingreso:</label>
                <input type="date" class="form-control" id="fechaIngreso" min=<?php $hoy=date("Y-m-d"); echo $hoy;?>>
                </div>                
                <div class="form-group">
                <label for="fechaSalida" class="col-form-label">Fecha salida:</label>
                <input type="date" class="form-control" id="fechaSalida" min=<?php $hoy=date("Y-m-d"); echo $hoy;?>>
                </div>       
                <div class="form-group">
                <label for="pago" class="col-form-label">Precio a pagar:</label>
                <input type="number" class="form-control" id="pago">
                </div>         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
					<!-- Chart end -->
					<div class="row">
						<div class="col-md-8 col-sm-12 col-12">					
							<div class="card-box">
								<div class="card-head">
									<header>Calendario</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<div class="panel-body">
										<div id="calendar" class="has-toolbar"> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>Gastos</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row text-center">
										<div class="col-sm-4 col-6">
											<h4 class="margin-0">$210.000</h4>
											<p class="text-muted">Semana</p>
										</div>
										<div class="col-sm-4 col-6">
											<h4 class="margin-0">$680.000 </h4>
											<p class="text-muted">Mes</p>
										</div>
										<div class="col-sm-4 col-6">
											<h4 class="margin-0">$1'365.000 </h4>
											<p class="text-muted">Año</p>
										</div>
									</div>
									<div class="row">
										<div id="donut_chart" class="width-100 height-250"></div>
									</div>
									<div class="row" style= "display: none;">
										<div id="area_line_chart" class="width-100"></div>
									</div>
								</div>
							</div>
							<div class="card card-box">
								<div class="card-head">
									<header>Últimos hoteles reservados</header>
									<button id="prfList" class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
										data-mdl-for="prfList">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<div class="card-body ">
									<div class="row">
										<ul class="docListWindow small-slimscroll-style">
											<li>
												<div class="prog-avatar">
													<img src="assets/img/user/user1.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Rajesh</a> -(M.Com, PHD)
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="assets/img/user/user2.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Sarah Smith</a> -(M.A., B.Ed)
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="assets/img/user/user3.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">John Deo</a> - (B.C.A., M.C.A.)
													</div>
													<div>
														<span class="clsNotAvailable">Not Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="assets/img/user/user4.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Jay Soni</a> - (B.E., M.E.)
													</div>
													<div>
														<span class="clsOnLeave">On Leave</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="assets/img/user/user5.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Jacob Ryan</a> - (M.Phil)
													</div>
													<div>
														<span class="clsNotAvailable">Not Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="assets/img/user/user6.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Megha Trivedi</a> - (M.S.W, PHD)
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="assets/img/user/user2.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Sarah Smith</a> -(B.S.C, M.S.C.)
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="assets/img/user/user3.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">John Deo</a> - (B.E., M.E.)
													</div>
													<div>
														<span class="clsNotAvailable">Not Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="assets/img/user/user4.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Jay Soni</a> - (B.C.A., M.C.A.)
													</div>
													<div>
														<span class="clsOnLeave">On Leave</span>
													</div>
												</div>
											</li>
										</ul>
										<div class="full-width text-center p-t-10">
											<a href="#" class="btn purple btn-outline btn-circle margin-0">View All</a>
										</div>
									</div>
								</div>
						</div>
						</div>
						</div>
					
					</div>
					<!-- start Payment Details -->

					<!-- end Payment Details -->
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2018 &copy; Spice Hotel Template By
				<a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">RedStar Theme</a>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="../../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../../assets/plugins/popper/popper.min.js"></script>
	<script src="../../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="../../assets/js/consultarReservas.js"></script>
	<!-- bootstrap -->
	<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
	<script src="../../assets/js/pages/sparkline/sparkline-data.js"></script>
	<!-- calendar -->
	<script src="../../assets/plugins/moment/moment.min.js"></script>
	<script src="../../assets/plugins/fullcalendar/fullcalendar.min.js"></script>
	<script src="../../assets/js/pages/calendar/calendar.min.js"></script>
	<!-- Common js-->
	<script src="../../assets/js/app.js"></script>
	<script src="../../assets/js/layout.js"></script>
	<script src="../../assets/js/theme-color.js"></script>
	<!-- material -->
	<script src="../../assets/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="../../assets/js/pages/ui/animations.js"></script>
	<!-- morris chart -->
	<script src="../../assets/plugins/morris/morris.min.js"></script>
	<script src="../../assets/plugins/morris/raphael-min.js"></script>
	<script src="../../assets/js/pages/chart/morris/morris_home_data.js"></script>
	<!-- end js include path -->

</body>


<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jan 2020 12:36:48 GMT -->
</html>