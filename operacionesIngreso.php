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

   <?php   

    $data='<center><h5>Bienvenid@ '.$nombre.' '.$dcrp_bk;

    echo "$data&nbsp&nbsp<a href='php/cerrrarsesion.php'><i class='small material-icons icon-negro'>logout</i></a></center></h5>";

  ?>

<div class="container section">
      
    <div class="container">
      <div id="tablaOpera"></div>
    </div>
  <!-- Modal para editar cambios -->
<!-- Modal -->
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">MODIFICAR INTENTOS</h4>
      </div>
      <div class="modal-body">
        <input type="text" hidden="" id="idpersona" name="">
        <label>Restaurante:</label>
        <input type="text" name="inputname" id="Codigou" class="form-control input-sm" readonly value="Bk-">
        <label>Producto:</label>
        <input type="text" name="inputname" id="Productou" class="form-control input-sm" readonly>
        <label>Ingresos Realizados:</label>
        <input type="number" name="" id="Fisicou" class="form-control input-sm" min="0" max="3" required>       
      <div class="modal-footer">
        <input type="button" class="btn btn-warning" id="actualizaIntentos" data-dismiss="modal" value="ACTUALIZAR"></input>
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
      $('#tablaOpera').load('componentes/tablaOperaciones.php');
     
    });

    $('#actualizaIntentos').click(function(){
      actualizaIntentos();
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