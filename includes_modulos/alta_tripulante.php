<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Alta tripulantes</title>
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
			$N_licencia=$_POST['N_licencia'];
			$Fecha_nacimiento=$_POST['Fecha_nacimiento'];
			$domicilio=$_POST['domicilio'];
			$provincia=$_POST['provincia'];
			$Cp=$_POST['Cp'];
			$telefono=$_POST['telefono'];
			$N_vela=$_POST['N_vela'];
			$Fecha_alta=$_POST['Fecha_alta'];
			$N_vela2=$_POST['N_vela2'];
			$Fecha_alta2=$_POST['Fecha_alta2'];

			$registro=mysqli_query($mysqli, "INSERT INTO tripulantes (nombre,apellidos,DNI,NMGD,N_licencia,Fecha_nacimiento,domicilio,provincia,Cp,telefono,N_vela,Fecha_alta,N_vela2,Fecha_alta2) 
			values('$nombre','$apellidos','$dni','$NMGD','$N_licencia','$Fecha_nacimiento','$domicilio','$provincia','$Cp','$telefono','$N_vela','$Fecha_alta','$N_vela2','$Fecha_alta2')") 
			or die(mysqli_error("Fallo al registrar al tripulante."));

		if(isset($registro)){
			echo "Los datos fueron guardados correctamente <br>" ;	
			echo "Nombre: ".$nombre."<br>";
			echo "Apellidos: ".$apellidos."<br>";
			echo "Fecha de nacimiento: ".$Fecha_nacimiento."<br>";
			echo "DNI: ".$dni."<br>";
			echo "NMGD: ".$NMGD."<br>";
			echo "Número licencia: ".$N_licencia."<br>";
			echo "Domicilio: ".$domicilio."<br>";
			echo "Provincia: ".$provincia."<br>";
			echo "CP: ".$Cp."<br>";
			echo "Teléfono: ".$telefono."<br>";
			echo "Bote: ".$N_vela."<br>";
			echo "Fecha de alta: ".$Fecha_alta."<br>";
			echo "<a href='../tripulantes.php'>VOLVER A AÑADIR TRIPULANTES</a><br>";
			}else{
				echo "DATOS NO GUARDADOS CUIDADO CON EL NMGD y Número de licencia ";
			}
			echo "<a href='../menu.php'>VOLVER AL MENÚ</a><br>";
			
			include("cerrar_conexion.php");
?>
</body>
</html>
