<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>COMITÉ</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/formulario.css" rel="stylesheet">
</head>
<body>
<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
	include("includes_modulos/conexion.php");
	?>
	
<div class="form-group">
<fieldset class="well-2 the-fieldset">
<legend class="legends-form-2">Consulta comité</legend>
<form method="POST" action="includes_modulos/comite/buscar_comite.php">
	<fieldset class="well-2 the-fieldset">
	<legend class="in-legend-2">Buscar por nombre</legend>
		<label class="labels-inline-block-2 required">Nombre: </label>
		<select name="nombre">NOMBRE
			<option value="0">Selección</option>
 				<?php
										
          $query = $mysqli -> query ("SELECT * FROM comite");
											
          while ($valores = mysqli_fetch_array($query)) {
												
            echo '<option value="'.$valores[nombre].'">'.$valores[nombre].'</option>';
													
          }
        ?>
 			
		</select><br>
		<input class="submit_gradient-2" type="submit" value="Buscar">
	</fieldset>
</form>
<a href="menu_consultas.php"><img class="image-return" src="backgrounds/return.png"></a>
</fieldset>
 </div>
</body>
</html>

 

 
