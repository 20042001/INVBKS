 function agregaform(datos){

	d=datos.split('||');

	$('#idpersona').val(d[0]);
	$('#Codigou').val(d[1]);
	$('#Productou').val(d[2]);
	$('#Fisicou').val(d[3]);
	$('#Vencidou').val(d[4]);
	$('#Danadou').val(d[5]);
	$('#vdFisicou').val(d[6]);
	$('#vdVencidou').val(d[7]);
	$('#vdDanadou').val(d[8]);
	$('#Total_inv_fisicou').val(d[9]);
	
	
	
}

function actualizaDatos(){


	id=$('#idpersona').val();
	Codigo=$('#Codigou').val();
	Fisico=$('#Fisicou').val();
	Vencido=$('#Vencidou').val();
	Danado=$('#Danadou').val();
	vdFisico=$('#vdFisicou').val();
	vdVencido=$('#vdVencidou').val();
	vdDanado=$('#vdDanadou').val();
	

	cadena= "id=" + id +
			"&Codigo=" + Codigo +
			"&Fisico=" + Fisico +
			"&Vencido=" + Vencido +
			"&Danado=" + Danado+
			"&vdFisico=" + vdFisico +
			"&vdVencido=" + vdVencido +
			"&vdDanado=" + vdDanado;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success('DATOS ENVIADOS');
			}else{
				alertify.error('ERROR EN EL INGRESO DE CANTIDADES');
			}
		}
	});
}

function actualizaDatos2(){


	id=$('#idpersona').val();
	Codigo=$('#Codigou').val();
	Fisico=$('#Fisicou').val();
	Vencido=$('#Vencidou').val();
	Danado=$('#Danadou').val();
	vdFisico=$('#vdFisicou').val();
	vdVencido=$('#vdVencidou').val();
	vdDanado=$('#vdDanadou').val();
	

	cadena= "id=" + id +
			"&Codigo=" + Codigo +
			"&Fisico=" + Fisico +
			"&Vencido=" + Vencido +
			"&Danado=" + Danado+
			"&vdFisico=" + vdFisico +
			"&vdVencido=" + vdVencido +
			"&vdDanado=" + vdDanado;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos2.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla2').load('componentes/tabla2.php');
				alertify.success("DATOS ENVIADOS");
			}else{
				alertify.error("Fallo en el Servidor :'(");
			}
		}
	});
}


function actualizaDatos3(){


	id=$('#idpersona').val();
	Codigo=$('#Codigou').val();
	Fisico=$('#Fisicou').val();
	Vencido=$('#Vencidou').val();
	Danado=$('#Danadou').val();
	vdFisico=$('#vdFisicou').val();
	vdVencido=$('#vdVencidou').val();
	vdDanado=$('#vdDanadou').val();
	

	cadena= "id=" + id +
			"&Codigo=" + Codigo +
			"&Fisico=" + Fisico +
			"&Vencido=" + Vencido +
			"&Danado=" + Danado+
			"&vdFisico=" + vdFisico +
			"&vdVencido=" + vdVencido +
			"&vdDanado=" + vdDanado;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos3.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla3').load('componentes/tabla3.php');
				alertify.success("DATOS ENVIADOS");
			}else{
				alertify.error("Fallo en el Servidor :(");
			}
		}
	});
}


function actualizaDatosinvcritico(){


	id=$('#idpersona').val();
	Codigo=$('#Codigou').val();
	Fisico=$('#Fisicou').val();
	Vencido=$('#Vencidou').val();
	Danado=$('#Danadou').val();
	vdFisico=$('#vdFisicou').val();
	vdVencido=$('#vdVencidou').val();
	vdDanado=$('#vdDanadou').val();
	

	cadena= "id=" + id +
			"&Codigo=" + Codigo +
			"&Fisico=" + Fisico +
			"&Vencido=" + Vencido +
			"&Danado=" + Danado+
			"&vdFisico=" + vdFisico +
			"&vdVencido=" + vdVencido +
			"&vdDanado=" + vdDanado;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos_invcritico.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla4').load('componentes/tabla_critico.php');
				alertify.success("DATOS ENVIADOS");
			}else{
				alertify.error("Fallo en el Servidor :(");
			}
		}
	});
}
//actualiza intentos para ingreso del inventario en los restaurantes
function actualizaIntentos(){


	id=$('#idpersona').val();
	Codigo=$('#Codigou').val();
	Fisico=$('#Fisicou').val();
	Vencido=$('#Vencidou').val();
	Danado=$('#Danadou').val();
	vdFisico=$('#vdFisicou').val();
	vdVencido=$('#vdVencidou').val();
	vdDanado=$('#vdDanadou').val();
	

	cadena= "id=" + id +
			"&Codigo=" + Codigo +
			"&Fisico=" + Fisico +
			"&Vencido=" + Vencido +
			"&Danado=" + Danado+
			"&vdFisico=" + vdFisico +
			"&vdVencido=" + vdVencido +
			"&vdDanado=" + vdDanado;

	$.ajax({
		type:"POST",
		url:"php/actualizaOperaciones.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tablaOpera').load('componentes/tablaOperaciones.php');
				alertify.success("Nuevo intendo habilidado");
			}else{
				alertify.error("...Erro. Llamar soporte tecnico");
			}
		}
	});
}
