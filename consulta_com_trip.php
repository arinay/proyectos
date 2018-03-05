<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>CONSULTA POR NMGD</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/formulario.css">
</head>
<body>
<h1> CONSULTA POR EL NMGD</h1>
<?php
session_start();
	include("includes_modulos/conexion.php");
	?>
<form method="POST" action="includes_modulos/consulta_tyc.php">
 <label name="NMGD">Introduce el NMGD</label>
	<input type="text" name="NMGD" placeholder="BUSCAR POR NMGD">
<br>
<button type="submit" value="buscar">BUSCAR</button>
 </form>
</body>
</html>
