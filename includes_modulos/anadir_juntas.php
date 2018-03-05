<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Alta miembro de la junta</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/resultado.css">
</head>
<body>
<?php

session_start();

error_reporting(0);

	include("conexion.php");


if 		{
			$nombre=$_POST['nombre'];
			$apellidos=$_POST['apellidos'];
			$dni=$_POST['DNI'];
			$cargo=$_POST['cargo'];
			$telefono=$_POST['telefono'];
			$correo=$_POST['correo'];

			mysqli_query($mysqli, "INSERT INTO junta_directiva (nombre,apellidos,DNI,cargo,telefono,correo) values('$nombre','$apellidos','$dni','$cargo','$telefono','$correo')") or die(mysql_error());



			echo "<h2>DATOS GUARDADOS</h2>";

			echo "Nombre: ".$nombre ;
			echo "<br>";
			echo "Apellidos: ".$apellidos;
			echo "<br>";
			echo "DNI: ".$dni;
			echo "<br>";
			echo "Cargo: ".$cargo;
			echo "<br>";
			echo "Teléfono: ".$telefono;
			echo "<br>";
			echo "Correo: ".$correo;
			echo "<br>";
			echo '<a href="junta.php">VOLVER</a>';
		}

	include("cerrar_conexion.php");

?>
</body>
</html>