 <html lang="es">
<head>
<meta charset="utf-8" />
  <title>Buscar junta</title>
  <link rel="stylesheet" type="text/css" href="../../css/table_boostrap.css" />
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;" />
</head>
<body>
 <?php
  session_start();
 include("../conexion.php");

    $registro=mysqli_query($mysqli,"select * from junta_directiva where cargo='$_POST[cargo]' ") or die ("Problemas en el select".mysqli_error($mysqli));
 ?>
 
 <table class="table-fill">
  <tr>
    <th colspan="6" class="title">Listado de junta</th>
  </tr>
  <tr>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>DNI</th>
    <th>CARGO</th>
    <th>Teléfono</th>
    <th>Correo</th>
    
  </tr>  
  
 <?php

	while ($reg=mysqli_fetch_array($registro)){
		$nombre=$reg['nombre'];
		$apellidos=$reg['apellidos'];
		$dni=$reg['DNI'];
		$cargo=$reg['cargo'];
		$telefono=$reg['telefono'];
		$correo=$reg['correo'];
		
		
	echo "<tr><td>$nombre</td><td>$apellidos</td><td>$dni</td><td>$cargo</td><td>$telefono</td><td>$correo</td></tr>";
}

   include("../cerrar_conexion.php");
?>
</table>
<br>
<a href="../../c_consulta_tripulantes.php"> HACER CONSULTA DE TRIPULANTE</a><br>
<a href="../../comite_consulta.php">VOLVER A MENÚ CONSULTA</a><br>
</body>
</html>