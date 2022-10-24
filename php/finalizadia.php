<?php
	require 'conexion.php';
	session_start();

	$nbk = $_SESSION['nbk'];

	$Q = "UPDATE z1_acumulado set open_inv=0,recpt=0,trns_in=0,trns_out=0,waste=0,t_use=0 where num_bk='$nbk';";
	mysqli_query($con,$Q);
	

	$W = "UPDATE z1_invfisico set actinv_umx=0,actinv_umn=0,actinv_unidad=0,actinv=0,actualiza=0 WHERE NBK='$nbk';";
	mysqli_query($con,$W);

	$E = "UPDATE z1_mysql set recpt=0,trns_in=0,trns_out=0,waste=0,open_inv=0,t_use=0,shelf=0,diferencia=0,actinv=0 where n_bk='$nbk';";
	mysqli_query($con,$E);

	$message = '..::NUEVA PLANTILLA DE INVENTARIO HABILITADA::..';

		echo "<SCRIPT>
			window.location= '../lobby.php'
			alert('$message');				
			</SCRIPT>";	

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login_verifica</title>
<style type="text/css">
	body{
		background-color: #F5EBDC;
	}
</style>
</head>
<body>
	<img src="../img/LogoBurgerKingError.png">
</body>
</html>