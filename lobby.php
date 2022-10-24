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
<html lang="es">

<head>
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
     button.negro{
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
        <a href="invcritico.php">
          <i class="material-icons">savings</i>
          Inventario Critico
        </a>
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
        <a onclick="Dowload()" href="reporte.php" target="_blanck">
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
  <!--FINALIZA menu desplegable-->
      <?php   

    $data='<center><h3>Bienvenid@ '.$nombre.'. BK-'.$nbk.' '.$dcrp_bk;

    echo "$data&nbsp&nbsp<a href='php/cerrrarsesion.php'><i class='small material-icons icon-negro'>logout</i></a></center></h3>";

      };
  ?>
  <br><br><br><br><br>
  <div class="container section">
    <div class="row">
      <div class="col s12 m10 offset-m1">

              <!--   Promo Section   -->
              <div class="row">
                <div class="col s12 m4">
                  <div class="center promo">
                    <i class="large material-icons">flash_on</i>
                    <p class="promo-caption">Ingreso mas rapido</p>
                    <p class="light center">Hicimos que el ingreso del inventario fisico se realizara en menor tiempo, acelerando el proceso ya que solo lo realizara una vez. La conversion es automatica procesando cada producto por separadora.</p>
                  </div>
                </div>

                <div class="col s12 m4">
                  <div class="center promo">
                    <i class="large material-icons">group</i>
                    <p class="promo-caption">Enfocada para todos</p>
                    <p class="light center">Se aplico la logica de trabajo mas sencilla, asociada al tipo de trabajo que cada uno de ustedes realiza. Ademas, un unico sistema de ingreso que une todas las plataformas permitiendo un experiencia de usuario unica mas facil de comprender y poner en produccion.</p>
                  </div>
                </div>

                <div class="col s12 m4">
                  <div class="center promo">
                    <i class="large material-icons">settings</i>
                    <p class="promo-caption">Ingreso unilateral</p>
                    <p class="light center">Estamos siempre abiertos a sus criticas, ya que de nuestra parte no conocemos sus necesidad o la forma de como facilitarles el trabajo. Hemos conectado el sistema del inventario de esta plataforma. Permaneceremos en constante mejora.</p>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col s2 m4"></div>
                <div class="col s8 m4">
                  <div class="centrar">       
                     <button onclick="myFunction()" class="btn negro">
                      <span>NUEVA PLANTILLA</span>  
                      <i class="material-icons left">add</i></button>
                      <p id="msg"></p>                       
                  </div>   
                </div>
                <div class="col s2 m4"></div>
              </div>
            </div>
            </div>
         </div>
  </div>


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

    function myFunction() {
      let text = "¿Desea cargar una nueva plantilla?\nTODOS LOS DATOS SERAN BORRADOS DE FORMA PERMANENTE";
        if (confirm(text) == true) {
          window.location='php/finalizadia.php'
        } else {


         let text = "!Operacion cancelada correctamente!";
        }
          document.getElementById("msg").innerHTML = text;
      }

  </script>


</body>

</html>