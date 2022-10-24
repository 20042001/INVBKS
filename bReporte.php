
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="images/pestana.png">
  <title>Reporte</title>
  <meta charset="utf-8">

  <!--<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link type="text/css" href="style.css" rel="stylesheet" />-->
   <img src="../img/logo.png"/>
   <style type="text/css">
   
    table, th, td{
      border: 1px solid black;
      border-collapse: collapse;
    }
    th,td{
      padding: 2px;
    }
    th {
      text-align: center;
    }

    .estilo{
     font-family: courier;
    }
   .pagenum:before {
        content: counter(page);
    }

    .page-break {
    page-break-after: always;
    }
   </style>
   
</head>
<body>
<!--<div class="page-break"></div>-->
<div>
<?php
  require 'php/conexion.php';
  //session_start();

  $usuario = $_SESSION['usuario'];
  $nbk     = $_SESSION['nbk'];
  $dcrp_bk = $_SESSION['dcrp_bk'];
  $nombre = $_SESSION['nombre'];


if(!isset($usuario)){
  header("location: index.php");
}else{
?>   <p align="right">Fecha : <?php  $time = time();echo date("d/m/Y",$time); ?></p> <!--Capturamos la fecha del sistemas-->
     <center><h3>BURGER KING EL SALVADOR<br>MICOMI, S.A DE C.V.</h3>
      <!--<center><h3>MICOMI, S.A DE C.V.</h3>-->
     <h3>Reporte de Inventario Fisico Mensual BK-<?php echo $nbk ?></h3></center>
     <table style="width: 100%">
      <thead class="table-success table-striped" >
                                    <tr>
                                        <th>CodPana</th>
                                        <th>CodSoft</th>
                                        <th>Producto</th>
                                        <th>Conversion</th>
                                        <th>Unidades</th>
                                    </tr>
                                    <?php
                                        $sql="SELECT R.Cod_Panaso,R.Cod_soft,R.NameProduct,R.Conversion,SUM(I.actinv) FROM z1_reporte R INNER JOIN z1_invfisico  I ON R.Cod_Panaso=I.INGREDIENT WHERE I.NBK=$nbk group by I.ingredient ORDER BY R.Cod_Panaso";
      
                                   $result = mysqli_query($con,$sql);
                                    ?>
                                </thead>
                                  
                                  <tbody>
                                      <?php
                                      while($row=mysqli_fetch_array($result)){
                                           $row[0].$row[1].$row[2].$row[3].$row[4]
                                     ?> 
                                        <tr>
                                           <td class="estilo" align="right"><?php echo $row[0]?></td>
                                           <td lass="estilo" align="right"><?php echo $row[1]?></td>
                                           <td lass="estilo"><?php echo $row[2]?></td>
                                           <td lass="estilo"><?php echo $row[3];?></td>
                                           <td lass="estilo" align="right"><?php echo number_format($row[4],2) ?></td>
                                           </tr>
                                           <?php
                                              }
                                        ?>      
                                  </tbody>
                            </table>
                            <br>
                            <br>
                            <center><pre>
                                <h3>             Gerente de Restaurante          Contabilidad - Auditoria

              _______________________         _________________________
              Nombre y Firma                  Nombre y Firma
 </h3>  

                            </pre></center>
                           <p>NOTA SEÑORES GERENTES POR FAVOR VERIFICAR LAS UNIDADES DE LOS PRODUCTOS 
                              CUALQUIER CAMBIO DETECTADO AVISAR INMEDIATAMENTE AL DEPTO. DE INVENTARIO
                              PARA HACER LAS DEBIDAS CORRECIONES.</p>
                              <h4>ACTUALIZADO  HASTA EL DIA 24 DE JUNIO DE 2022</h4>

 <p>Gerente de Tienda :<?php echo $nombre ?></p></center>
                            </div>
</body>
</html>

<?php
}
?>

