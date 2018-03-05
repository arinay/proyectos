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

		$sql="SELECT * FROM comite WHERE ID=$id";
	//la variable  $mysqli viene de conexion que lo traigo con el require("connexion.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$nombre=$row[1];
   				$apellidos=$row[2];
    			$dni=$row[3];
    			$nmgd=$row[4];
    			$telefono=$row[5];
    			$correo=$row[6];
    			
		    }

 //readonly="readonly" es para que no se pueda modificar esos datos

		?>
		<align: center>
		<form action="actualizar_c.php" method="post">
			<h1>MODIFICAR LOS DATOS DEL COMITÉ <?php echo $nombre  ?></h1>
		LOS DATOS QUE NO SE PUEDEN MODIFICAR SON LOS QUE ESTAN SUBRAYADO<br>
				<u>Id</u><br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				Nombre<br><input type="text" name="Nombre_m" value= "<?php echo $nombre ?>" ><br>
				Apellidos<br> <input type="text" name="Apellidos_m" value="<?php echo $apellidos?>" ><br>
				<u>DNI</u><br> <input type="text" name="Dni_m" value="<?php echo $dni?>" readonly="readonly" ><br>
				<u>NMGD</u><br> <input type="decimal" name="Nmgd_m" value="<?php echo $nmgd?>" readonly="readonly" ><br>
				Teléfono<br> <input type="numeric" name="Telefono_m" value="<?php echo $telefono?>" ><br>
				Correo<br> <input type="text" name="correo_n" value="<?php echo $correo?>"><br>
				
				<br>
				<button type="submit" value="Guardar" class="btn btn-success btn-primary"> GUARDAR </button>
			</form>
			</align: center>
			<form method="POST" action="../consultas.php">
				<button type="subimit" name="menu"> VOLVER A MENÚ </button>
		</form>
</body>
</html>

