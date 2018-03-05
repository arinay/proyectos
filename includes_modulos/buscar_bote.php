<html lang="es">
<head>
	<meta charset="utf-8" /> 
	<title>Buscar bote</title>
	<link rel="stylesheet" type="text/css" href="../css/table_boostrap.css" />
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;" />
</head>
<body>
<?php
	session_start();
	include("conexion.php");

	$registro=mysqli_query($mysqli,"select * from botes where N_vela='$_POST[N_vela]'") or die ("Problemas en el select".mysqli_error($mysqli));
?>


 <table class="table-fill">
  <tr>
    <th colspan="12" class="title">DATOS DEL BOTE</th>
  </tr>
  <tr>
    <th>Número vela</th>
    <th>Nombre</th>
    <th>Eslora</th>
    <th>Manga</th>
    <th>Puntal</th>
    <th>Puntal Medio</th>
    <th>Peso de la Orza</th>
    <th>Contorno superior de la orza</th>
    <th>Altura de la orza</th>
    <th>Contorno inferio de la orza</th>
    <th>Color</th>
    
  </tr>  



<?php
	while ($reg=mysqli_fetch_array($registro)){
		$N_vela=$reg['N_vela'];
		$nombre=$reg['nombre'];
		$eslora=$reg['eslora'];
		$manga=$reg['manga'];
		$puntal=$reg['puntal'];
		$puntal_medio=$reg['puntal_medio'];
		$peso=$reg['Orza_peso'];
		$contorno_sup=$reg['Orza_contorno_superior'];
		$o_altura=$reg['Orza_altura'];
		$contorno_inferior=$reg['Orza_contorno_inferior'];
		$color=$reg['Color'];
		echo "<br>";
	}


	echo "<tr><td>$N_vela</td><td>$nombre</td><td>$eslora</td><td>$manga</td><td>$puntal</td><td>$puntal_medio</td><td>$peso</td><td>$contorno_sup</td><td>$o_altura</td><td>$contorno_inferior</td><td>$color</td></tr>";

	include("cerrar_conexion.php");
?>
</table>
<br>
<br>

<a href="../consulta_botes.php"> HACER CONSULTA DE BOTE</a><br>
<a href="../consultas.php">VOLVER A MENÚ CONSULTA</a><br>
</body>
</html>