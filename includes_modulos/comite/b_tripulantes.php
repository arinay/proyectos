 <html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Buscar tripulante de un bote</title>
  <link rel="stylesheet" type="text/css" href="../../css/table_boostrap.css" />
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;" />
</head>
<body>
 <?php
  session_start();
 include("../conexion.php");

    $registro=mysqli_query($mysqli,"select * from tripulantes where N_vela='$_POST[N_vela]' OR N_vela2='$_POST[N_vela]' ") or die ("Problemas en el select".mysli_error($mysqli));
 ?>
 
 <table class="table-fill">
  <tr>
    <th colspan="14" class="title">Listado de tripulantes</th>
  </tr>
  <tr>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>DNI</th>
    <th>NMGD</th>
    <th>Número licencia</th>
    <th>Fecha de nacimiento</th>
    <th>Domicilio</th>
    <th>Provincia</th>
    <th>CP</th>
    <th>Teléfono</th>
    <th>Bote</th>
    <th>Fecha de alta</th>
    <th>2º Bote</th>
    <th>2º Fecha de alta</th>
    
  </tr>  
  
 <?php

	while ($reg=mysqli_fetch_array($registro)){
		$nombre=$reg['nombre'];
		$apellidos=$reg['apellidos'];
		$dni=$reg['DNI'];
		$nmgd=$reg['NMGD'];
		$n_licencia=$reg['N_licencia'];
		$fecha_nac=$reg['Fecha_nacimiento'];
		$domicilio=$reg['domicilio'];
		$provincia=$reg['provincia'];
		$cp=$reg['Cp'];
		$telefono=$reg['telefono'];
		$n_vela=$reg['N_vela'];
		$fecha_alta=$reg['Fecha_alta'];
		$n_vela2=$reg['N_vela2'];
		$fecha_alta2=$reg['Fecha_alta2'];
		
	echo "<tr><td>$nombre</td><td>$apellidos</td><td>$dni</td><td>$nmgd</td><td>$n_licencia</td><td>$fecha_nac</td><td>$domicilio</td><td>$provincia</td><td>$cp</td><td>$telefono</td><td>$n_vela</td><td>$fecha_alta</td><td>$n_vela2</td><td>$fecha_alta2</td></tr>";
}

    $registro=mysqli_query($mysqli,"select * from tripulantes where apellidos='$_POST[apellidos]'") or die ("Problemas en el select".mysli_error($mysqli));
    while ($reg=mysqli_fetch_array($registro)){
    $nombre=$reg['nombre'];
    $apellidos=$reg['apellidos'];
    $dni=$reg['DNI'];
    $nmgd=$reg['NMGD'];
    $n_licencia=$reg['N_licencia'];
    $fecha_nac=$reg['Fecha_nacimiento'];
    $domicilio=$reg['domicilio'];
    $provincia=$reg['provincia'];
    $cp=$reg['Cp'];
    $telefono=$reg['telefono'];
    $n_vela=$reg['N_vela'];
    $fecha_alta=$reg['Fecha_alta'];
    $n_vela2=$reg['N_vela2'];
    $fecha_alta2=$reg['Fecha_alta2'];
    
  echo "<tr><td>$nombre</td><td>$apellidos</td><td>$dni</td><td>$nmgd</td><td>$n_licencia</td><td>$fecha_nac</td><td>$domicilio</td><td>$provincia</td><td>$cp</td><td>$telefono</td><td>$n_vela</td><td>$fecha_alta</td><td>$n_vela2</td><td>$fecha_alta2</td></tr>";
}
include("../cerrar_conexion.php");
?>
</table>
<br>
<a href="../../c_consulta_tripulantes.php"> HACER CONSULTA DE TRIPULANTE</a><br>
<a href="../../comite_consulta.php">VOLVER A MENÚ CONSULTA</a><br>
</body>
</html>