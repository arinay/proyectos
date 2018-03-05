 <html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Buscar directivos de un bote</title>
  <link rel="stylesheet" type="text/css" href="../css/table_boostrap.css" />
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;" />
</head>
<body>
 <?php
  session_start();
 include("conexion.php");

    $registro=mysqli_query($mysqli,"select * from directivos_botes where N_vela='$_POST[N_vela]'") or die ("Problemas en el select".mysli_error($mysqli));
 ?>
 
 <table class="table-fill">
  <tr>
    <th colspan="11" class="title">Listado de directivos</th>
  </tr>
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>DNI</th>
    <th>Teléfono</th>
    <th>Bote</th>
    <th>Correo Personal</th>
    <th>Correo del bote</th>
    <th>Cargo</th>
    <th>MODIFICAR</th>
    <th>ELIMINAR</th>
  </tr>  
  
 <?php

	while ($arreglo=mysqli_fetch_array($registro)){
    $id=$arreglo[0];
		$nombre=$arreglo[2];
		$apellidos=$arreglo[3];
		$dni=$arreglo[1];
		$telefono=$arreglo[6];
		$n_vela=$arreglo[4];
		$correo=$arreglo[5];
		$correo_b=$arreglo[7];
		$cargo=$arreglo[8];
		
	echo "<tr><td>$id</td><td>$nombre</td><td>$apellidos</td><td>$dni</td><td>$telefono</td><td>$n_vela</td><td>$correo</td><td>$correo_b</td><td>$cargo</td><td><a href='actualizar_d_bote.php?id=$arreglo[0]'><img width='50px' src='../backgrounds/actualizar.png'></a></td>
   <td><a href='del_d.php?id=$arreglo[0] &idborrar=$id'><img width='50px' src='../backgrounds/eliminar.png'></a></tr>";
}

echo "</table>";


   include("cerrar_conexion.php");
?>

<br>
<a href="../consulta_directiva_botes.php"> HACER CONSULTA DE DIRECTIVO DE BOTE</a><br>
<a href="../consultas.php">VOLVER A MENÚ CONSULTA</a><br>
</body>
</html>