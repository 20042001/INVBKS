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
	<div class="col S2">
		<CENTER><h3>Burger King &#174 SV</h3>
		<h4>conteo diario</h4></CENTER>		
		<table border="1" id="InventarioLoad">
			<thead>

			<tr>
				<th colspan="2">Producto</th>
				<th colspan="3">Fisico</th>
				<th >Act_Inv</th>
				<th rowspan="2">Actualizar</th>
			</tr>	
			
			<tr>
				<td>C.PANAS</br></td>
				<td>DESCRIPCION</td>
				<td>UND_MAXIMA</td>
				<td>BULTOS</td>
				<td>UNIDADES</td>
				<td>UND_MIN</td>
				
			</tr>
			
			</thead>
			<tbody>
			<?php
				$sql="SELECT * FROM invgeneral.z1_invFisico where descript != '^^^^^^^^'  and tipo_bog=4 and nbk='$nbk' order by ingredient asc";				
				
				//$sql="SELECT * from t_producto;";
				$result=mysqli_query($con,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=	$ver[0]."||".
									$ver[1]."||".
									$ver[2]."||".
							    $ver[3]."||".
							    $ver[4]."||".
							    $ver[5]."||".
							    $ver[6];;
			?>


			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo number_format($ver[6], 2)?></td>			
				<td>					
						<center><button data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
							<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" /><span class="material-symbols-outlined md-18">edit_square</span>
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