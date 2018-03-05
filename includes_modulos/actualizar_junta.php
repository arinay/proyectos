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

		$sql="SELECT * FROM junta_directiva WHERE id=$id";
	//la variable  $mysqli viene de conexion que lo traigo con el require("connexion.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$nombre=$row[1];
   				$apellidos=$row[2];
    			$dni=$row[3];
    			$cargo=$row[4];
    			$telefono=$row[5];
    			$correo=$row[6];
    			
		    }

 //readonly="readonly" es para que no se pueda modificar esos datos

		?>

		<form action="actualizar_j.php" method="post">
			<h1>MODIFICAR LOS DATOS DEL MIEMBRO DE LA JUTNTA <?php echo $nombre?></h1>
				<u>Id</u><br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				<u>Nombre</u><br><input type="text" name="nombre_n" value= "<?php echo $nombre ?>" readonly="readonly"><br>
				<u>Apellidos</u><br> <input type="text" name="apellidos_m" value="<?php echo $apellidos ?>" readonly="readonly"><br>
				<u>DNI</u><br> <input type="text" name="dni" value="<?php echo $dni ?>" readonly="readonly"><br>
				CARGO<br> <input type="text" name="Cargo" value="<?php echo $cargo ?>" ><br>
				Teléfono<br> <input type="numeric" name="Telefono" value="<?php echo $telefono ?>" ><br>
				CORREO<br><input type="text" name="Correo" value="<?php echo $correo ?>"><br>
				
				<br>
				<button type="submit" value="Guardar" class="btn btn-success btn-primary"> GUARDAR</button> 
		</form>


			<form method="POST" action="../consultas.php">
				<button type="subimit" name="menu"> VOLVER A MENÚ </button>
		</form></align: center>
</body>
</html>

