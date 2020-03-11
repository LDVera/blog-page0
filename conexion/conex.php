<?php 

$conexion = new mysqli('localhost', 'root', '', 'proyecto_dev') or die (mysqli_error($conexion));


	if(isset($_POST['btnGuardar'])){

		$user=$_POST['Usuario'];
		$ape_p=$_POST['Ape_p'];
		$ape_m=$_POST['Ape_m'];
		$correo=$_POST['correo'];
		$contra=$_POST['contraseña'];

		$utipo = 1;

		$sentencia_sql="insert into usuario (usuario_Nombre, usuario_ApellidoPaterno, usuario_ApellidoMaterno, usuario_Tipo, usuario_Correo, usuario_Contraseña) values ('$user','$ape_p','$ape_m','$utipo','$correo','$contra')" ;
		$conexion -> query($sentencia_sql) or die ($conexion->error);
	}

 ?>