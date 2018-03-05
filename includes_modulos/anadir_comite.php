<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Alta comité</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/resultado.css">
</head>
<body>
<?php
session_start();

	include("conexion.php");
		
			$nombre=$_POST['nombre'];
			$apellidos=$_POST['apellidos'];
			$dni=$_POST['DNI'];
			$NMGD=$_POST['NMGD'];
			
			$telefono=$_POST['telefono'];
			$correo=$_POST['correo'];
			

				$registro=mysqli_query($mysqli, "INSERT INTO comite (nombre,apellidos,DNI,NMGD,telefono,correo) values('$nombre','$apellidos','$dni','$NMGD','$telefono','$correo')") or die(mysql_error("FALLO AL REGISTRAR MIEMBRO DEL COMITÉ"));

					if(isset($registro)){
			
						echo "Los datos fueron guardados correctamente <br>" ;
						echo "Nombre: ".$nombre."<br>";
						echo "Apellidos: ".$apellidos."<br>";
						echo "DNI: ".$dni."<br>";
						echo "NMGD: ".$NMGD."<br>";
						echo "Teléfono: ".$telefono."<br>";
						echo "Correo: ".$correo."<br>";
						
						echo "<a href='../comite.php'>VOLVER A AÑADIR COMITE</a><br>";}

						echo "<a href='../menu.php'>VOLVER A MENÚ</a>";

						include("cerrar_conexion.php");
	?>
</body>
</html>