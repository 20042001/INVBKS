<?php
	require_once "../php/conexion.php";

	$sql="SELECT * from t_producto;";
	$result=mysqli_query($con,$sql);

?>
<br><br>

<div class="row">
	<div class="col-sm-8"></div>
	<div class="col-sm-4">
		
		<select id="buscadorvivo" class="form-control input-sm">
			
			<?php  
				while($ver=mysqli_fetch_row($result)):
			   ?>
			   	<option value="<?php echo $ver[0] ?>">
			   		<?php echo $ver[1]." ".$ver[2] ?>
			   			
			   		</option>

			<?php  endwhile;   ?>

		</select>
	</div>
</div>


	<script type="text/javascript">
		$(document).ready(function(){
			$('#buscadorvivo').select2();

			$('#buscadorvivo').change(function(){
				$.ajax({
					type:"post",
					data:'valor=' + $('#buscadorvivo').val(),
					url:'php/crearsession.php',
					success:function(r){
						$('#tabla').load('componentes/tabla.php');

					}
				});
			});
		});

	</script>