<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>COMITÉ</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/formulario.css">
</head>
<body>
<div class="centrar">
<h1>CONSULTA DE COMITÉ</h1>
<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
	$$VECTOR_MENSAJE_CONEXION="NO";
	include("includes_modulos/conexion.php");
	?>
	
<form method="POST" action="includes_modulos/buscar_comite.php">
 
	<label>Nombre</label>
		<select name="nombre">NOMBRE
			<option value="0">Selección</option>
 				<?php
										
          $query = $mysqli -> query ("SELECT * FROM comite");
											
          while ($valores = mysqli_fetch_array($query)) {
												
            echo '<option value="'.$valores[nombre].'">'.$valores[nombre].'</option>';
													
          }
        ?>
 			
		</select><br>
 	<button type="submit" value="buscar">BUSCAR</button>

 </form>
<a href="./consultas.php">VOLVER A MENÚ DE CONSULTAS</a>
 </div>
</body>
</html>
