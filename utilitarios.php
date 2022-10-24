<?php
  require 'php/conexion.php';
  session_start();

  $usuario = $_SESSION['usuario'];
  $nbk     = $_SESSION['nbk'];
  $dcrp_bk = $_SESSION['dcrp_bk'];
  $nombre = $_SESSION['nombre'];

  if(!isset($usuario)){
    header("location: ../index.php");
  }else{

?>
<!DOCTYPE html>
<head>
<html lang="es">
  <link rel="icon" href="images/pestana.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>INVBKS</title>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <style type="text/css">
      body{
        background-color: #F5EBDC;
      }
     i.icon-negro{
      color: black;
     }
     .rojjo{
      color: red;
    }
    .verdde{
      color: green;
    }
    .negro{
      color: black;
    }
    table{
      font-size: 15px;
    }
    </style>
</head>

<body>
  <!--incia menu desplegable-->
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
  </div>
  <!--FINALIZA menu desplegable-->

  <div class="container section">
    <div class="row">
      <!--INICIA CODIGO DE REPORTE-->
        <center><h2>Burger King - <?php setlocale(LC_ALL,"es_ES"); echo date("F");?>/<?php echo date("Y");?></h2>
          <h4>Cuadro de diferencias acumuladas</h4></center>
          <table class="table table-hover table-condensed table-bordered" border="0">       
            <tr>
              <td>Ingrediente</td>
              <td>Descripcion</td>
              <td>Act Inv.</td>
              <td>Recpt</td>
              <td>Trns_in</td>
              <td>Trns_out</td>
              <td>waste</td>
              <td>T_use</td>
              <td>open_inv</td>
              <td>Diferencia</td>              
            </tr>

            <?php
             $W="select cr.ingredient, 
              cr.descript, 
              sum(fis.actinv) as actinv, 
              (cr.recpt + cm.recpt) as recpt,
              (cr.trns_in+cm.trns_in) as trns_in,
              (cr.trns_out + cm.trns_out) as trns_out, 
              (cr.waste+cm.waste) as waste,
              (cr.t_use + cm.t_use) as T_Use, 
              cm.open_inv,
              (((cr.trns_out + cm.trns_out)+(cr.waste+cm.waste)+(cr.t_use + cm.t_use)+sum(fis.actinv))-(cm.open_inv+(cr.recpt + cm.recpt)+(cr.trns_in+cm.trns_in))) diferencia
              from z1_mysql as cr inner join z1_invfisico fis on cr.ingredient=fis.ingredient inner join z1_acumulado cm on fis.ingredient=cm.ingr
              where cr.n_bk='$nbk' and fis.nbk='$nbk' and cm.num_bk='$nbk' and cr.descript != '^^^^^^^^' group by cr.ingredient;";

              $QQ=mysqli_query($con,$W);
              while($ver=mysqli_fetch_row($QQ)){

                $datos=$ver[0]."||".
                     $ver[1]."||".
                     $ver[2]."||".
                     $ver[3]."||".
                     $ver[4]."||".
                     $ver[5]."||".
                     $ver[6]."||".
                     $ver[7]."||".
                     $ver[8]."||".               
                     $ver[9];
            ?>


            <tr>
              
            <?php
              if($ver[9]>0){?>
                <td class="verdde"><?php echo $ver[0] ?></td>
                <td class="verdde"><?php echo $ver[1] ?></td>
                <td class="verdde"><?php echo number_format($ver[2], 2) ?></td>
                <td class="verdde"><?php echo number_format($ver[3], 2) ?></td>
                <td class="verdde"><?php echo number_format($ver[4], 2) ?></td>
                <td class="verdde"><?php echo number_format($ver[5], 2) ?></td>
                <td class="verdde"><?php echo number_format($ver[6], 2) ?></td>
                <td class="verdde"><?php echo number_format($ver[7], 2) ?></td>
                <td class="verdde"><?php echo number_format($ver[8], 2) ?></td>
                <td class="verdde"><b><?php echo number_format($ver[9], 2) ?></b></td>  
            <?php   
              }else if($ver[9]<0){
            ?>  
                <td class="rojjo"><b><?php echo $ver[0] ?></b></td>
                <td class="rojjo"><b><?php echo $ver[1] ?></b></td>
                <td class="rojjo"><b><?php echo number_format($ver[2], 2) ?></b></td>
                <td class="rojjo"><b><?php echo number_format($ver[3], 2) ?></b></td>
                <td class="rojjo"><b><?php echo number_format($ver[4], 2) ?></b></td>
                <td class="rojjo"><b><?php echo number_format($ver[5], 2) ?></b></td>
                <td class="rojjo"><b><?php echo number_format($ver[6], 2) ?></b></td>
                <td class="rojjo"><b><?php echo number_format($ver[7], 2) ?></b></td>
                <td class="rojjo"><b><?php echo number_format($ver[8], 2) ?></b></td>
                <td class="rojjo"><b><?php echo number_format($ver[9], 2) ?></b></td>
            <?php 
              }else{
            ?>
                <td class="negro"><?php echo $ver[0] ?></td>
                <td class="negro"><?php echo $ver[1] ?></td>
                <td class="negro"><?php echo number_format($ver[2], 2) ?></td>
                <td class="negro"><?php echo number_format($ver[3], 2) ?></td>
                <td class="negro"><?php echo number_format($ver[4], 2) ?></td>
                <td class="negro"><?php echo number_format($ver[5], 2) ?></td>
                <td class="negro"><?php echo number_format($ver[6], 2) ?></td>
                <td class="negro"><?php echo number_format($ver[7], 2) ?></td>
                <td class="negro"><?php echo number_format($ver[8], 2) ?></td>
                <td class="negro"><b><?php echo number_format($ver[9], 2) ?></b></td>
            <?php
              }
            ?> 
            </tr>
          <?php
            }
          ?>
            
          </table>
      <!--FINALIZA CODIGO DE REPORTE-->
    </div>
  </div>





  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

  <script>
    
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


</body>
</html>

<?php
  }
?>
