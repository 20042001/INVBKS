<?php
	require 'conexion.php';
	 session_start();

 	$usuario = $_SESSION['usuario'];
  	$nbk     = $_SESSION['nbk'];
  	$dcrp_bk = $_SESSION['dcrp_bk'];
  	$nombre = $_SESSION['nombre'];

	$id=$_POST['id'];
	$c=$_POST['Codigo'];
	$f=$_POST['Fisico'];
	$v=$_POST['Vencido'];
	$d=$_POST['Danado'];
	
	

	$sql="update invgeneral.z1_invFisico inv inner join invgeneral.z1_articulos dt on inv.ingredient=dt.codigo
			set inv.actinv_umx='$f', 
			inv.actinv_umn='$v', 
			inv.actinv_unidad='$d',
			inv.actinv = ((inv.actinv_umx*dt.factor_empaque) + ((dt.factor_empaque/dt.bultos)*inv.actinv_umn)+inv.actinv_unidad) where inv.idz1_invfisico='$id' and tipo_bog=3 and nbk='$nbk';";

	
	echo $result=mysqli_query($con,$sql);


	if($result==TRUE){

		$Q="SELECT actualiza from z1_invfisico where idz1_invfisico='$id' and tipo_bog=3;";
		$QQ = mysqli_query($con,$Q);
		while($cnt = mysqli_fetch_row($QQ)){
			$nAct =$cnt[0];
			$nAct=$nAct+1;
		};

		$actualiza= "update z1_invFisico set actualiza='$nAct' where idz1_invfisico='$id' and tipo_bog=3 and nbk='$nbk';";
		mysqli_query($con,$actualiza);
	}
?>
