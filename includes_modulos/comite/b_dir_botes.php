 <html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Buscar directivos de un bote</title>
  <link rel="stylesheet" type="text/css" href="../../css/table_boostrap.css" />
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;" />
</head>
<body>
 <?php
  session_start();
 include("../conexion.php");

    $registro=mysqli_query($mysqli,"select * from directivos_botes where N_vela='$_POST[N_vela]'") or die ("Problemas en el select".mysli_error($mysqli));
 ?>
 
 <table class="table-fill">
  <tr>
    <th colspan="14" class="title">Listado de directivos</th>
  </tr>
  <tr>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>DNI</th>
    <th>Teléfono</th>
    <th>Bote</th>
    <th>Correo Personal</th>
    <th>Correo del bote</th>
    <th>Cargo</th>
    
  </tr>  
  
 <?php

	while ($reg=mysqli_fetch_array($registro)){
		$nombre=$reg['nombre'];
		$apellidos=$reg['apellidos'];
		$dni=$reg['DNI'];
		$telefono=$reg['telefono'];
		$n_vela=$reg['N_vela'];
		$correo=$reg['correo_persona'];
		$correo_b=$reg['correo_bote'];
		$cargo=$reg['cargo'];
		
	echo "<tr><td>$nombre</td><td>$apellidos</td><td>$dni</td><td>$telefono</td><td>$n_vela</td><td>$correo</td><td>$correo_bote</td><td>$cargo</td></tr>";
}

   include("../cerrar_conexion.php");
?>
</table>
<br>
<a href="../../c_consulta_directiva_botes.php"> HACER CONSULTA DE DIRECTIVO DE BOTE</a><br>
<a href="../../comite_consulta.php">VOLVER A MENÚ CONSULTA</a><br>
</body>
</html>