<?php
  
  require "php/conexion.php";
   session_start();

  $usuario = $_SESSION['usuario'];
  $nbk     = $_SESSION['nbk'];
  $dcrp_bk = $_SESSION['dcrp_bk'];
  $nombre = $_SESSION['nombre'];

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
  <title>Resultados De Inventario en Bodega</title>
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
     body,table{
        background-color: #F5EBDC;
        font-family: DIN;
        font-size: 18px;
      }
      i.icon-negro{
      color: black;
     }
      label{
      font-size: 15px;
      color: black;
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
      <a href="demo.php" target="_blanck">
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
    <div class="container">
      <div id="tabla4"></div>
    </div>
  <!-- Modal para editar cambios -->
<!-- Modal -->
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizando Datos</h4>
      </div>
      <div class="modal-body">
        <input type="text" hidden="" id="idpersona" name="">
        <label>Codigo</label>
        <input type="text" name="inputname" id="Codigou" class="form-control input-sm" readonly>
        <label>Descripcion</label>
        <input type="text" name="inputname" id="Productou" class="form-control input-sm" readonly>
        <label>CAJAS (UND MAX)</label>
        <input type="number" name="" id="Fisicou" class="form-control input-sm" min="0" required>
        <label>PAQUETES (BULTOS)</label>
        <input type="number" name="" id="Vencidou" class="form-control input-sm" min="0" required>
        <label>UNIDADES/ONZAS</label>
        <input type="number" name="" id="Danadou" class="form-control input-sm" min="0" required>
       
      <div class="modal-footer">
        <input type="button" class="btn btn-warning" id="actualizaDatosinvcritico" data-dismiss="modal" value="ACTUALIZAR"></input>
      </div>
    </div>
  </div>
</div>

</body>
</html>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
      $('#tabla4').load('componentes/tabla_critico.php');
     
    });

    $('#actualizaDatosinvcritico').click(function(){
      actualizaDatosinvcritico();
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