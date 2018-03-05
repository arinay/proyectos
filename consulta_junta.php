<!DOCTYPE html>
<?php
error_reporting(0);
?>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Consulta Junta</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="./css/consulta.css">

</head>
<body>
<div class="centrar">

	<h1>CONSULTA SOBRE JUNTA </h1>
<?php
session_start();
	include("includes_modulos/conexion.php");
	?>
<form method="post" action="includes_modulos/buscar_j.php">
	<select name="cargo">
		<option value="0">SELECCIÓN</option>
		<?php
			 $query = $mysqli -> query ("SELECT * FROM junta_directiva");
											
          while ($valores = mysqli_fetch_array($query)) {
												
            echo '<option value="'.$valores[cargo].'">'.$valores[cargo].'</option>';
													
          }
		?>
		

	</select>
	<br>
	<button type="submit" name="BUSCAR">BUSCAR</button>
</form>
<a href="./consultas.php">VOLVER A MENÚ DE CONSULTAS</a>
</div>
</body>
</html>
