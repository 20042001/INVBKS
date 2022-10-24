<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="icon" href="images/pestana.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="tabla.css">
  <title>Ayuda</title>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

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
  </div>
  	<center><iframe src="Manual INV.pdf" frameborder="0"></iframe></center>
<div>
  

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
