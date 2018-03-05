<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("conexion.php");
	$sentencia="update directivos_botes set DNI='$dni_n',nombre='$nombre_n', apellidos='$apellidos_n', correo_persona='$Correo_p_n', telefono='$Telefono_n', correo_bote='$Correo_b_n', cargo='$Cargo_n'  where id='$id'";
	//la variable  $mysqli viene de conexion que lo traigo con el require("conexion.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: actualizar_dir_b.php");
		
		echo "<script>location.href='consultas.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='../consultas.php'</script>";

		
	}
?>

