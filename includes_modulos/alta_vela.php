<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Alta sellado vela</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/resultado.css">
</head>
<body>
<?php
session_start();


	include("conexion.php");
	
			$vela=$_POST['N_vela'];
			$fecha=$_POST['fecha'];
			$vela2=$_POST['N_vela2'];
			$fecha2=$_POST['fecha2'];
			$vela3=$_POST['N_vela3'];
			$Fecha3=$_POST['fecha3'];
			$vela4=$_POST['N_vela4'];
			$fecha4=$_POST['fecha4'];
			

			$registro=mysqli_query($mysqli, "INSERT INTO sellado (N_vela, Fecha, N_vela2, Fecha2, N_vela3, Fecha3, N_vela4, Fecha4) 
			values('$vela','$fecha','$vela2','$fecha2','$vela3','$fecha3','$vela4','$fecha4')") 
			or die(mysqli_error("Fallo al registrar al tripulante."));

		if(isset($registro)){
			echo "Los datos fueron guardados correctamente <br>" ;	
			echo "VELA: ".$vela."<br>";
			echo "FECHA: ".$fecha."<br>";
			echo "VELA 2: ".$vela2."<br>";
			echo "FECHA 2: ".$fecha2."<br>";
			echo "Vela 3: ".$vela3."<br>";
			echo "Fecha 3: ".$fecha3."<br>";
			echo "VELA 4: ".$vela4."<br>";
			echo "FECHA 4: ".$fecha4."<br>";
			
			echo "<a href='../sellado_vela.php'>VOLVER A SELLADO DE VELA</a><br>";
			}else{
				echo "DATOS NO GUARDADOS CUIDADO CON EL NMGD y Número de licencia ";
			}
			echo "<a href='../menu.php'>VOLVER AL MENÚ</a><br>";
			
			include("cerrar_conexion.php");
?>
</body>
</html>
