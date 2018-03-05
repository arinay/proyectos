<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>ACTUALIZAR</title>
	<link rel="stylesheet" type="text/css" href="../css/formulario.css" />
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;" />
</head>
<body>
		<?php
		extract($_GET);
		require("conexion.php");

		$sql="SELECT * FROM tripulantes WHERE id=$id";
	//la variable  $mysqli viene de conexion que lo traigo con el require("connexion.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$nombre=$row[1];
   				$apellidos=$row[2];
    			$dni=$row[3];
    			$nmgd=$row[4];
    			$n_licencia=$row[5];
    			$fecha_nac=$row[6];
    			$domicilio=$row[7];
    			$provincia=$row[8];
    			$cp=$row[9];
    			$telefono=$row[10];
    			$n_vela=$row[11];
    			$fecha_alta=$row[12];
    			$n_vela2=$row[13];
    			$fecha_alta2=$row[14];
		    }

 //readonly="readonly" es para que no se pueda modificar esos datos

		?>
		<align: center>
		<form action="actualizar_tripulantes.php" method="post">
			<h1>MODIFICAR LOS DATOS DEL TRIPULANTE <?php echo $nombre  ?></h1>
		LOS DATOS QUE NO SE PUEDEN MODIFICAR SON LOS QUE ESTAN SUBRAYADO<br>
				<u>Id</u><br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				Nombre<br><input type="text" name="Nombre_m" value= "<?php echo $nombre ?>" ><br>

				Apellidos<br> <input type="text" name="Apellidos_m" value="<?php echo $apellidos?>" ><br>
				DNI<br> <input type="text" name="Dni_m" value="<?php echo $dni?>" ><br>
				<u>NMGD</u><br> <input type="decimal" name="Nmgd_m" value="<?php echo $nmgd?>" readonly="readonly" ><br>
				<u>Número licencia</u><br> <input type="decimal" name="N_licencia_m" value="<?php echo $n_licencia?>" readonly="readonly" ><br>
				Fecha nacimiento<br><input type="date" name="Fecha_nacimiento_m" value= "<?php echo $fecha_nac ?>"><br>
				Domicilio<br> <input type="text" name="Domicilio_m" value="<?php echo $domicilio?>"><br>
				Provincia<br> <input type="text" name="Provincia_m" value="<?php echo $provincia?>" ><br>
				Cp<br> <input type="decimal" name="Cp_m" value="<?php echo $cp?>" ><br>
				Teléfono<br> <input type="numeric" name="Telefono_m" value="<?php echo $telefono?>" ><br>
				<u>Bote 1</u><br><input type="text" name="n_vela" value= "<?php echo $n_vela ?>" readonly="readonly"><br>
				<u>Fecha alta</u><br> <input type="date" name="fecha_alta" value="<?php echo $fecha_alta?>" readonly="readonly"><br>
				Bote 2<br><input type="numeric" name="N_vela2" value="<?php echo $n_vela2 ?>" >
       <br>
				Fecha alta2<br> <input type="date" name="Fecha_alta2" value="<?php echo $fecha_alta2?>"><br>
				
				<br>
				<button type="submit" value="Guardar" class="btn btn-success btn-primary"> GUARDAR </button>
			</form>
			
			<form method="POST" action="../consultas.php">
				<button type="subimit" name="menu"> VOLVER A MENÚ </button>
		</form></align: center>
</body>
</html>

