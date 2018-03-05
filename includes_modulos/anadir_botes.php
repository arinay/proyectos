<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Alta Bote</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/resultado.css">
</head>
<body>

<?php

session_start();
error_reporting(0);
	include("conexion.php");


if($_POST){
			$N_vela=$_POST['N_vela'];
			$nombre=$_POST['nombre'];
			$eslora=$_POST['eslora'];
			$manga=$_POST['manga'];
			$puntal=$_POST['puntal'];
			$puntal_medio=$_POST['puntal_medio'];
			$Orza_peso=$_POST['Orza_peso'];
			$Orza_contorno_superior=$_POST['Orza_contorno_superior'];
			$Orza_altura=$_POST['Orza_altura'];
			$Orza_contorno_inferior=$_POST['Orza_contorno_inferior'];
			$color=$_POST['color'];
			

			mysqli_query($mysqli, "INSERT INTO botes (N_vela,nombre,eslora,manga,puntal,puntal_medio,Orza_peso,Orza_contorno_superior,Orza_altura,Orza_contorno_inferior,Color) values('$N_vela','$nombre','$eslora','$manga','$puntal','$puntal_medio','$Orza_peso','$Orza_contorno_superior','$Orza_altura','$Orza_contorno_inferior','$color')") or die(mysql_error());
}
	echo "Los datos fueron guardados correctamente <br>" ;	
	echo "Número de vela: ".$N_vela."<br>";
	echo "Nombre: ".$nombre."<br>";
	echo "Eslora: ".$eslora."<br>";
	echo "Manga: ".$manga."<br>";
	echo "Puntal: ".$puntal."<br>";
	echo "puntal medio: ".$puntal_medio."<br>";
	echo "Peso de la orza: ".$Orza_peso."<br>";
	echo "Contorno superior de la orza: ".$Orza_contorno_superior."<br>";
	echo "Contorno inferior de la orza: ".$Orza_contorno_inferior."<br>";
	echo "Altura de la orza: ".$Orza_altura."<br>";
	echo "Color del casco: ".$color."<br>";

			echo '<a href="../botes.php">VOLVER A AÑADIR BOTES <br></a>';
			echo '<a href="../menu.php">VOLVER A MENÚ</a> <br>';
		
			include("cerrar_conexion.php");
	?>
</body>
</html>