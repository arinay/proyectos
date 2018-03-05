<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>DIRECTIVO BOTE</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/formulario.css">
</head>
<body>
<div class="centrar">
<h1>CONSULTA DE DIRECTIVOS DE UN BOTE</h1>
<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
	$$VECTOR_MENSAJE_CONEXION="NO";
	include("includes_modulos/conexion.php");
	?>
	

<form method="POST" action="includes_modulos/b_dir_botes.php">
 <label name="N_vela">Bote</label>
	<select name="N_vela">
			<option value="0">Selección:</option>
        <?php
										
          $query = $mysqli -> query ("SELECT * FROM botes");
											
          while ($valores = mysqli_fetch_array($query)) {
												
            echo '<option value="'.$valores[N_vela].'">'.$valores[nombre].'</option>';
													
          }
        ?>
		</select>
		<br>
			<button type="submit" value="buscar">BUSCAR</button>
 </form>

 
<a href="./consultas.php">VOLVER A MENÚ DE CONSULTAS</a>
 </div>
</body>
</html>
