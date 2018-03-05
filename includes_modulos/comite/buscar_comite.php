<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Buscar comité</title>
	<link rel="stylesheet" type="text/css" href="../../css/table_boostrap.css" />
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;" />
</head>
<body>
<?php
	session_start();
	include("../conexion.php");

	$registro=mysqli_query($mysqli,"select * from comite where nombre='$_POST[nombre]'") or die ("Problemas en el select".mysqli_error($mysqli));
?>


 <table class="table-fill">
  <tr>
    <th colspan="6" class="title">DATOS DE MIEMBRO DEL COMITÉ</th>
  </tr>
  <tr>
    
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>DNI</th>
    <th>NMGD</th>
    <th>Teléfono</th>
    <th>Correo</th>
    
  </tr>  



<?php
	while ($reg=mysqli_fetch_array($registro)){
		
		$nombre=$reg['nombre'];
		$apellido=$reg['apellidos'];
		$dni=$reg['DNI'];
		$nmgd=$reg['NMGD'];
		$telefono=$reg['telefono'];
		$correo=$reg['correo'];
		
	}


	echo "<tr><td>$nombre</td><td>$apellido</td><td>$dni</td><td>$nmgd</td><td>$telefono</td><td>$correo</td></tr>";

	include("../cerrar_conexion.php");
?>
</table>
<br>
<br>
<a href="../../c_consulta_comite.php"> HACER CONSULTA DE COMITÉ</a><br>
<a href="../../comite_consulta.php">VOLVER A MENÚ CONSULTA</a><br>
</body>
</html>