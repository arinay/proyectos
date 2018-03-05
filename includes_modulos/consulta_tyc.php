<html>
<head>
  <title>Buscar por NMGD</title>
  <link rel="stylesheet" type="text/css" href="../css/table_boostrap.css" />
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;" />
</head>
<body>
<?php
	session_start();

	include("conexion.php");
	
		$NMGD=$_POST['NMGD'];


		$consulta=mysqli_query($mysqli,"SELECT * FROM tripulantes INNER JOIN comite ON tripulantes.NMGD=comite.NMGD WHERE NMGD='$_POST[NMGD]'") or die("<br><br>Problemas en la consulta: ".mysqli_error($conexion));
?>
	

	<table class="table-fill">
  <tr>
    <th colspan="7" class="title">Listado de tripulantes</th>
  </tr>
  <tr>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>DNI</th>
    <th>NMGD</th>
    <th>Bote</th>
    <th>2º Bote</th>
    <th>MODIFICAR</th>
  </tr>  	
<?php		
		while($con=mysqli_fetch_array($consulta)){
			$NMGD=$con['NMGD'];
			$nombre=$con['nombre'];
			$apellidos=$con['apellidos'];
			$DNI=$con['DNI'];
			$n_vela=$con['N_vela'];
			$n_vela2=$con['N_vela2'];
			
			echo "<tr><td>$nombre</td><td>$apellidos</td><td>$dni</td><td>$NMGD</td><td>$n_vela</td><td>$n_vela2</td<td><a href='actualizar_tripulantes.php'><img src='../backgrounds/actualizar.jpg'></td></tr>";
		}

?>
</table>
</body>
</html>