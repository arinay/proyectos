 <html lang="es">
<head>
<meta charset="utf-8" />
  <title>Buscar junta</title>
  <link rel="stylesheet" type="text/css" href="../css/table_boostrap.css" />
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;" />
</head>
<body>
 <?php
  session_start();
 include("conexion.php");

    $registro=mysqli_query($mysqli,"select * from junta_directiva where cargo='$_POST[cargo]' ") or die ("Problemas en el select".mysqli_error($mysqli));
 ?>
 
 <table class="table-fill">
  <tr>
    <th colspan="9" class="title">Listado de junta</th>
  </tr>
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>DNI</th>
    <th>CARGO</th>
    <th>Teléfono</th>
    <th>Correo</th>
    <th>MODIFICAR</th>
    <th>ELIMINAR</th>
  </tr>  
  
 <?php

	while ($arreglo=mysqli_fetch_array($registro)){

    $id=$arreglo[0];
		$nombre=$arreglo[1];
		$apellidos=$arreglo[2];
		$dni=$arreglo[3];
		$cargo=$arreglo[4];
		$telefono=$arreglo[5];
		$correo=$arreglo[6];
		
		
	echo "<tr><td>$id</td><td>$nombre</td><td>$apellidos</td><td>$dni</td><td>$cargo</td><td>$telefono</td><td>$correo</td>
  <td><a href='actualizar_junta.php?id=$arreglo[0]'><img width='50px' src='../backgrounds/actualizar.png'></a></td>
  <td><a href='del_j.php?id=$arreglo[0] &idborrar=$id'><img width='50px' src='../backgrounds/eliminar.png'></a></td></tr>";
}

echo "</table>";


 
   include("cerrar_conexion.php");
?>


<br>
<a href="../consulta_junta.php"> HACER CONSULTA DE JUNTA</a><br>
<a href="../consultas.php">VOLVER A MENÚ CONSULTA</a><br>
</body>
</html>