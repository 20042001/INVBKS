<?php
  require '../php/conexion.php';
  session_start();

  $usuario = $_SESSION['usuario'];
  $nbk     = $_SESSION['nbk'];
  $dcrp_bk = $_SESSION['dcrp_bk'];
  $nombre = $_SESSION['nombre'];


?>


<div class="row">
	<div class="col-sm-12">
		<CENTER><h2>Burger King SV</h2>
		<h4>Inventario General</h4></CENTER>
		<H4>**NO DEJAR VACIO LOS CAMPOS, RECUERDE SIEMPRE COLOCAR UN 0</H4>
		<table border="1" id="InventarioLoad">
			<thead>

			<tr>
				<th colspan="2">Producto</th>
				<th colspan="3">Fisico</th>
				<th >Act_Inv</th>
				<th rowspan="2">Actualizar</th>
			</tr>	
			
			<tr>
				<td>C.PANA</td>
				<td>DESCRIP.</td>
				<td>CAJAS</td>
				<td>PAQUETES</td>
				<td>UNIDADES</td>
				<td>UNIDAD MIN.</td>
				
			</tr>
			
			</thead>
			<tbody>
			<?php
				$sql="SELECT * FROM invgeneral.z1_invFisico where descript != '^^^^^^^^'  and tipo_bog=1 and nbk='$nbk';";				
				
				//$sql="SELECT * from t_producto;";
				$result=mysqli_query($con,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=	$ver[0]."||".
									$ver[1]."||".
									$ver[2]."||".
							    $ver[3]."||".
							    $ver[4]."||".
							    $ver[5]."||".
							    $ver[6];
			?>


			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo number_format($ver[6], 2)?></td>			
				<td>
					<?php					
					if($ver[9] <= 2){
				?>
						<center><button data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
							<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" /><span class="material-symbols-outlined md-18">edit_square</span>
						</center></button>
				<?php 
					}else{
				?>
						<center><button data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')" disabled="true">
						<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" /><span class="material-symbols-outlined md-18">block</span>
					</center></button>
				<?php 
					};
				?>
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

</script>