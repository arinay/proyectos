<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Alta directiva bote</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/resultado.css">
</head>
<body>
<?php
session_start();

	include("conexion.php");

		

			$dni=$_POST['dni'];
			$nombre=$_POST['nombre'];
			$apellidos=$_POST['apellidos'];
			$N_vela=$_POST['N_vela'];
			$correo_personal=$_POST['correo_personal'];
			$telefono=$_POST['telefono'];
			$correo_bote=$_POST['correo_bote'];
			$cargo=$_POST['cargo'];

			$registro=mysqli_query($mysqli, "INSERT INTO directivos_botes (DNI,nombre,apellidos,N_vela,correo_persona,telefono,correo_bote,cargo) values('$dni','$nombre','$apellidos','$N_vela','$correo_personal','$telefono','$correo_bote','$cargo')") or die(mysql_error("Fallo al registrar al directivo del bote"));

	if(isset($registro)){
	echo "Los datos fueron guardados correctamente <br>" ;	
	echo "DNI: ".$dni."<br>";
	echo "Nombre: ".$nombre."<br>";
	echo "Apellidos: ".$apellidos."<br>";
	echo "Bote: ".$N_vela."<br>";
	echo "Correo Personal: ".$correo_personal."<br>";
	echo "Teléfono: ".$telefono."<br>";
	echo "Correo bote: ".$correo_bote."<br>";
	echo "Cargo: ".$cargo."<br>";
	echo "<a href='../directiva_botes.php'>VOLER A AÑADIR DIRECTIVO DE UN BOTE</a> <br>";
	echo "<a href='../menu.php'>VOLVER A MENÚ</a> <br>";
}
	include("cerrar_conexion.php");
	?>
</body>
</html>