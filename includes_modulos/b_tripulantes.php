 <html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Buscar tripulante de un bote</title>
  <link rel="stylesheet" type="text/css" href="../css/table_boostrap.css" />
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;" />
</head>
<body>
 <?php
  session_start();
 include("conexion.php");

    $registro=mysqli_query($mysqli,"select * from tripulantes where N_vela='$_POST[N_vela]' OR N_vela2='$_POST[N_vela]' ") or die ("Problemas en el select".mysli_error($mysqli));
 ?>
 
 <table class="table-fill">
  <tr>
    <th colspan="16" class="title">Listado de tripulantes</th>
  </tr>
  <tr>
    <th>ID</th>
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
    <th>MODIFICAR</th>
  </tr>  
  
 <?php

	while ($arreglo=mysqli_fetch_array($registro)){
		$id=$arreglo[0];
		$nombre=$arreglo[1];
		$apellidos=$arreglo[2];
		$dni=$arreglo[3];
		$nmgd=$arreglo[4];
		$n_licencia=$arreglo[5];
		$fecha_nac=$arreglo[6];
		$domicilio=$arreglo[7];
		$provincia=$arreglo[8];
		$cp=$arreglo[9];
		$telefono=$arreglo[10];
		$n_vela=$arreglo[11];
		$fecha_alta=$arreglo[12];
		$n_vela2=$arreglo[13];
    $fecha_alta2=$arreglo[14];
		
	echo "<tr><td>$id</td><td>$nombre</td><td>$apellidos</td><td>$dni</td><td>$nmgd</td><td>$n_licencia</td><td>$fecha_nac</td><td>$domicilio</td><td>$provincia</td><td>$cp</td><td>$telefono</td><td>$n_vela</td><td>$fecha_alta</td><td>$n_vela2</td><td>$fecha_alta2</td><td><a href='actualizar.php?id=$arreglo[0]'><img width='50px' src='../backgrounds/actualizar.png'></td></tr>";
}

    $registro=mysqli_query($mysqli,"select * from tripulantes where apellidos='$_POST[apellidos]'") or die ("Problemas en el select".mysli_error($mysqli));
    while ($arreglo=mysqli_fetch_array($registro)){
      $id=$arreglo[0];
    $nombre=$arreglo[1];
    $apellidos=$arreglo[2];
    $dni=$arreglo[3];
    $nmgd=$arreglo[4];
    $n_licencia=$arreglo[5];
    $fecha_nac=$arreglo[6];
    $domicilio=$arreglo[7];
    $provincia=$arreglo[8];
    $cp=$arreglo[9];
    $telefono=$arreglo[10];
    $n_vela=$arreglo[11];
    $fecha_alta=$arreglo[12];
    $n_vela2=$arreglo[13];
    $fecha_alta2=$arreglo[14];
    
  echo "<tr><td>$id</td><td>$nombre</td><td>$apellidos</td><td>$dni</td><td>$nmgd</td><td>$n_licencia</td><td>$fecha_nac</td><td>$domicilio</td><td>$provincia</td><td>$cp</td><td>$telefono</td><td>$n_vela</td><td>$fecha_alta</td><td>$n_vela2</td><td>$fecha_alta2</td><td><a href='actualizar.php?id=$arreglo[0]'><img width='50px' src='../backgrounds/actualizar.png'></td></tr>";
}
include("cerrar_conexion.php");
?>
</table>
<br>
<a href="../consulta_tripulantes.php"> HACER CONSULTA DE TRIPULANTE</a><br>
<a href="../consultas.php">VOLVER A MENÚ CONSULTA</a><br>
</body>
</html>