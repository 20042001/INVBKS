<?php
  require 'php/conexion.php';
  session_start();

  $usuario = $_SESSION['usuario'];
  $nbk     = $_SESSION['nbk'];
  $dcrp_bk = $_SESSION['dcrp_bk'];
  $nombre = $_SESSION['nombre'];

if(!isset($usuario)){
  header("location: index.php");
}else{
?>
<?php
ob_start();
include_once 'bReporte.php';
?>    
<?php
}
?>
<?php
include_once "dompdf/autoload.inc.php";

$html=ob_get_clean();

use Dompdf\Dompdf;
use Dompdf\Options;



$dompdf=new Dompdf();
$option= new Options();
$option->set('defaultFont','Courier');
$dompdf = new Dompdf($option);



$dompdf->loadHtml($html);


$dompdf->setPaper('letter','landscape');


$dompdf->render();
$dompdf->stream("Reporte", array("Attachment" => false));


//$dompdf->stream();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>reporte impreso</title>
  <link rel="icon" href="images/pestana.png">
</head>
<body>


</body>
</html>
