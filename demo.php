<?php
  
  require "php/conexion.php";
   session_start();

  $usuario = $_SESSION['usuario'];
  $nbk     = $_SESSION['nbk'];
  $dcrp_bk = $_SESSION['dcrp_bk'];
  $nombre = $_SESSION['nombre'];


   
  $sql="select cr.ingredient,cr.descript,(((cr.trns_out + cm.trns_out)+(cr.waste+cm.waste)+(cr.t_use + cm.t_use)+sum(fis.actinv))-(cm.open_inv+(cr.recpt + cm.recpt)+(cr.trns_in+cm.trns_in))) as cantidad,c.costo*(((cr.trns_out + cm.trns_out)+(cr.waste+cm.waste)+(cr.t_use + cm.t_use)+sum(fis.actinv))-(cm.open_inv+(cr.recpt + cm.recpt)+(cr.trns_in+cm.trns_in))) as diferencia
  from z1_mysql as cr inner join z1_invfisico fis on cr.ingredient=fis.ingredient inner join z1_acumulado cm on fis.ingredient=cm.ingr inner join z1_costos c on cr.ingredient=c.ingredient
  where cr.n_bk='$nbk' and fis.nbk='$nbk' and cm.num_bk='$nbk' and cr.descript != '^^^^^^^^' and c.critico=1 group by cr.ingredient asc order by diferencia desc;";

  $result = mysqli_query($con,$sql);
 

  if(!isset($usuario)){
    header("location: index.php");
  }else{  
?>
<?php
  
  require "php/conexion.php";
   //session_start();

  $usuario = $_SESSION['usuario'];
  $nbk     = $_SESSION['nbk'];
  $dcrp_bk = $_SESSION['dcrp_bk'];
  $nombre = $_SESSION['nombre'];


  $sql="select cr.ingredient,cr.descript,(((cr.trns_out + cm.trns_out)+(cr.waste+cm.waste)+(cr.t_use + cm.t_use)+sum(fis.actinv))-(cm.open_inv+(cr.recpt + cm.recpt)+(cr.trns_in+cm.trns_in))) as cantidad,c.costo*(((cr.trns_out + cm.trns_out)+(cr.waste+cm.waste)+(cr.t_use + cm.t_use)+sum(fis.actinv))-(cm.open_inv+(cr.recpt + cm.recpt)+(cr.trns_in+cm.trns_in))) as diferencia
  from z1_mysql as cr inner join z1_invfisico fis on cr.ingredient=fis.ingredient inner join z1_acumulado cm on fis.ingredient=cm.ingr inner join z1_costos c on cr.ingredient=c.ingredient where cr.n_bk='$nbk' and fis.nbk='$nbk' and (cm.recpt>0 or cm.T_use>0 or cm.open_inv>1) and cm.num_bk='$nbk' and cr.descript != '^^^^^^^^' and c.critico=1 group by cr.ingredient asc order by diferencia asc;";
   

  $result0 = mysqli_query($con,$sql);

  if(!isset($usuario)){
    header("location: index.php");
  }else{  
?>
<!DOCTYPE html>
<html>
<head>
  <html lang="es">
   <link rel="icon" href="images/pestana.png">
  <meta charset="UTF-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1,user-scalable=no">
  <title>Reporte de Diferencia</title>
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="php/colores.css" rel="stylesheet" type="text/css"> 
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

  <script src="librerias/jquery-3.6.0.min.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.js"></script>
  <script src="librerias/alertifyjs/alertify.js"></script>
  <script src="js/funciones.js"></script>
  
    <style type="text/css">
      body{
        background-color: #F5EBDC;
         font-family: DIN;
      }
     i.icon-negro{
      color: black;
     }
     @font-face {
      font-family: DIN;
      src: url(fuentes/DIN.ttf);
     }
     .centrar{
        text-align: center;
     }
     .text-center{
      text-align: center;
     }
     a.negro{
      background-color: black;      
     }
    </style>
</head>
<body>
<div class="container section">
    <div class="negross">
      <a href="#" class="sidenav-trigger" data-target="menu-side">
        <i class="medium material-icons icon-negro">storage</i>
      </a>
    </div>  
    <ul class="sidenav" id="menu-side">
      <li>
        <div class="user-view">
          <div class="background">
            <img src="images/fondo_negro.PNG" alt="auto" width="100%">
          </div>
          <a href="#">
            <img src="avatar_bk.png" alt="" class="circle">
          </a>
          <a href="">
            <span class="name white-text">MICOMI S.A. de C.V</span>
          </a>
          <a href="">
            <span class="email white-text">angel.deras@burgerking.com.sv</span>
          </a>
        </div>
      </li>
      <li>
        <a href="lobby.php">
          <i class="material-icons">home</i>
          INICIO
        </a>
      </li>
      <li>
        <div class="divider"></div>
      </li>
      <li>
        <a href="bgeneral.php">
          <i class="material-icons">store</i>
          Bodega General
        </a>
      </li>
      <li>
        <a href="bgeneral2.php">
          <i class="material-icons">storefront</i>
          Bodega Cocina
        </a>
      </li>
      <li>
        <a href="bgeneral3.php">
          <i class="material-icons">people_outline</i>
          Bodega Despacho
        </a>
      </li>
      <li>
        <div class="divider"></div>
      </li>
      <li>
        <a href="comparativo.php">
          <i class="material-icons">assignment</i>
          Inventario critico
        </a>
      </li>
      <li>
        <a href="utilitarios.php">
          <i class="material-icons">chrome_reader_mode</i>
          Comparativo mensual
        </a>
      </li>
      <li>
        <li>
        <a href="reporte.php" target="_blanck">
          <i class="material-icons">assignment</i>
          Reporte mensual
        </a>
      <a href="demo.php">
          <i class="material-icons">poll</i>
          Reporte Diferencia
        </a>
      </li>
      <li>
        <div class="divider"></div>
      </li>
      <li>
        <a href="ayuda.php">
          <i class="material-icons">help</i>
          Ayuda
        </a>
      </li>
      <li>
        <div class="divider"></div>
      </li>
      <li>
        <a href="php/cerrrarsesion.php">
          <i class="material-icons">logout</i>
          Cerrar Sesion
        </a>
      </li>
    </ul>
    <!--Inicia Reporte de Diferencia-->
  <center><h4>MICOMI, S.A DE C.V. BURGER KING</h4>
 <h4>Reporte de Diferencia BK-<?php echo $nbk ?></h4></center>
<body>
    <div class="container">  
        <div class="row" style="float: none; margin: 0 aut;">
            <div class="col s12" style="float: none; margin: 0 aut;">
                <div class="browser-default col s3">
<div class="col s12 m4">              
<?php
  if(!isset($usuario)){
    header("location: ../index.php");
  }else{

?>
     <div id="main-container">
     <table>
      <thead>
        <h3><b>Sobrante</b></h3>
          <tr>
              <th>N&nbsp&nbsp&nbsp&nbsp&nbsp</th>
              <th>Cod&nbsp&nbsp&nbsp&nbsp</th>
              <th>Descripcion&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
              <th>Cantidad&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
              <th>Diferencia</th>
          </tr>
        
      </thead>
        
        <tbody>
          <!--Declaramos los acumuladores a cero-->
            <?php $totl1=0;
                  $nDato=0;
            ?>
            <?php
          // //          // // 
            while($row=mysqli_fetch_array($result)){
            if($row[3]>0){
            $totl1=$totl1+number_format(($row[3]),2);
            $nDato=$nDato+1;
           ?> 
              <tr>
                <td><?php echo $nDato, ' -'?></td>
                <td><?php echo $row[0]?></td>
                <td><?php echo $row[1]?></td>
                <td>  <?php echo number_format($row[2],2)?></td>
                <td> $ <?php echo number_format(($row[3]),2)?></td>
              </tr>
                 <?php   
                    }}
                ?>  
        </tbody>
  </table>
  <table>
    <tr>
      <th>Total $ <?php echo number_format($totl1,2,'.',',')?></th>
    </tr>
  </table>            
  </div>
</div>
     </div>
       <div>  
        <div>
        <div>
        <div class="browser-default col s3">
     <div>
  </div>
     </div>
    </div>

<!--Inicia el segundo reporte-->
    <div class="col s12 m4">
    <div class="center promo">
 <?php
 
  if(!isset($usuario)){
    header("location: ../index.php");
  }else{

?>
     <div id="main-container">
     <table>
      <h3><b>Faltante</b></h3>
      <thead>
          <tr>
              <th>N&nbsp&nbsp&nbsp</th>
              <th>Cod&nbsp&nbsp&nbsp&nbsp</th>
              <th>Descripcion&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
              <th>Cantidad&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
              <th>Diferencia</th>
          </tr>
        
      </thead>
        
        <tbody>
          <!--Declaramos los acumuladores a cero-->
            <?php $totl2=0;$nDato=0;?>
            <?php
          // //          // // 
            while($row=mysqli_fetch_array($result0)){
            if($row[3]<0){
              //if($totl2=$totl2+number_format(($row[2]*$row[3]),2)<0){
              $totl2=$totl2+number_format(($row[3]),2);
              $nDato=$nDato+1;
           ?> 
              <tr>
                <td><?php echo $nDato,'-'?></td>
                <td><?php echo $row[0]?></td>
                <td><?php echo $row[1]?></td>
                <td>  <?php echo number_format($row[2],2)?></td>
                <td> $ <?php echo number_format(($row[3]),2)?></td>
              </tr>
                 <?php
                    }}
                ?>      
        </tbody>
  </table>
   <table>
    <tr>
      <th>Total $ <?php echo number_format($totl2,2,'.',',')?></th>
    </tr>
  </table>
  <hr>
  </div>
  <br>
  <br>

    </div>
    </div>
    </div>
      </div>
        </div>
      </div>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <hr>
   </body>
</html>
<?php
}
?>
<?php
}
?>
    <!--Finaliza Reporte de Diferencia-->

</body>
</html>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
      $('#tabla').load('componentes/tabla.php');
     
    });

    $('#actualizaDatos').click(function(){
      actualizaDatos();
    });

    document.addEventListener('DOMContentLoaded', function () {
      var elems = document.querySelectorAll('.slider');
      var instances = M.Slider.init(elems, {
      });

      var elems = document.querySelectorAll('.materialboxed');
      var instances = M.Materialbox.init(elems);

      var elems = document.querySelectorAll('.sidenav');
      var instances = M.Sidenav.init(elems);

    });

  </script>
<?php } ?>
<?php } ?>