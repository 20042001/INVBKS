<!DOCTYPE html>
<html lang="es">
  <?php
  require 'php/conexion.php';
?>
<head>
   <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
   <link rel="icon" href="images/pestana.png">
  <center><title>Inventario mensual - Bodega General</title></center>
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/colores.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@300&display=swap" rel="stylesheet">

  <script src="librerias/jquery-3.6.0.min.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.js"></script>
  <script src="librerias/alertifyjs/alertify.js"></script>
  <script src="js/funciones.js"></script>

                                          <!--SEGUNDO INSERT--> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>INVBKS</title>

 

    <style type="text/css">
      body{
        background-color: #F5EBDC;
      }
     i.icon-negro{
      color: black;
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
            <img src="images/fondo_negro.PNG" alt="">
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
        <a href="index.php">
          <i class="material-icons">home</i>
          Inicio
        </a>
      </li> 
      <li>
        <a href="">
          <i class="material-icons">store</i>
          Bodega General
        </a>
      </li>
      <li>
        <a href="">
          <i class="material-icons">storefront</i>
          Bodega Cocina
        </a>
      </li>
      <li>
        <a href="">
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
          Comparativo de existencias
        </a>
      </li>
      <li>
        <a href="reporte.php" target="_blanck">
          <i class="material-icons">chrome_reader_mode</i>
          Reporte de diferencias
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
    </ul>
  </div>
  <!--FINALIZA menu desplegable-->
        <div class="container section">
          <div class="row">
      <!--INICIO ACTUALIZA INVENTARIO GENERAL-->

          <div class="container">
            <div id="tabla">
            <!-- Modal para editar cambios -->
          </div>
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
                  <label>Fisico uMax</label>
                  <input type="number" name="" id="Fisicou" class="form-control input-sm" required>
                  <label>Fisico uIntermedio</label>
                  <input type="number" name="" id="Vencidou" class="form-control input-sm" required>
                  <label>Fisico uMin</label>
                  <input type="number" name="" id="Danadou" class="form-control input-sm" required>                 
                  <div class="modal-footer">
                  <button type="button" class="btn btn-warning" id="actualizaDatos" data-dismiss="modal">Actualizar</button>        
                  
                  </div>

              </div>
            </div>  
          </div>
      <!--FINALIZA ACTUALIZA INVENTARIO GENERAL-->
      </div>
    </div>

  </body>
</html>




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
    <script>
        $(document).ready(function(){
            $('#tabla').load('componentes/tabla.php');
          });

          $('#actualizaDatos').click(function(){
            actualizaDatos();
          });

  </script>

