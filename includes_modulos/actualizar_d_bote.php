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

		$sql="SELECT * FROM directivos_botes WHERE id=$id";
	//la variable  $mysqli viene de conexion que lo traigo con el require("connexion.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$dni=$row[1];
		    	$nombre=$row[2];
   				$apellidos=$row[3];
    			$N_vela=$row[4];
    			$correo_personal=$row[5];
    			$telefono=$row[6];
    			$correo_b=$row[7];
    			$cargo=$row[8];
		    }

 //readonly="readonly" es para que no se pueda modificar esos datos

		?>
		<align: center>
		<form action="actualizar_dir_b.php" method="post">
			<h1>MODIFICAR LOS DATOS DEL DIRECTIVO <?php echo $nombre?> DEL BOTE <?php echo $N_vela ?></h1>
				Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				Nombre<br><input type="text" name="nombre_n" value= "<?php echo $nombre ?>" ><br>
				Apellidos<br> <input type="text" name="apellidos_n" value="<?php echo $apellidos?>" ><br>
				DNI<br> <input type="text" name="dni_n" value="<?php echo $dni?>" readonly="readonly"><br>
				Bote<br> <input type="numeric" name="bote" value="<?php echo $N_vela?>" readonly="readonly"><br>
				Teléfono<br> <input type="numeric" name="Telefono_n" value="<?php echo $telefono?>" ><br>
				CORREO Personal<br><input type="text" name="Correo_p_n" value="<?php echo $correo_personal?>"><br>
				CORREO bote<br><input type="text" name="Correo_b_n" value="<?php echo $correo_b?>"><br>
				CARGO<br> <input type="text" name="Cargo_n" value="<?php echo $cargo?>" ><br>
				<br>
				<button type="submit" value="Guardar" class="btn btn-success btn-primary">GUARDAR</button>

		</form>

			<form method="POST" action="../consultas.php">
				<button type="subimit" name="menu"> VOLVER A MENÚ </button>
		</form></align: center>

</body>
</html>