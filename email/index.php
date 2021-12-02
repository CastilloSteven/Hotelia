<?php

require_once '../model/reserva.php';
$model = new Reserva();

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PhpMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$oMail = new PHPMailer();
$oMail->isSMTP();
$oMail->Host="smtp.gmail.com";
$oMail->Post=587;
$oMail->SMTPSecure="tls";
$oMail->SMTPAuth=true;
$oMail->Username="hoteliabogota@gmail.com";
$oMail->Password="hotelia2242742";
$oMail->setFrom("hoteliabogota@gmail.com","Hotelia S.A");
$oMail->addAddress("jyntexx@gmail.com","Cliente");
$oMail->Subject="Reserva exitosa";
$oMail->msgHTML('<section class="row e-ticket step-content text-center">
<div class="col-md-8 ">
    <div class="tiles-white row">
        <h3 class="tiles-title">
            <strong class="text-blue" style="color: red;">Exito.</strong> Tu reserva se ha realizado.
        </h3>
        <div class="alert alert-info">
           Se ha enviado un correo con la informacion de tu reserva.
        </div>

        <nav class="pull-right hidden-xs pagination-tiket">
            <a href="#" class="cur">&lsaquo; Anterior</a>
            <span>Pagina: 1/2</span>
            <a href="#">Siguiente &rsaquo;</a>
        </nav>
        <div class="clear"></div>
        <section class="e-tiket-ctn">
            <div class="t-head">
                <img src="../../assets/images/logo.png" alt="logo" />
                <strong>Informacion de la reserva</strong>
                <span class="code">
                    Numero de la reserva
                    <strong><?php echo $res["Id_Reserva"]?></strong>
                </span>
            </div>
            <div class="t-route clearfix">

            </div>
            <div class="t-body">
                <p class="info">
                    <strong>Nota :</strong> Recuerda que si quieres cancelar una reserva deber hacerlo anterior a 24 horas de la fecha de entrada. Si lo haces fuera de tiempo, tu dinero no se reembolsara.
                </p>
                <ul class="step-guide clearfix m-b-20">
                    <li style="width:37%">
                        <img src="../../assets/images/identitas.png" alt="" class="p-t-5"/>
                        Al momento de ingresar al hotel debe mostrar este ticket electronico
                    </li>
                    <li style="width:25%">
                        <img src="../../assets/images/time.png" alt="" />
                        Debe llegar con <strong>60 minutos</strong><br> de anterioridad.
                    </li>
                    <li style="width:35%">
                        <img src="../../assets/images/info.png" alt="" />
                        La hora de la reserva es la hora local de donde se ubica el hotel
                    </li>
                </ul>
                <h3 class="tiles-title no-padding">
                    Datos del<strong class="text-blue"> cliente.</strong>
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Tipo de habitacion</th>
                            <th>Costo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $res["Nombre_Hotel"]?></td>
                            <td><?php echo $res["Direccion_Hotel"]?></td>
                            <td><?php echo $res["Descripcion_Habitacion"]?></td>
                            <td><?php echo "$".$res["TotalApagar_Reserva"]?></td>
                        </tr>
                       
                    </tbody>
                </table>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No. Personas</th>
                            <th>No. de adultos</th>
                            <th>No. de niños</th>
                            <th>No. de camas</th>
                            <th>Fecha Entrada</th>
                            <th>Fecha Salida</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $res["Cantidad_Personas_Reserva_Habitacion"]?></td>
                            <td><?php echo $res["Cantidad_Adultos_Reserva_Habitacion"]?></td>
                            <td><?php echo $res["Cantidad_Niños_Reserva_Habitacion"]?></td>
                            <td><?php echo $res["CantidadCamas_Habitacion"]?></td>
                            <td><?php echo $res["FechaEntrada_Reserva"]?></td>
                            <td><?php echo $res["FechaSalida_Reserva"]?></td>
                        </tr>
                       
                    </tbody>
                </table>
                <article class="important">
                    <h4>Importante</h4>
                    <p>Hotelia se reserva reclamos ante cualquiera de las siguientes situaciones. Si tiene algun inconveniente cancele su cita o dirijase al centro de <strong class="text-blue">ayudas y reclamos</strong> </p>
                    <ol>
                        <li>Los datos que ingreso son erroneos. </li>
                        <li>Pierde el ticket electronico. </li>
                        <li>No llega en el horario acordado con el hotel. </li>
                        <li>El hotel no cumple sus expectativas. </li>
                    </ol>
                    
                    <p>Ante estos casos es mejor que solucione directamente con el encargado del hotel.</p>
                </article>
                
                <div class="t-footer clearfix">
                    <ul>
                        <li class="logo">
                            <img src="../../assets/images/logo2.png" alt="" />
                        </li>
                        <li>
                            <span>
                                Jl.Karapitan no.100<br />
                                Bandung 40921, Indonesia
                            </span>
                        </li>
                        <li>
                            <span>
                                p : +62 123 4567<br />
                                f  : +62 123 4567
                            </span>
                        </li>
                        <li>
                            <span>
                                info@stravel.com<br />
                                www.stravel.com
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="pull-left hidden-xs">
            <a href="#" class="btn btn-def"><i class="glyphicon glyphicon-file"></i> PDF</a>
            <a href="#" class="btn btn-def"><i class="glyphicon glyphicon-print"></i> Imprimir</a>
            <a href="#" class="btn btn-def"><i class="glyphicon glyphicon-envelope"></i> Email</a>
        </div>
        <nav class="pull-right hidden-xs pagination-tiket">
            <a href="#" class="cur">&lsaquo; Anterior</a>
            <span>Pagina: 1/2</span>
            <a href="#">Siguiente &rsaquo;</a>
        </nav>
   </div>
</div>

</section>');

if(!$oMail->send())
    echo $oMail->ErrorInfo;

?>