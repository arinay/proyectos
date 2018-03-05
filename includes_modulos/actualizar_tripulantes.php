<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("conexion.php");
	$sentencia="update tripulantes set nombre='$Nombre_m', apellidos='$Apellidos_m', DNI='$Dni_m', NMGD='$Nmgd_m', N_licencia='$N_licencia_m', Fecha_nacimiento='$Fecha_nacimiento_m', domicilio='$Domicilio_m', provincia='$Provincia_m', Cp='$Cp_m', telefono='$Telefono_m', N_vela2='$N_vela2', Fecha_alta2='$Fecha_alta2' where id='$id'";
	//la variable  $mysqli viene de conexion que lo traigo con el require("conexion.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: actualizar.php");
		
		echo "<script>location.href='consultas.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='../consultas.php'</script>";

		
	}
?>

