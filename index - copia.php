
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script  src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<title>login-access</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1,user-scalable=no">
	<center><title>Resultados De Inventario en Bodega</title></center>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/colores.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@300&display=swap" rel="stylesheet">

	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
	<script src="js/funciones.js"></script>
</head>
<body>
	<center>
		<form action="forms/plantilla_ingreso.php" method="POST" class="container">
		<br><br><br><br>	
		<label>Usuario</label>
		</br></br>
		<input type="text" name="usuario" placeholder="USUARIO" class="form-control input-sm">
		</br></br>
		<label>Contraseña</label>
		</br></br>
		<input type="password" name="pwd" placeholder="CLAVE" class="form-control input-sm">
		</br></br>
		<label>Familia de Productos</label></br></br>
			<select id="familia" name="familia">
				<option value="1">Congelado</option>
				<option value="2">Refrigerado</option>
				<option value="3">Producto Seco</option>		
			</select>
		</br></br>
		<div id="grupos" name="grupos"></div>	
		</br></br>
		<button type="sumbit"><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /><span class="material-symbols-outlined">
lock_open
</span><br>iniciar sesion</button>
		<br><br><br>
		</form>
	</center>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#familia').val(1);
		recargarGrupos();

		$('#familia').change(function(){
			recargarGrupos();
		});
	})

	function recargarGrupos(){
		$.ajax({
			type:"POST",
			url:"conexiones/conexion.php",
			data:"rgrupos=" + $('#familia').val(),
			success:function(r){
				$('#grupos').html(r);
			}	
		});
	}
</script>