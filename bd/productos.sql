

create database productos;
	use productos;

	create table t_productos(
			id int auto_increment,
			codigo int,
			producto varchar(50),
			fisico varchar(50),
			vencido varchar(50),
			Dañado varchar(50),
			Total_Inventario_Fisico(50),
			primary key(id)
		);