<?php
	require 'conexion.php';
	session_start();

	$usuario= $_POST['usuario'];
	$contra = $_POST['contra'];

	$Q = "SELECT * from z1_usuarios where CODIGO = '$usuario' and pwd = '$contra';";

	$QQ = mysqli_query($con,$Q);
	while ($ver=mysqli_fetch_row($QQ)) {
			// extraemos el numero del bk y la descripcion del bk;
				
			$nombre = $ver[1];
			$nbk	= $ver[4];
			$dcrp_bk= $ver[5];
			};

	$Q = "SELECT count(*) as z1_usuario from z1_usuarios where CODIGO = '$usuario' and pwd = '$contra';";
	$QQ = mysqli_query($con,$Q);

	$validar = mysqli_fetch_array($QQ);

	if($validar['z1_usuario']>0){
		$_SESSION['usuario']=$usuario;
		$_SESSION['nbk']=$nbk;
		$_SESSION['dcrp_bk']=$dcrp_bk;
		$_SESSION['nombre']=$nombre;

		if($usuario==1817){
			header("location: ../operacionesIngreso.php");
		}else{
			header("location: ../lobby.php");
	}
	}else{
		$message = 'USUARIO O CLAVE INCORRECTOS';

		echo "<SCRIPT>
			window.location= '../index.php'
			alert('$message');				
			</SCRIPT>";			
	}

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