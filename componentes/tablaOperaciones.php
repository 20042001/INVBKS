<?php
  require '../php/conexion.php';
  session_start();

  $usuario = $_SESSION['usuario'];
  $nbk     = $_SESSION['nbk'];
  $dcrp_bk = $_SESSION['dcrp_bk'];
  $nombre = $_SESSION['nombre'];


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <link rel="shortcut icon" href="img/pestana.png">

	  <!-- Compiled and minified CSS -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	  <!-- Compiled and minified JavaScript -->
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	          
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=0.6"/>
    
</head>
<body>

<div class="row">
	<div class="col S2"></div>
		<CENTER><h4>Burger King&#174 SV<img src="img/logo.png" width="100" height="100"></h4>
		<h4>MICOMI S.A. DE C.V.</h4></CENTER>		
		<table border="1" id="InventarioLoad">
			<thead>

			<tr>
				<th>Producto</th>
				<th colspan="3">Fisico</th>
				<th >Act_Inv</th>
				<th colspan="2">Restauantes</th>
				<th rowspan="2">Modificar</th>
			</tr>	
			
			<tr>
				<td>Producto</td>
				<td>UndMax</td>
				<td>Bultos</td>
				<td>Und</td>
				<td>UndMin</td>
				<td><center>BK</center></td>
				<td>Ingresos</td>
			</tr>
			
			</thead>
			<tbody>
			<?php
				$sql="SELECT * FROM invgeneral.z1_invFisico where descript != '^^^^^^^^'  and tipo_bog!=4 and actualiza>=3 order by nbk asc";				
				
				//$sql="SELECT * from t_producto;";
				$result=mysqli_query($con,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=	$ver[0]."||".
									$ver[8]."||".
									$ver[2]."||".
									$ver[9]."||".
							    $ver[3]."||".
							    $ver[4]."||".
							    $ver[5]."||".
							    $ver[6]."||".
							    $ver[1];
			?>


			<tr>
				<td><center><b><?php echo $ver[2] ?></b></center></td>
				<td><center><?php echo $ver[3] ?></center></td>
				<td><center><?php echo $ver[4] ?></center></td>
				<td><center><?php echo $ver[5] ?></center></td>
				<td><center><?php echo number_format($ver[6], 2)?></center></td>
				<td><center><b>Bk-<?php echo $ver[8] ?></b></center></td>
				<td><center><?php echo $ver[9] ?></center></td>			
				<td>					
						<center><button data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
							<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" /><span class="material-symbols-outlined md-18">add_circle</span>
						</center></button>				
				</td>
				
			</tr>
		<?php
			}
			mysqli_free_result($result);
		?>
		</tbody>	
		</table>
		
	</div>
	
  </div>

</body>
</html>