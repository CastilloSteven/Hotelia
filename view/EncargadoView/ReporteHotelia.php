<?php
require_once('../../model/encargadoModel.php');

$ModeloEncargado= new Encargado();
$ModeloEncargado->validateSession();
$Rango=$_GET['Rango'];

ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hotelia</title>
		<link rel="shortcut icon" href="../../asset/images/LogoSolo.png">
    </head>
<body>
    <img src="../../asset/images/logo.png" alt="Hotelia">
    <h1>Reporte hotelia</h1>
    <table border=1>
        <tr>
            <th>Id Reserva</th>
            <th>Hotel</th>
            <th>Cantidad de Personas</th>
            <th>Cantidad Adultos</th>
            <th>Cantidad Niños</th>
            <th>Id Habitacion</th>
            <th>Fecha Entrada</th>
            <th>Fecha Salida</th>
            <th>Nombre Cliente</th>
            <th>Telefono Cliente</th>
            <th>Correo Cliente</th>
            <th>Total a Pagar</th>
        </tr>
        <?php
            $reporte=$ModeloEncargado->Reporte($_SESSION['ID'], $Rango);
            if ($reporte != null) {
                foreach ($reporte as $rep) {
                    
           ?>
        <tr>
            
            <td><?php echo $rep['Id_Reserva']?></td>
            <td><?php echo $rep['Nombre_Hotel']?></td>
            <td><?php echo $rep['Cantidad_Personas_Reserva_Habitacion']?></td>
            <td><?php echo $rep['Cantidad_Adultos_Reserva_Habitacion']?></td>
            <td><?php echo $rep['Cantidad_Niños_Reserva_Habitacion']?></td>
            <td><?php echo $rep['Id_Habitacion']?></td>
            <td><?php echo $rep['FechaEntrada_Reserva']?></td>
            <td><?php echo $rep['FechaSalida_Reserva']?></td>
            <td><?php echo $rep['Nombres_Cliente'] . " " . $rep['Apellidos_Cliente'] ?></td>
            <td><?php echo $rep['Telefono_Cliente']?></td>
            <td><?php echo $rep['Correo_Cliente']?></td>
            <td><?php echo $rep['TotalApagar_Reserva']?></td>
        </tr>
        <?php }} ?>
    </table>
</body>
</html>
<?php
$html=ob_get_clean();

require_once('../../library/dompdf/autoload.inc.php');

use Dompdf\Dompdf;
$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);

$dompdf->setPaper('A4','landscape');

$dompdf->render();

$dompdf->stream('Reporte_Hotelia.pdf', array("Attachment" => false));



?>